<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for advcashCardTransferRequest StructType
 * @subpackage Structs
 */
class AdvcashCardTransferRequest extends MoneyRequest
{
    /**
     * The cardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardType;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * Constructor method for advcashCardTransferRequest
     * @uses AdvcashCardTransferRequest::setCardType()
     * @uses AdvcashCardTransferRequest::setEmail()
     * @param string $cardType
     * @param string $email
     */
    public function __construct($cardType = null, $email = null)
    {
        $this
            ->setCardType($cardType)
            ->setEmail($email);
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
     * @return \StructType\AdvcashCardTransferRequest
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
     * @return \StructType\AdvcashCardTransferRequest
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
}
