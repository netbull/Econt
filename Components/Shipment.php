<?php

namespace NetBull\Econt\Components;

/**
 * Class Shipment
 * @package NetBull\Econt\Components
 */
class Shipment extends Component
{
    const TYPE_PACK = 'PACK';
    const TYPE_DOCUMENT = 'DOCUMENT';
    const TYPE_PALLET = 'PALLET';
    const TYPE_CARGO = 'CARGO';
    const TYPE_DOCUMENTPALLET = 'DOCUMENTPALLET';
    const TYPE_SMALL_ENVELOPE = 'SMALL_ENVELOPE';
    const TYPE_BIG_ENVELOPE = 'BIG_ENVELOPE';
    const TYPE_POST_PACK = 'POST_PACK';
    const TYPE_PRESS = 'PRESS';
    const TYPE_ADV = 'ADV';
    const TYPE_SECOGRAM = 'SECOGRAM';
    const TYPE_MONEY_TRANSFER = 'MONEY_TRANSFER';

    const TARIFF_SUB_CODE_DOOR_DOOR = 'DOOR_DOOR';
    const TARIFF_SUB_CODE_DOOR_OFFICE = 'DOOR_OFFICE';
    const TARIFF_SUB_CODE_OFFICE_DOOR = 'OFFICE_DOOR';
    const TARIFF_SUB_CODE_OFFICE_OFFICE = 'OFFICE_OFFICE';
    const TARIFF_SUB_CODE_DOOR_BANK = 'DOOR_BANK';
    const TARIFF_SUB_CODE_OFFICE_BANK = 'OFFICE_BANK';

    /**
     * @var string
     */
    private $envelopeNum;

    /**
     * @var string
     */
    private $shipmentType = self::TYPE_PACK;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var integer
     */
    private $packCount = 1;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $tariffSubCode = self::TARIFF_SUB_CODE_OFFICE_OFFICE;

    /**
     * @var string|null
     */
    private $invoiceBeforePayCd;

    /**
     * @var boolean
     */
    private $payAfterAccept = false;

    /**
     * @var boolean
     */
    private $payAfterTest = false;

    /**
     * @var \DateTime|null
     */
    private $sendDate;

    /**
     * @var \DateTime|null
     */
    private $deliveryDay;

    /**
     * @var boolean|null
     */
    private $sizeUnder60Cm;

    /**
     * @var integer|null
     */
    private $orderNum;

    public function getRequiredFields()
    {
        return ['description', 'weight'];
    }

    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'shipment';
    }

    /**
     * @return string
     */
    public function getEnvelopeNum(): string
    {
        return $this->envelopeNum;
    }

    /**
     * @param string $envelopeNum
     * @return Shipment
     */
    public function setEnvelopeNum(string $envelopeNum): Shipment
    {
        $this->envelopeNum = $envelopeNum;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentType(): string
    {
        return $this->shipmentType;
    }

    /**
     * @param string $shipmentType
     * @return Shipment
     */
    public function setShipmentType(string $shipmentType): Shipment
    {
        $this->shipmentType = $shipmentType;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     * @return Shipment
     */
    public function setDescription(?string $description): Shipment
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getPackCount(): int
    {
        return $this->packCount;
    }

    /**
     * @param int $packCount
     * @return Shipment
     */
    public function setPackCount(int $packCount): Shipment
    {
        $this->packCount = $packCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return Shipment
     */
    public function setWeight(string $weight): Shipment
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getTariffSubCode(): string
    {
        return $this->tariffSubCode;
    }

    /**
     * @param string $tariffSubCode
     * @return Shipment
     */
    public function setTariffSubCode(string $tariffSubCode): Shipment
    {
        $this->tariffSubCode = $tariffSubCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getInvoiceBeforePayCd(): ?string
    {
        return $this->invoiceBeforePayCd;
    }

    /**
     * @param null|string $invoiceBeforePayCd
     * @return Shipment
     */
    public function setInvoiceBeforePayCd(?string $invoiceBeforePayCd): Shipment
    {
        $this->invoiceBeforePayCd = $invoiceBeforePayCd;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPayAfterAccept(): bool
    {
        return $this->payAfterAccept;
    }

    /**
     * @param bool $payAfterAccept
     * @return Shipment
     */
    public function setPayAfterAccept(bool $payAfterAccept): Shipment
    {
        $this->payAfterAccept = $payAfterAccept;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPayAfterTest(): bool
    {
        return $this->payAfterTest;
    }

    /**
     * @param bool $payAfterTest
     * @return Shipment
     */
    public function setPayAfterTest(bool $payAfterTest): Shipment
    {
        $this->payAfterTest = $payAfterTest;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getSendDate(): ?\DateTime
    {
        return $this->sendDate;
    }

    /**
     * @param \DateTime|null $sendDate
     * @return Shipment
     */
    public function setSendDate(?\DateTime $sendDate): Shipment
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDeliveryDay(): ?\DateTime
    {
        return $this->deliveryDay;
    }

    /**
     * @param \DateTime|null $deliveryDay
     * @return Shipment
     */
    public function setDeliveryDay(?\DateTime $deliveryDay): Shipment
    {
        $this->deliveryDay = $deliveryDay;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSizeUnder60Cm(): ?bool
    {
        return $this->sizeUnder60Cm;
    }

    /**
     * @param bool|null $sizeUnder60Cm
     * @return Shipment
     */
    public function setSizeUnder60Cm(?bool $sizeUnder60Cm): Shipment
    {
        $this->sizeUnder60Cm = $sizeUnder60Cm;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getOrderNum(): ?int
    {
        return $this->orderNum;
    }

    /**
     * @param int|null $orderNum
     * @return Shipment
     */
    public function setOrderNum(?int $orderNum): Shipment
    {
        $this->orderNum = $orderNum;

        return $this;
    }
}
