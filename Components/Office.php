<?php

namespace NetBull\Econt\Components;

/**
 * Class Office
 * @package NetBull\Econt\Components
 */
class Office extends Component
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nameEn;

    /**
     * @var string
     */
    private $officeCode;

    /**
     * @var boolean
     */
    private $isMobile = false;

    /**
     * @var boolean
     */
    private $isMachine = false;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var integer
     */
    private $idCity;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string
     */
    private $cityName;

    /**
     * @var string
     */
    private $cityNameEn;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $addressEn;

    /**
     * @var string|null
     */
    private $latitude;

    /**
     * @var string|null
     */
    private $longitude;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $workBegin;

    /**
     * @var \DateTime
     */
    private $workEnd;

    /**
     * @var \DateTime
     */
    private $workBeginSaturday;

    /**
     * @var \DateTime
     */
    private $workEndSaturday;

    /**
     * @var \DateTime
     */
    private $timePriority;

    /**
     * @var string
     */
    private $hubCode;

    /**
     * @var string
     */
    private $hubName;

    /**
     * @var string
     */
    private $hubNameEn;

    /**
     * @var \DateTime|null
     */
    private $updatedTime;

    /**
     * @var OfficeAddress
     */
    private $addressDetails;

    /**
     * @var OfficeDetails
     */
    private $officeDetails;

    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'e';
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Office
     */
    public function setId(int $id): Office
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Office
     */
    public function setName(string $name): Office
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameEn(): string
    {
        return $this->nameEn;
    }

    /**
     * @param string $nameEn
     * @return Office
     */
    public function setNameEn(string $nameEn): Office
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * @return string
     */
    public function getOfficeCode(): string
    {
        return $this->officeCode;
    }

    /**
     * @param string $officeCode
     * @return Office
     */
    public function setOfficeCode(string $officeCode): Office
    {
        $this->officeCode = $officeCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMobile(): bool
    {
        return $this->isMobile;
    }

    /**
     * @param bool $isMobile
     * @return Office
     */
    public function setIsMobile(bool $isMobile): Office
    {
        $this->isMobile = $isMobile;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMachine(): bool
    {
        return $this->isMachine;
    }

    /**
     * @param bool $isMachine
     * @return Office
     */
    public function setIsMachine(bool $isMachine): Office
    {
        $this->isMachine = $isMachine;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Office
     */
    public function setCountryCode(string $countryCode): Office
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdCity(): int
    {
        return $this->idCity;
    }

    /**
     * @param int $idCity
     * @return Office
     */
    public function setIdCity(int $idCity): Office
    {
        $this->idCity = $idCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return Office
     */
    public function setPostCode(string $postCode): Office
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return Office
     */
    public function setCityName(string $cityName): Office
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityNameEn(): string
    {
        return $this->cityNameEn;
    }

    /**
     * @param string $cityNameEn
     * @return Office
     */
    public function setCityNameEn(string $cityNameEn): Office
    {
        $this->cityNameEn = $cityNameEn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param null|string $address
     * @return Office
     */
    public function setAddress(?string $address): Office
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddressEn(): ?string
    {
        return $this->addressEn;
    }

    /**
     * @param null|string $addressEn
     * @return Office
     */
    public function setAddressEn(?string $addressEn): Office
    {
        $this->addressEn = $addressEn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param null|string $latitude
     * @return Office
     */
    public function setLatitude(?string $latitude): Office
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @param null|string $longitude
     * @return Office
     */
    public function setLongitude(?string $longitude): Office
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param null|string $phone
     * @return Office
     */
    public function setPhone(?string $phone): Office
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Office
     */
    public function setEmail(?string $email): Office
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWorkBegin(): \DateTime
    {
        return $this->workBegin;
    }

    /**
     * @param null|string $workBegin
     * @return Office
     */
    public function setWorkBegin(?string $workBegin): Office
    {
        if ($workBegin) {
            $workBegin = \DateTime::createFromFormat('!H:m:s', $workBegin);
        }
        $this->workBegin = $workBegin;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWorkEnd(): \DateTime
    {
        return $this->workEnd;
    }

    /**
     * @param null|string $workEnd
     * @return Office
     */
    public function setWorkEnd(?string $workEnd): Office
    {
        if ($workEnd) {
            $workEnd = \DateTime::createFromFormat('!H:m:s', $workEnd);
        }
        $this->workEnd = $workEnd;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWorkBeginSaturday(): \DateTime
    {
        return $this->workBeginSaturday;
    }

    /**
     * @param null|string $workBeginSaturday
     * @return Office
     */
    public function setWorkBeginSaturday(?string $workBeginSaturday): Office
    {
        if ($workBeginSaturday) {
            $workBeginSaturday = \DateTime::createFromFormat('!H:m:s', $workBeginSaturday);
        }
        $this->workBeginSaturday = $workBeginSaturday;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWorkEndSaturday(): \DateTime
    {
        return $this->workEndSaturday;
    }

    /**
     * @param null|string $workEndSaturday
     * @return Office
     */
    public function setWorkEndSaturday(?string $workEndSaturday): Office
    {
        if ($workEndSaturday) {
            $workEndSaturday = \DateTime::createFromFormat('!H:m:s', $workEndSaturday);
        }
        $this->workEndSaturday = $workEndSaturday;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimePriority(): \DateTime
    {
        return $this->timePriority;
    }

    /**
     * @param null|string $timePriority
     * @return Office
     */
    public function setTimePriority(?string $timePriority): Office
    {
        if ($timePriority) {
            $timePriority = \DateTime::createFromFormat('!H:m:s', $timePriority);
        } else {
            $timePriority = null;
        }
        $this->timePriority = $timePriority;

        return $this;
    }

    /**
     * @return string
     */
    public function getHubCode(): string
    {
        return $this->hubCode;
    }

    /**
     * @param string $hubCode
     * @return Office
     */
    public function setHubCode(string $hubCode): Office
    {
        $this->hubCode = $hubCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getHubName(): string
    {
        return $this->hubName;
    }

    /**
     * @param string $hubName
     * @return Office
     */
    public function setHubName(string $hubName): Office
    {
        $this->hubName = $hubName;

        return $this;
    }

    /**
     * @return string
     */
    public function getHubNameEn(): string
    {
        return $this->hubNameEn;
    }

    /**
     * @param string $hubNameEn
     * @return Office
     */
    public function setHubNameEn(string $hubNameEn): Office
    {
        $this->hubNameEn = $hubNameEn;

        return $this;
    }

    /**
     * @return OfficeAddress
     */
    public function getAddressDetails(): OfficeAddress
    {
        return $this->addressDetails;
    }

    /**
     * @param OfficeAddress $addressDetails
     * @return Office
     */
    public function setAddressDetails(OfficeAddress $addressDetails): Office
    {
        $this->addressDetails = $addressDetails;

        return $this;
    }

    /**
     * @return OfficeDetails
     */
    public function getOfficeDetails(): OfficeDetails
    {
        return $this->officeDetails;
    }

    /**
     * @param OfficeDetails $officeDetails
     * @return Office
     */
    public function setOfficeDetails(OfficeDetails $officeDetails): Office
    {
        $this->officeDetails = $officeDetails;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedTime(): ?\DateTime
    {
        return $this->updatedTime;
    }

    /**
     * @param string $updatedTime
     */
    public function setUpdatedTime(string $updatedTime): void
    {
        if ('0000-00-00 00:00:00' === $updatedTime) {
            return;
        }

        if ($updatedTime) {
            $updatedTime = \DateTime::createFromFormat('Y-m-d H:m:i', $updatedTime);
        }
        $this->updatedTime = $updatedTime;
    }
}
