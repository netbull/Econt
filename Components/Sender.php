<?php

namespace NetBull\Econt\Components;

/**
 * Class Sender
 * @package NetBull\Econt\Components
 */
class Sender extends LoadingSide
{
    /**
     * @inheritdoc
     */
    public function tag()
    {
        return 'sender';
    }
}
