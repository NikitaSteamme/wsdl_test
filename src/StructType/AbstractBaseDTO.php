<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for abstractBaseDTO StructType
 * @subpackage Structs
 */
abstract class AbstractBaseDTO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * Constructor method for abstractBaseDTO
     * @uses AbstractBaseDTO::setId()
     * @param string $id
     */
    public function __construct($id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\AbstractBaseDTO
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
}
