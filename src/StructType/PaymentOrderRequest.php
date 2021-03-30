<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentOrderRequest StructType
 * @subpackage Structs
 */
class PaymentOrderRequest extends AbstractStructBase
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
     * Constructor method for paymentOrderRequest
     * @uses PaymentOrderRequest::setOrderId()
     * @uses PaymentOrderRequest::setSciName()
     * @param string $orderId
     * @param string $sciName
     */
    public function __construct($orderId = null, $sciName = null)
    {
        $this
            ->setOrderId($orderId)
            ->setSciName($sciName);
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
     * @return \StructType\PaymentOrderRequest
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
     * @return \StructType\PaymentOrderRequest
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
}
