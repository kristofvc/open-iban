<?php

namespace Kristofvc\OpenIban\Response;

/**
 * Class Message
 *
 * @package Kristofvc\OpenIban\Response
 * @author Kristof Van Cauwenbergh <kristof.vancauwenbergh@gmail.com>
 */
class Message
{
    /**
     * @var boolean
     */
    private $valid = true;

    /**
     * @var array
     */
    private $messages = [];

    /**
     * @var string
     */
    private $iban;

    /**
     * @var BankData
     */
    private $bankData;

    /**
     * @var array
     */
    private $checkResults = [];

    /**
     * @return boolean
     */
    public function isValid(): bool
    {
        return $this->valid;
    }

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @return BankData
     */
    public function getBankData(): BankData
    {
        return $this->bankData;
    }

    /**
     * @return array
     */
    public function getCheckResults(): array
    {
        return $this->checkResults;
    }
}