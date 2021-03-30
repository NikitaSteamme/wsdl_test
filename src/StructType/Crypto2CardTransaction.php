<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for crypto2CardTransaction StructType
 * @subpackage Structs
 */
class Crypto2CardTransaction extends AbstractStructBase
{
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $createdAt;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The rate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $rate;
    /**
     * The sourceAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $sourceAmount;
    /**
     * The sourceCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sourceCurrency;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The targetAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $targetAmount;
    /**
     * The targetCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $targetCurrency;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $updatedAt;
    /**
     * Constructor method for crypto2CardTransaction
     * @uses Crypto2CardTransaction::setCreatedAt()
     * @uses Crypto2CardTransaction::setId()
     * @uses Crypto2CardTransaction::setRate()
     * @uses Crypto2CardTransaction::setSourceAmount()
     * @uses Crypto2CardTransaction::setSourceCurrency()
     * @uses Crypto2CardTransaction::setStatus()
     * @uses Crypto2CardTransaction::setTargetAmount()
     * @uses Crypto2CardTransaction::setTargetCurrency()
     * @uses Crypto2CardTransaction::setUpdatedAt()
     * @param int $createdAt
     * @param string $id
     * @param float $rate
     * @param float $sourceAmount
     * @param string $sourceCurrency
     * @param string $status
     * @param float $targetAmount
     * @param string $targetCurrency
     * @param int $updatedAt
     */
    public function __construct($createdAt = null, $id = null, $rate = null, $sourceAmount = null, $sourceCurrency = null, $status = null, $targetAmount = null, $targetCurrency = null, $updatedAt = null)
    {
        $this
            ->setCreatedAt($createdAt)
            ->setId($id)
            ->setRate($rate)
            ->setSourceAmount($sourceAmount)
            ->setSourceCurrency($sourceCurrency)
            ->setStatus($status)
            ->setTargetAmount($targetAmount)
            ->setTargetCurrency($targetCurrency)
            ->setUpdatedAt($updatedAt);
    }
    /**
     * Get createdAt value
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * Set createdAt value
     * @param int $createdAt
     * @return \StructType\Crypto2CardTransaction
     */
    public function setCreatedAt($createdAt = null)
    {
        // validation for constraint: int
        if (!is_null($createdAt) && !(is_int($createdAt) || ctype_digit($createdAt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($createdAt, true), gettype($createdAt)), __LINE__);
        }
        $this->createdAt = $createdAt;
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
     * @return \StructType\Crypto2CardTransaction
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
     * Get rate value
     * @return float|null
     */
    public function getRate()
    {
        return $this->rate;
    }
    /**
     * Set rate value
     * @param float $rate
     * @return \StructType\Crypto2CardTransaction
     */
    public function setRate($rate = null)
    {
        // validation for constraint: float
        if (!is_null($rate) && !(is_float($rate) || is_numeric($rate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rate, true), gettype($rate)), __LINE__);
        }
        $this->rate = $rate;
        return $this;
    }
    /**
     * Get sourceAmount value
     * @return float|null
     */
    public function getSourceAmount()
    {
        return $this->sourceAmount;
    }
    /**
     * Set sourceAmount value
     * @param float $sourceAmount
     * @return \StructType\Crypto2CardTransaction
     */
    public function setSourceAmount($sourceAmount = null)
    {
        // validation for constraint: float
        if (!is_null($sourceAmount) && !(is_float($sourceAmount) || is_numeric($sourceAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sourceAmount, true), gettype($sourceAmount)), __LINE__);
        }
        $this->sourceAmount = $sourceAmount;
        return $this;
    }
    /**
     * Get sourceCurrency value
     * @return string|null
     */
    public function getSourceCurrency()
    {
        return $this->sourceCurrency;
    }
    /**
     * Set sourceCurrency value
     * @uses \EnumType\CoinName::valueIsValid()
     * @uses \EnumType\CoinName::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sourceCurrency
     * @return \StructType\Crypto2CardTransaction
     */
    public function setSourceCurrency($sourceCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CoinName::valueIsValid($sourceCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CoinName', is_array($sourceCurrency) ? implode(', ', $sourceCurrency) : var_export($sourceCurrency, true), implode(', ', \EnumType\CoinName::getValidValues())), __LINE__);
        }
        $this->sourceCurrency = $sourceCurrency;
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
     * @return \StructType\Crypto2CardTransaction
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
     * Get targetAmount value
     * @return float|null
     */
    public function getTargetAmount()
    {
        return $this->targetAmount;
    }
    /**
     * Set targetAmount value
     * @param float $targetAmount
     * @return \StructType\Crypto2CardTransaction
     */
    public function setTargetAmount($targetAmount = null)
    {
        // validation for constraint: float
        if (!is_null($targetAmount) && !(is_float($targetAmount) || is_numeric($targetAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($targetAmount, true), gettype($targetAmount)), __LINE__);
        }
        $this->targetAmount = $targetAmount;
        return $this;
    }
    /**
     * Get targetCurrency value
     * @return string|null
     */
    public function getTargetCurrency()
    {
        return $this->targetCurrency;
    }
    /**
     * Set targetCurrency value
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $targetCurrency
     * @return \StructType\Crypto2CardTransaction
     */
    public function setTargetCurrency($targetCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($targetCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($targetCurrency) ? implode(', ', $targetCurrency) : var_export($targetCurrency, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->targetCurrency = $targetCurrency;
        return $this;
    }
    /**
     * Get updatedAt value
     * @return int|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * Set updatedAt value
     * @param int $updatedAt
     * @return \StructType\Crypto2CardTransaction
     */
    public function setUpdatedAt($updatedAt = null)
    {
        // validation for constraint: int
        if (!is_null($updatedAt) && !(is_int($updatedAt) || ctype_digit($updatedAt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($updatedAt, true), gettype($updatedAt)), __LINE__);
        }
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
