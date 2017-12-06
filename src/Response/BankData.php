<?php

namespace Kristofvc\OpenIban\Response;

/**
 * Class BankData
 *
 * @package Kristofvc\OpenIban\Response
 * @author Kristof Van Cauwenbergh <kristof.vancauwenbergh@gmail.com>
 */
class BankData
{
    /**
     * @var string
     */
    private $bankCode;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $bic;

    /**
     * @return string
     */
    public function getBankCode(): string
    {
        return $this->bankCode;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getBic(): string
    {
        return $this->bic;
    }
}