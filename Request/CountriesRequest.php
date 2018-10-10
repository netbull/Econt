<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\Country;

/**
 * Class CountriesRequest
 * @package NetBull\Econt\Request
 */
class CountriesRequest extends BaseRequest
{
    /**
     * @inheritdoc
     */
    public function getRequestType(): string
    {
        return self::REQUEST_TYPE_COUNTRIES;
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
        $countries = [];

        foreach ($response->e as $country) {
            $countryObj = new Country();
            $this->mapData($countryObj, $country);

            $countries[] = $countryObj;
        }

        return $countries;
    }
}
