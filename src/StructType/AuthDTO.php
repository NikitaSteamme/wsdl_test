<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authDTO StructType
 * @subpackage Structs
 */
class AuthDTO extends AbstractStructBase
{
    /**
     * The accountEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $accountEmail;
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $accountId;
    /**
     * The apiName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $apiName;
    /**
     * The authenticationToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $authenticationToken;
    /**
     * The ipAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ipAddress;
    /**
     * The systemAccountName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $systemAccountName;
    /**
     * Constructor method for authDTO
     * @uses AuthDTO::setAccountEmail()
     * @uses AuthDTO::setAccountId()
     * @uses AuthDTO::setApiName()
     * @uses AuthDTO::setAuthenticationToken()
     * @uses AuthDTO::setIpAddress()
     * @uses AuthDTO::setSystemAccountName()
     * @param string $accountEmail
     * @param string $accountId
     * @param string $apiName
     * @param string $authenticationToken
     * @param string $ipAddress
     * @param string $systemAccountName
     */
    public function __construct($accountEmail = null, $accountId = null, $apiName = null, $authenticationToken = null, $ipAddress = null, $systemAccountName = null)
    {
        $this
            ->setAccountEmail($accountEmail)
            ->setAccountId($accountId)
            ->setApiName($apiName)
            ->setAuthenticationToken($authenticationToken)
            ->setIpAddress($ipAddress)
            ->setSystemAccountName($systemAccountName);
    }
    /**
     * Get accountEmail value
     * @return string|null
     */
    public function getAccountEmail()
    {
        return $this->accountEmail;
    }
    /**
     * Set accountEmail value
     * @param string $accountEmail
     * @return \StructType\AuthDTO
     */
    public function setAccountEmail($accountEmail = null)
    {
        // validation for constraint: string
        if (!is_null($accountEmail) && !is_string($accountEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountEmail, true), gettype($accountEmail)), __LINE__);
        }
        $this->accountEmail = $accountEmail;
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \StructType\AuthDTO
     */
    public function setAccountId($accountId = null)
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * Get apiName value
     * @return string|null
     */
    public function getApiName()
    {
        return $this->apiName;
    }
    /**
     * Set apiName value
     * @param string $apiName
     * @return \StructType\AuthDTO
     */
    public function setApiName($apiName = null)
    {
        // validation for constraint: string
        if (!is_null($apiName) && !is_string($apiName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiName, true), gettype($apiName)), __LINE__);
        }
        $this->apiName = $apiName;
        return $this;
    }
    /**
     * Get authenticationToken value
     * @return string|null
     */
    public function getAuthenticationToken()
    {
        return $this->authenticationToken;
    }
    /**
     * Set authenticationToken value
     * @param string $authenticationToken
     * @return \StructType\AuthDTO
     */
    public function setAuthenticationToken($authenticationToken = null)
    {
        // validation for constraint: string
        if (!is_null($authenticationToken) && !is_string($authenticationToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationToken, true), gettype($authenticationToken)), __LINE__);
        }
        $this->authenticationToken = $authenticationToken;
        return $this;
    }
    /**
     * Get ipAddress value
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    /**
     * Set ipAddress value
     * @param string $ipAddress
     * @return \StructType\AuthDTO
     */
    public function setIpAddress($ipAddress = null)
    {
        // validation for constraint: string
        if (!is_null($ipAddress) && !is_string($ipAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipAddress, true), gettype($ipAddress)), __LINE__);
        }
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * Get systemAccountName value
     * @return string|null
     */
    public function getSystemAccountName()
    {
        return $this->systemAccountName;
    }
    /**
     * Set systemAccountName value
     * @param string $systemAccountName
     * @return \StructType\AuthDTO
     */
    public function setSystemAccountName($systemAccountName = null)
    {
        // validation for constraint: string
        if (!is_null($systemAccountName) && !is_string($systemAccountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemAccountName, true), gettype($systemAccountName)), __LINE__);
        }
        $this->systemAccountName = $systemAccountName;
        return $this;
    }
}
