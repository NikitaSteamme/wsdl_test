<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentOrderResult StructType
 * @subpackage Structs
 */
class PaymentOrderResult extends PaymentOrderRequest
{
    /**
     * The buyerEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $buyerEmail;
    /**
     * The coinName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coinName;
    /**
     * The cryptoCurrencyAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyAddress;
    /**
     * The cryptoCurrencyAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cryptoCurrencyAmount;
    /**
     * The cryptoCurrencyInvoiceCreated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyInvoiceCreated;
    /**
     * The cryptoCurrencyInvoiceStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyInvoiceStatus;
    /**
     * The cryptoCurrencyPaymentCompleted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyPaymentCompleted;
    /**
     * The cryptoCurrencyPaymentReceived
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyPaymentReceived;
    /**
     * The cryptoCurrencyPaymentRefundRequested
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyPaymentRefundRequested;
    /**
     * The cryptoCurrencyPaymentRefunded
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyPaymentRefunded;
    /**
     * The cryptoCurrencyTransactionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyTransactionId;
    /**
     * The paymentCreated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentCreated;
    /**
     * The paymentMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentMethod;
    /**
     * The paymentStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentStatus;
    /**
     * The receivedCryptoCurrencyAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $receivedCryptoCurrencyAmount;
    /**
     * The refundAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $refundAddress;
    /**
     * The srcWalletId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $srcWalletId;
    /**
     * The transactionAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $transactionAmount;
    /**
     * The transactionCanceled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionCanceled;
    /**
     * The transactionCompleted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionCompleted;
    /**
     * The transactionCreated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionCreated;
    /**
     * The transactionCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionCurrency;
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionId;
    /**
     * The transactionNote
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionNote;
    /**
     * The transactionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionStatus;
    /**
     * Constructor method for paymentOrderResult
     * @uses PaymentOrderResult::setBuyerEmail()
     * @uses PaymentOrderResult::setCoinName()
     * @uses PaymentOrderResult::setCryptoCurrencyAddress()
     * @uses PaymentOrderResult::setCryptoCurrencyAmount()
     * @uses PaymentOrderResult::setCryptoCurrencyInvoiceCreated()
     * @uses PaymentOrderResult::setCryptoCurrencyInvoiceStatus()
     * @uses PaymentOrderResult::setCryptoCurrencyPaymentCompleted()
     * @uses PaymentOrderResult::setCryptoCurrencyPaymentReceived()
     * @uses PaymentOrderResult::setCryptoCurrencyPaymentRefundRequested()
     * @uses PaymentOrderResult::setCryptoCurrencyPaymentRefunded()
     * @uses PaymentOrderResult::setCryptoCurrencyTransactionId()
     * @uses PaymentOrderResult::setPaymentCreated()
     * @uses PaymentOrderResult::setPaymentMethod()
     * @uses PaymentOrderResult::setPaymentStatus()
     * @uses PaymentOrderResult::setReceivedCryptoCurrencyAmount()
     * @uses PaymentOrderResult::setRefundAddress()
     * @uses PaymentOrderResult::setSrcWalletId()
     * @uses PaymentOrderResult::setTransactionAmount()
     * @uses PaymentOrderResult::setTransactionCanceled()
     * @uses PaymentOrderResult::setTransactionCompleted()
     * @uses PaymentOrderResult::setTransactionCreated()
     * @uses PaymentOrderResult::setTransactionCurrency()
     * @uses PaymentOrderResult::setTransactionId()
     * @uses PaymentOrderResult::setTransactionNote()
     * @uses PaymentOrderResult::setTransactionStatus()
     * @param string $buyerEmail
     * @param string $coinName
     * @param string $cryptoCurrencyAddress
     * @param float $cryptoCurrencyAmount
     * @param string $cryptoCurrencyInvoiceCreated
     * @param string $cryptoCurrencyInvoiceStatus
     * @param string $cryptoCurrencyPaymentCompleted
     * @param string $cryptoCurrencyPaymentReceived
     * @param string $cryptoCurrencyPaymentRefundRequested
     * @param string $cryptoCurrencyPaymentRefunded
     * @param string $cryptoCurrencyTransactionId
     * @param string $paymentCreated
     * @param string $paymentMethod
     * @param string $paymentStatus
     * @param float $receivedCryptoCurrencyAmount
     * @param string $refundAddress
     * @param string $srcWalletId
     * @param float $transactionAmount
     * @param string $transactionCanceled
     * @param string $transactionCompleted
     * @param string $transactionCreated
     * @param string $transactionCurrency
     * @param string $transactionId
     * @param string $transactionNote
     * @param string $transactionStatus
     */
    public function __construct($buyerEmail = null, $coinName = null, $cryptoCurrencyAddress = null, $cryptoCurrencyAmount = null, $cryptoCurrencyInvoiceCreated = null, $cryptoCurrencyInvoiceStatus = null, $cryptoCurrencyPaymentCompleted = null, $cryptoCurrencyPaymentReceived = null, $cryptoCurrencyPaymentRefundRequested = null, $cryptoCurrencyPaymentRefunded = null, $cryptoCurrencyTransactionId = null, $paymentCreated = null, $paymentMethod = null, $paymentStatus = null, $receivedCryptoCurrencyAmount = null, $refundAddress = null, $srcWalletId = null, $transactionAmount = null, $transactionCanceled = null, $transactionCompleted = null, $transactionCreated = null, $transactionCurrency = null, $transactionId = null, $transactionNote = null, $transactionStatus = null)
    {
        $this
            ->setBuyerEmail($buyerEmail)
            ->setCoinName($coinName)
            ->setCryptoCurrencyAddress($cryptoCurrencyAddress)
            ->setCryptoCurrencyAmount($cryptoCurrencyAmount)
            ->setCryptoCurrencyInvoiceCreated($cryptoCurrencyInvoiceCreated)
            ->setCryptoCurrencyInvoiceStatus($cryptoCurrencyInvoiceStatus)
            ->setCryptoCurrencyPaymentCompleted($cryptoCurrencyPaymentCompleted)
            ->setCryptoCurrencyPaymentReceived($cryptoCurrencyPaymentReceived)
            ->setCryptoCurrencyPaymentRefundRequested($cryptoCurrencyPaymentRefundRequested)
            ->setCryptoCurrencyPaymentRefunded($cryptoCurrencyPaymentRefunded)
            ->setCryptoCurrencyTransactionId($cryptoCurrencyTransactionId)
            ->setPaymentCreated($paymentCreated)
            ->setPaymentMethod($paymentMethod)
            ->setPaymentStatus($paymentStatus)
            ->setReceivedCryptoCurrencyAmount($receivedCryptoCurrencyAmount)
            ->setRefundAddress($refundAddress)
            ->setSrcWalletId($srcWalletId)
            ->setTransactionAmount($transactionAmount)
            ->setTransactionCanceled($transactionCanceled)
            ->setTransactionCompleted($transactionCompleted)
            ->setTransactionCreated($transactionCreated)
            ->setTransactionCurrency($transactionCurrency)
            ->setTransactionId($transactionId)
            ->setTransactionNote($transactionNote)
            ->setTransactionStatus($transactionStatus);
    }
    /**
     * Get buyerEmail value
     * @return string|null
     */
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }
    /**
     * Set buyerEmail value
     * @param string $buyerEmail
     * @return \StructType\PaymentOrderResult
     */
    public function setBuyerEmail($buyerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmail) && !is_string($buyerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerEmail, true), gettype($buyerEmail)), __LINE__);
        }
        $this->buyerEmail = $buyerEmail;
        return $this;
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
     * @return \StructType\PaymentOrderResult
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
     * Get cryptoCurrencyAddress value
     * @return string|null
     */
    public function getCryptoCurrencyAddress()
    {
        return $this->cryptoCurrencyAddress;
    }
    /**
     * Set cryptoCurrencyAddress value
     * @param string $cryptoCurrencyAddress
     * @return \StructType\PaymentOrderResult
     */
    public function setCryptoCurrencyAddress($cryptoCurrencyAddress = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoCurrencyAddress) && !is_string($cryptoCurrencyAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cryptoCurrencyAddress, true), gettype($cryptoCurrencyAddress)), __LINE__);
        }
        $this->cryptoCurrencyAddress = $cryptoCurrencyAddress;
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
     * @return \StructType\PaymentOrderResult
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
     * Get cryptoCurrencyInvoiceCreated value
     * @return string|null
     */
    public function getCryptoCurrencyInvoiceCreated()
    {
        return $this->cryptoCurrencyInvoiceCreated;
    }
    /**
     * Set cryptoCurrencyInvoiceCreated value
     * @param string $cryptoCurrencyInvoiceCreated
     * @return \StructType\PaymentOrderResult
     */
    public function setCryptoCurrencyInvoiceCreated($cryptoCurrencyInvoiceCreated = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoCurrencyInvoiceCreated) && !is_string($cryptoCurrencyInvoiceCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cryptoCurrencyInvoiceCreated, true), gettype($cryptoCurrencyInvoiceCreated)), __LINE__);
        }
        $this->cryptoCurrencyInvoiceCreated = $cryptoCurrencyInvoiceCreated;
        return $this;
    }
    /**
     * Get cryptoCurrencyInvoiceStatus value
     * @return string|null
     */
    public function getCryptoCurrencyInvoiceStatus()
    {
        return $this->cryptoCurrencyInvoiceStatus;
    }
    /**
     * Set cryptoCurrencyInvoiceStatus value
     * @uses \EnumType\CryptoCurrencyDepositPaymentStatus::valueIsValid()
     * @uses \EnumType\CryptoCurrencyDepositPaymentStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cryptoCurrencyInvoiceStatus
     * @return \StructType\PaymentOrderResult
     */
    public function setCryptoCurrencyInvoiceStatus($cryptoCurrencyInvoiceStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CryptoCurrencyDepositPaymentStatus::valueIsValid($cryptoCurrencyInvoiceStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CryptoCurrencyDepositPaymentStatus', is_array($cryptoCurrencyInvoiceStatus) ? implode(', ', $cryptoCurrencyInvoiceStatus) : var_export($cryptoCurrencyInvoiceStatus, true), implode(', ', \EnumType\CryptoCurrencyDepositPaymentStatus::getValidValues())), __LINE__);
        }
        $this->cryptoCurrencyInvoiceStatus = $cryptoCurrencyInvoiceStatus;
        return $this;
    }
    /**
     * Get cryptoCurrencyPaymentCompleted value
     * @return string|null
     */
    public function getCryptoCurrencyPaymentCompleted()
    {
        return $this->cryptoCurrencyPaymentCompleted;
    }
    /**
     * Set cryptoCurrencyPaymentCompleted value
     * @param string $cryptoCurrencyPaymentCompleted
     * @return \StructType\PaymentOrderResult
     */
    public function setCryptoCurrencyPaymentCompleted($cryptoCurrencyPaymentCompleted = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoCurrencyPaymentCompleted) && !is_string($cryptoCurrencyPaymentCompleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cryptoCurrencyPaymentCompleted, true), gettype($cryptoCurrencyPaymentCompleted)), __LINE__);
        }
        $this->cryptoCurrencyPaymentCompleted = $cryptoCurrencyPaymentCompleted;
        return $this;
    }
    /**
     * Get cryptoCurrencyPaymentReceived value
     * @return string|null
     */
    public function getCryptoCurrencyPaymentReceived()
    {
        return $this->cryptoCurrencyPaymentReceived;
    }
    /**
     * Set cryptoCurrencyPaymentReceived value
     * @param string $cryptoCurrencyPaymentReceived
     * @return \StructType\PaymentOrderResult
     */
    public function setCryptoCurrencyPaymentReceived($cryptoCurrencyPaymentReceived = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoCurrencyPaymentReceived) && !is_string($cryptoCurrencyPaymentReceived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cryptoCurrencyPaymentReceived, true), gettype($cryptoCurrencyPaymentReceived)), __LINE__);
        }
        $this->cryptoCurrencyPaymentReceived = $cryptoCurrencyPaymentReceived;
        return $this;
    }
    /**
     * Get cryptoCurrencyPaymentRefundRequested value
     * @return string|null
     */
    public function getCryptoCurrencyPaymentRefundRequested()
    {
        return $this->cryptoCurrencyPaymentRefundRequested;
    }
    /**
     * Set cryptoCurrencyPaymentRefundRequested value
     * @param string $cryptoCurrencyPaymentRefundRequested
     * @return \StructType\PaymentOrderResult
     */
    public function setCryptoCurrencyPaymentRefundRequested($cryptoCurrencyPaymentRefundRequested = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoCurrencyPaymentRefundRequested) && !is_string($cryptoCurrencyPaymentRefundRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cryptoCurrencyPaymentRefundRequested, true), gettype($cryptoCurrencyPaymentRefundRequested)), __LINE__);
        }
        $this->cryptoCurrencyPaymentRefundRequested = $cryptoCurrencyPaymentRefundRequested;
        return $this;
    }
    /**
     * Get cryptoCurrencyPaymentRefunded value
     * @return string|null
     */
    public function getCryptoCurrencyPaymentRefunded()
    {
        return $this->cryptoCurrencyPaymentRefunded;
    }
    /**
     * Set cryptoCurrencyPaymentRefunded value
     * @param string $cryptoCurrencyPaymentRefunded
     * @return \StructType\PaymentOrderResult
     */
    public function setCryptoCurrencyPaymentRefunded($cryptoCurrencyPaymentRefunded = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoCurrencyPaymentRefunded) && !is_string($cryptoCurrencyPaymentRefunded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cryptoCurrencyPaymentRefunded, true), gettype($cryptoCurrencyPaymentRefunded)), __LINE__);
        }
        $this->cryptoCurrencyPaymentRefunded = $cryptoCurrencyPaymentRefunded;
        return $this;
    }
    /**
     * Get cryptoCurrencyTransactionId value
     * @return string|null
     */
    public function getCryptoCurrencyTransactionId()
    {
        return $this->cryptoCurrencyTransactionId;
    }
    /**
     * Set cryptoCurrencyTransactionId value
     * @param string $cryptoCurrencyTransactionId
     * @return \StructType\PaymentOrderResult
     */
    public function setCryptoCurrencyTransactionId($cryptoCurrencyTransactionId = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoCurrencyTransactionId) && !is_string($cryptoCurrencyTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cryptoCurrencyTransactionId, true), gettype($cryptoCurrencyTransactionId)), __LINE__);
        }
        $this->cryptoCurrencyTransactionId = $cryptoCurrencyTransactionId;
        return $this;
    }
    /**
     * Get paymentCreated value
     * @return string|null
     */
    public function getPaymentCreated()
    {
        return $this->paymentCreated;
    }
    /**
     * Set paymentCreated value
     * @param string $paymentCreated
     * @return \StructType\PaymentOrderResult
     */
    public function setPaymentCreated($paymentCreated = null)
    {
        // validation for constraint: string
        if (!is_null($paymentCreated) && !is_string($paymentCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentCreated, true), gettype($paymentCreated)), __LINE__);
        }
        $this->paymentCreated = $paymentCreated;
        return $this;
    }
    /**
     * Get paymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @uses \EnumType\SciAllowedPaymentSystems::valueIsValid()
     * @uses \EnumType\SciAllowedPaymentSystems::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethod
     * @return \StructType\PaymentOrderResult
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SciAllowedPaymentSystems::valueIsValid($paymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SciAllowedPaymentSystems', is_array($paymentMethod) ? implode(', ', $paymentMethod) : var_export($paymentMethod, true), implode(', ', \EnumType\SciAllowedPaymentSystems::getValidValues())), __LINE__);
        }
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get paymentStatus value
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }
    /**
     * Set paymentStatus value
     * @uses \EnumType\PaymentRequestStatus::valueIsValid()
     * @uses \EnumType\PaymentRequestStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentStatus
     * @return \StructType\PaymentOrderResult
     */
    public function setPaymentStatus($paymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentRequestStatus::valueIsValid($paymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentRequestStatus', is_array($paymentStatus) ? implode(', ', $paymentStatus) : var_export($paymentStatus, true), implode(', ', \EnumType\PaymentRequestStatus::getValidValues())), __LINE__);
        }
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * Get receivedCryptoCurrencyAmount value
     * @return float|null
     */
    public function getReceivedCryptoCurrencyAmount()
    {
        return $this->receivedCryptoCurrencyAmount;
    }
    /**
     * Set receivedCryptoCurrencyAmount value
     * @param float $receivedCryptoCurrencyAmount
     * @return \StructType\PaymentOrderResult
     */
    public function setReceivedCryptoCurrencyAmount($receivedCryptoCurrencyAmount = null)
    {
        // validation for constraint: float
        if (!is_null($receivedCryptoCurrencyAmount) && !(is_float($receivedCryptoCurrencyAmount) || is_numeric($receivedCryptoCurrencyAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($receivedCryptoCurrencyAmount, true), gettype($receivedCryptoCurrencyAmount)), __LINE__);
        }
        $this->receivedCryptoCurrencyAmount = $receivedCryptoCurrencyAmount;
        return $this;
    }
    /**
     * Get refundAddress value
     * @return string|null
     */
    public function getRefundAddress()
    {
        return $this->refundAddress;
    }
    /**
     * Set refundAddress value
     * @param string $refundAddress
     * @return \StructType\PaymentOrderResult
     */
    public function setRefundAddress($refundAddress = null)
    {
        // validation for constraint: string
        if (!is_null($refundAddress) && !is_string($refundAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundAddress, true), gettype($refundAddress)), __LINE__);
        }
        $this->refundAddress = $refundAddress;
        return $this;
    }
    /**
     * Get srcWalletId value
     * @return string|null
     */
    public function getSrcWalletId()
    {
        return $this->srcWalletId;
    }
    /**
     * Set srcWalletId value
     * @param string $srcWalletId
     * @return \StructType\PaymentOrderResult
     */
    public function setSrcWalletId($srcWalletId = null)
    {
        // validation for constraint: string
        if (!is_null($srcWalletId) && !is_string($srcWalletId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($srcWalletId, true), gettype($srcWalletId)), __LINE__);
        }
        $this->srcWalletId = $srcWalletId;
        return $this;
    }
    /**
     * Get transactionAmount value
     * @return float|null
     */
    public function getTransactionAmount()
    {
        return $this->transactionAmount;
    }
    /**
     * Set transactionAmount value
     * @param float $transactionAmount
     * @return \StructType\PaymentOrderResult
     */
    public function setTransactionAmount($transactionAmount = null)
    {
        // validation for constraint: float
        if (!is_null($transactionAmount) && !(is_float($transactionAmount) || is_numeric($transactionAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($transactionAmount, true), gettype($transactionAmount)), __LINE__);
        }
        $this->transactionAmount = $transactionAmount;
        return $this;
    }
    /**
     * Get transactionCanceled value
     * @return string|null
     */
    public function getTransactionCanceled()
    {
        return $this->transactionCanceled;
    }
    /**
     * Set transactionCanceled value
     * @param string $transactionCanceled
     * @return \StructType\PaymentOrderResult
     */
    public function setTransactionCanceled($transactionCanceled = null)
    {
        // validation for constraint: string
        if (!is_null($transactionCanceled) && !is_string($transactionCanceled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionCanceled, true), gettype($transactionCanceled)), __LINE__);
        }
        $this->transactionCanceled = $transactionCanceled;
        return $this;
    }
    /**
     * Get transactionCompleted value
     * @return string|null
     */
    public function getTransactionCompleted()
    {
        return $this->transactionCompleted;
    }
    /**
     * Set transactionCompleted value
     * @param string $transactionCompleted
     * @return \StructType\PaymentOrderResult
     */
    public function setTransactionCompleted($transactionCompleted = null)
    {
        // validation for constraint: string
        if (!is_null($transactionCompleted) && !is_string($transactionCompleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionCompleted, true), gettype($transactionCompleted)), __LINE__);
        }
        $this->transactionCompleted = $transactionCompleted;
        return $this;
    }
    /**
     * Get transactionCreated value
     * @return string|null
     */
    public function getTransactionCreated()
    {
        return $this->transactionCreated;
    }
    /**
     * Set transactionCreated value
     * @param string $transactionCreated
     * @return \StructType\PaymentOrderResult
     */
    public function setTransactionCreated($transactionCreated = null)
    {
        // validation for constraint: string
        if (!is_null($transactionCreated) && !is_string($transactionCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionCreated, true), gettype($transactionCreated)), __LINE__);
        }
        $this->transactionCreated = $transactionCreated;
        return $this;
    }
    /**
     * Get transactionCurrency value
     * @return string|null
     */
    public function getTransactionCurrency()
    {
        return $this->transactionCurrency;
    }
    /**
     * Set transactionCurrency value
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionCurrency
     * @return \StructType\PaymentOrderResult
     */
    public function setTransactionCurrency($transactionCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($transactionCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($transactionCurrency) ? implode(', ', $transactionCurrency) : var_export($transactionCurrency, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->transactionCurrency = $transactionCurrency;
        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \StructType\PaymentOrderResult
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Get transactionNote value
     * @return string|null
     */
    public function getTransactionNote()
    {
        return $this->transactionNote;
    }
    /**
     * Set transactionNote value
     * @param string $transactionNote
     * @return \StructType\PaymentOrderResult
     */
    public function setTransactionNote($transactionNote = null)
    {
        // validation for constraint: string
        if (!is_null($transactionNote) && !is_string($transactionNote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionNote, true), gettype($transactionNote)), __LINE__);
        }
        $this->transactionNote = $transactionNote;
        return $this;
    }
    /**
     * Get transactionStatus value
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }
    /**
     * Set transactionStatus value
     * @uses \EnumType\TransactionStatus::valueIsValid()
     * @uses \EnumType\TransactionStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionStatus
     * @return \StructType\PaymentOrderResult
     */
    public function setTransactionStatus($transactionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionStatus::valueIsValid($transactionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionStatus', is_array($transactionStatus) ? implode(', ', $transactionStatus) : var_export($transactionStatus, true), implode(', ', \EnumType\TransactionStatus::getValidValues())), __LINE__);
        }
        $this->transactionStatus = $transactionStatus;
        return $this;
    }
}
