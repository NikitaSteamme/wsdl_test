<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LimitPerTransactionException StructType
 * Meta information extracted from the WSDL
 * - type: tns:LimitPerTransactionException
 * @subpackage Structs
 */
class LimitPerTransactionException extends AbstractStructBase
{
    /**
     * The depositPaymentMethodType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $depositPaymentMethodType;
    /**
     * The coinName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $coinName;
    /**
     * The minAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $minAmount;
    /**
     * The maxAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $maxAmount;
    /**
     * The limitSource
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $limitSource;
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
     * Constructor method for LimitPerTransactionException
     * @uses LimitPerTransactionException::setDepositPaymentMethodType()
     * @uses LimitPerTransactionException::setCoinName()
     * @uses LimitPerTransactionException::setMinAmount()
     * @uses LimitPerTransactionException::setMaxAmount()
     * @uses LimitPerTransactionException::setLimitSource()
     * @uses LimitPerTransactionException::setCurrency()
     * @uses LimitPerTransactionException::setType()
     * @param string $depositPaymentMethodType
     * @param string $coinName
     * @param float $minAmount
     * @param float $maxAmount
     * @param string $limitSource
     * @param string $currency
     * @param string $type
     */
    public function __construct($depositPaymentMethodType = null, $coinName = null, $minAmount = null, $maxAmount = null, $limitSource = null, $currency = null, $type = null)
    {
        $this
            ->setDepositPaymentMethodType($depositPaymentMethodType)
            ->setCoinName($coinName)
            ->setMinAmount($minAmount)
            ->setMaxAmount($maxAmount)
            ->setLimitSource($limitSource)
            ->setCurrency($currency)
            ->setType($type);
    }
    /**
     * Get depositPaymentMethodType value
     * @return string|null
     */
    public function getDepositPaymentMethodType()
    {
        return $this->depositPaymentMethodType;
    }
    /**
     * Set depositPaymentMethodType value
     * @uses \EnumType\DepositPaymentMethodType::valueIsValid()
     * @uses \EnumType\DepositPaymentMethodType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $depositPaymentMethodType
     * @return \StructType\LimitPerTransactionException
     */
    public function setDepositPaymentMethodType($depositPaymentMethodType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DepositPaymentMethodType::valueIsValid($depositPaymentMethodType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DepositPaymentMethodType', is_array($depositPaymentMethodType) ? implode(', ', $depositPaymentMethodType) : var_export($depositPaymentMethodType, true), implode(', ', \EnumType\DepositPaymentMethodType::getValidValues())), __LINE__);
        }
        $this->depositPaymentMethodType = $depositPaymentMethodType;
        return $this;
    }
    /**
     * Get coinName value
     * @return string|null
     */
    public function getCoinName()
    {
        return $this->coinName;
    }
    /**
     * Set coinName value
     * @uses \EnumType\CoinName::valueIsValid()
     * @uses \EnumType\CoinName::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coinName
     * @return \StructType\LimitPerTransactionException
     */
    public function setCoinName($coinName = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CoinName::valueIsValid($coinName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CoinName', is_array($coinName) ? implode(', ', $coinName) : var_export($coinName, true), implode(', ', \EnumType\CoinName::getValidValues())), __LINE__);
        }
        $this->coinName = $coinName;
        return $this;
    }
    /**
     * Get minAmount value
     * @return float|null
     */
    public function getMinAmount()
    {
        return $this->minAmount;
    }
    /**
     * Set minAmount value
     * @param float $minAmount
     * @return \StructType\LimitPerTransactionException
     */
    public function setMinAmount($minAmount = null)
    {
        // validation for constraint: float
        if (!is_null($minAmount) && !(is_float($minAmount) || is_numeric($minAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minAmount, true), gettype($minAmount)), __LINE__);
        }
        $this->minAmount = $minAmount;
        return $this;
    }
    /**
     * Get maxAmount value
     * @return float|null
     */
    public function getMaxAmount()
    {
        return $this->maxAmount;
    }
    /**
     * Set maxAmount value
     * @param float $maxAmount
     * @return \StructType\LimitPerTransactionException
     */
    public function setMaxAmount($maxAmount = null)
    {
        // validation for constraint: float
        if (!is_null($maxAmount) && !(is_float($maxAmount) || is_numeric($maxAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxAmount, true), gettype($maxAmount)), __LINE__);
        }
        $this->maxAmount = $maxAmount;
        return $this;
    }
    /**
     * Get limitSource value
     * @return string|null
     */
    public function getLimitSource()
    {
        return $this->limitSource;
    }
    /**
     * Set limitSource value
     * @uses \EnumType\LimitSource::valueIsValid()
     * @uses \EnumType\LimitSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $limitSource
     * @return \StructType\LimitPerTransactionException
     */
    public function setLimitSource($limitSource = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\LimitSource::valueIsValid($limitSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LimitSource', is_array($limitSource) ? implode(', ', $limitSource) : var_export($limitSource, true), implode(', ', \EnumType\LimitSource::getValidValues())), __LINE__);
        }
        $this->limitSource = $limitSource;
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
     * @return \StructType\LimitPerTransactionException
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
     * @return \StructType\LimitPerTransactionException
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
