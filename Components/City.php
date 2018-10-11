<?php

namespace NetBull\Econt\Components;

/**
 * Class City
 * @package NetBull\Econt\Components
 */
class City extends Component
{
    const WEEKDAYS = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
    const SERVICES = [
        'from_door' => null,
        'to_door' => null,
        'from_office' => null,
        'to_office' => null,
    ];

    const TYPE_CITY = 'гр.';
    const TYPE_VILLAGE = 'с.';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var integer
     */
    private $idZone;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nameEn;

    /**
     * @var string|null
     */
    private $region;

    /**
     * @var string|null
     */
    private $regionEn;

    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var integer
     */
    private $idOffice;

    /**
     * @var string|null
     */
    private $hubCode;

    /**
     * @var string|null
     */
    private $hubName;

    /**
     * @var string
     */
    private $hubNameEn;

    /**
     * @var \DateTime|null
     */
    private $courierRequestBeginTime;

    /**
     * @var \DateTime|null
     */
    private $courierRequestBeginTimeSaturday;

    /**
     * @var \DateTime|null
     */
    private $courierRequestEndTime;

    /**
     * @var \DateTime|null
     */
    private $courierRequestEndTimeSaturday;

    /**
     * @var array
     */
    private $serviceDays = [
        'monday' => false,
        'tuesday' => false,
        'wednesday' => false,
        'thursday' => false,
        'friday' => false,
        'saturday' => false,
        'sunday' => false,
    ];

    /**
     * @var array
     */
    private $attachOffices = [
        'courier_shipments' => self::SERVICES,
        'cargo_palet_shipments' => self::SERVICES,
        'cargo_expres_shipments' => self::SERVICES,
        'post_shipments' => self::SERVICES,
    ];

    /**
     * @var \DateTime|null
     */
    private $updatedTime;

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
     * @return City
     */
    public function setId(int $id): City
    {
        $this->id = $id;

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
     * @return City
     */
    public function setPostCode(string $postCode): City
    {
        $this->postCode = $postCode;

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
     * @return City
     */
    public function setCountryCode(string $countryCode): City
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     * @return City
     */
    public function setType(?string $type): City
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdZone(): int
    {
        return $this->idZone;
    }

    /**
     * @param int $idZone
     * @return City
     */
    public function setIdZone(int $idZone): City
    {
        $this->idZone = $idZone;

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
     * @return City
     */
    public function setName(string $name): City
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
     * @return City
     */
    public function setNameEn(string $nameEn): City
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param null|string $region
     * @return City
     */
    public function setRegion(?string $region): City
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRegionEn(): ?string
    {
        return $this->regionEn;
    }

    /**
     * @param null|string $regionEn
     * @return City
     */
    public function setRegionEn(?string $regionEn): City
    {
        $this->regionEn = $regionEn;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdCountry(): int
    {
        return $this->idCountry;
    }

    /**
     * @param int $idCountry
     * @return City
     */
    public function setIdCountry(int $idCountry): City
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdOffice(): int
    {
        return $this->idOffice;
    }

    /**
     * @param int $idOffice
     * @return City
     */
    public function setIdOffice(int $idOffice): City
    {
        $this->idOffice = $idOffice;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHubCode(): ?string
    {
        return $this->hubCode;
    }

    /**
     * @param null|string $hubCode
     * @return City
     */
    public function setHubCode(?string $hubCode): City
    {
        $this->hubCode = $hubCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHubName(): ?string
    {
        return $this->hubName;
    }

    /**
     * @param null|string $hubName
     * @return City
     */
    public function setHubName(?string $hubName): City
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
     * @return City
     */
    public function setHubNameEn(string $hubNameEn): City
    {
        $this->hubNameEn = $hubNameEn;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCourierRequestBeginTime(): ?\DateTime
    {
        return $this->courierRequestBeginTime;
    }

    /**
     * @param string $courierRequestBeginTime
     * @return City
     */
    public function setCourierRequestBeginTime(string $courierRequestBeginTime): City
    {
        if ($courierRequestBeginTime) {
            $courierRequestBeginTime = \DateTime::createFromFormat('H:m:i', $courierRequestBeginTime);
        }
        $this->courierRequestBeginTime = $courierRequestBeginTime;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCourierRequestBeginTimeSaturday(): \DateTime
    {
        return $this->courierRequestBeginTimeSaturday;
    }

    /**
     * @param string $courierRequestBeginTimeSaturday
     * @return City
     */
    public function setCourierRequestBeginTimeSaturday(string $courierRequestBeginTimeSaturday): City
    {
        if ($courierRequestBeginTimeSaturday) {
            $courierRequestBeginTimeSaturday = \DateTime::createFromFormat('H:m:i', $courierRequestBeginTimeSaturday);
        }
        $this->courierRequestBeginTimeSaturday = $courierRequestBeginTimeSaturday;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCourierRequestEndTime(): ?\DateTime
    {
        return $this->courierRequestEndTime;
    }

    /**
     * @param string $courierRequestEndTime
     * @return City
     */
    public function setCourierRequestEndTime(string $courierRequestEndTime): City
    {
        if ($courierRequestEndTime) {
            $courierRequestEndTime = \DateTime::createFromFormat('H:m:i', $courierRequestEndTime);
        }
        $this->courierRequestEndTime = $courierRequestEndTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCourierRequestEndTimeSaturday(): ?\DateTime
    {
        return $this->courierRequestEndTimeSaturday;
    }

    /**
     * @param string $courierRequestEndTimeSaturday
     * @return City
     */
    public function setCourierRequestEndTimeSaturday(string $courierRequestEndTimeSaturday): City
    {
        if ($courierRequestEndTimeSaturday) {
            $courierRequestEndTimeSaturday = \DateTime::createFromFormat('H:m:i', $courierRequestEndTimeSaturday);
        }
        $this->courierRequestEndTimeSaturday = $courierRequestEndTimeSaturday;

        return $this;
    }

    /**
     * @return array
     */
    public function getServiceDays(): array
    {
        return $this->serviceDays;
    }

    /**
     * @param array $serviceDays
     * @return City
     */
    public function setServiceDays(array $serviceDays): City
    {
        $this->serviceDays = $serviceDays;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttachOffices(): array
    {
        return $this->attachOffices;
    }

    /**
     * @param array $attachOffices
     * @return City
     */
    public function setAttachOffices(array $attachOffices): City
    {
        $this->attachOffices = $attachOffices;

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
     * @return City
     */
    public function setUpdatedTime(string $updatedTime): City
    {
        if ('0000-00-00 00:00:00' === $updatedTime) {
            return $this;
        }

        if ($updatedTime) {
            $updatedTime = \DateTime::createFromFormat('Y-m-d H:m:i', $updatedTime);
        }
        $this->updatedTime = $updatedTime;

        return $this;
    }
}
