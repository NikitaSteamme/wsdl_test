<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for currencyExchangeRequest StructType
 * @subpackage Structs
 */
class CurrencyExchangeRequest extends MoneyRequest
{
    /**
     * The action
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $action;
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
     * Constructor method for currencyExchangeRequest
     * @uses CurrencyExchangeRequest::setAction()
     * @uses CurrencyExchangeRequest::setFrom()
     * @uses CurrencyExchangeRequest::setTo()
     * @param string $action
     * @param string $from
     * @param string $to
     */
    public function __construct($action = null, $from = null, $to = null)
    {
        $this
            ->setAction($action)
            ->setFrom($from)
            ->setTo($to);
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
     * @return \StructType\CurrencyExchangeRequest
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
     * Get from value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $from
     * @return \StructType\CurrencyExchangeRequest
     */
    public function setFrom($from = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($from) ? implode(', ', $from) : var_export($from, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
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
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $to
     * @return \StructType\CurrencyExchangeRequest
     */
    public function setTo($to = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($to) ? implode(', ', $to) : var_export($to, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->to = $to;
        return $this;
    }
}
