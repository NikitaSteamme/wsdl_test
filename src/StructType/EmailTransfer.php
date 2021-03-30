<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailTransfer StructType
 * Meta information extracted from the WSDL
 * - type: tns:emailTransfer
 * @subpackage Structs
 */
class EmailTransfer extends AbstractStructBase
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
     * @var \StructType\EmailTransferRequestDTO
     */
    public $arg1;
    /**
     * Constructor method for emailTransfer
     * @uses EmailTransfer::setArg0()
     * @uses EmailTransfer::setArg1()
     * @param \StructType\AuthDTO $arg0
     * @param \StructType\EmailTransferRequestDTO $arg1
     */
    public function __construct(\StructType\AuthDTO $arg0 = null, \StructType\EmailTransferRequestDTO $arg1 = null)
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
     * @return \StructType\EmailTransfer
     */
    public function setArg0(\StructType\AuthDTO $arg0 = null)
    {
        $this->arg0 = $arg0;
        return $this;
    }
    /**
     * Get arg1 value
     * @return \StructType\EmailTransferRequestDTO|null
     */
    public function getArg1()
    {
        return $this->arg1;
    }
    /**
     * Set arg1 value
     * @param \StructType\EmailTransferRequestDTO $arg1
     * @return \StructType\EmailTransfer
     */
    public function setArg1(\StructType\EmailTransferRequestDTO $arg1 = null)
    {
        $this->arg1 = $arg1;
        return $this;
    }
}
