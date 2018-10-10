<?php

namespace NetBull\Econt\Components;

/**
 * Class Parcel
 * @package NetBull\Econt\Components
 */
class Parcel extends Component
{
    /**
     * @var Loading[]
     */
    private $loadings = [];

    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'loadings';
    }

    /**
     * @return Loading[]
     */
    public function getLoadings(): array
    {
        return $this->loadings;
    }

    /**
     * @param Loading[] $loadings
     * @return Parcel
     */
    public function setLoadings(array $loadings): Parcel
    {
        $this->loadings = $loadings;

        return $this;
    }

    /**
     * @param Loading $loading
     * @return Parcel
     */
    public function addLoading(Loading $loading): Parcel
    {
        $this->loadings[] = $loading;

        return $this;
    }
}
