<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for registrationRequest StructType
 * @subpackage Structs
 */
class RegistrationRequest extends AbstractStructBase
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
     * The ip
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ip;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lastName;
    /**
     * Constructor method for registrationRequest
     * @uses RegistrationRequest::setEmail()
     * @uses RegistrationRequest::setFirstName()
     * @uses RegistrationRequest::setIp()
     * @uses RegistrationRequest::setLanguage()
     * @uses RegistrationRequest::setLastName()
     * @param string $email
     * @param string $firstName
     * @param string $ip
     * @param string $language
     * @param string $lastName
     */
    public function __construct($email = null, $firstName = null, $ip = null, $language = null, $lastName = null)
    {
        $this
            ->setEmail($email)
            ->setFirstName($firstName)
            ->setIp($ip)
            ->setLanguage($language)
            ->setLastName($lastName);
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
     * @return \StructType\RegistrationRequest
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
     * @return \StructType\RegistrationRequest
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
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \StructType\RegistrationRequest
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @uses \EnumType\SupportedLanguage::valueIsValid()
     * @uses \EnumType\SupportedLanguage::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $language
     * @return \StructType\RegistrationRequest
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SupportedLanguage::valueIsValid($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SupportedLanguage', is_array($language) ? implode(', ', $language) : var_export($language, true), implode(', ', \EnumType\SupportedLanguage::getValidValues())), __LINE__);
        }
        $this->language = $language;
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
     * @return \StructType\RegistrationRequest
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
}
