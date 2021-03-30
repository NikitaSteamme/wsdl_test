<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for withdrawToEcurrencyRequest StructType
 * @subpackage Structs
 */
class WithdrawToEcurrencyRequest extends MoneyRequest
{
    /**
     * The ecurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ecurrency;
    /**
     * The receiver
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $receiver;
    /**
     * The destinationTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destinationTag;
    /**
     * The cryptoCurrencyAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cryptoCurrencyAmount;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $orderId;
    /**
     * The depositMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $depositMethod;
    /**
     * Constructor method for withdrawToEcurrencyRequest
     * @uses WithdrawToEcurrencyRequest::setEcurrency()
     * @uses WithdrawToEcurrencyRequest::setReceiver()
     * @uses WithdrawToEcurrencyRequest::setDestinationTag()
     * @uses WithdrawToEcurrencyRequest::setCryptoCurrencyAmount()
     * @uses WithdrawToEcurrencyRequest::setOrderId()
     * @uses WithdrawToEcurrencyRequest::setDepositMethod()
     * @param string $ecurrency
     * @param string $receiver
     * @param string $destinationTag
     * @param float $cryptoCurrencyAmount
     * @param string $orderId
     * @param string $depositMethod
     */
    public function __construct($ecurrency = null, $receiver = null, $destinationTag = null, $cryptoCurrencyAmount = null, $orderId = null, $depositMethod = null)
    {
        $this
            ->setEcurrency($ecurrency)
            ->setReceiver($receiver)
            ->setDestinationTag($destinationTag)
            ->setCryptoCurrencyAmount($cryptoCurrencyAmount)
            ->setOrderId($orderId)
            ->setDepositMethod($depositMethod);
    }
    /**
     * Get ecurrency value
     * @return string|null
     */
    public function getEcurrency()
    {
        return $this->ecurrency;
    }
    /**
     * Set ecurrency value
     * @uses \EnumType\Ecurrency::valueIsValid()
     * @uses \EnumType\Ecurrency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ecurrency
     * @return \StructType\WithdrawToEcurrencyRequest
     */
    public function setEcurrency($ecurrency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Ecurrency::valueIsValid($ecurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Ecurrency', is_array($ecurrency) ? implode(', ', $ecurrency) : var_export($ecurrency, true), implode(', ', \EnumType\Ecurrency::getValidValues())), __LINE__);
        }
        $this->ecurrency = $ecurrency;
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
     * @return \StructType\WithdrawToEcurrencyRequest
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
     * @return \StructType\WithdrawToEcurrencyRequest
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
     * @return \StructType\WithdrawToEcurrencyRequest
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
     * @return \StructType\WithdrawToEcurrencyRequest
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
     * Get depositMethod value
     * @return string|null
     */
    public function getDepositMethod()
    {
        return $this->depositMethod;
    }
    /**
     * Set depositMethod value
     * @param string $depositMethod
     * @return \StructType\WithdrawToEcurrencyRequest
     */
    public function setDepositMethod($depositMethod = null)
    {
        // validation for constraint: string
        if (!is_null($depositMethod) && !is_string($depositMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositMethod, true), gettype($depositMethod)), __LINE__);
        }
        $this->depositMethod = $depositMethod;
        return $this;
    }
}
