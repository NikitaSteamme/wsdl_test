<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCrypto2CardTransactionResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getCrypto2CardTransactionResponse
 * @subpackage Structs
 */
class GetCrypto2CardTransactionResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Crypto2CardTransaction
     */
    public $return;
    /**
     * Constructor method for getCrypto2CardTransactionResponse
     * @uses GetCrypto2CardTransactionResponse::setReturn()
     * @param \StructType\Crypto2CardTransaction $return
     */
    public function __construct(\StructType\Crypto2CardTransaction $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\Crypto2CardTransaction|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\Crypto2CardTransaction $return
     * @return \StructType\GetCrypto2CardTransactionResponse
     */
    public function setReturn(\StructType\Crypto2CardTransaction $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
