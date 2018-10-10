<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\City;

/**
 * Class CitiesRequest
 * @package NetBull\Econt\Request
 */
class CitiesRequest extends BaseRequest
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
        return self::REQUEST_TYPE_CITIES;
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
        $cities = [];

        foreach ($response->{City::PARENT_TAG}->e as $city) {
            $cityObj = new City();
            $this->mapData($cityObj, $city);

            $days = $cityObj->getServiceDays();
            foreach ($city->service_days->children() as $day => $value) {
                $value = (string)$value === '1';
                $day = City::WEEKDAYS[intval(str_replace('day', '', $day) - 1)];
                $days[$day] = $value;
            }
            $cityObj->setServiceDays($days);

            $offices = $cityObj->getAttachOffices();
            foreach ($city->attach_offices->children() as $key => $value) {
                foreach ($value->children() as $k => $v) {
                    if (0 < $v->children()->count()) {
                        $offices[$key][$k] = [
                            'office_code' => (string)$v->office_code,
                        ];
                    }
                }
            }
            $cityObj->setAttachOffices($offices);
            $cities[] = $cityObj;
        }

        return $cities;
    }
}
