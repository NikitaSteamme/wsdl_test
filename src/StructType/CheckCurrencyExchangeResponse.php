<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkCurrencyExchangeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:checkCurrencyExchangeResponse
 * @subpackage Structs
 */
class CheckCurrencyExchangeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CheckCurrencyExchangeResultHolder
     */
    public $return;
    /**
     * Constructor method for checkCurrencyExchangeResponse
     * @uses CheckCurrencyExchangeResponse::setReturn()
     * @param \StructType\CheckCurrencyExchangeResultHolder $return
     */
    public function __construct(\StructType\CheckCurrencyExchangeResultHolder $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\CheckCurrencyExchangeResultHolder|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\CheckCurrencyExchangeResultHolder $return
     * @return \StructType\CheckCurrencyExchangeResponse
     */
    public function setReturn(\StructType\CheckCurrencyExchangeResultHolder $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
