<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transferRequestDTO StructType
 * @subpackage Structs
 */
class TransferRequestDTO extends AbstractStructBase
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
     * The destWalletId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destWalletId;
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
     * Constructor method for transferRequestDTO
     * @uses TransferRequestDTO::setAmount()
     * @uses TransferRequestDTO::setComment()
     * @uses TransferRequestDTO::setDestWalletId()
     * @uses TransferRequestDTO::setSavePaymentTemplate()
     * @uses TransferRequestDTO::setSrcWalletId()
     * @param float $amount
     * @param string $comment
     * @param string $destWalletId
     * @param bool $savePaymentTemplate
     * @param string $srcWalletId
     */
    public function __construct($amount = null, $comment = null, $destWalletId = null, $savePaymentTemplate = null, $srcWalletId = null)
    {
        $this
            ->setAmount($amount)
            ->setComment($comment)
            ->setDestWalletId($destWalletId)
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
     * @return \StructType\TransferRequestDTO
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
     * @return \StructType\TransferRequestDTO
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
     * Get destWalletId value
     * @return string|null
     */
    public function getDestWalletId()
    {
        return $this->destWalletId;
    }
    /**
     * Set destWalletId value
     * @param string $destWalletId
     * @return \StructType\TransferRequestDTO
     */
    public function setDestWalletId($destWalletId = null)
    {
        // validation for constraint: string
        if (!is_null($destWalletId) && !is_string($destWalletId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destWalletId, true), gettype($destWalletId)), __LINE__);
        }
        $this->destWalletId = $destWalletId;
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
     * @return \StructType\TransferRequestDTO
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
     * @return \StructType\TransferRequestDTO
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
