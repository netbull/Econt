<?php

namespace NetBull\Econt\Components;

/**
 * Class Country
 * @package NetBull\Econt\Components
 */
abstract class LoadingSide extends Component
{
    /**
     * @var string|null
     */
    protected $countryCode;

    /**
     * @var string|null
     */
    protected $city;

    /**
     * @var string|null
     */
    protected $postCode;

    /**
     * @var string|null
     */
    protected $addressZip;

    /**
     * @var string|null
     */
    protected $officeCode;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $namePerson;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $quarter;

    /**
     * @var string|null
     */
    protected $street;

    /**
     * @var string|null
     */
    protected $streetNum;

    /**
     * @var string|null
     */
    protected $streetBl;

    /**
     * @var string|null
     */
    protected $streetVh;

    /**
     * @var string|null
     */
    protected $streetEt;

    /**
     * @var string|null
     */
    protected $streetAp;

    /**
     * @var string|null
     */
    protected $streetOther;

    /**
     * @var string|null
     */
    protected $phoneNum;

    /**
     * @var string|null
     */
    protected $smsNo;

    /**
     * @var string|null
     */
    protected $bin;

    /**
     * @var string|null
     */
    protected $iban;

    /**
     * @var integer|null
     */
    protected $providerId;

    /**
     * @return null|string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param null|string $countryCode
     * @return LoadingSide
     */
    public function setCountryCode(?string $countryCode): LoadingSide
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param null|string $city
     * @return LoadingSide
     */
    public function setCity(?string $city): LoadingSide
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * @param null|string $postCode
     * @return LoadingSide
     */
    public function setPostCode(?string $postCode): LoadingSide
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddressZip(): ?string
    {
        return $this->addressZip;
    }

    /**
     * @param null|string $addressZip
     * @return LoadingSide
     */
    public function setAddressZip(?string $addressZip): LoadingSide
    {
        $this->addressZip = $addressZip;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOfficeCode(): ?string
    {
        return $this->officeCode;
    }

    /**
     * @param null|string $officeCode
     * @return LoadingSide
     */
    public function setOfficeCode(?string $officeCode): LoadingSide
    {
        $this->officeCode = $officeCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     * @return LoadingSide
     */
    public function setName(?string $name): LoadingSide
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNamePerson(): ?string
    {
        return $this->namePerson;
    }

    /**
     * @param null|string $namePerson
     * @return LoadingSide
     */
    public function setNamePerson(?string $namePerson): LoadingSide
    {
        $this->namePerson = $namePerson;

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
     * @return LoadingSide
     */
    public function setEmail(?string $email): LoadingSide
    {
        $this->email = $email;

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
     * @return LoadingSide
     */
    public function setQuarter(?string $quarter): LoadingSide
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
     * @return LoadingSide
     */
    public function setStreet(?string $street): LoadingSide
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
     * @return LoadingSide
     */
    public function setStreetNum(?string $streetNum): LoadingSide
    {
        $this->streetNum = $streetNum;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetBl(): ?string
    {
        return $this->streetBl;
    }

    /**
     * @param null|string $streetBl
     * @return LoadingSide
     */
    public function setStreetBl(?string $streetBl): LoadingSide
    {
        $this->streetBl = $streetBl;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetVh(): ?string
    {
        return $this->streetVh;
    }

    /**
     * @param null|string $streetVh
     * @return LoadingSide
     */
    public function setStreetVh(?string $streetVh): LoadingSide
    {
        $this->streetVh = $streetVh;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetEt(): ?string
    {
        return $this->streetEt;
    }

    /**
     * @param null|string $streetEt
     * @return LoadingSide
     */
    public function setStreetEt(?string $streetEt): LoadingSide
    {
        $this->streetEt = $streetEt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetAp(): ?string
    {
        return $this->streetAp;
    }

    /**
     * @param null|string $streetAp
     * @return LoadingSide
     */
    public function setStreetAp(?string $streetAp): LoadingSide
    {
        $this->streetAp = $streetAp;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetOther(): ?string
    {
        return $this->streetOther;
    }

    /**
     * @param null|string $streetOther
     * @return LoadingSide
     */
    public function setStreetOther(?string $streetOther): LoadingSide
    {
        $this->streetOther = $streetOther;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhoneNum(): ?string
    {
        return $this->phoneNum;
    }

    /**
     * @param null|string $phoneNum
     * @return LoadingSide
     */
    public function setPhoneNum(?string $phoneNum): LoadingSide
    {
        $this->phoneNum = $phoneNum;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSmsNo(): ?string
    {
        return $this->smsNo;
    }

    /**
     * @param null|string $smsNo
     * @return LoadingSide
     */
    public function setSmsNo(?string $smsNo): LoadingSide
    {
        $this->smsNo = $smsNo;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBin(): ?string
    {
        return $this->bin;
    }

    /**
     * @param null|string $bin
     * @return LoadingSide
     */
    public function setBin(?string $bin): LoadingSide
    {
        $this->bin = $bin;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * @param null|string $iban
     * @return LoadingSide
     */
    public function setIban(?string $iban): LoadingSide
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProviderId(): ?int
    {
        return $this->providerId;
    }

    /**
     * @param int|null $providerId
     * @return LoadingSide
     */
    public function setProviderId(?int $providerId): LoadingSide
    {
        $this->providerId = $providerId;

        return $this;
    }
}
