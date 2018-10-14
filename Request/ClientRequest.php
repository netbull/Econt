<?php

namespace NetBull\Econt\Request;

use NetBull\Econt\Components\Client;
use NetBull\Econt\Components\CDAgreement;
use NetBull\Econt\Components\Instruction;

/**
 * Class ClientRequest
 * @package NetBull\Econt\Request
 */
class ClientRequest extends BaseRequest
{
    /**
     * @inheritdoc
     */
    public function getRequestType(): string
    {
//        return self::REQUEST_TYPE_CLIENTS;
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function normalize(\SimpleXMLElement $response)
    {
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function map(\SimpleXMLElement $response)
    {
        $clients = [];

        foreach ($response->clients->client as $cl) {
            $client = new Client();
            $this->mapData($client, $cl);

            foreach ($cl->cd_agreements->children() as $agr) {
                $agreement = new CDAgreement();
                $this->mapData($agreement, $agr);

                $client->addCdAgreement($agreement);
            }

            foreach ($cl->instructions->children() as $ins) {
                $instruction = new Instruction();
                $this->mapData($instruction, $ins);

                $client->addInstruction($instruction);
            }

            $clients[] = $client;
        }

        return $clients;
    }
}
