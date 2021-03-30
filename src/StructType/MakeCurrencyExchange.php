<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for makeCurrencyExchange StructType
 * Meta information extracted from the WSDL
 * - type: tns:makeCurrencyExchange
 * @subpackage Structs
 */
class MakeCurrencyExchange extends AbstractStructBase
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
     * @var \StructType\TransferRequestDTO
     */
    public $arg1;
    /**
     * The arg2
     * @var bool
     */
    public $arg2;
    /**
     * Constructor method for makeCurrencyExchange
     * @uses MakeCurrencyExchange::setArg0()
     * @uses MakeCurrencyExchange::setArg1()
     * @uses MakeCurrencyExchange::setArg2()
     * @param \StructType\AuthDTO $arg0
     * @param \StructType\TransferRequestDTO $arg1
     * @param bool $arg2
     */
    public function __construct(\StructType\AuthDTO $arg0 = null, \StructType\TransferRequestDTO $arg1 = null, $arg2 = null)
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
     * @return \StructType\MakeCurrencyExchange
     */
    public function setArg0(\StructType\AuthDTO $arg0 = null)
    {
        $this->arg0 = $arg0;
        return $this;
    }
    /**
     * Get arg1 value
     * @return \StructType\TransferRequestDTO|null
     */
    public function getArg1()
    {
        return $this->arg1;
    }
    /**
     * Set arg1 value
     * @param \StructType\TransferRequestDTO $arg1
     * @return \StructType\MakeCurrencyExchange
     */
    public function setArg1(\StructType\TransferRequestDTO $arg1 = null)
    {
        $this->arg1 = $arg1;
        return $this;
    }
    /**
     * Get arg2 value
     * @return bool|null
     */
    public function getArg2()
    {
        return $this->arg2;
    }
    /**
     * Set arg2 value
     * @param bool $arg2
     * @return \StructType\MakeCurrencyExchange
     */
    public function setArg2($arg2 = null)
    {
        // validation for constraint: boolean
        if (!is_null($arg2) && !is_bool($arg2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($arg2, true), gettype($arg2)), __LINE__);
        }
        $this->arg2 = $arg2;
        return $this;
    }
}
