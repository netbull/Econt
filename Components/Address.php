<?php

namespace NetBull\Econt\Components;

/**
 * Class Address
 * @package NetBull\Econt\Components
 */
class Address extends Component
{
    /**
     * @var string
     */
    private $cityPostCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string|null
     */
    private $quarter;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $streetNum;

    /**
     * @var string|null
     */
    private $other;

    /**
     * @return string
     */
    public function getCityPostCode(): string
    {
        return $this->cityPostCode;
    }

    /**
     * @param string $cityPostCode
     * @return Address
     */
    public function setCityPostCode(string $cityPostCode): Address
    {
        $this->cityPostCode = $cityPostCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getQuarter(): ?string
    {
        return $this->quarter;
    }

    /**
     * @param null|string $quarter
     * @return Address
     */
    public function setQuarter(?string $quarter): Address
    {
        $this->quarter = $quarter;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param null|string $street
     * @return Address
     */
    public function setStreet(?string $street): Address
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetNum(): ?string
    {
        return $this->streetNum;
    }

    /**
     * @param null|string $streetNum
     * @return Address
     */
    public function setStreetNum(?string $streetNum): Address
    {
        $this->streetNum = $streetNum;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOther(): ?string
    {
        return $this->other;
    }

    /**
     * @param null|string $other
     * @return Address
     */
    public function setOther(?string $other): Address
    {
        $this->other = $other;

        return $this;
    }
}