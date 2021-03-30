<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMoneyToExmoResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:sendMoneyToExmoResponse
 * @subpackage Structs
 */
class SendMoneyToExmoResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SendMoneyToExmoResultHolder
     */
    public $return;
    /**
     * Constructor method for sendMoneyToExmoResponse
     * @uses SendMoneyToExmoResponse::setReturn()
     * @param \StructType\SendMoneyToExmoResultHolder $return
     */
    public function __construct(\StructType\SendMoneyToExmoResultHolder $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SendMoneyToExmoResultHolder|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SendMoneyToExmoResultHolder $return
     * @return \StructType\SendMoneyToExmoResponse
     */
    public function setReturn(\StructType\SendMoneyToExmoResultHolder $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
