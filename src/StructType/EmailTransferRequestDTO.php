<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailTransferRequestDTO StructType
 * @subpackage Structs
 */
class EmailTransferRequestDTO extends AbstractStructBase
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
     * The destCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destCurrency;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * The srcWalletId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $srcWalletId;
    /**
     * Constructor method for emailTransferRequestDTO
     * @uses EmailTransferRequestDTO::setAmount()
     * @uses EmailTransferRequestDTO::setComment()
     * @uses EmailTransferRequestDTO::setDestCurrency()
     * @uses EmailTransferRequestDTO::setEmail()
     * @uses EmailTransferRequestDTO::setSrcWalletId()
     * @param float $amount
     * @param string $comment
     * @param string $destCurrency
     * @param string $email
     * @param string $srcWalletId
     */
    public function __construct($amount = null, $comment = null, $destCurrency = null, $email = null, $srcWalletId = null)
    {
        $this
            ->setAmount($amount)
            ->setComment($comment)
            ->setDestCurrency($destCurrency)
            ->setEmail($email)
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
     * @return \StructType\EmailTransferRequestDTO
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
     * @return \StructType\EmailTransferRequestDTO
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
     * @return \StructType\EmailTransferRequestDTO
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
     * @return \StructType\EmailTransferRequestDTO
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
     * @return \StructType\EmailTransferRequestDTO
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
