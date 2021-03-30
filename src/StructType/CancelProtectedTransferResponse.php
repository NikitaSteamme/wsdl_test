<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelProtectedTransferResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelProtectedTransferResponse
 * @subpackage Structs
 */
class CancelProtectedTransferResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CancelProtectedTransferResultHolder
     */
    public $return;
    /**
     * Constructor method for cancelProtectedTransferResponse
     * @uses CancelProtectedTransferResponse::setReturn()
     * @param \StructType\CancelProtectedTransferResultHolder $return
     */
    public function __construct(\StructType\CancelProtectedTransferResultHolder $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\CancelProtectedTransferResultHolder|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\CancelProtectedTransferResultHolder $return
     * @return \StructType\CancelProtectedTransferResponse
     */
    public function setReturn(\StructType\CancelProtectedTransferResultHolder $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
