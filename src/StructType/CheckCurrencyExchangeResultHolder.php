<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkCurrencyExchangeResultHolder StructType
 * @subpackage Structs
 */
class CheckCurrencyExchangeResultHolder extends CheckCurrencyExchangeRequest
{
    /**
     * The amountExchanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amountExchanged;
    /**
     * The rate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $rate;
    /**
     * The cryptoCurrencyAmountWithFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cryptoCurrencyAmountWithFee;
    /**
     * The cryptoCurrencyWithdrawalFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cryptoCurrencyWithdrawalFee;
    /**
     * Constructor method for checkCurrencyExchangeResultHolder
     * @uses CheckCurrencyExchangeResultHolder::setAmountExchanged()
     * @uses CheckCurrencyExchangeResultHolder::setRate()
     * @uses CheckCurrencyExchangeResultHolder::setCryptoCurrencyAmountWithFee()
     * @uses CheckCurrencyExchangeResultHolder::setCryptoCurrencyWithdrawalFee()
     * @param float $amountExchanged
     * @param float $rate
     * @param float $cryptoCurrencyAmountWithFee
     * @param float $cryptoCurrencyWithdrawalFee
     */
    public function __construct($amountExchanged = null, $rate = null, $cryptoCurrencyAmountWithFee = null, $cryptoCurrencyWithdrawalFee = null)
    {
        $this
            ->setAmountExchanged($amountExchanged)
            ->setRate($rate)
            ->setCryptoCurrencyAmountWithFee($cryptoCurrencyAmountWithFee)
            ->setCryptoCurrencyWithdrawalFee($cryptoCurrencyWithdrawalFee);
    }
    /**
     * Get amountExchanged value
     * @return float|null
     */
    public function getAmountExchanged()
    {
        return $this->amountExchanged;
    }
    /**
     * Set amountExchanged value
     * @param float $amountExchanged
     * @return \StructType\CheckCurrencyExchangeResultHolder
     */
    public function setAmountExchanged($amountExchanged = null)
    {
        // validation for constraint: float
        if (!is_null($amountExchanged) && !(is_float($amountExchanged) || is_numeric($amountExchanged))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountExchanged, true), gettype($amountExchanged)), __LINE__);
        }
        $this->amountExchanged = $amountExchanged;
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
     * @return \StructType\CheckCurrencyExchangeResultHolder
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
     * Get cryptoCurrencyAmountWithFee value
     * @return float|null
     */
    public function getCryptoCurrencyAmountWithFee()
    {
        return $this->cryptoCurrencyAmountWithFee;
    }
    /**
     * Set cryptoCurrencyAmountWithFee value
     * @param float $cryptoCurrencyAmountWithFee
     * @return \StructType\CheckCurrencyExchangeResultHolder
     */
    public function setCryptoCurrencyAmountWithFee($cryptoCurrencyAmountWithFee = null)
    {
        // validation for constraint: float
        if (!is_null($cryptoCurrencyAmountWithFee) && !(is_float($cryptoCurrencyAmountWithFee) || is_numeric($cryptoCurrencyAmountWithFee))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cryptoCurrencyAmountWithFee, true), gettype($cryptoCurrencyAmountWithFee)), __LINE__);
        }
        $this->cryptoCurrencyAmountWithFee = $cryptoCurrencyAmountWithFee;
        return $this;
    }
    /**
     * Get cryptoCurrencyWithdrawalFee value
     * @return float|null
     */
    public function getCryptoCurrencyWithdrawalFee()
    {
        return $this->cryptoCurrencyWithdrawalFee;
    }
    /**
     * Set cryptoCurrencyWithdrawalFee value
     * @param float $cryptoCurrencyWithdrawalFee
     * @return \StructType\CheckCurrencyExchangeResultHolder
     */
    public function setCryptoCurrencyWithdrawalFee($cryptoCurrencyWithdrawalFee = null)
    {
        // validation for constraint: float
        if (!is_null($cryptoCurrencyWithdrawalFee) && !(is_float($cryptoCurrencyWithdrawalFee) || is_numeric($cryptoCurrencyWithdrawalFee))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cryptoCurrencyWithdrawalFee, true), gettype($cryptoCurrencyWithdrawalFee)), __LINE__);
        }
        $this->cryptoCurrencyWithdrawalFee = $cryptoCurrencyWithdrawalFee;
        return $this;
    }
}
