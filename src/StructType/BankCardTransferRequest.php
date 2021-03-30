<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bankCardTransferRequest StructType
 * @subpackage Structs
 */
class BankCardTransferRequest extends MoneyRequest
{
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
     * The cardHolderCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderCity;
    /**
     * The cardHolderCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderCountry;
    /**
     * The cardHolderDOB
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderDOB;
    /**
     * The cardHolderIp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderIp;
    /**
     * The cardHolderMobilePhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderMobilePhoneNumber;
    /**
     * The cardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardNumber;
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
     * Constructor method for bankCardTransferRequest
     * @uses BankCardTransferRequest::setCardHolder()
     * @uses BankCardTransferRequest::setCardHolderAddress()
     * @uses BankCardTransferRequest::setCardHolderCity()
     * @uses BankCardTransferRequest::setCardHolderCountry()
     * @uses BankCardTransferRequest::setCardHolderDOB()
     * @uses BankCardTransferRequest::setCardHolderIp()
     * @uses BankCardTransferRequest::setCardHolderMobilePhoneNumber()
     * @uses BankCardTransferRequest::setCardNumber()
     * @uses BankCardTransferRequest::setExpiryMonth()
     * @uses BankCardTransferRequest::setExpiryYear()
     * @param string $cardHolder
     * @param string $cardHolderAddress
     * @param string $cardHolderCity
     * @param string $cardHolderCountry
     * @param string $cardHolderDOB
     * @param string $cardHolderIp
     * @param string $cardHolderMobilePhoneNumber
     * @param string $cardNumber
     * @param string $expiryMonth
     * @param string $expiryYear
     */
    public function __construct($cardHolder = null, $cardHolderAddress = null, $cardHolderCity = null, $cardHolderCountry = null, $cardHolderDOB = null, $cardHolderIp = null, $cardHolderMobilePhoneNumber = null, $cardNumber = null, $expiryMonth = null, $expiryYear = null)
    {
        $this
            ->setCardHolder($cardHolder)
            ->setCardHolderAddress($cardHolderAddress)
            ->setCardHolderCity($cardHolderCity)
            ->setCardHolderCountry($cardHolderCountry)
            ->setCardHolderDOB($cardHolderDOB)
            ->setCardHolderIp($cardHolderIp)
            ->setCardHolderMobilePhoneNumber($cardHolderMobilePhoneNumber)
            ->setCardNumber($cardNumber)
            ->setExpiryMonth($expiryMonth)
            ->setExpiryYear($expiryYear);
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
     * @return \StructType\BankCardTransferRequest
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
     * @return \StructType\BankCardTransferRequest
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
     * Get cardHolderCity value
     * @return string|null
     */
    public function getCardHolderCity()
    {
        return $this->cardHolderCity;
    }
    /**
     * Set cardHolderCity value
     * @param string $cardHolderCity
     * @return \StructType\BankCardTransferRequest
     */
    public function setCardHolderCity($cardHolderCity = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderCity) && !is_string($cardHolderCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderCity, true), gettype($cardHolderCity)), __LINE__);
        }
        $this->cardHolderCity = $cardHolderCity;
        return $this;
    }
    /**
     * Get cardHolderCountry value
     * @return string|null
     */
    public function getCardHolderCountry()
    {
        return $this->cardHolderCountry;
    }
    /**
     * Set cardHolderCountry value
     * @param string $cardHolderCountry
     * @return \StructType\BankCardTransferRequest
     */
    public function setCardHolderCountry($cardHolderCountry = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderCountry) && !is_string($cardHolderCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderCountry, true), gettype($cardHolderCountry)), __LINE__);
        }
        $this->cardHolderCountry = $cardHolderCountry;
        return $this;
    }
    /**
     * Get cardHolderDOB value
     * @return string|null
     */
    public function getCardHolderDOB()
    {
        return $this->cardHolderDOB;
    }
    /**
     * Set cardHolderDOB value
     * @param string $cardHolderDOB
     * @return \StructType\BankCardTransferRequest
     */
    public function setCardHolderDOB($cardHolderDOB = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderDOB) && !is_string($cardHolderDOB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderDOB, true), gettype($cardHolderDOB)), __LINE__);
        }
        $this->cardHolderDOB = $cardHolderDOB;
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
     * @return \StructType\BankCardTransferRequest
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
     * Get cardHolderMobilePhoneNumber value
     * @return string|null
     */
    public function getCardHolderMobilePhoneNumber()
    {
        return $this->cardHolderMobilePhoneNumber;
    }
    /**
     * Set cardHolderMobilePhoneNumber value
     * @param string $cardHolderMobilePhoneNumber
     * @return \StructType\BankCardTransferRequest
     */
    public function setCardHolderMobilePhoneNumber($cardHolderMobilePhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderMobilePhoneNumber) && !is_string($cardHolderMobilePhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderMobilePhoneNumber, true), gettype($cardHolderMobilePhoneNumber)), __LINE__);
        }
        $this->cardHolderMobilePhoneNumber = $cardHolderMobilePhoneNumber;
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
     * @return \StructType\BankCardTransferRequest
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
     * @return \StructType\BankCardTransferRequest
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
     * @return \StructType\BankCardTransferRequest
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
}
