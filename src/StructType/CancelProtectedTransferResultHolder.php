<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelProtectedTransferResultHolder StructType
 * @subpackage Structs
 */
class CancelProtectedTransferResultHolder extends AbstractStructBase
{
    /**
     * The operationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $operationResult;
    /**
     * The transactionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionStatus;
    /**
     * Constructor method for cancelProtectedTransferResultHolder
     * @uses CancelProtectedTransferResultHolder::setOperationResult()
     * @uses CancelProtectedTransferResultHolder::setTransactionStatus()
     * @param string $operationResult
     * @param string $transactionStatus
     */
    public function __construct($operationResult = null, $transactionStatus = null)
    {
        $this
            ->setOperationResult($operationResult)
            ->setTransactionStatus($transactionStatus);
    }
    /**
     * Get operationResult value
     * @return string|null
     */
    public function getOperationResult()
    {
        return $this->operationResult;
    }
    /**
     * Set operationResult value
     * @uses \EnumType\OperationResult::valueIsValid()
     * @uses \EnumType\OperationResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operationResult
     * @return \StructType\CancelProtectedTransferResultHolder
     */
    public function setOperationResult($operationResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OperationResult::valueIsValid($operationResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OperationResult', is_array($operationResult) ? implode(', ', $operationResult) : var_export($operationResult, true), implode(', ', \EnumType\OperationResult::getValidValues())), __LINE__);
        }
        $this->operationResult = $operationResult;
        return $this;
    }
    /**
     * Get transactionStatus value
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }
    /**
     * Set transactionStatus value
     * @uses \EnumType\TransactionStatus::valueIsValid()
     * @uses \EnumType\TransactionStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionStatus
     * @return \StructType\CancelProtectedTransferResultHolder
     */
    public function setTransactionStatus($transactionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionStatus::valueIsValid($transactionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionStatus', is_array($transactionStatus) ? implode(', ', $transactionStatus) : var_export($transactionStatus, true), implode(', ', \EnumType\TransactionStatus::getValidValues())), __LINE__);
        }
        $this->transactionStatus = $transactionStatus;
        return $this;
    }
}
