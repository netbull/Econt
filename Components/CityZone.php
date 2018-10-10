<?php

namespace NetBull\Econt\Components;

/**
 * Class CityZone
 * @package NetBull\Econt\Components
 */
class CityZone extends Component
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
     * @var string
     */
    private $nameEn;

    /**
     * @var boolean
     */
    private $national;

    /**
     * @var boolean
     */
    private $isEe;

    /**
     * @var \DateTime|null
     */
    private $updatedTime;

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
     * @return CityZone
     */
    public function setId(int $id): CityZone
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
     * @return CityZone
     */
    public function setName(string $name): CityZone
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameEn(): string
    {
        return $this->nameEn;
    }

    /**
     * @param string $nameEn
     * @return CityZone
     */
    public function setNameEn(string $nameEn): CityZone
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNational(): bool
    {
        return $this->national;
    }

    /**
     * @param bool $national
     * @return CityZone
     */
    public function setNational(bool $national): CityZone
    {
        $this->national = $national;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEe(): bool
    {
        return $this->isEe;
    }

    /**
     * @param bool $isEe
     * @return CityZone
     */
    public function setIsEe(bool $isEe): CityZone
    {
        $this->isEe = $isEe;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedTime(): ?\DateTime
    {
        return $this->updatedTime;
    }

    /**
     * @param string $updatedTime
     */
    public function setUpdatedTime(string $updatedTime): void
    {
        if ('0000-00-00 00:00:00' === $updatedTime) {
            return;
        }

        if ($updatedTime) {
            $updatedTime = \DateTime::createFromFormat('Y-m-d H:m:i', $updatedTime);
        }
        $this->updatedTime = $updatedTime;
    }
}
