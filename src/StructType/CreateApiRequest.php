<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createApiRequest StructType
 * @subpackage Structs
 */
class CreateApiRequest extends AbstractStructBase
{
    /**
     * The apiIp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $apiIp;
    /**
     * The apiKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $apiKey;
    /**
     * The apiName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $apiName;
    /**
     * The userEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $userEmail;
    /**
     * Constructor method for createApiRequest
     * @uses CreateApiRequest::setApiIp()
     * @uses CreateApiRequest::setApiKey()
     * @uses CreateApiRequest::setApiName()
     * @uses CreateApiRequest::setUserEmail()
     * @param string $apiIp
     * @param string $apiKey
     * @param string $apiName
     * @param string $userEmail
     */
    public function __construct($apiIp = null, $apiKey = null, $apiName = null, $userEmail = null)
    {
        $this
            ->setApiIp($apiIp)
            ->setApiKey($apiKey)
            ->setApiName($apiName)
            ->setUserEmail($userEmail);
    }
    /**
     * Get apiIp value
     * @return string|null
     */
    public function getApiIp()
    {
        return $this->apiIp;
    }
    /**
     * Set apiIp value
     * @param string $apiIp
     * @return \StructType\CreateApiRequest
     */
    public function setApiIp($apiIp = null)
    {
        // validation for constraint: string
        if (!is_null($apiIp) && !is_string($apiIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiIp, true), gettype($apiIp)), __LINE__);
        }
        $this->apiIp = $apiIp;
        return $this;
    }
    /**
     * Get apiKey value
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
    /**
     * Set apiKey value
     * @param string $apiKey
     * @return \StructType\CreateApiRequest
     */
    public function setApiKey($apiKey = null)
    {
        // validation for constraint: string
        if (!is_null($apiKey) && !is_string($apiKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiKey, true), gettype($apiKey)), __LINE__);
        }
        $this->apiKey = $apiKey;
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
     * @return \StructType\CreateApiRequest
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
     * Get userEmail value
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }
    /**
     * Set userEmail value
     * @param string $userEmail
     * @return \StructType\CreateApiRequest
     */
    public function setUserEmail($userEmail = null)
    {
        // validation for constraint: string
        if (!is_null($userEmail) && !is_string($userEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userEmail, true), gettype($userEmail)), __LINE__);
        }
        $this->userEmail = $userEmail;
        return $this;
    }
}
