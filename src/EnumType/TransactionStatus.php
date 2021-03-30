<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for transactionStatus EnumType
 * @subpackage Enumerations
 */
class TransactionStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PENDING'
     * @return string 'PENDING'
     */
    const VALUE_PENDING = 'PENDING';
    /**
     * Constant for value 'PROCESS'
     * @return string 'PROCESS'
     */
    const VALUE_PROCESS = 'PROCESS';
    /**
     * Constant for value 'COMPLETED'
     * @return string 'COMPLETED'
     */
    const VALUE_COMPLETED = 'COMPLETED';
    /**
     * Constant for value 'CANCELED'
     * @return string 'CANCELED'
     */
    const VALUE_CANCELED = 'CANCELED';
    /**
     * Constant for value 'NOT_IDENTIFIED'
     * @return string 'NOT_IDENTIFIED'
     */
    const VALUE_NOT_IDENTIFIED = 'NOT_IDENTIFIED';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'NOT_CONFIRMED'
     * @return string 'NOT_CONFIRMED'
     */
    const VALUE_NOT_CONFIRMED = 'NOT_CONFIRMED';
    /**
     * Constant for value 'CONFIRMED'
     * @return string 'CONFIRMED'
     */
    const VALUE_CONFIRMED = 'CONFIRMED';
    /**
     * Return allowed values
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_PROCESS
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_NOT_IDENTIFIED
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_NOT_CONFIRMED
     * @uses self::VALUE_CONFIRMED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PENDING,
            self::VALUE_PROCESS,
            self::VALUE_COMPLETED,
            self::VALUE_CANCELED,
            self::VALUE_NOT_IDENTIFIED,
            self::VALUE_ERROR,
            self::VALUE_NOT_CONFIRMED,
            self::VALUE_CONFIRMED,
        );
    }
}
