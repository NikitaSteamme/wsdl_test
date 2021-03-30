<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBalances StructType
 * Meta information extracted from the WSDL
 * - type: tns:getBalances
 * @subpackage Structs
 */
class GetBalances extends AbstractStructBase
{
    /**
     * The arg0
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AuthDTO
     */
    public $arg0;
    /**
     * Constructor method for getBalances
     * @uses GetBalances::setArg0()
     * @param \StructType\AuthDTO $arg0
     */
    public function __construct(\StructType\AuthDTO $arg0 = null)
    {
        $this
            ->setArg0($arg0);
    }
    /**
     * Get arg0 value
     * @return \StructType\AuthDTO|null
     */
    public function getArg0()
    {
        return $this->arg0;
    }
    /**
     * Set arg0 value
     * @param \StructType\AuthDTO $arg0
     * @return \StructType\GetBalances
     */
    public function setArg0(\StructType\AuthDTO $arg0 = null)
    {
        $this->arg0 = $arg0;
        return $this;
    }
}
