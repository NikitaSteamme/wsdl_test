<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmCryptoCurrencyWithdrawalInvoiceRequest StructType
 * @subpackage Structs
 */
class ConfirmCryptoCurrencyWithdrawalInvoiceRequest extends AbstractStructBase
{
    /**
     * The destinationTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destinationTag;
    /**
     * The invoiceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $invoiceId;
    /**
     * The receiver
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $receiver;
    /**
     * Constructor method for confirmCryptoCurrencyWithdrawalInvoiceRequest
     * @uses ConfirmCryptoCurrencyWithdrawalInvoiceRequest::setDestinationTag()
     * @uses ConfirmCryptoCurrencyWithdrawalInvoiceRequest::setInvoiceId()
     * @uses ConfirmCryptoCurrencyWithdrawalInvoiceRequest::setReceiver()
     * @param string $destinationTag
     * @param string $invoiceId
     * @param string $receiver
     */
    public function __construct($destinationTag = null, $invoiceId = null, $receiver = null)
    {
        $this
            ->setDestinationTag($destinationTag)
            ->setInvoiceId($invoiceId)
            ->setReceiver($receiver);
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
     * @return \StructType\ConfirmCryptoCurrencyWithdrawalInvoiceRequest
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
    /**
     * Get invoiceId value
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param string $invoiceId
     * @return \StructType\ConfirmCryptoCurrencyWithdrawalInvoiceRequest
     */
    public function setInvoiceId($invoiceId = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceId) && !is_string($invoiceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        return $this;
    }
    /**
     * Get receiver value
     * @return string|null
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
    /**
     * Set receiver value
     * @param string $receiver
     * @return \StructType\ConfirmCryptoCurrencyWithdrawalInvoiceRequest
     */
    public function setReceiver($receiver = null)
    {
        // validation for constraint: string
        if (!is_null($receiver) && !is_string($receiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver, true), gettype($receiver)), __LINE__);
        }
        $this->receiver = $receiver;
        return $this;
    }
}
