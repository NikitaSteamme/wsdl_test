<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for withdrawalThroughExternalPaymentSystemRequestDTO
 * StructType
 * @subpackage Structs
 */
class WithdrawalThroughExternalPaymentSystemRequestDTO extends AbstractStructBase
{
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $comment;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * The externalPaymentSystem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $externalPaymentSystem;
    /**
     * The receiver
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $receiver;
    /**
     * The savePaymentTemplate
     * @var bool
     */
    public $savePaymentTemplate;
    /**
     * Constructor method for withdrawalThroughExternalPaymentSystemRequestDTO
     * @uses WithdrawalThroughExternalPaymentSystemRequestDTO::setAmount()
     * @uses WithdrawalThroughExternalPaymentSystemRequestDTO::setComment()
     * @uses WithdrawalThroughExternalPaymentSystemRequestDTO::setCurrency()
     * @uses WithdrawalThroughExternalPaymentSystemRequestDTO::setExternalPaymentSystem()
     * @uses WithdrawalThroughExternalPaymentSystemRequestDTO::setReceiver()
     * @uses WithdrawalThroughExternalPaymentSystemRequestDTO::setSavePaymentTemplate()
     * @param float $amount
     * @param string $comment
     * @param string $currency
     * @param string $externalPaymentSystem
     * @param string $receiver
     * @param bool $savePaymentTemplate
     */
    public function __construct($amount = null, $comment = null, $currency = null, $externalPaymentSystem = null, $receiver = null, $savePaymentTemplate = null)
    {
        $this
            ->setAmount($amount)
            ->setComment($comment)
            ->setCurrency($currency)
            ->setExternalPaymentSystem($externalPaymentSystem)
            ->setReceiver($receiver)
            ->setSavePaymentTemplate($savePaymentTemplate);
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
     * @return \StructType\WithdrawalThroughExternalPaymentSystemRequestDTO
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
     * @return \StructType\WithdrawalThroughExternalPaymentSystemRequestDTO
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
     * @return \StructType\WithdrawalThroughExternalPaymentSystemRequestDTO
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
     * Get externalPaymentSystem value
     * @return string|null
     */
    public function getExternalPaymentSystem()
    {
        return $this->externalPaymentSystem;
    }
    /**
     * Set externalPaymentSystem value
     * @uses \EnumType\ExternalSystemWithdrawalType::valueIsValid()
     * @uses \EnumType\ExternalSystemWithdrawalType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $externalPaymentSystem
     * @return \StructType\WithdrawalThroughExternalPaymentSystemRequestDTO
     */
    public function setExternalPaymentSystem($externalPaymentSystem = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ExternalSystemWithdrawalType::valueIsValid($externalPaymentSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ExternalSystemWithdrawalType', is_array($externalPaymentSystem) ? implode(', ', $externalPaymentSystem) : var_export($externalPaymentSystem, true), implode(', ', \EnumType\ExternalSystemWithdrawalType::getValidValues())), __LINE__);
        }
        $this->externalPaymentSystem = $externalPaymentSystem;
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
     * @return \StructType\WithdrawalThroughExternalPaymentSystemRequestDTO
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
     * Get savePaymentTemplate value
     * @return bool|null
     */
    public function getSavePaymentTemplate()
    {
        return $this->savePaymentTemplate;
    }
    /**
     * Set savePaymentTemplate value
     * @param bool $savePaymentTemplate
     * @return \StructType\WithdrawalThroughExternalPaymentSystemRequestDTO
     */
    public function setSavePaymentTemplate($savePaymentTemplate = null)
    {
        // validation for constraint: boolean
        if (!is_null($savePaymentTemplate) && !is_bool($savePaymentTemplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($savePaymentTemplate, true), gettype($savePaymentTemplate)), __LINE__);
        }
        $this->savePaymentTemplate = $savePaymentTemplate;
        return $this;
    }
}
