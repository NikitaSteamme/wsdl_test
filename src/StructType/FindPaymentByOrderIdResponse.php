<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPaymentByOrderIdResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:findPaymentByOrderIdResponse
 * @subpackage Structs
 */
class FindPaymentByOrderIdResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PaymentOrderResult
     */
    public $return;
    /**
     * Constructor method for findPaymentByOrderIdResponse
     * @uses FindPaymentByOrderIdResponse::setReturn()
     * @param \StructType\PaymentOrderResult $return
     */
    public function __construct(\StructType\PaymentOrderResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\PaymentOrderResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\PaymentOrderResult $return
     * @return \StructType\FindPaymentByOrderIdResponse
     */
    public function setReturn(\StructType\PaymentOrderResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
