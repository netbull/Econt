<?php

namespace NetBull\Econt\Components;

/**
 * Class Loading
 * @package NetBull\Econt\Components
 */
class Loading extends Component
{
    /**
     * @var Sender|null
     */
    private $sender;

    /**
     * @var Receiver|null
     */
    private $receiver;

    /**
     * @var Shipment
     */
    private $shipment;

    /**
     * @var Instruction[]
     */
    private $instructions = [];

    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'row';
    }

    /**
     * @return Sender|null
     */
    public function getSender(): ?Sender
    {
        return $this->sender;
    }

    /**
     * @param Sender|null $sender
     * @return Loading
     */
    public function setSender(?Sender $sender): Loading
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @return Receiver|null
     */
    public function getReceiver(): ?Receiver
    {
        return $this->receiver;
    }

    /**
     * @param Receiver|null $receiver
     * @return Loading
     */
    public function setReceiver(?Receiver $receiver): Loading
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipment(): Shipment
    {
        return $this->shipment;
    }

    /**
     * @param Shipment $shipment
     * @return Loading
     */
    public function setShipment(Shipment $shipment): Loading
    {
        $this->shipment = $shipment;

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
     * @return Loading
     */
    public function setInstructions(array $instructions): Loading
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * @param Instruction $instruction
     * @return Loading
     */
    public function addInstruction(Instruction $instruction): Loading
    {
        $this->instructions[] = $instruction;

        return $this;
    }
}
