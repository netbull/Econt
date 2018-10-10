<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\CityRegion;

/**
 * Class CityRegionsRequest
 * @package NetBull\Econt\Request
 */
class CityRegionsRequest extends BaseRequest
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
        return self::REQUEST_TYPE_CITY_REGIONS;
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
        $regions = [];

        foreach ($response->cities_regions->e as $region) {
            $regionObj = new CityRegion();
            $this->mapData($regionObj, $region);

            $regions[] = $regionObj;
        }

        return $regions;
    }
}
