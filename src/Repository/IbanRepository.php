<?php

namespace Kristofvc\OpenIban\Repository;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;
use Kristofvc\OpenIban\Response\Message;

/**
 * Class IbanRepository
 *
 * @package Kristofvc\OpenIban\Repository
 * @author Kristof Van Cauwenbergh <kristof.vancauwenbergh@gmail.com>
 */
class IbanRepository
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(array $clientParams = [])
    {
        $this->client = new Client(['base_uri' => 'https://openiban.com'] + $clientParams);
    }

    /**
     * @param string $iban
     * @return Message
     * @throw TransferException When something wen't wrong sending the IBAN.
     */
    public function findIban(string $iban): Message
    {
        $response = $this->client->request('GET', '/validate/' . $iban . '?getBIC=true&validateBankCode=true');

        if ($response->getStatusCode() !== 200) {
            throw new TransferException('Iban can\'t be found');
        }
        $mapper = new \JsonMapper();
        $mapper->bIgnoreVisibility = true;

        return $mapper->map(json_decode($response->getBody()), new Message());
    }
}