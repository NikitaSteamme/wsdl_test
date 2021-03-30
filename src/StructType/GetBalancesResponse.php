<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBalancesResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getBalancesResponse
 * @subpackage Structs
 */
class GetBalancesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WalletBalanceDTO[]
     */
    public $return;
    /**
     * Constructor method for getBalancesResponse
     * @uses GetBalancesResponse::setReturn()
     * @param \StructType\WalletBalanceDTO[] $return
     */
    public function __construct(array $return = array())
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\WalletBalanceDTO[]|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * This method is responsible for validating the values passed to the setReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnForArrayConstraintsFromSetReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBalancesResponseReturnItem) {
            // validation for constraint: itemType
            if (!$getBalancesResponseReturnItem instanceof \StructType\WalletBalanceDTO) {
                $invalidValues[] = is_object($getBalancesResponseReturnItem) ? get_class($getBalancesResponseReturnItem) : sprintf('%s(%s)', gettype($getBalancesResponseReturnItem), var_export($getBalancesResponseReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The return property can only contain items of type \StructType\WalletBalanceDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set return value
     * @throws \InvalidArgumentException
     * @param \StructType\WalletBalanceDTO[] $return
     * @return \StructType\GetBalancesResponse
     */
    public function setReturn(array $return = array())
    {
        // validation for constraint: array
        if ('' !== ($returnArrayErrorMessage = self::validateReturnForArrayConstraintsFromSetReturn($return))) {
            throw new \InvalidArgumentException($returnArrayErrorMessage, __LINE__);
        }
        $this->return = $return;
        return $this;
    }
    /**
     * Add item to return value
     * @throws \InvalidArgumentException
     * @param \StructType\WalletBalanceDTO $item
     * @return \StructType\GetBalancesResponse
     */
    public function addToReturn(\StructType\WalletBalanceDTO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WalletBalanceDTO) {
            throw new \InvalidArgumentException(sprintf('The return property can only contain items of type \StructType\WalletBalanceDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->return[] = $item;
        return $this;
    }
}
