<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvcashCardMaxAllowedBalanceExceededException StructType
 * Meta information extracted from the WSDL
 * - type: tns:AdvcashCardMaxAllowedBalanceExceededException
 * @subpackage Structs
 */
class AdvcashCardMaxAllowedBalanceExceededException extends AbstractStructBase
{
    /**
     * The maxAllowedBalance
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $maxAllowedBalance;
    /**
     * The currentBalance
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $currentBalance;
    /**
     * The allowedAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $allowedAmount;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currency;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for AdvcashCardMaxAllowedBalanceExceededException
     * @uses AdvcashCardMaxAllowedBalanceExceededException::setMaxAllowedBalance()
     * @uses AdvcashCardMaxAllowedBalanceExceededException::setCurrentBalance()
     * @uses AdvcashCardMaxAllowedBalanceExceededException::setAllowedAmount()
     * @uses AdvcashCardMaxAllowedBalanceExceededException::setCurrency()
     * @uses AdvcashCardMaxAllowedBalanceExceededException::setType()
     * @param float $maxAllowedBalance
     * @param float $currentBalance
     * @param float $allowedAmount
     * @param string $currency
     * @param string $type
     */
    public function __construct($maxAllowedBalance = null, $currentBalance = null, $allowedAmount = null, $currency = null, $type = null)
    {
        $this
            ->setMaxAllowedBalance($maxAllowedBalance)
            ->setCurrentBalance($currentBalance)
            ->setAllowedAmount($allowedAmount)
            ->setCurrency($currency)
            ->setType($type);
    }
    /**
     * Get maxAllowedBalance value
     * @return float|null
     */
    public function getMaxAllowedBalance()
    {
        return $this->maxAllowedBalance;
    }
    /**
     * Set maxAllowedBalance value
     * @param float $maxAllowedBalance
     * @return \StructType\AdvcashCardMaxAllowedBalanceExceededException
     */
    public function setMaxAllowedBalance($maxAllowedBalance = null)
    {
        // validation for constraint: float
        if (!is_null($maxAllowedBalance) && !(is_float($maxAllowedBalance) || is_numeric($maxAllowedBalance))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxAllowedBalance, true), gettype($maxAllowedBalance)), __LINE__);
        }
        $this->maxAllowedBalance = $maxAllowedBalance;
        return $this;
    }
    /**
     * Get currentBalance value
     * @return float|null
     */
    public function getCurrentBalance()
    {
        return $this->currentBalance;
    }
    /**
     * Set currentBalance value
     * @param float $currentBalance
     * @return \StructType\AdvcashCardMaxAllowedBalanceExceededException
     */
    public function setCurrentBalance($currentBalance = null)
    {
        // validation for constraint: float
        if (!is_null($currentBalance) && !(is_float($currentBalance) || is_numeric($currentBalance))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($currentBalance, true), gettype($currentBalance)), __LINE__);
        }
        $this->currentBalance = $currentBalance;
        return $this;
    }
    /**
     * Get allowedAmount value
     * @return float|null
     */
    public function getAllowedAmount()
    {
        return $this->allowedAmount;
    }
    /**
     * Set allowedAmount value
     * @param float $allowedAmount
     * @return \StructType\AdvcashCardMaxAllowedBalanceExceededException
     */
    public function setAllowedAmount($allowedAmount = null)
    {
        // validation for constraint: float
        if (!is_null($allowedAmount) && !(is_float($allowedAmount) || is_numeric($allowedAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($allowedAmount, true), gettype($allowedAmount)), __LINE__);
        }
        $this->allowedAmount = $allowedAmount;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \StructType\AdvcashCardMaxAllowedBalanceExceededException
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \EnumType\ExceptionType::valueIsValid()
     * @uses \EnumType\ExceptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\AdvcashCardMaxAllowedBalanceExceededException
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ExceptionType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ExceptionType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\ExceptionType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
