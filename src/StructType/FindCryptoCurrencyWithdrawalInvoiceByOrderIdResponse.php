<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findCryptoCurrencyWithdrawalInvoiceByOrderIdResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:findCryptoCurrencyWithdrawalInvoiceByOrderIdResponse
 * @subpackage Structs
 */
class FindCryptoCurrencyWithdrawalInvoiceByOrderIdResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CryptoCurrencyWithdrawalInvoiceDTO
     */
    public $return;
    /**
     * Constructor method for findCryptoCurrencyWithdrawalInvoiceByOrderIdResponse
     * @uses FindCryptoCurrencyWithdrawalInvoiceByOrderIdResponse::setReturn()
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
     * @return \StructType\FindCryptoCurrencyWithdrawalInvoiceByOrderIdResponse
     */
    public function setReturn(\StructType\CryptoCurrencyWithdrawalInvoiceDTO $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
