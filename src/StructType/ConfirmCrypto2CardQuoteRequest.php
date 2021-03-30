<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmCrypto2CardQuoteRequest StructType
 * @subpackage Structs
 */
class ConfirmCrypto2CardQuoteRequest extends AbstractStructBase
{
    /**
     * The cardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardNumber;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $orderId;
    /**
     * The quoteId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $quoteId;
    /**
     * Constructor method for confirmCrypto2CardQuoteRequest
     * @uses ConfirmCrypto2CardQuoteRequest::setCardNumber()
     * @uses ConfirmCrypto2CardQuoteRequest::setOrderId()
     * @uses ConfirmCrypto2CardQuoteRequest::setQuoteId()
     * @param string $cardNumber
     * @param string $orderId
     * @param string $quoteId
     */
    public function __construct($cardNumber = null, $orderId = null, $quoteId = null)
    {
        $this
            ->setCardNumber($cardNumber)
            ->setOrderId($orderId)
            ->setQuoteId($quoteId);
    }
    /**
     * Get cardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    /**
     * Set cardNumber value
     * @param string $cardNumber
     * @return \StructType\ConfirmCrypto2CardQuoteRequest
     */
    public function setCardNumber($cardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNumber, true), gettype($cardNumber)), __LINE__);
        }
        $this->cardNumber = $cardNumber;
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
     * @return \StructType\ConfirmCrypto2CardQuoteRequest
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
     * Get quoteId value
     * @return string|null
     */
    public function getQuoteId()
    {
        return $this->quoteId;
    }
    /**
     * Set quoteId value
     * @param string $quoteId
     * @return \StructType\ConfirmCrypto2CardQuoteRequest
     */
    public function setQuoteId($quoteId = null)
    {
        // validation for constraint: string
        if (!is_null($quoteId) && !is_string($quoteId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quoteId, true), gettype($quoteId)), __LINE__);
        }
        $this->quoteId = $quoteId;
        return $this;
    }
}
