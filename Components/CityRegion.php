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
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var integer|null
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
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     * @return CityRegion
     */
    public function setName(?string $name): CityRegion
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param null|string $code
     * @return CityRegion
     */
    public function setCode(?string $code): CityRegion
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdCity(): ?int
    {
        return $this->idCity;
    }

    /**
     * @param int|null $idCity
     * @return CityRegion
     */
    public function setIdCity(?int $idCity): CityRegion
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
