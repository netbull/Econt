<?php

namespace NetBull\Econt\Components;

/**
 * Class LoadingPrice
 * @package NetBull\Econt\Components
 */
class LoadingPrice extends Component
{
    /**
     * @var float
     */
    private $total = 0.00;

    /**
     * @var float
     */
    private $senderTotal = 0.00;

    /**
     * @var float
     */
    private $receiverTotal = 0.00;

    /**
     * @var float
     */
    private $otherTotal = 0.00;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $currencyCode;

    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'loading_price';
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return LoadingPrice
     */
    public function setTotal(float $total): LoadingPrice
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return float
     */
    public function getSenderTotal(): float
    {
        return $this->senderTotal;
    }

    /**
     * @param float $senderTotal
     * @return LoadingPrice
     */
    public function setSenderTotal(float $senderTotal): LoadingPrice
    {
        $this->senderTotal = $senderTotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getReceiverTotal(): float
    {
        return $this->receiverTotal;
    }

    /**
     * @param float $receiverTotal
     * @return LoadingPrice
     */
    public function setReceiverTotal(float $receiverTotal): LoadingPrice
    {
        $this->receiverTotal = $receiverTotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getOtherTotal(): float
    {
        return $this->otherTotal;
    }

    /**
     * @param float $otherTotal
     * @return LoadingPrice
     */
    public function setOtherTotal(float $otherTotal): LoadingPrice
    {
        $this->otherTotal = $otherTotal;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param null|string $currency
     * @return LoadingPrice
     */
    public function setCurrency(?string $currency): LoadingPrice
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param null|string $currencyCode
     * @return LoadingPrice
     */
    public function setCurrencyCode(?string $currencyCode): LoadingPrice
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }
}
