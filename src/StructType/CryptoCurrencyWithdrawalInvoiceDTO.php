<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cryptoCurrencyWithdrawalInvoiceDTO StructType
 * @subpackage Structs
 */
class CryptoCurrencyWithdrawalInvoiceDTO extends AbstractStructBase
{
    /**
     * The coinName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coinName;
    /**
     * The created
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $created;
    /**
     * The cryptoCurrencyAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cryptoCurrencyAmount;
    /**
     * The depositMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $depositMethod;
    /**
     * The expiresOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $expiresOn;
    /**
     * The fiatAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $fiatAmount;
    /**
     * The fiatCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fiatCurrency;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $orderId;
    /**
     * The receiver
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $receiver;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionId;
    /**
     * Constructor method for cryptoCurrencyWithdrawalInvoiceDTO
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setCoinName()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setCreated()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setCryptoCurrencyAmount()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setDepositMethod()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setExpiresOn()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setFiatAmount()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setFiatCurrency()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setId()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setOrderId()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setReceiver()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setStatus()
     * @uses CryptoCurrencyWithdrawalInvoiceDTO::setTransactionId()
     * @param string $coinName
     * @param int $created
     * @param float $cryptoCurrencyAmount
     * @param string $depositMethod
     * @param int $expiresOn
     * @param float $fiatAmount
     * @param string $fiatCurrency
     * @param string $id
     * @param string $orderId
     * @param string $receiver
     * @param string $status
     * @param string $transactionId
     */
    public function __construct($coinName = null, $created = null, $cryptoCurrencyAmount = null, $depositMethod = null, $expiresOn = null, $fiatAmount = null, $fiatCurrency = null, $id = null, $orderId = null, $receiver = null, $status = null, $transactionId = null)
    {
        $this
            ->setCoinName($coinName)
            ->setCreated($created)
            ->setCryptoCurrencyAmount($cryptoCurrencyAmount)
            ->setDepositMethod($depositMethod)
            ->setExpiresOn($expiresOn)
            ->setFiatAmount($fiatAmount)
            ->setFiatCurrency($fiatCurrency)
            ->setId($id)
            ->setOrderId($orderId)
            ->setReceiver($receiver)
            ->setStatus($status)
            ->setTransactionId($transactionId);
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
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
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
     * Get created value
     * @return int|null
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param int $created
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
     */
    public function setCreated($created = null)
    {
        // validation for constraint: int
        if (!is_null($created) && !(is_int($created) || ctype_digit($created))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->created = $created;
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
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
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
     * Get depositMethod value
     * @return string|null
     */
    public function getDepositMethod()
    {
        return $this->depositMethod;
    }
    /**
     * Set depositMethod value
     * @uses \EnumType\SciAllowedPaymentSystems::valueIsValid()
     * @uses \EnumType\SciAllowedPaymentSystems::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $depositMethod
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
     */
    public function setDepositMethod($depositMethod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SciAllowedPaymentSystems::valueIsValid($depositMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SciAllowedPaymentSystems', is_array($depositMethod) ? implode(', ', $depositMethod) : var_export($depositMethod, true), implode(', ', \EnumType\SciAllowedPaymentSystems::getValidValues())), __LINE__);
        }
        $this->depositMethod = $depositMethod;
        return $this;
    }
    /**
     * Get expiresOn value
     * @return int|null
     */
    public function getExpiresOn()
    {
        return $this->expiresOn;
    }
    /**
     * Set expiresOn value
     * @param int $expiresOn
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
     */
    public function setExpiresOn($expiresOn = null)
    {
        // validation for constraint: int
        if (!is_null($expiresOn) && !(is_int($expiresOn) || ctype_digit($expiresOn))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expiresOn, true), gettype($expiresOn)), __LINE__);
        }
        $this->expiresOn = $expiresOn;
        return $this;
    }
    /**
     * Get fiatAmount value
     * @return float|null
     */
    public function getFiatAmount()
    {
        return $this->fiatAmount;
    }
    /**
     * Set fiatAmount value
     * @param float $fiatAmount
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
     */
    public function setFiatAmount($fiatAmount = null)
    {
        // validation for constraint: float
        if (!is_null($fiatAmount) && !(is_float($fiatAmount) || is_numeric($fiatAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fiatAmount, true), gettype($fiatAmount)), __LINE__);
        }
        $this->fiatAmount = $fiatAmount;
        return $this;
    }
    /**
     * Get fiatCurrency value
     * @return string|null
     */
    public function getFiatCurrency()
    {
        return $this->fiatCurrency;
    }
    /**
     * Set fiatCurrency value
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fiatCurrency
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
     */
    public function setFiatCurrency($fiatCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($fiatCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($fiatCurrency) ? implode(', ', $fiatCurrency) : var_export($fiatCurrency, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->fiatCurrency = $fiatCurrency;
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
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
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
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
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
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
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
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \EnumType\CryptoCurrencyWithdrawalInvoiceStatus::valueIsValid()
     * @uses \EnumType\CryptoCurrencyWithdrawalInvoiceStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CryptoCurrencyWithdrawalInvoiceStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CryptoCurrencyWithdrawalInvoiceStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\CryptoCurrencyWithdrawalInvoiceStatus::getValidValues())), __LINE__);
        }
        $this->status = $status;
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
     * @return \StructType\CryptoCurrencyWithdrawalInvoiceDTO
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
}
