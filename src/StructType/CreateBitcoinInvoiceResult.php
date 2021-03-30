<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createBitcoinInvoiceResult StructType
 * @subpackage Structs
 */
class CreateBitcoinInvoiceResult extends CreateBitcoinInvoiceRequest
{
    /**
     * The bitcoinAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bitcoinAddress;
    /**
     * The bitcoinAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $bitcoinAmount;
    /**
     * Constructor method for createBitcoinInvoiceResult
     * @uses CreateBitcoinInvoiceResult::setBitcoinAddress()
     * @uses CreateBitcoinInvoiceResult::setBitcoinAmount()
     * @param string $bitcoinAddress
     * @param float $bitcoinAmount
     */
    public function __construct($bitcoinAddress = null, $bitcoinAmount = null)
    {
        $this
            ->setBitcoinAddress($bitcoinAddress)
            ->setBitcoinAmount($bitcoinAmount);
    }
    /**
     * Get bitcoinAddress value
     * @return string|null
     */
    public function getBitcoinAddress()
    {
        return $this->bitcoinAddress;
    }
    /**
     * Set bitcoinAddress value
     * @param string $bitcoinAddress
     * @return \StructType\CreateBitcoinInvoiceResult
     */
    public function setBitcoinAddress($bitcoinAddress = null)
    {
        // validation for constraint: string
        if (!is_null($bitcoinAddress) && !is_string($bitcoinAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bitcoinAddress, true), gettype($bitcoinAddress)), __LINE__);
        }
        $this->bitcoinAddress = $bitcoinAddress;
        return $this;
    }
    /**
     * Get bitcoinAmount value
     * @return float|null
     */
    public function getBitcoinAmount()
    {
        return $this->bitcoinAmount;
    }
    /**
     * Set bitcoinAmount value
     * @param float $bitcoinAmount
     * @return \StructType\CreateBitcoinInvoiceResult
     */
    public function setBitcoinAmount($bitcoinAmount = null)
    {
        // validation for constraint: float
        if (!is_null($bitcoinAmount) && !(is_float($bitcoinAmount) || is_numeric($bitcoinAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bitcoinAmount, true), gettype($bitcoinAmount)), __LINE__);
        }
        $this->bitcoinAmount = $bitcoinAmount;
        return $this;
    }
}
