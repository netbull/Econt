<?php

namespace NetBull\Econt\Components;

use NetBull\Econt\Exceptions\EcontException;
use NetBull\Econt\Exceptions\ComponentEmptyFieldException;

/**
 * Trait Serializable
 * @package NetBull\Econt\Components
 */
abstract class Component implements ComponentInterface
{
    /**
     * @return array
     */
    public function getRequiredFields()
    {
        return [];
    }

    /**
     * @return null|string
     */
    public function parentTag()
    {
        return null;
    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function tag()
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    public function normalizeCase($input) {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }

    /**
     * @throws ComponentEmptyFieldException
     * @throws \ReflectionException
     */
    private function validate()
    {
        $fields = $this->getRequiredFields();
        if (empty($fields)) {
            return;
        }
        $reflection = new \ReflectionClass($this);
        foreach ($fields as $field) {
            $property = $reflection->getProperty($field);
            $property->setAccessible(true);
            $value = $property->getValue($this);
            if (is_null($value) || '' === $value) {
                throw new ComponentEmptyFieldException($reflection->getShortName(), $field);
            }
        }
    }

    /**
     * @return \SimpleXMLElement
     * @throws ComponentEmptyFieldException
     * @throws EcontException
     * @throws \ReflectionException
     */
    public function serialize() : \SimpleXMLElement
    {
        $this->validate();
        $output = new \SimpleXMLElement("<{$this->tag()}/>");
        $this->build($output, $this);

        return $output;
    }

    /**
     * @return array
     * @throws \ReflectionException
     * @throws EcontException
     */
    public function toArray()
    {
        $result = [];
        $this->buildArray($result, $this);

        return $result;
    }

    /**
     * Builds an Econt-compatible XML request
     * @param \SimpleXMLElement $xml Currently scoped XML representation object.
     * @param ComponentInterface|array $data A user-defined, custom request structure for the XML file.
     * @throws \ReflectionException
     * @throws EcontException
     */
    protected function build(\SimpleXMLElement $xml, $data)
    {
        if (!is_object($data) && !is_array($data)) {
            throw new EcontException('Invalid entity for serialization. An implementation of ComponentInterface or array required.');
        }

        if (is_object($data) && !($data instanceof ComponentInterface)) {
            throw new EcontException('An object given is not an implementation of class ComponentInterface.');
        }

        // Get the iterator of the data
        $reflected = !is_array($data);
        $iterator = $reflected ? (new \ReflectionClass($data))->getProperties() : $data;

        foreach ($iterator as $key => $value) {
            // If we have actually a Component make the property accessible
            if ($reflected) {
                // Strip magic properties
                if (0 === strpos($value->getName(), '_')) {
                    continue;
                }
                $value->setAccessible(true);
            }

            $key = $reflected ? $value->getName() : $key;
            $key = $this->normalizeCase($key);
            $value = $reflected ? $value->getValue($data) : $value;

            // If the value is not... just a value
            if (null !== $value && !is_scalar($value)) {
                if (is_object($value) && !($value instanceof ComponentInterface)) {
                    continue;
                }

                $nested = $xml->addChild($key);
                if (is_array($value)) {
                    foreach ($value as $val) {
                        if ($val instanceof ComponentInterface) {
                            $child = $nested->addChild($val->tag());
                            $val->build($child, $val);
                        } else {
                            $this->build($nested, $val);
                        }
                    }
                } else if ($value instanceof ComponentInterface) {
                    $this->build($nested, $value);
                }
                continue;
            }

            if (is_null($value)) {
                continue;
            }

            if (is_bool($value)) {
                $value = $value ? '1' : '0';
            }
            $xml->addChild($key, $value);
        }
    }

    /**
     * @param array $array
     * @param $data
     * @throws \ReflectionException
     * @throws EcontException
     */
    protected function buildArray(array &$array, $data)
    {
        if (!is_object($data) && !is_array($data)) {
            throw new EcontException('Invalid entity for serialization. An implementation of ComponentInterface or array required.');
        }
        if (is_object($data) && !($data instanceof ComponentInterface)) {
            throw new EcontException('An object given is not an implementation of class ComponentInterface.');
        }

        $reflected = !is_array($data);
        $iterator = $reflected ? (new \ReflectionClass($data))->getProperties() : $data;

        foreach ($iterator as $key => $value) {
            if ($reflected) {
                if (0 === strpos($value->getName(), '_')) {
                    continue;
                }
                $value->setAccessible(true);
            }

            $key = $reflected ? $value->getName() : $key;
            $value = $reflected ? $value->getValue($data) : $value;

            if (null !== $value && !is_scalar($value)) {
                if (is_object($value) && !($value instanceof ComponentInterface)) {
                    continue;
                }
                $nested = [];
                $this->buildArray($nested, $value);
                $array[$key] = $nested;
                continue;
            }

            $array[$key] = $value;
        }
    }
}
