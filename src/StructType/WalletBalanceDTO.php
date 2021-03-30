<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for walletBalanceDTO StructType
 * @subpackage Structs
 */
class WalletBalanceDTO extends AbstractStructBase
{
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * Constructor method for walletBalanceDTO
     * @uses WalletBalanceDTO::setAmount()
     * @uses WalletBalanceDTO::setId()
     * @param float $amount
     * @param string $id
     */
    public function __construct($amount = null, $id = null)
    {
        $this
            ->setAmount($amount)
            ->setId($id);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \StructType\WalletBalanceDTO
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
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
     * @return \StructType\WalletBalanceDTO
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
