<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createCryptoCurrencyInvoiceResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:createCryptoCurrencyInvoiceResponse
 * @subpackage Structs
 */
class CreateCryptoCurrencyInvoiceResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CreateCryptoCurrencyInvoiceResult
     */
    public $return;
    /**
     * Constructor method for createCryptoCurrencyInvoiceResponse
     * @uses CreateCryptoCurrencyInvoiceResponse::setReturn()
     * @param \StructType\CreateCryptoCurrencyInvoiceResult $return
     */
    public function __construct(\StructType\CreateCryptoCurrencyInvoiceResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\CreateCryptoCurrencyInvoiceResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\CreateCryptoCurrencyInvoiceResult $return
     * @return \StructType\CreateCryptoCurrencyInvoiceResponse
     */
    public function setReturn(\StructType\CreateCryptoCurrencyInvoiceResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
