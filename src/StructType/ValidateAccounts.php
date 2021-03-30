<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for validateAccounts StructType
 * Meta information extracted from the WSDL
 * - type: tns:validateAccounts
 * @subpackage Structs
 */
class ValidateAccounts extends AbstractStructBase
{
    /**
     * The arg0
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AuthDTO
     */
    public $arg0;
    /**
     * The arg1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $arg1;
    /**
     * Constructor method for validateAccounts
     * @uses ValidateAccounts::setArg0()
     * @uses ValidateAccounts::setArg1()
     * @param \StructType\AuthDTO $arg0
     * @param string[] $arg1
     */
    public function __construct(\StructType\AuthDTO $arg0 = null, array $arg1 = array())
    {
        $this
            ->setArg0($arg0)
            ->setArg1($arg1);
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
     * @return \StructType\ValidateAccounts
     */
    public function setArg0(\StructType\AuthDTO $arg0 = null)
    {
        $this->arg0 = $arg0;
        return $this;
    }
    /**
     * Get arg1 value
     * @return string[]|null
     */
    public function getArg1()
    {
        return $this->arg1;
    }
    /**
     * This method is responsible for validating the values passed to the setArg1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArg1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArg1ForArrayConstraintsFromSetArg1(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $validateAccountsArg1Item) {
            // validation for constraint: itemType
            if (!is_string($validateAccountsArg1Item)) {
                $invalidValues[] = is_object($validateAccountsArg1Item) ? get_class($validateAccountsArg1Item) : sprintf('%s(%s)', gettype($validateAccountsArg1Item), var_export($validateAccountsArg1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The arg1 property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set arg1 value
     * @throws \InvalidArgumentException
     * @param string[] $arg1
     * @return \StructType\ValidateAccounts
     */
    public function setArg1(array $arg1 = array())
    {
        // validation for constraint: array
        if ('' !== ($arg1ArrayErrorMessage = self::validateArg1ForArrayConstraintsFromSetArg1($arg1))) {
            throw new \InvalidArgumentException($arg1ArrayErrorMessage, __LINE__);
        }
        $this->arg1 = $arg1;
        return $this;
    }
    /**
     * Add item to arg1 value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ValidateAccounts
     */
    public function addToArg1($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The arg1 property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->arg1[] = $item;
        return $this;
    }
}
