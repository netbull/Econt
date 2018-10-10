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
     * @var
     */
    private $addresses;

    /**
     * @inheritdoc
     */
    public function getRequestType(): string
    {
        return self::REQUEST_TYPE_CLIENTS;
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

        foreach ($response->{Client::PARENT_TAG}->client as $client) {
            $company = new Client();
            $this->mapData($company, $client);

            foreach ($client->{CDAgreement::PARENT_TAG}->children() as $agr) {
                $agreement = new CDAgreement();
                $this->mapData($agreement, $agr);

                $company->addCdAgreement($agreement);
            }

            foreach ($client->{Instruction::PARENT_TAG}->children() as $ins) {
                $instruction = new Instruction();
                $this->mapData($instruction, $ins);

                $company->addInstruction($instruction);
            }

            $clients[] = $company;
        }

        return $clients;
    }
}
