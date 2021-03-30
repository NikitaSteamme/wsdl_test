<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for validateAccountRequestDTO StructType
 * @subpackage Structs
 */
class ValidateAccountRequestDTO extends AbstractStructBase
{
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $firstName;
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lastName;
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $walletId;
    /**
     * Constructor method for validateAccountRequestDTO
     * @uses ValidateAccountRequestDTO::setEmail()
     * @uses ValidateAccountRequestDTO::setFirstName()
     * @uses ValidateAccountRequestDTO::setLastName()
     * @uses ValidateAccountRequestDTO::setWalletId()
     * @param string $email
     * @param string $firstName
     * @param string $lastName
     * @param string $walletId
     */
    public function __construct($email = null, $firstName = null, $lastName = null, $walletId = null)
    {
        $this
            ->setEmail($email)
            ->setFirstName($firstName)
            ->setLastName($lastName)
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
     * @return \StructType\ValidateAccountRequestDTO
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
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \StructType\ValidateAccountRequestDTO
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \StructType\ValidateAccountRequestDTO
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
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
     * @return \StructType\ValidateAccountRequestDTO
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
