<?php

namespace NetBull\Econt\Components;

/**
 * Class OfficeAddress
 * @package NetBull\Econt\Components
 */
class OfficeAddress extends Component
{
    /**
     * @var integer|null
     */
    private $idQuarter;

    /**
     * @var string|null
     */
    private $quarterName;

    /**
     * @var string|null
     */
    private $quarterNameEn;
    /**
     * @var integer|null
     */
    private $idStreet;

    /**
     * @var string|null
     */
    private $streetName;

    /**
     * @var string|null
     */
    private $streetNameEn;

    /**
     * @var string|null
     */
    private $num;

    /**
     * @var string|null
     */
    private $bl;

    /**
     * @var string|null
     */
    private $vh;

    /**
     * @var string|null
     */
    private $et;

    /**
     * @var string|null
     */
    private $ap;

    /**
     * @var string|null
     */
    private $other;

    /**
     * @return int|null
     */
    public function getIdQuarter(): ?int
    {
        return $this->idQuarter;
    }

    /**
     * @param int|null $idQuarter
     * @return OfficeAddress
     */
    public function setIdQuarter(?int $idQuarter): OfficeAddress
    {
        $this->idQuarter = $idQuarter;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getQuarterName(): ?string
    {
        return $this->quarterName;
    }

    /**
     * @param null|string $quarterName
     * @return OfficeAddress
     */
    public function setQuarterName(?string $quarterName): OfficeAddress
    {
        $this->quarterName = $quarterName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getQuarterNameEn(): ?string
    {
        return $this->quarterNameEn;
    }

    /**
     * @param null|string $quarterNameEn
     * @return OfficeAddress
     */
    public function setQuarterNameEn(?string $quarterNameEn): OfficeAddress
    {
        $this->quarterNameEn = $quarterNameEn;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdStreet(): ?int
    {
        return $this->idStreet;
    }

    /**
     * @param int|null $idStreet
     * @return OfficeAddress
     */
    public function setIdStreet(?int $idStreet): OfficeAddress
    {
        $this->idStreet = $idStreet;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * @param null|string $streetName
     * @return OfficeAddress
     */
    public function setStreetName(?string $streetName): OfficeAddress
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetNameEn(): ?string
    {
        return $this->streetNameEn;
    }

    /**
     * @param null|string $streetNameEn
     * @return OfficeAddress
     */
    public function setStreetNameEn(?string $streetNameEn): OfficeAddress
    {
        $this->streetNameEn = $streetNameEn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNum(): ?string
    {
        return $this->num;
    }

    /**
     * @param null|string $num
     * @return OfficeAddress
     */
    public function setNum(?string $num): OfficeAddress
    {
        $this->num = $num;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBl(): ?string
    {
        return $this->bl;
    }

    /**
     * @param null|string $bl
     * @return OfficeAddress
     */
    public function setBl(?string $bl): OfficeAddress
    {
        $this->bl = $bl;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getVh(): ?string
    {
        return $this->vh;
    }

    /**
     * @param null|string $vh
     * @return OfficeAddress
     */
    public function setVh(?string $vh): OfficeAddress
    {
        $this->vh = $vh;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEt(): ?string
    {
        return $this->et;
    }

    /**
     * @param null|string $et
     * @return OfficeAddress
     */
    public function setEt(?string $et): OfficeAddress
    {
        $this->et = $et;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAp(): ?string
    {
        return $this->ap;
    }

    /**
     * @param null|string $ap
     * @return OfficeAddress
     */
    public function setAp(?string $ap): OfficeAddress
    {
        $this->ap = $ap;

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
     * @return OfficeAddress
     */
    public function setOther(?string $other): OfficeAddress
    {
        $this->other = $other;

        return $this;
    }
}