<?php

namespace NetBull\Econt\Request;

/**
 * Class BaseRequest
 * @package NetBull\Econt\Request
 */
abstract class BaseRequest implements RequestInterface
{
    const REQUEST_TYPE_NONE = null;
    const REQUEST_TYPE_PROFILE = 'profile';
    const REQUEST_TYPE_CLIENTS = 'access_clients';
    const REQUEST_TYPE_COUNTRIES = 'countries';
    const REQUEST_TYPE_CITIES = 'cities';
    const REQUEST_TYPE_CITY_ZONES = 'cities_zones';
    const REQUEST_TYPE_CITY_REGIONS = 'cities_regions';
    const REQUEST_TYPE_CITY_QUARTERS = 'cities_quarters';
    const REQUEST_TYPE_CITY_STREETS = 'cities_streets';
    const REQUEST_TYPE_OFFICES = 'offices';
    const REQUEST_TYPE_PARCEL = 'parcel';

//    const SHIPMENTS = 'shipments';
//    const SHIPPING = 'shipping';
//    const CANCELLATION = 'cancel_shipments';
//    const DELIVERY = 'delivery_days';

    /**
     * @return string
     */
    protected function getTag()
    {
        return 'request';
    }

    /**
     * @return string|null
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_NONE;
    }

    /**
     * @param $key
     * @return mixed
     */
    protected function convertKey($key)
    {
        return str_replace('_', '', ucwords(strtolower($key), '_'));
    }

    /**
     * @param $object
     * @param \SimpleXMLElement $data
     */
    protected function mapData($object, \SimpleXMLElement $data)
    {
        $className = get_class($object);
        foreach ($data->children() as $key => $value) {
            $methodName = 'set'.$this->convertKey($key);
            try {
                $ref = new \ReflectionMethod($className, $methodName);
            } catch (\ReflectionException $e) {
                continue;
            }

            $params = $ref->getParameters();
            if (0 === count($params)) {
                continue;
            }

            $type = $params[0]->getType()->getName();
            if (is_null($params[0]->getType()) || !in_array($type, ['string', 'int', 'bool', 'float'])) {
                continue;
            }

            switch ($type) {
                case 'int':
                    $value = (int)$value;
                    if (0 === $value) {
                        $value = null;
                    }
                    break;
                case 'string':
                    $value = (string)$value;
                    if (0 === strlen($value)) {
                        $value = null;
                    }
                    break;
                case 'float':
                    $value = (float)$value;
                    if (0 === strlen($value)) {
                        $value = null;
                    }
                    break;
                case 'bool':
                    $value = (string)$value === '1';
                    break;
            }
            $object->{'set'.$this->convertKey($key)}($value);
        }
    }

    /**
     * @inheritdoc
     */
    public function append(\SimpleXMLElement $xml) { }

    /**
     * @inheritdoc
     */
    public function build() : \SimpleXMLElement
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><' . $this->getTag() . '/>');
        $xml->addChild('request_type', $this->getRequestType());

        return $xml;
    }

    /**
     * @inheritdoc
     */
    abstract public function map(\SimpleXMLElement $response);
}
