<?php

namespace NetBull\Econt\Components;

/**
 * Class CityQuarter
 * @package NetBull\Econt\Components
 */
class CityQuarter extends Component
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
    private $cityPostCode;

    /**
     * @var integer
     */
    private $idCity;

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
     * @return CityQuarter
     */
    public function setId(int $id): CityQuarter
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
     * @return CityQuarter
     */
    public function setName(string $name): CityQuarter
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
     * @return CityQuarter
     */
    public function setNameEn(string $nameEn): CityQuarter
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityPostCode(): string
    {
        return $this->cityPostCode;
    }

    /**
     * @param string $cityPostCode
     * @return CityQuarter
     */
    public function setCityPostCode(string $cityPostCode): CityQuarter
    {
        $this->cityPostCode = $cityPostCode;

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
     * @return CityQuarter
     */
    public function setIdCity(int $idCity): CityQuarter
    {
        $this->idCity = $idCity;

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
     * @return CityQuarter
     */
    public function setUpdatedTime(string $updatedTime): CityQuarter
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
