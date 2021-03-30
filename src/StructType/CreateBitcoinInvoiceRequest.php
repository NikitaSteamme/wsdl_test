<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createBitcoinInvoiceRequest StructType
 * @subpackage Structs
 */
class CreateBitcoinInvoiceRequest extends MoneyRequest
{
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
     * Constructor method for createBitcoinInvoiceRequest
     * @uses CreateBitcoinInvoiceRequest::setOrderId()
     * @uses CreateBitcoinInvoiceRequest::setSciName()
     * @uses CreateBitcoinInvoiceRequest::setSubMerchantURL()
     * @param string $orderId
     * @param string $sciName
     * @param string $subMerchantURL
     */
    public function __construct($orderId = null, $sciName = null, $subMerchantURL = null)
    {
        $this
            ->setOrderId($orderId)
            ->setSciName($sciName)
            ->setSubMerchantURL($subMerchantURL);
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
     * @return \StructType\CreateBitcoinInvoiceRequest
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
     * @return \StructType\CreateBitcoinInvoiceRequest
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
     * @return \StructType\CreateBitcoinInvoiceRequest
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
}
