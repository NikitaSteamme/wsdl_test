<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createCrypto2CardQuoteResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:createCrypto2CardQuoteResponse
 * @subpackage Structs
 */
class CreateCrypto2CardQuoteResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Crypto2CardQuoteDTO
     */
    public $return;
    /**
     * Constructor method for createCrypto2CardQuoteResponse
     * @uses CreateCrypto2CardQuoteResponse::setReturn()
     * @param \StructType\Crypto2CardQuoteDTO $return
     */
    public function __construct(\StructType\Crypto2CardQuoteDTO $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\Crypto2CardQuoteDTO|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\Crypto2CardQuoteDTO $return
     * @return \StructType\CreateCrypto2CardQuoteResponse
     */
    public function setReturn(\StructType\Crypto2CardQuoteDTO $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
