<?php

namespace NetBull\Econt;

use NetBull\Econt\Request\ParcelRequest;
use NetBull\Econt\Request\RequestInterface;
use NetBull\Econt\Exceptions\EcontException;

/**
 * Class Client
 * @package NetBull\Econt
 */
class Client
{
    const PARCEL = 'http://www.econt.com/e-econt/xml_parcel_import2.php';
    const SERVICE = 'https://www.econt.com/e-econt/xml_service_tool.php';
    const PARCEL_DEMO = 'http://demo.econt.com/e-econt/xml_parcel_import2.php';
    const SERVICE_DEMO = 'http://demo.econt.com/e-econt/xml_service_tool.php';

    /**
     * @var bool
     */
    private $dev;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * Client constructor.
     * @param string $username
     * @param string $password
     * @param bool $dev
     */
    public function __construct(string $username, string $password, bool $dev = true)
    {
        $this->username = $username;
        $this->password = $password;
        $this->dev = $dev;
    }

    /**
     * @return string
     */
    private function getEndPoint()
    {
        if (!$this->dev) {
            return self::SERVICE;
        } else {
            return self::SERVICE_DEMO;
        }
    }

    /**
     * @return string
     */
    private function getParcelsEndPoint()
    {
        if (!$this->dev) {
            return self::PARCEL;
        } else {
            return self::PARCEL_DEMO;
        }
    }

    /**
     * Parses Econt response
     * @param string $response A raw response from Econt servers.
     * @return string Unserialized XML data in PHP
     * @throws EcontException
     */
    protected function parse($response)
    {
        if (!$response) {
            throw new EcontException('Empty response cannot be parsed.');
        }
        try {
            $xml = simplexml_load_string($response, 'SimpleXMLElement', LIBXML_NOCDATA);
            $result = json_decode(json_encode((array)$xml), 1);
        } catch (\Exception $e) {
            throw new EcontException('Failed To Parse XML response.');
        }

        return $result;
    }

    /**
     * @param $endpoint
     * @param $request
     * @return mixed
     */
    protected function call($endpoint, $request)
    {
        $ch = curl_init($endpoint);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ['xml' => $request]);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    /**
     * @param RequestInterface $request
     * @return mixed
     */
    public function execute(RequestInterface $request)
    {
        $xml = $request->build();
        $client = $xml->addChild('client');
        $client->addChild('username', $this->username);
        $client->addChild('password', $this->password);

        if ($request instanceof ParcelRequest) {
            $endPoint = $this->getParcelsEndPoint();
        } else {
            $endPoint = $this->getEndPoint();
        }

        $response = $this->call($endPoint, $xml->asXML());

        return $request->map(simplexml_load_string($response));
    }
}
