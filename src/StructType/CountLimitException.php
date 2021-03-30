<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountLimitException StructType
 * Meta information extracted from the WSDL
 * - type: tns:CountLimitException
 * @subpackage Structs
 */
class CountLimitException extends AbstractStructBase
{
    /**
     * The limitCount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $limitCount;
    /**
     * The dateInterval
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateInterval;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for CountLimitException
     * @uses CountLimitException::setLimitCount()
     * @uses CountLimitException::setDateInterval()
     * @uses CountLimitException::setType()
     * @param int $limitCount
     * @param string $dateInterval
     * @param string $type
     */
    public function __construct($limitCount = null, $dateInterval = null, $type = null)
    {
        $this
            ->setLimitCount($limitCount)
            ->setDateInterval($dateInterval)
            ->setType($type);
    }
    /**
     * Get limitCount value
     * @return int|null
     */
    public function getLimitCount()
    {
        return $this->limitCount;
    }
    /**
     * Set limitCount value
     * @param int $limitCount
     * @return \StructType\CountLimitException
     */
    public function setLimitCount($limitCount = null)
    {
        // validation for constraint: int
        if (!is_null($limitCount) && !(is_int($limitCount) || ctype_digit($limitCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limitCount, true), gettype($limitCount)), __LINE__);
        }
        $this->limitCount = $limitCount;
        return $this;
    }
    /**
     * Get dateInterval value
     * @return string|null
     */
    public function getDateInterval()
    {
        return $this->dateInterval;
    }
    /**
     * Set dateInterval value
     * @uses \EnumType\DateIntervals::valueIsValid()
     * @uses \EnumType\DateIntervals::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dateInterval
     * @return \StructType\CountLimitException
     */
    public function setDateInterval($dateInterval = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DateIntervals::valueIsValid($dateInterval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DateIntervals', is_array($dateInterval) ? implode(', ', $dateInterval) : var_export($dateInterval, true), implode(', ', \EnumType\DateIntervals::getValidValues())), __LINE__);
        }
        $this->dateInterval = $dateInterval;
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
     * @return \StructType\CountLimitException
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
