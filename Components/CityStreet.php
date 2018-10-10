<?php

namespace NetBull\Econt\Components;

/**
 * Class CityStreet
 * @package NetBull\Econt\Components
 */
class CityStreet extends Component
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
     * @return CityStreet
     */
    public function setId(int $id): CityStreet
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
     * @return CityStreet
     */
    public function setName(string $name): CityStreet
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
     * @return CityStreet
     */
    public function setNameEn(string $nameEn): CityStreet
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
     * @return CityStreet
     */
    public function setCityPostCode(string $cityPostCode): CityStreet
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
     * @return CityStreet
     */
    public function setIdCity(int $idCity): CityStreet
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
