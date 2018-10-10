<?php

namespace NetBull\Econt\Components;

/**
 * Class Receiver
 * @package NetBull\Econt\Components
 */
class Receiver extends LoadingSide
{
    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'receiver';
    }
}
