<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createCryptoCurrencyInvoiceRequest StructType
 * @subpackage Structs
 */
class CreateCryptoCurrencyInvoiceRequest extends MoneyRequest
{
    /**
     * The coinName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coinName;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $orderId;
    /**
     * The sciName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sciName;
    /**
     * The subMerchantURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $subMerchantURL;
    /**
     * The tetherTransportProtocol
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $tetherTransportProtocol;
    /**
     * Constructor method for createCryptoCurrencyInvoiceRequest
     * @uses CreateCryptoCurrencyInvoiceRequest::setCoinName()
     * @uses CreateCryptoCurrencyInvoiceRequest::setOrderId()
     * @uses CreateCryptoCurrencyInvoiceRequest::setSciName()
     * @uses CreateCryptoCurrencyInvoiceRequest::setSubMerchantURL()
     * @uses CreateCryptoCurrencyInvoiceRequest::setTetherTransportProtocol()
     * @param string $coinName
     * @param string $orderId
     * @param string $sciName
     * @param string $subMerchantURL
     * @param string $tetherTransportProtocol
     */
    public function __construct($coinName = null, $orderId = null, $sciName = null, $subMerchantURL = null, $tetherTransportProtocol = null)
    {
        $this
            ->setCoinName($coinName)
            ->setOrderId($orderId)
            ->setSciName($sciName)
            ->setSubMerchantURL($subMerchantURL)
            ->setTetherTransportProtocol($tetherTransportProtocol);
    }
    /**
     * Get coinName value
     * @return string|null
     */
    public function getCoinName()
    {
        return $this->coinName;
    }
    /**
     * Set coinName value
     * @uses \EnumType\CoinName::valueIsValid()
     * @uses \EnumType\CoinName::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coinName
     * @return \StructType\CreateCryptoCurrencyInvoiceRequest
     */
    public function setCoinName($coinName = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CoinName::valueIsValid($coinName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CoinName', is_array($coinName) ? implode(', ', $coinName) : var_export($coinName, true), implode(', ', \EnumType\CoinName::getValidValues())), __LINE__);
        }
        $this->coinName = $coinName;
        return $this;
    }
    /**
     * Get orderId value
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param string $orderId
     * @return \StructType\CreateCryptoCurrencyInvoiceRequest
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Get sciName value
     * @return string|null
     */
    public function getSciName()
    {
        return $this->sciName;
    }
    /**
     * Set sciName value
     * @param string $sciName
     * @return \StructType\CreateCryptoCurrencyInvoiceRequest
     */
    public function setSciName($sciName = null)
    {
        // validation for constraint: string
        if (!is_null($sciName) && !is_string($sciName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sciName, true), gettype($sciName)), __LINE__);
        }
        $this->sciName = $sciName;
        return $this;
    }
    /**
     * Get subMerchantURL value
     * @return string|null
     */
    public function getSubMerchantURL()
    {
        return $this->subMerchantURL;
    }
    /**
     * Set subMerchantURL value
     * @param string $subMerchantURL
     * @return \StructType\CreateCryptoCurrencyInvoiceRequest
     */
    public function setSubMerchantURL($subMerchantURL = null)
    {
        // validation for constraint: string
        if (!is_null($subMerchantURL) && !is_string($subMerchantURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantURL, true), gettype($subMerchantURL)), __LINE__);
        }
        $this->subMerchantURL = $subMerchantURL;
        return $this;
    }
    /**
     * Get tetherTransportProtocol value
     * @return string|null
     */
    public function getTetherTransportProtocol()
    {
        return $this->tetherTransportProtocol;
    }
    /**
     * Set tetherTransportProtocol value
     * @uses \EnumType\CryptoCurrencyTransportProtocol::valueIsValid()
     * @uses \EnumType\CryptoCurrencyTransportProtocol::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tetherTransportProtocol
     * @return \StructType\CreateCryptoCurrencyInvoiceRequest
     */
    public function setTetherTransportProtocol($tetherTransportProtocol = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CryptoCurrencyTransportProtocol::valueIsValid($tetherTransportProtocol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CryptoCurrencyTransportProtocol', is_array($tetherTransportProtocol) ? implode(', ', $tetherTransportProtocol) : var_export($tetherTransportProtocol, true), implode(', ', \EnumType\CryptoCurrencyTransportProtocol::getValidValues())), __LINE__);
        }
        $this->tetherTransportProtocol = $tetherTransportProtocol;
        return $this;
    }
}
