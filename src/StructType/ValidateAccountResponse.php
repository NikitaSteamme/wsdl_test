<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for validateAccountResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:validateAccountResponse
 * @subpackage Structs
 */
class ValidateAccountResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ValidateAccountResultDTO
     */
    public $return;
    /**
     * Constructor method for validateAccountResponse
     * @uses ValidateAccountResponse::setReturn()
     * @param \StructType\ValidateAccountResultDTO $return
     */
    public function __construct(\StructType\ValidateAccountResultDTO $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ValidateAccountResultDTO|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ValidateAccountResultDTO $return
     * @return \StructType\ValidateAccountResponse
     */
    public function setReturn(\StructType\ValidateAccountResultDTO $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
