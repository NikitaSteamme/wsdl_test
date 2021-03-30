<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountPresentDTO StructType
 * @subpackage Structs
 */
class AccountPresentDTO extends AbstractStructBase
{
    /**
     * The isUserVerified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $isUserVerified;
    /**
     * The present
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $present;
    /**
     * The systemAccountName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $systemAccountName;
    /**
     * The transactionScore
     * @var int
     */
    public $transactionScore;
    /**
     * Constructor method for accountPresentDTO
     * @uses AccountPresentDTO::setIsUserVerified()
     * @uses AccountPresentDTO::setPresent()
     * @uses AccountPresentDTO::setSystemAccountName()
     * @uses AccountPresentDTO::setTransactionScore()
     * @param bool $isUserVerified
     * @param bool $present
     * @param string $systemAccountName
     * @param int $transactionScore
     */
    public function __construct($isUserVerified = null, $present = null, $systemAccountName = null, $transactionScore = null)
    {
        $this
            ->setIsUserVerified($isUserVerified)
            ->setPresent($present)
            ->setSystemAccountName($systemAccountName)
            ->setTransactionScore($transactionScore);
    }
    /**
     * Get isUserVerified value
     * @return bool|null
     */
    public function getIsUserVerified()
    {
        return $this->isUserVerified;
    }
    /**
     * Set isUserVerified value
     * @param bool $isUserVerified
     * @return \StructType\AccountPresentDTO
     */
    public function setIsUserVerified($isUserVerified = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUserVerified) && !is_bool($isUserVerified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUserVerified, true), gettype($isUserVerified)), __LINE__);
        }
        $this->isUserVerified = $isUserVerified;
        return $this;
    }
    /**
     * Get present value
     * @return bool|null
     */
    public function getPresent()
    {
        return $this->present;
    }
    /**
     * Set present value
     * @param bool $present
     * @return \StructType\AccountPresentDTO
     */
    public function setPresent($present = null)
    {
        // validation for constraint: boolean
        if (!is_null($present) && !is_bool($present)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($present, true), gettype($present)), __LINE__);
        }
        $this->present = $present;
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
     * @return \StructType\AccountPresentDTO
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
    /**
     * Get transactionScore value
     * @return int|null
     */
    public function getTransactionScore()
    {
        return $this->transactionScore;
    }
    /**
     * Set transactionScore value
     * @param int $transactionScore
     * @return \StructType\AccountPresentDTO
     */
    public function setTransactionScore($transactionScore = null)
    {
        // validation for constraint: int
        if (!is_null($transactionScore) && !(is_int($transactionScore) || ctype_digit($transactionScore))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionScore, true), gettype($transactionScore)), __LINE__);
        }
        $this->transactionScore = $transactionScore;
        return $this;
    }
}
