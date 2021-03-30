<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for moneyRequest StructType
 * @subpackage Structs
 */
abstract class MoneyRequest extends AbstractStructBase
{
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * The note
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $note;
    /**
     * The savePaymentTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $savePaymentTemplate;
    /**
     * Constructor method for moneyRequest
     * @uses MoneyRequest::setAmount()
     * @uses MoneyRequest::setCurrency()
     * @uses MoneyRequest::setNote()
     * @uses MoneyRequest::setSavePaymentTemplate()
     * @param float $amount
     * @param string $currency
     * @param string $note
     * @param bool $savePaymentTemplate
     */
    public function __construct($amount = null, $currency = null, $note = null, $savePaymentTemplate = null)
    {
        $this
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setNote($note)
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
     * @return \StructType\MoneyRequest
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
     * @return \StructType\MoneyRequest
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
     * Get note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }
    /**
     * Set note value
     * @param string $note
     * @return \StructType\MoneyRequest
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->note = $note;
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
     * @return \StructType\MoneyRequest
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
