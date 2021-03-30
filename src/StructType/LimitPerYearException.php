<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LimitPerYearException StructType
 * Meta information extracted from the WSDL
 * - type: tns:LimitPerYearException
 * @subpackage Structs
 */
class LimitPerYearException extends AbstractStructBase
{
    /**
     * The limitAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $limitAmount;
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
     * Constructor method for LimitPerYearException
     * @uses LimitPerYearException::setLimitAmount()
     * @uses LimitPerYearException::setLimitSource()
     * @uses LimitPerYearException::setCurrency()
     * @uses LimitPerYearException::setType()
     * @param float $limitAmount
     * @param string $limitSource
     * @param string $currency
     * @param string $type
     */
    public function __construct($limitAmount = null, $limitSource = null, $currency = null, $type = null)
    {
        $this
            ->setLimitAmount($limitAmount)
            ->setLimitSource($limitSource)
            ->setCurrency($currency)
            ->setType($type);
    }
    /**
     * Get limitAmount value
     * @return float|null
     */
    public function getLimitAmount()
    {
        return $this->limitAmount;
    }
    /**
     * Set limitAmount value
     * @param float $limitAmount
     * @return \StructType\LimitPerYearException
     */
    public function setLimitAmount($limitAmount = null)
    {
        // validation for constraint: float
        if (!is_null($limitAmount) && !(is_float($limitAmount) || is_numeric($limitAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitAmount, true), gettype($limitAmount)), __LINE__);
        }
        $this->limitAmount = $limitAmount;
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
     * @return \StructType\LimitPerYearException
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
     * @return \StructType\LimitPerYearException
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
     * @return \StructType\LimitPerYearException
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
