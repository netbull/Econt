<?php

namespace NetBull\Econt\Components;

/**
 * Class ParcelResult
 * @package NetBull\Econt\Components
 */
class ParcelResult extends Component
{
    /**
     * @var integer|null
     */
    private $loadingId;

    /**
     * @var integer|null
     */
    private $loadingNum;

    /**
     * @var integer|null
     */
    private $courierRequestId;

    /**
     * @var \DateTime|null
     */
    private $deliveryDate;

    /**
     * @var LoadingPrice
     */
    private $loadingPrice;

    /**
     * @var float|null
     */
    private $loadingDiscount;

    /**
     * @var string|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $errorCode;

    /**
     * @var string|null
     */
    private $pdfUrl;

    /**
     * @var string|null
     */
    private $returnReason;

    /**
     * @var integer|null
     */
    private $prevParcelNum;

    /**
     * @var string|null
     */
    private $nextParcels;

    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'e';
    }

    /**
     * ParcelResponse constructor.
     */
    public function __construct()
    {
        $this->loadingPrice = new LoadingPrice();
    }

    /**
     * @return int|null
     */
    public function getLoadingId(): ?int
    {
        return $this->loadingId;
    }

    /**
     * @param int|null $loadingId
     * @return ParcelResult
     */
    public function setLoadingId(?int $loadingId): ParcelResult
    {
        $this->loadingId = $loadingId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLoadingNum(): ?int
    {
        return $this->loadingNum;
    }

    /**
     * @param int|null $loadingNum
     * @return ParcelResult
     */
    public function setLoadingNum(?int $loadingNum): ParcelResult
    {
        $this->loadingNum = $loadingNum;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCourierRequestId(): ?int
    {
        return $this->courierRequestId;
    }

    /**
     * @param int|null $courierRequestId
     * @return ParcelResult
     */
    public function setCourierRequestId(?int $courierRequestId): ParcelResult
    {
        $this->courierRequestId = $courierRequestId;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDeliveryDate(): ?\DateTime
    {
        return $this->deliveryDate;
    }

    /**
     * @param string|null $deliveryDate
     */
    public function setDeliveryDate(?string $deliveryDate): void
    {
        if ($deliveryDate) {
            $deliveryDate = \DateTime::createFromFormat('!Y-m-d', $deliveryDate);
        }
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * @return LoadingPrice
     */
    public function getLoadingPrice(): LoadingPrice
    {
        return $this->loadingPrice;
    }

    /**
     * @param LoadingPrice $loadingPrice
     * @return ParcelResult
     */
    public function setLoadingPrice(LoadingPrice $loadingPrice): ParcelResult
    {
        $this->loadingPrice = $loadingPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLoadingDiscount(): ?float
    {
        return $this->loadingDiscount;
    }

    /**
     * @param float|null $loadingDiscount
     * @return ParcelResult
     */
    public function setLoadingDiscount(?float $loadingDiscount): ParcelResult
    {
        $this->loadingDiscount = $loadingDiscount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param null|string $error
     * @return ParcelResult
     */
    public function setError(?string $error): ParcelResult
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * @param null|string $errorCode
     * @return ParcelResult
     */
    public function setErrorCode(?string $errorCode): ParcelResult
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPdfUrl(): ?string
    {
        return $this->pdfUrl;
    }

    /**
     * @param null|string $pdfUrl
     * @return ParcelResult
     */
    public function setPdfUrl(?string $pdfUrl): ParcelResult
    {
        $this->pdfUrl = $pdfUrl;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnReason(): ?string
    {
        return $this->returnReason;
    }

    /**
     * @param null|string $returnReason
     * @return ParcelResult
     */
    public function setReturnReason(?string $returnReason): ParcelResult
    {
        $this->returnReason = $returnReason;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrevParcelNum(): ?int
    {
        return $this->prevParcelNum;
    }

    /**
     * @param int|null $prevParcelNum
     * @return ParcelResult
     */
    public function setPrevParcelNum(?int $prevParcelNum): ParcelResult
    {
        $this->prevParcelNum = $prevParcelNum;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNextParcels(): ?string
    {
        return $this->nextParcels;
    }

    /**
     * @param null|string $nextParcels
     * @return ParcelResult
     */
    public function setNextParcels(?string $nextParcels): ParcelResult
    {
        $this->nextParcels = $nextParcels;

        return $this;
    }
}
