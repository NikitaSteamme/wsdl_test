<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transferBankCard StructType
 * Meta information extracted from the WSDL
 * - type: tns:transferBankCard
 * @subpackage Structs
 */
class TransferBankCard extends AbstractStructBase
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
     * @var \StructType\BankCardTransferRequestDTO
     */
    public $arg1;
    /**
     * Constructor method for transferBankCard
     * @uses TransferBankCard::setArg0()
     * @uses TransferBankCard::setArg1()
     * @param \StructType\AuthDTO $arg0
     * @param \StructType\BankCardTransferRequestDTO $arg1
     */
    public function __construct(\StructType\AuthDTO $arg0 = null, \StructType\BankCardTransferRequestDTO $arg1 = null)
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
     * @return \StructType\TransferBankCard
     */
    public function setArg0(\StructType\AuthDTO $arg0 = null)
    {
        $this->arg0 = $arg0;
        return $this;
    }
    /**
     * Get arg1 value
     * @return \StructType\BankCardTransferRequestDTO|null
     */
    public function getArg1()
    {
        return $this->arg1;
    }
    /**
     * Set arg1 value
     * @param \StructType\BankCardTransferRequestDTO $arg1
     * @return \StructType\TransferBankCard
     */
    public function setArg1(\StructType\BankCardTransferRequestDTO $arg1 = null)
    {
        $this->arg1 = $arg1;
        return $this;
    }
}
