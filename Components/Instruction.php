<?php

namespace NetBull\Econt\Components;

/**
 * Class Instruction
 * @package NetBull\Econt\Components
 */
class Instruction extends Component
{
    const TYPE_TAKE = 'take';
    const TYPE_GIVE = 'give';
    const TYPE_RETURN = 'return';
    const TYPE_SERVICES = 'services';

    const DP_TYPE_NONE = '';
    const DP_TYPE_DOCUMENT = 'document';
    const DP_TYPE_SHIPMENT = 'shipment';

    const DELIVERY_FAIL_ACTION_CONTACT = 'contact';
    const DELIVERY_FAIL_ACTION_INSTRUCTION = 'instruction';
    const DELIVERY_FAIL_ACTION_RETURN_TO_SENDER = 'return_to_sender';
    const DELIVERY_FAIL_ACTION_RETURN_TO_ADDRESS = 'return_to_address';
    const DELIVERY_FAIL_ACTION_RETURN_TO_OFFICE = 'return_to_office';

    const DP_RETURN_TO_SENDER = 'sender';
    const DP_RETURN_TO_OFFICE = 'office';
    const DP_RETURN_TO_ADDRESS = 'address';

    const REJECT_PAYMENT_SIDE_SENDER = 'sender';
    const REJECT_PAYMENT_SIDE_RECEIVER = 'receiver';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string|null
     */
    private $template;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $fileName;

    /**
     * @var string|null
     */
    private $fileContent;

    /**
     * @var integer|null
     */
    private $daysUntilReturn;

    /**
     * @var string|null
     */
    private $deliveryFailAction;

    /**
     * @var string|null
     */
    private $dpAp;

    /**
     * @var string|null
     */
    private $dpBl;

    /**
     * @var string|null
     */
    private $dpEt;

    /**
     * @var string|null
     */
    private $dpCity;

    /**
     * @var string|null
     */
    private $dpPostCode;

    /**
     * @var string|null
     */
    private $dpEmail;

    /**
     * @var string|null
     */
    private $dpFace;

    /**
     * @var string|null
     */
    private $dpName;

    /**
     * @var string|null
     */
    private $dpOffice;

    /**
     * @var string|null
     */
    private $dpOfficeCode;

    /**
     * @var string|null
     */
    private $dpOther;

    /**
     * @var string|null
     */
    private $dpPaymentSide;

    /**
     * @var string|null
     */
    private $dpPhone;

    /**
     * @var string|null
     */
    private $dpQuarter;

    /**
     * @var string|null
     */
    private $dpReturnTo;

    /**
     * @var string|null
     */
    private $dpStreet;

    /**
     * @var string|null
     */
    private $dpStreetNum;

    /**
     * @var string|null
     */
    private $dpType;

    /**
     * @var string|null
     */
    private $dpVh;

    /**
     * @var string|null
     */
    private $printReturnLoading;

    /**
     * @var string|null
     */
    private $rejectDeliveryPaymentSide;

    /**
     * @var string|null
     */
    private $rejectReturnPaymentSide;

    /**
     * @var string|null
     */
    private $returnAp;

    /**
     * @var string|null
     */
    private $returnBl;

    /**
     * @var string|null
     */
    private $returnCity;

    /**
     * @var string|null
     */
    private $returnPostCode;

    /**
     * @var string|null
     */
    private $returnEmail;

    /**
     * @var string|null
     */
    private $returnEt;

    /**
     * @var string|null
     */
    private $returnFace;

    /**
     * @var string|null
     */
    private $returnName;

    /**
     * @var string|null
     */
    private $returnOffice;

    /**
     * @var string|null
     */
    private $returnOfficeCode;

    /**
     * @var string|null
     */
    private $returnOther;

    /**
     * @var string|null
     */
    private $returnPhone;

    /**
     * @var string|null
     */
    private $returnQuarter;

    /**
     * @var string|null
     */
    private $returnStreet;

    /**
     * @var string|null
     */
    private $returnVh;

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
     * @return Instruction
     */
    public function setId(int $id): Instruction
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Instruction
     */
    public function setType(string $type): Instruction
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTemplate(): ?string
    {
        return $this->template;
    }

    /**
     * @param null|string $template
     * @return Instruction
     */
    public function setTemplate(?string $template): Instruction
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     * @return Instruction
     */
    public function setTitle(?string $title): Instruction
    {
        $this->title = $title;

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
     * @return Instruction
     */
    public function setDescription(?string $description): Instruction
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param null|string $fileName
     * @return Instruction
     */
    public function setFileName(?string $fileName): Instruction
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFileContent(): ?string
    {
        return $this->fileContent;
    }

    /**
     * @param null|string $fileContent
     * @return Instruction
     */
    public function setFileContent(?string $fileContent): Instruction
    {
        $this->fileContent = $fileContent;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDaysUntilReturn(): ?int
    {
        return $this->daysUntilReturn;
    }

    /**
     * @param null|string $daysUntilReturn
     * @return Instruction
     */
    public function setDaysUntilReturn(?string $daysUntilReturn): Instruction
    {
        if (!is_null($daysUntilReturn)) {
            $daysUntilReturn = (int)$daysUntilReturn;
        }
        $this->daysUntilReturn = $daysUntilReturn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDeliveryFailAction(): ?string
    {
        return $this->deliveryFailAction;
    }

    /**
     * @param null|string $deliveryFailAction
     * @return Instruction
     */
    public function setDeliveryFailAction(?string $deliveryFailAction): Instruction
    {
        $this->deliveryFailAction = $deliveryFailAction;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpAp(): ?string
    {
        return $this->dpAp;
    }

    /**
     * @param null|string $dpAp
     * @return Instruction
     */
    public function setDpAp(?string $dpAp): Instruction
    {
        $this->dpAp = $dpAp;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpBl(): ?string
    {
        return $this->dpBl;
    }

    /**
     * @param null|string $dpBl
     * @return Instruction
     */
    public function setDpBl(?string $dpBl): Instruction
    {
        $this->dpBl = $dpBl;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpEt(): ?string
    {
        return $this->dpEt;
    }

    /**
     * @param null|string $dpEt
     * @return Instruction
     */
    public function setDpEt(?string $dpEt): Instruction
    {
        $this->dpEt = $dpEt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpCity(): ?string
    {
        return $this->dpCity;
    }

    /**
     * @param null|string $dpCity
     * @return Instruction
     */
    public function setDpCity(?string $dpCity): Instruction
    {
        $this->dpCity = $dpCity;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpPostCode(): ?string
    {
        return $this->dpPostCode;
    }

    /**
     * @param null|string $dpPostCode
     * @return Instruction
     */
    public function setDpPostCode(?string $dpPostCode): Instruction
    {
        $this->dpPostCode = $dpPostCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpEmail(): ?string
    {
        return $this->dpEmail;
    }

    /**
     * @param null|string $dpEmail
     * @return Instruction
     */
    public function setDpEmail(?string $dpEmail): Instruction
    {
        $this->dpEmail = $dpEmail;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpFace(): ?string
    {
        return $this->dpFace;
    }

    /**
     * @param null|string $dpFace
     * @return Instruction
     */
    public function setDpFace(?string $dpFace): Instruction
    {
        $this->dpFace = $dpFace;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpName(): ?string
    {
        return $this->dpName;
    }

    /**
     * @param null|string $dpName
     * @return Instruction
     */
    public function setDpName(?string $dpName): Instruction
    {
        $this->dpName = $dpName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpOffice(): ?string
    {
        return $this->dpOffice;
    }

    /**
     * @param null|string $dpOffice
     * @return Instruction
     */
    public function setDpOffice(?string $dpOffice): Instruction
    {
        $this->dpOffice = $dpOffice;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpOfficeCode(): ?string
    {
        return $this->dpOfficeCode;
    }

    /**
     * @param null|string $dpOfficeCode
     * @return Instruction
     */
    public function setDpOfficeCode(?string $dpOfficeCode): Instruction
    {
        $this->dpOfficeCode = $dpOfficeCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpOther(): ?string
    {
        return $this->dpOther;
    }

    /**
     * @param null|string $dpOther
     * @return Instruction
     */
    public function setDpOther(?string $dpOther): Instruction
    {
        $this->dpOther = $dpOther;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpPaymentSide(): ?string
    {
        return $this->dpPaymentSide;
    }

    /**
     * @param null|string $dpPaymentSide
     * @return Instruction
     */
    public function setDpPaymentSide(?string $dpPaymentSide): Instruction
    {
        $this->dpPaymentSide = $dpPaymentSide;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpPhone(): ?string
    {
        return $this->dpPhone;
    }

    /**
     * @param null|string $dpPhone
     * @return Instruction
     */
    public function setDpPhone(?string $dpPhone): Instruction
    {
        $this->dpPhone = $dpPhone;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpQuarter(): ?string
    {
        return $this->dpQuarter;
    }

    /**
     * @param null|string $dpQuarter
     * @return Instruction
     */
    public function setDpQuarter(?string $dpQuarter): Instruction
    {
        $this->dpQuarter = $dpQuarter;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpReturnTo(): ?string
    {
        return $this->dpReturnTo;
    }

    /**
     * @param null|string $dpReturnTo
     * @return Instruction
     */
    public function setDpReturnTo(?string $dpReturnTo): Instruction
    {
        $this->dpReturnTo = $dpReturnTo;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpStreet(): ?string
    {
        return $this->dpStreet;
    }

    /**
     * @param null|string $dpStreet
     * @return Instruction
     */
    public function setDpStreet(?string $dpStreet): Instruction
    {
        $this->dpStreet = $dpStreet;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpStreetNum(): ?string
    {
        return $this->dpStreetNum;
    }

    /**
     * @param null|string $dpStreetNum
     * @return Instruction
     */
    public function setDpStreetNum(?string $dpStreetNum): Instruction
    {
        $this->dpStreetNum = $dpStreetNum;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpType(): ?string
    {
        return $this->dpType;
    }

    /**
     * @param null|string $dpType
     * @return Instruction
     */
    public function setDpType(?string $dpType): Instruction
    {
        $this->dpType = $dpType;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDpVh(): ?string
    {
        return $this->dpVh;
    }

    /**
     * @param null|string $dpVh
     * @return Instruction
     */
    public function setDpVh(?string $dpVh): Instruction
    {
        $this->dpVh = $dpVh;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPrintReturnLoading(): ?string
    {
        return $this->printReturnLoading;
    }

    /**
     * @param null|string $printReturnLoading
     * @return Instruction
     */
    public function setPrintReturnLoading(?string $printReturnLoading): Instruction
    {
        $this->printReturnLoading = $printReturnLoading;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRejectDeliveryPaymentSide(): ?string
    {
        return $this->rejectDeliveryPaymentSide;
    }

    /**
     * @param null|string $rejectDeliveryPaymentSide
     * @return Instruction
     */
    public function setRejectDeliveryPaymentSide(?string $rejectDeliveryPaymentSide): Instruction
    {
        $this->rejectDeliveryPaymentSide = $rejectDeliveryPaymentSide;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRejectReturnPaymentSide(): ?string
    {
        return $this->rejectReturnPaymentSide;
    }

    /**
     * @param null|string $rejectReturnPaymentSide
     * @return Instruction
     */
    public function setRejectReturnPaymentSide(?string $rejectReturnPaymentSide): Instruction
    {
        $this->rejectReturnPaymentSide = $rejectReturnPaymentSide;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnAp(): ?string
    {
        return $this->returnAp;
    }

    /**
     * @param null|string $returnAp
     * @return Instruction
     */
    public function setReturnAp(?string $returnAp): Instruction
    {
        $this->returnAp = $returnAp;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnBl(): ?string
    {
        return $this->returnBl;
    }

    /**
     * @param null|string $returnBl
     * @return Instruction
     */
    public function setReturnBl(?string $returnBl): Instruction
    {
        $this->returnBl = $returnBl;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnCity(): ?string
    {
        return $this->returnCity;
    }

    /**
     * @param null|string $returnCity
     * @return Instruction
     */
    public function setReturnCity(?string $returnCity): Instruction
    {
        $this->returnCity = $returnCity;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnPostCode(): ?string
    {
        return $this->returnPostCode;
    }

    /**
     * @param null|string $returnPostCode
     * @return Instruction
     */
    public function setReturnPostCode(?string $returnPostCode): Instruction
    {
        $this->returnPostCode = $returnPostCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnEmail(): ?string
    {
        return $this->returnEmail;
    }

    /**
     * @param null|string $returnEmail
     * @return Instruction
     */
    public function setReturnEmail(?string $returnEmail): Instruction
    {
        $this->returnEmail = $returnEmail;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnEt(): ?string
    {
        return $this->returnEt;
    }

    /**
     * @param null|string $returnEt
     * @return Instruction
     */
    public function setReturnEt(?string $returnEt): Instruction
    {
        $this->returnEt = $returnEt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnFace(): ?string
    {
        return $this->returnFace;
    }

    /**
     * @param null|string $returnFace
     * @return Instruction
     */
    public function setReturnFace(?string $returnFace): Instruction
    {
        $this->returnFace = $returnFace;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnName(): ?string
    {
        return $this->returnName;
    }

    /**
     * @param null|string $returnName
     * @return Instruction
     */
    public function setReturnName(?string $returnName): Instruction
    {
        $this->returnName = $returnName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnOffice(): ?string
    {
        return $this->returnOffice;
    }

    /**
     * @param null|string $returnOffice
     * @return Instruction
     */
    public function setReturnOffice(?string $returnOffice): Instruction
    {
        $this->returnOffice = $returnOffice;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnOfficeCode(): ?string
    {
        return $this->returnOfficeCode;
    }

    /**
     * @param null|string $returnOfficeCode
     * @return Instruction
     */
    public function setReturnOfficeCode(?string $returnOfficeCode): Instruction
    {
        $this->returnOfficeCode = $returnOfficeCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnOther(): ?string
    {
        return $this->returnOther;
    }

    /**
     * @param null|string $returnOther
     * @return Instruction
     */
    public function setReturnOther(?string $returnOther): Instruction
    {
        $this->returnOther = $returnOther;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnPhone(): ?string
    {
        return $this->returnPhone;
    }

    /**
     * @param null|string $returnPhone
     * @return Instruction
     */
    public function setReturnPhone(?string $returnPhone): Instruction
    {
        $this->returnPhone = $returnPhone;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnQuarter(): ?string
    {
        return $this->returnQuarter;
    }

    /**
     * @param null|string $returnQuarter
     * @return Instruction
     */
    public function setReturnQuarter(?string $returnQuarter): Instruction
    {
        $this->returnQuarter = $returnQuarter;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnStreet(): ?string
    {
        return $this->returnStreet;
    }

    /**
     * @param null|string $returnStreet
     * @return Instruction
     */
    public function setReturnStreet(?string $returnStreet): Instruction
    {
        $this->returnStreet = $returnStreet;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnVh(): ?string
    {
        return $this->returnVh;
    }

    /**
     * @param null|string $returnVh
     * @return Instruction
     */
    public function setReturnVh(?string $returnVh): Instruction
    {
        $this->returnVh = $returnVh;

        return $this;
    }
}
