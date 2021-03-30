<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createCryptoCurrencyWithdrawalInvoiceResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:createCryptoCurrencyWithdrawalInvoiceResponse
 * @subpackage Structs
 */
class CreateCryptoCurrencyWithdrawalInvoiceResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CryptoCurrencyWithdrawalInvoiceDTO
     */
    public $return;
    /**
     * Constructor method for createCryptoCurrencyWithdrawalInvoiceResponse
     * @uses CreateCryptoCurrencyWithdrawalInvoiceResponse::setReturn()
     * @param \StructType\CryptoCurrencyWithdrawalInvoiceDTO $return
     */
    public function __construct(\StructType\CryptoCurrencyWithdrawalInvoiceDTO $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\CryptoCurrencyWithdrawalInvoiceDTO $return
     * @return \StructType\CreateCryptoCurrencyWithdrawalInvoiceResponse
     */
    public function setReturn(\StructType\CryptoCurrencyWithdrawalInvoiceDTO $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
