<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bankCardTransferRequestDTO StructType
 * @subpackage Structs
 */
class BankCardTransferRequestDTO extends AbstractStructBase
{
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The cardHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolder;
    /**
     * The cardHolderAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderAddress;
    /**
     * The cardHolderCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderCountryCode;
    /**
     * The cardHolderIp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderIp;
    /**
     * The cardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardNumber;
    /**
     * The destCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destCurrency;
    /**
     * The expiryMonth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expiryMonth;
    /**
     * The expiryYear
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expiryYear;
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
     * Constructor method for bankCardTransferRequestDTO
     * @uses BankCardTransferRequestDTO::setAmount()
     * @uses BankCardTransferRequestDTO::setCardHolder()
     * @uses BankCardTransferRequestDTO::setCardHolderAddress()
     * @uses BankCardTransferRequestDTO::setCardHolderCountryCode()
     * @uses BankCardTransferRequestDTO::setCardHolderIp()
     * @uses BankCardTransferRequestDTO::setCardNumber()
     * @uses BankCardTransferRequestDTO::setDestCurrency()
     * @uses BankCardTransferRequestDTO::setExpiryMonth()
     * @uses BankCardTransferRequestDTO::setExpiryYear()
     * @uses BankCardTransferRequestDTO::setSavePaymentTemplate()
     * @uses BankCardTransferRequestDTO::setSrcWalletId()
     * @param float $amount
     * @param string $cardHolder
     * @param string $cardHolderAddress
     * @param string $cardHolderCountryCode
     * @param string $cardHolderIp
     * @param string $cardNumber
     * @param string $destCurrency
     * @param string $expiryMonth
     * @param string $expiryYear
     * @param bool $savePaymentTemplate
     * @param string $srcWalletId
     */
    public function __construct($amount = null, $cardHolder = null, $cardHolderAddress = null, $cardHolderCountryCode = null, $cardHolderIp = null, $cardNumber = null, $destCurrency = null, $expiryMonth = null, $expiryYear = null, $savePaymentTemplate = null, $srcWalletId = null)
    {
        $this
            ->setAmount($amount)
            ->setCardHolder($cardHolder)
            ->setCardHolderAddress($cardHolderAddress)
            ->setCardHolderCountryCode($cardHolderCountryCode)
            ->setCardHolderIp($cardHolderIp)
            ->setCardNumber($cardNumber)
            ->setDestCurrency($destCurrency)
            ->setExpiryMonth($expiryMonth)
            ->setExpiryYear($expiryYear)
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
     * @return \StructType\BankCardTransferRequestDTO
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
     * Get cardHolder value
     * @return string|null
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }
    /**
     * Set cardHolder value
     * @param string $cardHolder
     * @return \StructType\BankCardTransferRequestDTO
     */
    public function setCardHolder($cardHolder = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolder) && !is_string($cardHolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolder, true), gettype($cardHolder)), __LINE__);
        }
        $this->cardHolder = $cardHolder;
        return $this;
    }
    /**
     * Get cardHolderAddress value
     * @return string|null
     */
    public function getCardHolderAddress()
    {
        return $this->cardHolderAddress;
    }
    /**
     * Set cardHolderAddress value
     * @param string $cardHolderAddress
     * @return \StructType\BankCardTransferRequestDTO
     */
    public function setCardHolderAddress($cardHolderAddress = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderAddress) && !is_string($cardHolderAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderAddress, true), gettype($cardHolderAddress)), __LINE__);
        }
        $this->cardHolderAddress = $cardHolderAddress;
        return $this;
    }
    /**
     * Get cardHolderCountryCode value
     * @return string|null
     */
    public function getCardHolderCountryCode()
    {
        return $this->cardHolderCountryCode;
    }
    /**
     * Set cardHolderCountryCode value
     * @param string $cardHolderCountryCode
     * @return \StructType\BankCardTransferRequestDTO
     */
    public function setCardHolderCountryCode($cardHolderCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderCountryCode) && !is_string($cardHolderCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderCountryCode, true), gettype($cardHolderCountryCode)), __LINE__);
        }
        $this->cardHolderCountryCode = $cardHolderCountryCode;
        return $this;
    }
    /**
     * Get cardHolderIp value
     * @return string|null
     */
    public function getCardHolderIp()
    {
        return $this->cardHolderIp;
    }
    /**
     * Set cardHolderIp value
     * @param string $cardHolderIp
     * @return \StructType\BankCardTransferRequestDTO
     */
    public function setCardHolderIp($cardHolderIp = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderIp) && !is_string($cardHolderIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderIp, true), gettype($cardHolderIp)), __LINE__);
        }
        $this->cardHolderIp = $cardHolderIp;
        return $this;
    }
    /**
     * Get cardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    /**
     * Set cardNumber value
     * @param string $cardNumber
     * @return \StructType\BankCardTransferRequestDTO
     */
    public function setCardNumber($cardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNumber, true), gettype($cardNumber)), __LINE__);
        }
        $this->cardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get destCurrency value
     * @return string|null
     */
    public function getDestCurrency()
    {
        return $this->destCurrency;
    }
    /**
     * Set destCurrency value
     * @param string $destCurrency
     * @return \StructType\BankCardTransferRequestDTO
     */
    public function setDestCurrency($destCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($destCurrency) && !is_string($destCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destCurrency, true), gettype($destCurrency)), __LINE__);
        }
        $this->destCurrency = $destCurrency;
        return $this;
    }
    /**
     * Get expiryMonth value
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }
    /**
     * Set expiryMonth value
     * @param string $expiryMonth
     * @return \StructType\BankCardTransferRequestDTO
     */
    public function setExpiryMonth($expiryMonth = null)
    {
        // validation for constraint: string
        if (!is_null($expiryMonth) && !is_string($expiryMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryMonth, true), gettype($expiryMonth)), __LINE__);
        }
        $this->expiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * Get expiryYear value
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }
    /**
     * Set expiryYear value
     * @param string $expiryYear
     * @return \StructType\BankCardTransferRequestDTO
     */
    public function setExpiryYear($expiryYear = null)
    {
        // validation for constraint: string
        if (!is_null($expiryYear) && !is_string($expiryYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryYear, true), gettype($expiryYear)), __LINE__);
        }
        $this->expiryYear = $expiryYear;
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
     * @return \StructType\BankCardTransferRequestDTO
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
     * @return \StructType\BankCardTransferRequestDTO
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
