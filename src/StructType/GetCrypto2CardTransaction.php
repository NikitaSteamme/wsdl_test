<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCrypto2CardTransaction StructType
 * Meta information extracted from the WSDL
 * - type: tns:getCrypto2CardTransaction
 * @subpackage Structs
 */
class GetCrypto2CardTransaction extends AbstractStructBase
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
     * Constructor method for getCrypto2CardTransaction
     * @uses GetCrypto2CardTransaction::setArg0()
     * @uses GetCrypto2CardTransaction::setArg1()
     * @param \StructType\AuthDTO $arg0
     * @param string $arg1
     */
    public function __construct(\StructType\AuthDTO $arg0 = null, $arg1 = null)
    {
        $this
            ->setArg0($arg0)
            ->setArg1($arg1);
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
     * @return \StructType\GetCrypto2CardTransaction
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
     * @param string $arg1
     * @return \StructType\GetCrypto2CardTransaction
     */
    public function setArg1($arg1 = null)
    {
        // validation for constraint: string
        if (!is_null($arg1) && !is_string($arg1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arg1, true), gettype($arg1)), __LINE__);
        }
        $this->arg1 = $arg1;
        return $this;
    }
}
