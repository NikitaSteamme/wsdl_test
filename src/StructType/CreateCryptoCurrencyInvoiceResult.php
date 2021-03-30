<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createCryptoCurrencyInvoiceResult StructType
 * @subpackage Structs
 */
class CreateCryptoCurrencyInvoiceResult extends CreateCryptoCurrencyInvoiceRequest
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * The addressOldFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $addressOldFormat;
    /**
     * The cryptoCurrencyAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cryptoCurrencyAmount;
    /**
     * The destinationTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destinationTag;
    /**
     * Constructor method for createCryptoCurrencyInvoiceResult
     * @uses CreateCryptoCurrencyInvoiceResult::setAddress()
     * @uses CreateCryptoCurrencyInvoiceResult::setAddressOldFormat()
     * @uses CreateCryptoCurrencyInvoiceResult::setCryptoCurrencyAmount()
     * @uses CreateCryptoCurrencyInvoiceResult::setDestinationTag()
     * @param string $address
     * @param string $addressOldFormat
     * @param float $cryptoCurrencyAmount
     * @param string $destinationTag
     */
    public function __construct($address = null, $addressOldFormat = null, $cryptoCurrencyAmount = null, $destinationTag = null)
    {
        $this
            ->setAddress($address)
            ->setAddressOldFormat($addressOldFormat)
            ->setCryptoCurrencyAmount($cryptoCurrencyAmount)
            ->setDestinationTag($destinationTag);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \StructType\CreateCryptoCurrencyInvoiceResult
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get addressOldFormat value
     * @return string|null
     */
    public function getAddressOldFormat()
    {
        return $this->addressOldFormat;
    }
    /**
     * Set addressOldFormat value
     * @param string $addressOldFormat
     * @return \StructType\CreateCryptoCurrencyInvoiceResult
     */
    public function setAddressOldFormat($addressOldFormat = null)
    {
        // validation for constraint: string
        if (!is_null($addressOldFormat) && !is_string($addressOldFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressOldFormat, true), gettype($addressOldFormat)), __LINE__);
        }
        $this->addressOldFormat = $addressOldFormat;
        return $this;
    }
    /**
     * Get cryptoCurrencyAmount value
     * @return float|null
     */
    public function getCryptoCurrencyAmount()
    {
        return $this->cryptoCurrencyAmount;
    }
    /**
     * Set cryptoCurrencyAmount value
     * @param float $cryptoCurrencyAmount
     * @return \StructType\CreateCryptoCurrencyInvoiceResult
     */
    public function setCryptoCurrencyAmount($cryptoCurrencyAmount = null)
    {
        // validation for constraint: float
        if (!is_null($cryptoCurrencyAmount) && !(is_float($cryptoCurrencyAmount) || is_numeric($cryptoCurrencyAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cryptoCurrencyAmount, true), gettype($cryptoCurrencyAmount)), __LINE__);
        }
        $this->cryptoCurrencyAmount = $cryptoCurrencyAmount;
        return $this;
    }
    /**
     * Get destinationTag value
     * @return string|null
     */
    public function getDestinationTag()
    {
        return $this->destinationTag;
    }
    /**
     * Set destinationTag value
     * @param string $destinationTag
     * @return \StructType\CreateCryptoCurrencyInvoiceResult
     */
    public function setDestinationTag($destinationTag = null)
    {
        // validation for constraint: string
        if (!is_null($destinationTag) && !is_string($destinationTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationTag, true), gettype($destinationTag)), __LINE__);
        }
        $this->destinationTag = $destinationTag;
        return $this;
    }
}
