<?php

namespace NetBull\Econt\Components;

/**
 * Class CDAgreement
 * @package NetBull\Econt\Components
 */
class CDAgreement extends Component
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $num;

    /**
     * @var boolean
     */
    private $isBank = false;

    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'cd_agreement';
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
     * @return CDAgreement
     */
    public function setId(int $id): CDAgreement
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNum(): string
    {
        return $this->num;
    }

    /**
     * @param string $num
     * @return CDAgreement
     */
    public function setNum(string $num): CDAgreement
    {
        $this->num = $num;

        return $this;
    }

    /**
     * @return bool
     */
    public function isBank(): bool
    {
        return $this->isBank;
    }

    /**
     * @param bool $isBank
     * @return CDAgreement
     */
    public function setIsBank(bool $isBank): CDAgreement
    {
        $this->isBank = $isBank;

        return $this;
    }
}
