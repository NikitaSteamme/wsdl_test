<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMoneyToEcoinEUResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:sendMoneyToEcoinEUResponse
 * @subpackage Structs
 */
class SendMoneyToEcoinEUResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SendMoneyToEcoinEUResultHolder
     */
    public $return;
    /**
     * Constructor method for sendMoneyToEcoinEUResponse
     * @uses SendMoneyToEcoinEUResponse::setReturn()
     * @param \StructType\SendMoneyToEcoinEUResultHolder $return
     */
    public function __construct(\StructType\SendMoneyToEcoinEUResultHolder $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\SendMoneyToEcoinEUResultHolder|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\SendMoneyToEcoinEUResultHolder $return
     * @return \StructType\SendMoneyToEcoinEUResponse
     */
    public function setReturn(\StructType\SendMoneyToEcoinEUResultHolder $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
