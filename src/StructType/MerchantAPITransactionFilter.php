<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantAPITransactionFilter StructType
 * @subpackage Structs
 */
class MerchantAPITransactionFilter extends AbstractStructBase
{
    /**
     * The count
     * @var int
     */
    public $count;
    /**
     * The from
     * @var int
     */
    public $from;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sortOrder;
    /**
     * The startTimeFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $startTimeFrom;
    /**
     * The startTimeTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $startTimeTo;
    /**
     * The transactionDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionDirection;
    /**
     * The transactionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionName;
    /**
     * The transactionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionStatus;
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $walletId;
    /**
     * Constructor method for MerchantAPITransactionFilter
     * @uses MerchantAPITransactionFilter::setCount()
     * @uses MerchantAPITransactionFilter::setFrom()
     * @uses MerchantAPITransactionFilter::setSortOrder()
     * @uses MerchantAPITransactionFilter::setStartTimeFrom()
     * @uses MerchantAPITransactionFilter::setStartTimeTo()
     * @uses MerchantAPITransactionFilter::setTransactionDirection()
     * @uses MerchantAPITransactionFilter::setTransactionName()
     * @uses MerchantAPITransactionFilter::setTransactionStatus()
     * @uses MerchantAPITransactionFilter::setWalletId()
     * @param int $count
     * @param int $from
     * @param string $sortOrder
     * @param string $startTimeFrom
     * @param string $startTimeTo
     * @param string $transactionDirection
     * @param string $transactionName
     * @param string $transactionStatus
     * @param string $walletId
     */
    public function __construct($count = null, $from = null, $sortOrder = null, $startTimeFrom = null, $startTimeTo = null, $transactionDirection = null, $transactionName = null, $transactionStatus = null, $walletId = null)
    {
        $this
            ->setCount($count)
            ->setFrom($from)
            ->setSortOrder($sortOrder)
            ->setStartTimeFrom($startTimeFrom)
            ->setStartTimeTo($startTimeTo)
            ->setTransactionDirection($transactionDirection)
            ->setTransactionName($transactionName)
            ->setTransactionStatus($transactionStatus)
            ->setWalletId($walletId);
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \StructType\MerchantAPITransactionFilter
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        return $this;
    }
    /**
     * Get from value
     * @return int|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param int $from
     * @return \StructType\MerchantAPITransactionFilter
     */
    public function setFrom($from = null)
    {
        // validation for constraint: int
        if (!is_null($from) && !(is_int($from) || ctype_digit($from))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        return $this;
    }
    /**
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @uses \EnumType\SortOrder::valueIsValid()
     * @uses \EnumType\SortOrder::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortOrder
     * @return \StructType\MerchantAPITransactionFilter
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SortOrder::valueIsValid($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SortOrder', is_array($sortOrder) ? implode(', ', $sortOrder) : var_export($sortOrder, true), implode(', ', \EnumType\SortOrder::getValidValues())), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get startTimeFrom value
     * @return string|null
     */
    public function getStartTimeFrom()
    {
        return $this->startTimeFrom;
    }
    /**
     * Set startTimeFrom value
     * @param string $startTimeFrom
     * @return \StructType\MerchantAPITransactionFilter
     */
    public function setStartTimeFrom($startTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($startTimeFrom) && !is_string($startTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeFrom, true), gettype($startTimeFrom)), __LINE__);
        }
        $this->startTimeFrom = $startTimeFrom;
        return $this;
    }
    /**
     * Get startTimeTo value
     * @return string|null
     */
    public function getStartTimeTo()
    {
        return $this->startTimeTo;
    }
    /**
     * Set startTimeTo value
     * @param string $startTimeTo
     * @return \StructType\MerchantAPITransactionFilter
     */
    public function setStartTimeTo($startTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($startTimeTo) && !is_string($startTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeTo, true), gettype($startTimeTo)), __LINE__);
        }
        $this->startTimeTo = $startTimeTo;
        return $this;
    }
    /**
     * Get transactionDirection value
     * @return string|null
     */
    public function getTransactionDirection()
    {
        return $this->transactionDirection;
    }
    /**
     * Set transactionDirection value
     * @uses \EnumType\TransactionDirection::valueIsValid()
     * @uses \EnumType\TransactionDirection::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionDirection
     * @return \StructType\MerchantAPITransactionFilter
     */
    public function setTransactionDirection($transactionDirection = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionDirection::valueIsValid($transactionDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionDirection', is_array($transactionDirection) ? implode(', ', $transactionDirection) : var_export($transactionDirection, true), implode(', ', \EnumType\TransactionDirection::getValidValues())), __LINE__);
        }
        $this->transactionDirection = $transactionDirection;
        return $this;
    }
    /**
     * Get transactionName value
     * @return string|null
     */
    public function getTransactionName()
    {
        return $this->transactionName;
    }
    /**
     * Set transactionName value
     * @uses \EnumType\TransactionName::valueIsValid()
     * @uses \EnumType\TransactionName::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionName
     * @return \StructType\MerchantAPITransactionFilter
     */
    public function setTransactionName($transactionName = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionName::valueIsValid($transactionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionName', is_array($transactionName) ? implode(', ', $transactionName) : var_export($transactionName, true), implode(', ', \EnumType\TransactionName::getValidValues())), __LINE__);
        }
        $this->transactionName = $transactionName;
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
     * @return \StructType\MerchantAPITransactionFilter
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
     * @return \StructType\MerchantAPITransactionFilter
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
