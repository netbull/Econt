<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\Address;
use NetBull\Econt\Components\Profile;

/**
 * Class ProfileRequest
 * @package NetBull\Econt\Request
 */
class ProfileRequest extends BaseRequest
{
    /**
     * @inheritdoc
     */
    public function getRequestType(): string
    {
        return self::REQUEST_TYPE_PROFILE;
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
        $profile = new Profile();

        $this->mapData($profile, $response->client_info);

        foreach ($response->addresses->children() as $addr) {
            $address = new Address();
            $this->mapData($address, $addr);

            $profile->addAddress($address);
        }

        return $profile;
    }
}
