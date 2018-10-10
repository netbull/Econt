<?php

namespace NetBull\Econt\Request;

/**
 * Interface RequestInterface
 * @package NetBull\Econt\Request
 */
interface RequestInterface
{
    /**
     * @return string|null
     */
    public function getRequestType();

    /**
     * @param \SimpleXMLElement $xml
     * @return mixed
     */
    public function append(\SimpleXMLElement $xml);

    /**
     * @return mixed
     */
    public function build() : \SimpleXMLElement;

    /**
     * @param \SimpleXMLElement $response
     * @return mixed
     */
    public function map(\SimpleXMLElement $response);
}
