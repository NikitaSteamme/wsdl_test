<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createBitcoinInvoiceResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:createBitcoinInvoiceResponse
 * @subpackage Structs
 */
class CreateBitcoinInvoiceResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CreateBitcoinInvoiceResult
     */
    public $return;
    /**
     * Constructor method for createBitcoinInvoiceResponse
     * @uses CreateBitcoinInvoiceResponse::setReturn()
     * @param \StructType\CreateBitcoinInvoiceResult $return
     */
    public function __construct(\StructType\CreateBitcoinInvoiceResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\CreateBitcoinInvoiceResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\CreateBitcoinInvoiceResult $return
     * @return \StructType\CreateBitcoinInvoiceResponse
     */
    public function setReturn(\StructType\CreateBitcoinInvoiceResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
