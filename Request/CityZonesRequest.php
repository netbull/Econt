<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\CityZone;

/**
 * Class CityZonesRequest
 * @package NetBull\Econt\Request
 */
class CityZonesRequest extends BaseRequest
{
    /**
     * @inheritdoc
     */
    public function getRequestType(): string
    {
        return self::REQUEST_TYPE_CITY_ZONES;
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
        $zones = [];

        foreach ($response->zones->e as $zone) {
            $zoneObj = new CityZone();
            $this->mapData($zoneObj, $zone);

            $zones[] = $zoneObj;
        }

        return $zones;
    }
}
