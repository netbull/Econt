<?php

namespace NetBull\Econt\Components;

/**
 * Class Country
 * @package NetBull\Econt\Components
 */
class Country extends Component
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $countryName;

    /**
     * @var string
     */
    private $countryNameEn;

    /**
     * @var integer
     */
    private $idZone;

    /**
     * @var string
     */
    private $zoneName;

    /**
     * @var string;
     */
    private $zoneNameEn;

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
     * @return Country
     */
    public function setId(int $id): Country
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return Country
     */
    public function setCountryName(string $countryName): Country
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryNameEn(): string
    {
        return $this->countryNameEn;
    }

    /**
     * @param string $countryNameEn
     * @return Country
     */
    public function setCountryNameEn(string $countryNameEn): Country
    {
        $this->countryNameEn = $countryNameEn;

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
     * @return Country
     */
    public function setIdZone(int $idZone): Country
    {
        $this->idZone = $idZone;

        return $this;
    }

    /**
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }

    /**
     * @param string $zoneName
     * @return Country
     */
    public function setZoneName(string $zoneName): Country
    {
        $this->zoneName = $zoneName;

        return $this;
    }

    /**
     * @return string
     */
    public function getZoneNameEn(): string
    {
        return $this->zoneNameEn;
    }

    /**
     * @param string $zoneNameEn
     * @return Country
     */
    public function setZoneNameEn(string $zoneNameEn): Country
    {
        $this->zoneNameEn = $zoneNameEn;

        return $this;
    }
}
