<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findTransactionResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:findTransactionResponse
 * @subpackage Structs
 */
class FindTransactionResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OutcomingTransactionDTO
     */
    public $return;
    /**
     * Constructor method for findTransactionResponse
     * @uses FindTransactionResponse::setReturn()
     * @param \StructType\OutcomingTransactionDTO $return
     */
    public function __construct(\StructType\OutcomingTransactionDTO $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\OutcomingTransactionDTO|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\OutcomingTransactionDTO $return
     * @return \StructType\FindTransactionResponse
     */
    public function setReturn(\StructType\OutcomingTransactionDTO $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
