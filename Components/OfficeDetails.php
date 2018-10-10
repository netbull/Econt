<?php

namespace NetBull\Econt\Components;

/**
 * Class OfficeDetails
 * @package NetBull\Econt\Components
 */
class OfficeDetails extends Component
{
    /**
     * @var boolean
     */
    private $courier = false;

    /**
     * @var boolean
     */
    private $post = false;

    /**
     * @var boolean
     */
    private $cargo = false;

    /**
     * @var boolean
     */
    private $cargoExpress = false;

    /**
     * @return bool
     */
    public function isCourier(): bool
    {
        return $this->courier;
    }

    /**
     * @param bool $courier
     * @return OfficeDetails
     */
    public function setCourier(bool $courier): OfficeDetails
    {
        $this->courier = $courier;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPost(): bool
    {
        return $this->post;
    }

    /**
     * @param bool $post
     * @return OfficeDetails
     */
    public function setPost(bool $post): OfficeDetails
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCargo(): bool
    {
        return $this->cargo;
    }

    /**
     * @param bool $cargo
     * @return OfficeDetails
     */
    public function setCargo(bool $cargo): OfficeDetails
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCargoExpress(): bool
    {
        return $this->cargoExpress;
    }

    /**
     * @param bool $cargoExpress
     * @return OfficeDetails
     */
    public function setCargoExpress(bool $cargoExpress): OfficeDetails
    {
        $this->cargoExpress = $cargoExpress;

        return $this;
    }
}
