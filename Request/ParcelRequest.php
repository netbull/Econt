<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\Parcel;
use NetBull\Econt\Components\Loading;
use NetBull\Econt\Components\ParcelResult;

/**
 * Class ParcelRequest
 * @package NetBull\Econt\Request
 */
class ParcelRequest extends BaseRequest
{
    const RESPONSE_TYPE_HTML = 'HTML';
    const RESPONSE_TYPE_XML = 'XML';

    /**
     * @var boolean
     */
    private $validate = false;

    /**
     * @var string
     */
    private $responseType = self::RESPONSE_TYPE_XML;

    /**
     * @var boolean
     */
    private $onlyCalculate = true;

    /**
     * @var boolean
     */
    private $processAllParcels = true;

    /**
     * @var boolean
     */
    private $emailErrorsTo = true;

    /**
     * @var Parcel|null
     */
    private $parcel;

    /**
     * ParcelRequest constructor.
     * @param Parcel|null $parcel
     */
    public function __construct(?Parcel $parcel = null)
    {
        $this->parcel = $parcel ?? new Parcel();
    }

    /**
     * @inheritdoc
     */
    protected function getTag()
    {
        return 'parcel';
    }

    public function build(): \SimpleXMLElement
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><parcels/>');
        $system = $xml->addChild('system', $this->getRequestType());
        $system->addChild('validate', $this->validate ? '1': '0');
        $system->addChild('response_type', $this->responseType);
        $system->addChild('only_calculate', $this->onlyCalculate ? '1': '0');
        $system->addChild('process_all_parcels', $this->processAllParcels ? '1': '0');
        $system->addChild('email_errors_to', $this->emailErrorsTo ? '1': '0');

        $to = dom_import_simplexml($xml);
        $from = dom_import_simplexml($this->parcel->serialize()->loadings);
        $to->appendChild($to->ownerDocument->importNode($from, true));

        return $xml;
    }

    /**
     * @inheritdoc
     */
    public function map(\SimpleXMLElement $response)
    {
        $results = [];
        foreach ($response->result->children() as $result) {
            $parcelResult = new ParcelResult();
            $this->mapData($parcelResult, $result);

            $this->mapData($parcelResult->getLoadingPrice(), $result->loading_price);
            $results[] = $parcelResult;
        }

        return $this->parcel;
    }

    /**
     * @return bool
     */
    public function isValidate(): bool
    {
        return $this->validate;
    }

    /**
     * @param bool $validate
     */
    public function setValidate(bool $validate): void
    {
        $this->validate = $validate;
    }

    /**
     * @return string
     */
    public function getResponseType(): string
    {
        return $this->responseType;
    }

    /**
     * @param string $responseType
     */
    public function setResponseType(string $responseType): void
    {
        $this->responseType = $responseType;
    }

    /**
     * @return bool
     */
    public function isOnlyCalculate(): bool
    {
        return $this->onlyCalculate;
    }

    /**
     * @param bool $onlyCalculate
     */
    public function setOnlyCalculate(bool $onlyCalculate): void
    {
        $this->onlyCalculate = $onlyCalculate;
    }

    /**
     * @return bool
     */
    public function isProcessAllParcels(): bool
    {
        return $this->processAllParcels;
    }

    /**
     * @param bool $processAllParcels
     */
    public function setProcessAllParcels(bool $processAllParcels): void
    {
        $this->processAllParcels = $processAllParcels;
    }

    /**
     * @return bool
     */
    public function isEmailErrorsTo(): bool
    {
        return $this->emailErrorsTo;
    }

    /**
     * @param bool $emailErrorsTo
     */
    public function setEmailErrorsTo(bool $emailErrorsTo): void
    {
        $this->emailErrorsTo = $emailErrorsTo;
    }

    /**
     * @return Parcel|null
     */
    public function getParcel(): ?Parcel
    {
        return $this->parcel;
    }

    /**
     * @param Parcel|null $parcel
     */
    public function setParcel(?Parcel $parcel): void
    {
        $this->parcel = $parcel;
    }

    /**
     * @param Loading $loading
     */
    public function addLoading(Loading $loading)
    {
        $this->parcel->addLoading($loading);
    }
}
