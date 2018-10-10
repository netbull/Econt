<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\Office;
use NetBull\Econt\Components\OfficeAddress;
use NetBull\Econt\Components\OfficeDetails;

/**
 * Class OfficesRequest
 * @package NetBull\Econt\Request
 */
class OfficesRequest extends BaseRequest
{

    /**
     * @inheritdoc
     */
    public function getRequestType(): string
    {
        return self::REQUEST_TYPE_OFFICES;
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
        $offices = [];

        foreach ($response->{Office::PARENT_TAG}->e as $office) {
            $officeObj = new Office();
            $this->mapData($officeObj, $office);

            $addressDetails = new OfficeAddress();
            $this->mapData($addressDetails, $office->address_details);
            $officeObj->setAddressDetails($addressDetails);

            $officeDetails = new OfficeDetails();
            $this->mapData($officeDetails, $office->office_details);
            $officeObj->setOfficeDetails($officeDetails);

            $offices[] = $officeObj;
        }

        return $offices;
    }
}
