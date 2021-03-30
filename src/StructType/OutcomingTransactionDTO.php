<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for outcomingTransactionDTO StructType
 * @subpackage Structs
 */
class OutcomingTransactionDTO extends AbstractBaseDTO
{
    /**
     * The accountName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $accountName;
    /**
     * The activityLevel
     * @var int
     */
    public $activityLevel;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The amountInUSD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amountInUSD;
    /**
     * The amountIncome
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amountIncome;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $comment;
    /**
     * The cryptoCurrencyAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cryptoCurrencyAmount;
    /**
     * The cryptoCurrencyCoinName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cryptoCurrencyCoinName;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * The currencyIncome
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currencyIncome;
    /**
     * The direction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $direction;
    /**
     * The fullCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $fullCommission;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $orderId;
    /**
     * The parentTransactionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parentTransactionId;
    /**
     * The receiverEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $receiverEmail;
    /**
     * The sci
     * @var bool
     */
    public $sci;
    /**
     * The senderEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $senderEmail;
    /**
     * The startTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $startTime;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The transactionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionName;
    /**
     * The updatedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $updatedTime;
    /**
     * The verificationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $verificationStatus;
    /**
     * The walletDestId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $walletDestId;
    /**
     * The walletSrcId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $walletSrcId;
    /**
     * Constructor method for outcomingTransactionDTO
     * @uses OutcomingTransactionDTO::setAccountName()
     * @uses OutcomingTransactionDTO::setActivityLevel()
     * @uses OutcomingTransactionDTO::setAmount()
     * @uses OutcomingTransactionDTO::setAmountInUSD()
     * @uses OutcomingTransactionDTO::setAmountIncome()
     * @uses OutcomingTransactionDTO::setComment()
     * @uses OutcomingTransactionDTO::setCryptoCurrencyAmount()
     * @uses OutcomingTransactionDTO::setCryptoCurrencyCoinName()
     * @uses OutcomingTransactionDTO::setCurrency()
     * @uses OutcomingTransactionDTO::setCurrencyIncome()
     * @uses OutcomingTransactionDTO::setDirection()
     * @uses OutcomingTransactionDTO::setFullCommission()
     * @uses OutcomingTransactionDTO::setOrderId()
     * @uses OutcomingTransactionDTO::setParentTransactionId()
     * @uses OutcomingTransactionDTO::setReceiverEmail()
     * @uses OutcomingTransactionDTO::setSci()
     * @uses OutcomingTransactionDTO::setSenderEmail()
     * @uses OutcomingTransactionDTO::setStartTime()
     * @uses OutcomingTransactionDTO::setStatus()
     * @uses OutcomingTransactionDTO::setTransactionName()
     * @uses OutcomingTransactionDTO::setUpdatedTime()
     * @uses OutcomingTransactionDTO::setVerificationStatus()
     * @uses OutcomingTransactionDTO::setWalletDestId()
     * @uses OutcomingTransactionDTO::setWalletSrcId()
     * @param string $accountName
     * @param int $activityLevel
     * @param float $amount
     * @param float $amountInUSD
     * @param float $amountIncome
     * @param string $comment
     * @param float $cryptoCurrencyAmount
     * @param string $cryptoCurrencyCoinName
     * @param string $currency
     * @param string $currencyIncome
     * @param string $direction
     * @param float $fullCommission
     * @param string $orderId
     * @param string $parentTransactionId
     * @param string $receiverEmail
     * @param bool $sci
     * @param string $senderEmail
     * @param string $startTime
     * @param string $status
     * @param string $transactionName
     * @param string $updatedTime
     * @param string $verificationStatus
     * @param string $walletDestId
     * @param string $walletSrcId
     */
    public function __construct($accountName = null, $activityLevel = null, $amount = null, $amountInUSD = null, $amountIncome = null, $comment = null, $cryptoCurrencyAmount = null, $cryptoCurrencyCoinName = null, $currency = null, $currencyIncome = null, $direction = null, $fullCommission = null, $orderId = null, $parentTransactionId = null, $receiverEmail = null, $sci = null, $senderEmail = null, $startTime = null, $status = null, $transactionName = null, $updatedTime = null, $verificationStatus = null, $walletDestId = null, $walletSrcId = null)
    {
        $this
            ->setAccountName($accountName)
            ->setActivityLevel($activityLevel)
            ->setAmount($amount)
            ->setAmountInUSD($amountInUSD)
            ->setAmountIncome($amountIncome)
            ->setComment($comment)
            ->setCryptoCurrencyAmount($cryptoCurrencyAmount)
            ->setCryptoCurrencyCoinName($cryptoCurrencyCoinName)
            ->setCurrency($currency)
            ->setCurrencyIncome($currencyIncome)
            ->setDirection($direction)
            ->setFullCommission($fullCommission)
            ->setOrderId($orderId)
            ->setParentTransactionId($parentTransactionId)
            ->setReceiverEmail($receiverEmail)
            ->setSci($sci)
            ->setSenderEmail($senderEmail)
            ->setStartTime($startTime)
            ->setStatus($status)
            ->setTransactionName($transactionName)
            ->setUpdatedTime($updatedTime)
            ->setVerificationStatus($verificationStatus)
            ->setWalletDestId($walletDestId)
            ->setWalletSrcId($walletSrcId);
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        return $this;
    }
    /**
     * Get activityLevel value
     * @return int|null
     */
    public function getActivityLevel()
    {
        return $this->activityLevel;
    }
    /**
     * Set activityLevel value
     * @param int $activityLevel
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setActivityLevel($activityLevel = null)
    {
        // validation for constraint: int
        if (!is_null($activityLevel) && !(is_int($activityLevel) || ctype_digit($activityLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($activityLevel, true), gettype($activityLevel)), __LINE__);
        }
        $this->activityLevel = $activityLevel;
        return $this;
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
     * @return \StructType\OutcomingTransactionDTO
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
     * Get amountInUSD value
     * @return float|null
     */
    public function getAmountInUSD()
    {
        return $this->amountInUSD;
    }
    /**
     * Set amountInUSD value
     * @param float $amountInUSD
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setAmountInUSD($amountInUSD = null)
    {
        // validation for constraint: float
        if (!is_null($amountInUSD) && !(is_float($amountInUSD) || is_numeric($amountInUSD))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountInUSD, true), gettype($amountInUSD)), __LINE__);
        }
        $this->amountInUSD = $amountInUSD;
        return $this;
    }
    /**
     * Get amountIncome value
     * @return float|null
     */
    public function getAmountIncome()
    {
        return $this->amountIncome;
    }
    /**
     * Set amountIncome value
     * @param float $amountIncome
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setAmountIncome($amountIncome = null)
    {
        // validation for constraint: float
        if (!is_null($amountIncome) && !(is_float($amountIncome) || is_numeric($amountIncome))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountIncome, true), gettype($amountIncome)), __LINE__);
        }
        $this->amountIncome = $amountIncome;
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
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
     * @return \StructType\OutcomingTransactionDTO
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
     * Get cryptoCurrencyCoinName value
     * @return string|null
     */
    public function getCryptoCurrencyCoinName()
    {
        return $this->cryptoCurrencyCoinName;
    }
    /**
     * Set cryptoCurrencyCoinName value
     * @uses \EnumType\CoinName::valueIsValid()
     * @uses \EnumType\CoinName::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cryptoCurrencyCoinName
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setCryptoCurrencyCoinName($cryptoCurrencyCoinName = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CoinName::valueIsValid($cryptoCurrencyCoinName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CoinName', is_array($cryptoCurrencyCoinName) ? implode(', ', $cryptoCurrencyCoinName) : var_export($cryptoCurrencyCoinName, true), implode(', ', \EnumType\CoinName::getValidValues())), __LINE__);
        }
        $this->cryptoCurrencyCoinName = $cryptoCurrencyCoinName;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get currencyIncome value
     * @return string|null
     */
    public function getCurrencyIncome()
    {
        return $this->currencyIncome;
    }
    /**
     * Set currencyIncome value
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyIncome
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setCurrencyIncome($currencyIncome = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($currencyIncome)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($currencyIncome) ? implode(', ', $currencyIncome) : var_export($currencyIncome, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->currencyIncome = $currencyIncome;
        return $this;
    }
    /**
     * Get direction value
     * @return string|null
     */
    public function getDirection()
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @uses \EnumType\TransactionDirection::valueIsValid()
     * @uses \EnumType\TransactionDirection::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $direction
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionDirection::valueIsValid($direction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionDirection', is_array($direction) ? implode(', ', $direction) : var_export($direction, true), implode(', ', \EnumType\TransactionDirection::getValidValues())), __LINE__);
        }
        $this->direction = $direction;
        return $this;
    }
    /**
     * Get fullCommission value
     * @return float|null
     */
    public function getFullCommission()
    {
        return $this->fullCommission;
    }
    /**
     * Set fullCommission value
     * @param float $fullCommission
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setFullCommission($fullCommission = null)
    {
        // validation for constraint: float
        if (!is_null($fullCommission) && !(is_float($fullCommission) || is_numeric($fullCommission))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fullCommission, true), gettype($fullCommission)), __LINE__);
        }
        $this->fullCommission = $fullCommission;
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
     * @return \StructType\OutcomingTransactionDTO
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
     * Get parentTransactionId value
     * @return string|null
     */
    public function getParentTransactionId()
    {
        return $this->parentTransactionId;
    }
    /**
     * Set parentTransactionId value
     * @param string $parentTransactionId
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setParentTransactionId($parentTransactionId = null)
    {
        // validation for constraint: string
        if (!is_null($parentTransactionId) && !is_string($parentTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentTransactionId, true), gettype($parentTransactionId)), __LINE__);
        }
        $this->parentTransactionId = $parentTransactionId;
        return $this;
    }
    /**
     * Get receiverEmail value
     * @return string|null
     */
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }
    /**
     * Set receiverEmail value
     * @param string $receiverEmail
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setReceiverEmail($receiverEmail = null)
    {
        // validation for constraint: string
        if (!is_null($receiverEmail) && !is_string($receiverEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverEmail, true), gettype($receiverEmail)), __LINE__);
        }
        $this->receiverEmail = $receiverEmail;
        return $this;
    }
    /**
     * Get sci value
     * @return bool|null
     */
    public function getSci()
    {
        return $this->sci;
    }
    /**
     * Set sci value
     * @param bool $sci
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setSci($sci = null)
    {
        // validation for constraint: boolean
        if (!is_null($sci) && !is_bool($sci)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sci, true), gettype($sci)), __LINE__);
        }
        $this->sci = $sci;
        return $this;
    }
    /**
     * Get senderEmail value
     * @return string|null
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }
    /**
     * Set senderEmail value
     * @param string $senderEmail
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setSenderEmail($senderEmail = null)
    {
        // validation for constraint: string
        if (!is_null($senderEmail) && !is_string($senderEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmail, true), gettype($senderEmail)), __LINE__);
        }
        $this->senderEmail = $senderEmail;
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
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
     * @uses \EnumType\TransactionStatus::valueIsValid()
     * @uses \EnumType\TransactionStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\TransactionStatus::getValidValues())), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get transactionName value
     * @return string|null
     */
    public function getTransactionName()
    {
        return $this->transactionName;
    }
    /**
     * Set transactionName value
     * @uses \EnumType\TransactionName::valueIsValid()
     * @uses \EnumType\TransactionName::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionName
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setTransactionName($transactionName = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionName::valueIsValid($transactionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionName', is_array($transactionName) ? implode(', ', $transactionName) : var_export($transactionName, true), implode(', ', \EnumType\TransactionName::getValidValues())), __LINE__);
        }
        $this->transactionName = $transactionName;
        return $this;
    }
    /**
     * Get updatedTime value
     * @return string|null
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }
    /**
     * Set updatedTime value
     * @param string $updatedTime
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setUpdatedTime($updatedTime = null)
    {
        // validation for constraint: string
        if (!is_null($updatedTime) && !is_string($updatedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedTime, true), gettype($updatedTime)), __LINE__);
        }
        $this->updatedTime = $updatedTime;
        return $this;
    }
    /**
     * Get verificationStatus value
     * @return string|null
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }
    /**
     * Set verificationStatus value
     * @uses \EnumType\VerificationStatus::valueIsValid()
     * @uses \EnumType\VerificationStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $verificationStatus
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setVerificationStatus($verificationStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\VerificationStatus::valueIsValid($verificationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\VerificationStatus', is_array($verificationStatus) ? implode(', ', $verificationStatus) : var_export($verificationStatus, true), implode(', ', \EnumType\VerificationStatus::getValidValues())), __LINE__);
        }
        $this->verificationStatus = $verificationStatus;
        return $this;
    }
    /**
     * Get walletDestId value
     * @return string|null
     */
    public function getWalletDestId()
    {
        return $this->walletDestId;
    }
    /**
     * Set walletDestId value
     * @param string $walletDestId
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setWalletDestId($walletDestId = null)
    {
        // validation for constraint: string
        if (!is_null($walletDestId) && !is_string($walletDestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletDestId, true), gettype($walletDestId)), __LINE__);
        }
        $this->walletDestId = $walletDestId;
        return $this;
    }
    /**
     * Get walletSrcId value
     * @return string|null
     */
    public function getWalletSrcId()
    {
        return $this->walletSrcId;
    }
    /**
     * Set walletSrcId value
     * @param string $walletSrcId
     * @return \StructType\OutcomingTransactionDTO
     */
    public function setWalletSrcId($walletSrcId = null)
    {
        // validation for constraint: string
        if (!is_null($walletSrcId) && !is_string($walletSrcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletSrcId, true), gettype($walletSrcId)), __LINE__);
        }
        $this->walletSrcId = $walletSrcId;
        return $this;
    }
}
