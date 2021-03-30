<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for makeTransfer StructType
 * Meta information extracted from the WSDL
 * - type: tns:makeTransfer
 * @subpackage Structs
 */
class MakeTransfer extends AbstractStructBase
{
    /**
     * The arg0
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AuthDTO
     */
    public $arg0;
    /**
     * The arg1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $arg1;
    /**
     * The arg2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TransferRequestDTO
     */
    public $arg2;
    /**
     * Constructor method for makeTransfer
     * @uses MakeTransfer::setArg0()
     * @uses MakeTransfer::setArg1()
     * @uses MakeTransfer::setArg2()
     * @param \StructType\AuthDTO $arg0
     * @param string $arg1
     * @param \StructType\TransferRequestDTO $arg2
     */
    public function __construct(\StructType\AuthDTO $arg0 = null, $arg1 = null, \StructType\TransferRequestDTO $arg2 = null)
    {
        $this
            ->setArg0($arg0)
            ->setArg1($arg1)
            ->setArg2($arg2);
    }
    /**
     * Get arg0 value
     * @return \StructType\AuthDTO|null
     */
    public function getArg0()
    {
        return $this->arg0;
    }
    /**
     * Set arg0 value
     * @param \StructType\AuthDTO $arg0
     * @return \StructType\MakeTransfer
     */
    public function setArg0(\StructType\AuthDTO $arg0 = null)
    {
        $this->arg0 = $arg0;
        return $this;
    }
    /**
     * Get arg1 value
     * @return string|null
     */
    public function getArg1()
    {
        return $this->arg1;
    }
    /**
     * Set arg1 value
     * @uses \EnumType\TypeOfTransaction::valueIsValid()
     * @uses \EnumType\TypeOfTransaction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $arg1
     * @return \StructType\MakeTransfer
     */
    public function setArg1($arg1 = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeOfTransaction::valueIsValid($arg1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeOfTransaction', is_array($arg1) ? implode(', ', $arg1) : var_export($arg1, true), implode(', ', \EnumType\TypeOfTransaction::getValidValues())), __LINE__);
        }
        $this->arg1 = $arg1;
        return $this;
    }
    /**
     * Get arg2 value
     * @return \StructType\TransferRequestDTO|null
     */
    public function getArg2()
    {
        return $this->arg2;
    }
    /**
     * Set arg2 value
     * @param \StructType\TransferRequestDTO $arg2
     * @return \StructType\MakeTransfer
     */
    public function setArg2(\StructType\TransferRequestDTO $arg2 = null)
    {
        $this->arg2 = $arg2;
        return $this;
    }
}
