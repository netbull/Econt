<?php

namespace NetBull\Econt\Components;

/**
 * Class CityRegion
 * @package NetBull\Econt\Components
 */
class CityRegion extends Component
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
    private $code;

    /**
     * @var integer
     */
    private $idCity;

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
     * @return CityRegion
     */
    public function setId(int $id): CityRegion
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
     * @return CityRegion
     */
    public function setName(string $name): CityRegion
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return CityRegion
     */
    public function setCode(string $code): CityRegion
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdCity(): int
    {
        return $this->idCity;
    }

    /**
     * @param int $idCity
     * @return CityRegion
     */
    public function setIdCity(int $idCity): CityRegion
    {
        $this->idCity = $idCity;

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
     * @return CityRegion
     */
    public function setUpdatedTime(string $updatedTime): CityRegion
    {
        if ('0000-00-00 00:00:00' === $updatedTime) {
            return $this;
        }

        if ($updatedTime) {
            $updatedTime = \DateTime::createFromFormat('Y-m-d H:m:i', $updatedTime);
        }
        $this->updatedTime = $updatedTime;

        return $this;
    }
}
