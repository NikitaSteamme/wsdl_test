<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for crypto2CardQuoteDTO StructType
 * @subpackage Structs
 */
class Crypto2CardQuoteDTO extends AbstractStructBase
{
    /**
     * The quoteExpiry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $quoteExpiry;
    /**
     * The quoteId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $quoteId;
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
     * Constructor method for crypto2CardQuoteDTO
     * @uses Crypto2CardQuoteDTO::setQuoteExpiry()
     * @uses Crypto2CardQuoteDTO::setQuoteId()
     * @uses Crypto2CardQuoteDTO::setRate()
     * @uses Crypto2CardQuoteDTO::setSourceAmount()
     * @uses Crypto2CardQuoteDTO::setSourceCurrency()
     * @uses Crypto2CardQuoteDTO::setTargetAmount()
     * @uses Crypto2CardQuoteDTO::setTargetCurrency()
     * @param int $quoteExpiry
     * @param string $quoteId
     * @param float $rate
     * @param float $sourceAmount
     * @param string $sourceCurrency
     * @param float $targetAmount
     * @param string $targetCurrency
     */
    public function __construct($quoteExpiry = null, $quoteId = null, $rate = null, $sourceAmount = null, $sourceCurrency = null, $targetAmount = null, $targetCurrency = null)
    {
        $this
            ->setQuoteExpiry($quoteExpiry)
            ->setQuoteId($quoteId)
            ->setRate($rate)
            ->setSourceAmount($sourceAmount)
            ->setSourceCurrency($sourceCurrency)
            ->setTargetAmount($targetAmount)
            ->setTargetCurrency($targetCurrency);
    }
    /**
     * Get quoteExpiry value
     * @return int|null
     */
    public function getQuoteExpiry()
    {
        return $this->quoteExpiry;
    }
    /**
     * Set quoteExpiry value
     * @param int $quoteExpiry
     * @return \StructType\Crypto2CardQuoteDTO
     */
    public function setQuoteExpiry($quoteExpiry = null)
    {
        // validation for constraint: int
        if (!is_null($quoteExpiry) && !(is_int($quoteExpiry) || ctype_digit($quoteExpiry))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quoteExpiry, true), gettype($quoteExpiry)), __LINE__);
        }
        $this->quoteExpiry = $quoteExpiry;
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
     * @return \StructType\Crypto2CardQuoteDTO
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
     * @return \StructType\Crypto2CardQuoteDTO
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
     * @return \StructType\Crypto2CardQuoteDTO
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
     * @return \StructType\Crypto2CardQuoteDTO
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
     * @return \StructType\Crypto2CardQuoteDTO
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
     * @return \StructType\Crypto2CardQuoteDTO
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
}
