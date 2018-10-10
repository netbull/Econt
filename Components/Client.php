<?php

namespace NetBull\Econt\Components;

/**
 * Class Client
 * @package NetBull\Econt\Components
 */
class Client extends Component
{
    const CLIENT_TYPE_PRIVATE = 'private';
    const CLIENT_TYPE_COMMERCIAL = 'commercial';

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
    private $clientType;

    /**
     * @var string|null
     */
    private $businessPhone;

    /**
     * @var string|null
     */
    private $businessEmail;

    /**
     * @var CDAgreement[]
     */
    private $cdAgreements = [];

    /**
     * @var Instruction[]
     */
    private $instructions = [];

    /**
     * @inheritdoc
     */
    public function parentTag()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'client';
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
     * @return Client
     */
    public function setId(int $id): Client
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
     * @return Client
     */
    public function setName(string $name): Client
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
     * @return Client
     */
    public function setNameEN(?string $nameEN): Client
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
     * @return Client
     */
    public function setKeyWord(?string $keyWord): Client
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
     * @return Client
     */
    public function setEin(?string $ein): Client
    {
        $this->ein = $ein;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getClientType(): ?string
    {
        return $this->clientType;
    }

    /**
     * @param null|string $clientType
     * @return Client
     */
    public function setClientType(?string $clientType): Client
    {
        $this->clientType = $clientType;

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
     * @return Client
     */
    public function setBusinessPhone(?string $businessPhone): Client
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
     * @return Client
     */
    public function setBusinessEmail(?string $businessEmail): Client
    {
        $this->businessEmail = $businessEmail;

        return $this;
    }

    /**
     * @return CDAgreement[]
     */
    public function getCdAgreements(): array
    {
        return $this->cdAgreements;
    }

    /**
     * @param CDAgreement[] $cdAgreements
     * @return Client
     */
    public function setCdAgreements(array $cdAgreements): Client
    {
        $this->cdAgreements = $cdAgreements;

        return $this;
    }

    /**
     * @return Instruction[]
     */
    public function getInstructions(): array
    {
        return $this->instructions;
    }

    /**
     * @param Instruction[] $instructions
     * @return Client
     */
    public function setInstructions(array $instructions): Client
    {
        $this->instructions = $instructions;

        return $this;
    }
}
