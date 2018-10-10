<?php

namespace NetBull\Econt\Components;

/**
 * Class Profile
 * @package NetBull\Econt\Components
 */
class Profile extends Component
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
     * @var string|null
     */
    private $nameEN;

    /**
     * @var string|null
     */
    private $keyWord;

    /**
     * @var string|null
     */
    private $ein;

    /**
     * @var string|null
     */
    private $ddsEin;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $mol;

    /**
     * @var string|null
     */
    private $businessPhone;

    /**
     * @var string|null
     */
    private $businessEmail;

    /**
     * @var Address[]
     */
    private $addresses = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Profile
     */
    public function setId(int $id): Profile
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
     * @return Profile
     */
    public function setName(string $name): Profile
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNameEN(): ?string
    {
        return $this->nameEN;
    }

    /**
     * @param null|string $nameEN
     * @return Profile
     */
    public function setNameEN(?string $nameEN): Profile
    {
        $this->nameEN = $nameEN;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getKeyWord(): ?string
    {
        return $this->keyWord;
    }

    /**
     * @param null|string $keyWord
     * @return Profile
     */
    public function setKeyWord(?string $keyWord): Profile
    {
        $this->keyWord = $keyWord;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEin(): ?string
    {
        return $this->ein;
    }

    /**
     * @param null|string $ein
     * @return Profile
     */
    public function setEin(?string $ein): Profile
    {
        $this->ein = $ein;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDdsEin(): ?string
    {
        return $this->ddsEin;
    }

    /**
     * @param null|string $ddsEin
     * @return Profile
     */
    public function setDdsEin(?string $ddsEin): Profile
    {
        $this->ddsEin = $ddsEin;

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
     * @return Profile
     */
    public function setAddress(?string $address): Profile
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMol(): ?string
    {
        return $this->mol;
    }

    /**
     * @param null|string $mol
     * @return Profile
     */
    public function setMol(?string $mol): Profile
    {
        $this->mol = $mol;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBusinessPhone(): ?string
    {
        return $this->businessPhone;
    }

    /**
     * @param null|string $businessPhone
     * @return Profile
     */
    public function setBusinessPhone(?string $businessPhone): Profile
    {
        $this->businessPhone = $businessPhone;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBusinessEmail(): ?string
    {
        return $this->businessEmail;
    }

    /**
     * @param null|string $businessEmail
     * @return Profile
     */
    public function setBusinessEmail(?string $businessEmail): Profile
    {
        $this->businessEmail = $businessEmail;

        return $this;
    }

    /**
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param Address[] $addresses
     * @return Profile
     */
    public function setAddresses(array $addresses): Profile
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @param Address $address
     * @return Profile
     */
    public function addAddress(Address $address): Profile
    {
        $this->addresses[] = $address;

        return $this;
    }
}
