<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for validateAccountResultDTO StructType
 * @subpackage Structs
 */
class ValidateAccountResultDTO extends ValidateAccountRequestDTO
{
    /**
     * The firstNameMatchingPercentage
     * @var float
     */
    public $firstNameMatchingPercentage;
    /**
     * The lastNameMatchingPercentage
     * @var float
     */
    public $lastNameMatchingPercentage;
    /**
     * The verified
     * @var bool
     */
    public $verified;
    /**
     * Constructor method for validateAccountResultDTO
     * @uses ValidateAccountResultDTO::setFirstNameMatchingPercentage()
     * @uses ValidateAccountResultDTO::setLastNameMatchingPercentage()
     * @uses ValidateAccountResultDTO::setVerified()
     * @param float $firstNameMatchingPercentage
     * @param float $lastNameMatchingPercentage
     * @param bool $verified
     */
    public function __construct($firstNameMatchingPercentage = null, $lastNameMatchingPercentage = null, $verified = null)
    {
        $this
            ->setFirstNameMatchingPercentage($firstNameMatchingPercentage)
            ->setLastNameMatchingPercentage($lastNameMatchingPercentage)
            ->setVerified($verified);
    }
    /**
     * Get firstNameMatchingPercentage value
     * @return float|null
     */
    public function getFirstNameMatchingPercentage()
    {
        return $this->firstNameMatchingPercentage;
    }
    /**
     * Set firstNameMatchingPercentage value
     * @param float $firstNameMatchingPercentage
     * @return \StructType\ValidateAccountResultDTO
     */
    public function setFirstNameMatchingPercentage($firstNameMatchingPercentage = null)
    {
        // validation for constraint: float
        if (!is_null($firstNameMatchingPercentage) && !(is_float($firstNameMatchingPercentage) || is_numeric($firstNameMatchingPercentage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($firstNameMatchingPercentage, true), gettype($firstNameMatchingPercentage)), __LINE__);
        }
        $this->firstNameMatchingPercentage = $firstNameMatchingPercentage;
        return $this;
    }
    /**
     * Get lastNameMatchingPercentage value
     * @return float|null
     */
    public function getLastNameMatchingPercentage()
    {
        return $this->lastNameMatchingPercentage;
    }
    /**
     * Set lastNameMatchingPercentage value
     * @param float $lastNameMatchingPercentage
     * @return \StructType\ValidateAccountResultDTO
     */
    public function setLastNameMatchingPercentage($lastNameMatchingPercentage = null)
    {
        // validation for constraint: float
        if (!is_null($lastNameMatchingPercentage) && !(is_float($lastNameMatchingPercentage) || is_numeric($lastNameMatchingPercentage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lastNameMatchingPercentage, true), gettype($lastNameMatchingPercentage)), __LINE__);
        }
        $this->lastNameMatchingPercentage = $lastNameMatchingPercentage;
        return $this;
    }
    /**
     * Get verified value
     * @return bool|null
     */
    public function getVerified()
    {
        return $this->verified;
    }
    /**
     * Set verified value
     * @param bool $verified
     * @return \StructType\ValidateAccountResultDTO
     */
    public function setVerified($verified = null)
    {
        // validation for constraint: boolean
        if (!is_null($verified) && !is_bool($verified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verified, true), gettype($verified)), __LINE__);
        }
        $this->verified = $verified;
        return $this;
    }
}
