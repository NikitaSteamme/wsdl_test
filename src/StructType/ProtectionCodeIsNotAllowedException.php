<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionCodeIsNotAllowedException StructType
 * Meta information extracted from the WSDL
 * - type: tns:ProtectionCodeIsNotAllowedException
 * @subpackage Structs
 */
class ProtectionCodeIsNotAllowedException extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for ProtectionCodeIsNotAllowedException
     * @uses ProtectionCodeIsNotAllowedException::setType()
     * @param string $type
     */
    public function __construct($type = null)
    {
        $this
            ->setType($type);
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
     * @return \StructType\ProtectionCodeIsNotAllowedException
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
