<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\CityQuarter;

/**
 * Class CityQuartersRequest
 * @package NetBull\Econt\Request
 */
class CityQuartersRequest extends BaseRequest
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
        return self::REQUEST_TYPE_CITY_QUARTERS;
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
        $quarters = [];

        foreach ($response->{CityQuarter::PARENT_TAG}->e as $quarter) {
            $quarterObj = new CityQuarter();
            $this->mapData($quarterObj, $quarter);

            $quarters[] = $quarterObj;
        }

        return $quarters;
    }
}
