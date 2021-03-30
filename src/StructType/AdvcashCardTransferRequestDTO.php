<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for advcashCardTransferRequestDTO StructType
 * @subpackage Structs
 */
class AdvcashCardTransferRequestDTO extends AbstractStructBase
{
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The cardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardType;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * The savePaymentTemplate
     * @var bool
     */
    public $savePaymentTemplate;
    /**
     * The srcWalletId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $srcWalletId;
    /**
     * Constructor method for advcashCardTransferRequestDTO
     * @uses AdvcashCardTransferRequestDTO::setAmount()
     * @uses AdvcashCardTransferRequestDTO::setCardType()
     * @uses AdvcashCardTransferRequestDTO::setCurrency()
     * @uses AdvcashCardTransferRequestDTO::setEmail()
     * @uses AdvcashCardTransferRequestDTO::setSavePaymentTemplate()
     * @uses AdvcashCardTransferRequestDTO::setSrcWalletId()
     * @param float $amount
     * @param string $cardType
     * @param string $currency
     * @param string $email
     * @param bool $savePaymentTemplate
     * @param string $srcWalletId
     */
    public function __construct($amount = null, $cardType = null, $currency = null, $email = null, $savePaymentTemplate = null, $srcWalletId = null)
    {
        $this
            ->setAmount($amount)
            ->setCardType($cardType)
            ->setCurrency($currency)
            ->setEmail($email)
            ->setSavePaymentTemplate($savePaymentTemplate)
            ->setSrcWalletId($srcWalletId);
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
     * @return \StructType\AdvcashCardTransferRequestDTO
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
     * Get cardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @uses \EnumType\CardType::valueIsValid()
     * @uses \EnumType\CardType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cardType
     * @return \StructType\AdvcashCardTransferRequestDTO
     */
    public function setCardType($cardType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CardType::valueIsValid($cardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CardType', is_array($cardType) ? implode(', ', $cardType) : var_export($cardType, true), implode(', ', \EnumType\CardType::getValidValues())), __LINE__);
        }
        $this->cardType = $cardType;
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
     * @return \StructType\AdvcashCardTransferRequestDTO
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
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \StructType\AdvcashCardTransferRequestDTO
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
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
     * @return \StructType\AdvcashCardTransferRequestDTO
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
     * @return \StructType\AdvcashCardTransferRequestDTO
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
}
