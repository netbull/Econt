<?php

namespace NetBull\Econt\Exceptions;

/**
 * Class ComponentEmptyFieldException
 * @package NetBull\Econt\Exceptions
 */
class ComponentEmptyFieldException extends EcontException
{
    /**
     * ComponentEmptyFieldException constructor.
     * @param $component
     * @param $field
     */
    public function __construct($component, $field)
    {
        parent::__construct(sprintf('Field "%s" of component "%s" should not be empty', $field, $component));
    }
}
