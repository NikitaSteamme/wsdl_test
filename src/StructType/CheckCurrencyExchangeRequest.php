<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkCurrencyExchangeRequest StructType
 * @subpackage Structs
 */
class CheckCurrencyExchangeRequest extends AbstractStructBase
{
    /**
     * The from
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $from;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $to;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The action
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $action;
    /**
     * The depositMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $depositMethod;
    /**
     * The cryptoToCardExchange
     * @var bool
     */
    public $cryptoToCardExchange;
    /**
     * Constructor method for checkCurrencyExchangeRequest
     * @uses CheckCurrencyExchangeRequest::setFrom()
     * @uses CheckCurrencyExchangeRequest::setTo()
     * @uses CheckCurrencyExchangeRequest::setAmount()
     * @uses CheckCurrencyExchangeRequest::setAction()
     * @uses CheckCurrencyExchangeRequest::setDepositMethod()
     * @uses CheckCurrencyExchangeRequest::setCryptoToCardExchange()
     * @param string $from
     * @param string $to
     * @param float $amount
     * @param string $action
     * @param string $depositMethod
     * @param bool $cryptoToCardExchange
     */
    public function __construct($from = null, $to = null, $amount = null, $action = null, $depositMethod = null, $cryptoToCardExchange = null)
    {
        $this
            ->setFrom($from)
            ->setTo($to)
            ->setAmount($amount)
            ->setAction($action)
            ->setDepositMethod($depositMethod)
            ->setCryptoToCardExchange($cryptoToCardExchange);
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \StructType\CheckCurrencyExchangeRequest
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo()
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \StructType\CheckCurrencyExchangeRequest
     */
    public function setTo($to = null)
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \StructType\CheckCurrencyExchangeRequest
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action value
     * @uses \EnumType\CurrencyExchangeAction::valueIsValid()
     * @uses \EnumType\CurrencyExchangeAction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \StructType\CheckCurrencyExchangeRequest
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyExchangeAction::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CurrencyExchangeAction', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \EnumType\CurrencyExchangeAction::getValidValues())), __LINE__);
        }
        $this->action = $action;
        return $this;
    }
    /**
     * Get depositMethod value
     * @return string|null
     */
    public function getDepositMethod()
    {
        return $this->depositMethod;
    }
    /**
     * Set depositMethod value
     * @param string $depositMethod
     * @return \StructType\CheckCurrencyExchangeRequest
     */
    public function setDepositMethod($depositMethod = null)
    {
        // validation for constraint: string
        if (!is_null($depositMethod) && !is_string($depositMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositMethod, true), gettype($depositMethod)), __LINE__);
        }
        $this->depositMethod = $depositMethod;
        return $this;
    }
    /**
     * Get cryptoToCardExchange value
     * @return bool|null
     */
    public function getCryptoToCardExchange()
    {
        return $this->cryptoToCardExchange;
    }
    /**
     * Set cryptoToCardExchange value
     * @param bool $cryptoToCardExchange
     * @return \StructType\CheckCurrencyExchangeRequest
     */
    public function setCryptoToCardExchange($cryptoToCardExchange = null)
    {
        // validation for constraint: boolean
        if (!is_null($cryptoToCardExchange) && !is_bool($cryptoToCardExchange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cryptoToCardExchange, true), gettype($cryptoToCardExchange)), __LINE__);
        }
        $this->cryptoToCardExchange = $cryptoToCardExchange;
        return $this;
    }
}
