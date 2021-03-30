<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMoneyRequest StructType
 * @subpackage Structs
 */
class SendMoneyRequest extends MoneyRequest
{
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $walletId;
    /**
     * Constructor method for sendMoneyRequest
     * @uses SendMoneyRequest::setEmail()
     * @uses SendMoneyRequest::setWalletId()
     * @param string $email
     * @param string $walletId
     */
    public function __construct($email = null, $walletId = null)
    {
        $this
            ->setEmail($email)
            ->setWalletId($walletId);
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
     * @return \StructType\SendMoneyRequest
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
     * Get walletId value
     * @return string|null
     */
    public function getWalletId()
    {
        return $this->walletId;
    }
    /**
     * Set walletId value
     * @param string $walletId
     * @return \StructType\SendMoneyRequest
     */
    public function setWalletId($walletId = null)
    {
        // validation for constraint: string
        if (!is_null($walletId) && !is_string($walletId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletId, true), gettype($walletId)), __LINE__);
        }
        $this->walletId = $walletId;
        return $this;
    }
}
