<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\CityStreet;

/**
 * Class CityStreetsRequest
 * @package NetBull\Econt\Request
 */
class CityStreetsRequest extends BaseRequest
{
    /**
     * @var
     */
    private $addresses;

    /**
     * @inheritdoc
     */
    public function getRequestType(): string
    {
        return self::REQUEST_TYPE_CITY_STREETS;
    }

    /**
     * @inheritdoc
     */
    public function normalize(\SimpleXMLElement $response)
    {
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function map(\SimpleXMLElement $response)
    {
        $streets = [];

        foreach ($response->{CityStreet::PARENT_TAG}->e as $street) {
            $streetObj = new CityStreet();
            $this->mapData($streetObj, $street);

            $streets[] = $streetObj;
        }

        return $streets;
    }
}
