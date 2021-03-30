<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMoneyToWexResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:sendMoneyToWexResponse
 * @subpackage Structs
 */
class SendMoneyToWexResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SendMoneyToWexResultHolder
     */
    public $return;
    /**
     * Constructor method for sendMoneyToWexResponse
     * @uses SendMoneyToWexResponse::setReturn()
     * @param \StructType\SendMoneyToWexResultHolder $return
     */
    public function __construct(\StructType\SendMoneyToWexResultHolder $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SendMoneyToWexResultHolder|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SendMoneyToWexResultHolder $return
     * @return \StructType\SendMoneyToWexResponse
     */
    public function setReturn(\StructType\SendMoneyToWexResultHolder $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
