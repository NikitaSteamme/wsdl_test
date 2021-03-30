<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for cryptoCurrencyDepositPaymentStatus EnumType
 * @subpackage Enumerations
 */
class CryptoCurrencyDepositPaymentStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NEW'
     * @return string 'NEW'
     */
    const VALUE_NEW = 'NEW';
    /**
     * Constant for value 'EXPIRED'
     * @return string 'EXPIRED'
     */
    const VALUE_EXPIRED = 'EXPIRED';
    /**
     * Constant for value 'PAYMENT_RECEIVED'
     * @return string 'PAYMENT_RECEIVED'
     */
    const VALUE_PAYMENT_RECEIVED = 'PAYMENT_RECEIVED';
    /**
     * Constant for value 'UNDERPAYMENT_RECEIVED'
     * @return string 'UNDERPAYMENT_RECEIVED'
     */
    const VALUE_UNDERPAYMENT_RECEIVED = 'UNDERPAYMENT_RECEIVED';
    /**
     * Constant for value 'OVERPAYMENT_RECEIVED'
     * @return string 'OVERPAYMENT_RECEIVED'
     */
    const VALUE_OVERPAYMENT_RECEIVED = 'OVERPAYMENT_RECEIVED';
    /**
     * Constant for value 'EXPIRED_PAYMENT_RECEIVED'
     * @return string 'EXPIRED_PAYMENT_RECEIVED'
     */
    const VALUE_EXPIRED_PAYMENT_RECEIVED = 'EXPIRED_PAYMENT_RECEIVED';
    /**
     * Constant for value 'EXPIRED_UNDERPAYMENT_RECEIVED'
     * @return string 'EXPIRED_UNDERPAYMENT_RECEIVED'
     */
    const VALUE_EXPIRED_UNDERPAYMENT_RECEIVED = 'EXPIRED_UNDERPAYMENT_RECEIVED';
    /**
     * Constant for value 'EXPIRED_OVERPAYMENT_RECEIVED'
     * @return string 'EXPIRED_OVERPAYMENT_RECEIVED'
     */
    const VALUE_EXPIRED_OVERPAYMENT_RECEIVED = 'EXPIRED_OVERPAYMENT_RECEIVED';
    /**
     * Constant for value 'EXPIRED_PAYMENT_REFUND_REQUESTED'
     * @return string 'EXPIRED_PAYMENT_REFUND_REQUESTED'
     */
    const VALUE_EXPIRED_PAYMENT_REFUND_REQUESTED = 'EXPIRED_PAYMENT_REFUND_REQUESTED';
    /**
     * Constant for value 'UNDERPAYMENT_REFUND_REQUESTED'
     * @return string 'UNDERPAYMENT_REFUND_REQUESTED'
     */
    const VALUE_UNDERPAYMENT_REFUND_REQUESTED = 'UNDERPAYMENT_REFUND_REQUESTED';
    /**
     * Constant for value 'EXPIRED_UNDERPAYMENT_REFUND_REQUESTED'
     * @return string 'EXPIRED_UNDERPAYMENT_REFUND_REQUESTED'
     */
    const VALUE_EXPIRED_UNDERPAYMENT_REFUND_REQUESTED = 'EXPIRED_UNDERPAYMENT_REFUND_REQUESTED';
    /**
     * Constant for value 'OVERPAYMENT_REFUND_REQUESTED'
     * @return string 'OVERPAYMENT_REFUND_REQUESTED'
     */
    const VALUE_OVERPAYMENT_REFUND_REQUESTED = 'OVERPAYMENT_REFUND_REQUESTED';
    /**
     * Constant for value 'FULL_OVERPAYMENT_REFUND_REQUESTED'
     * @return string 'FULL_OVERPAYMENT_REFUND_REQUESTED'
     */
    const VALUE_FULL_OVERPAYMENT_REFUND_REQUESTED = 'FULL_OVERPAYMENT_REFUND_REQUESTED';
    /**
     * Constant for value 'EXPIRED_PAYMENT_REFUNDED'
     * @return string 'EXPIRED_PAYMENT_REFUNDED'
     */
    const VALUE_EXPIRED_PAYMENT_REFUNDED = 'EXPIRED_PAYMENT_REFUNDED';
    /**
     * Constant for value 'UNDERPAYMENT_REFUNDED'
     * @return string 'UNDERPAYMENT_REFUNDED'
     */
    const VALUE_UNDERPAYMENT_REFUNDED = 'UNDERPAYMENT_REFUNDED';
    /**
     * Constant for value 'OVERPAYMENT_REFUNDED'
     * @return string 'OVERPAYMENT_REFUNDED'
     */
    const VALUE_OVERPAYMENT_REFUNDED = 'OVERPAYMENT_REFUNDED';
    /**
     * Constant for value 'FULL_OVERPAYMENT_REFUNDED'
     * @return string 'FULL_OVERPAYMENT_REFUNDED'
     */
    const VALUE_FULL_OVERPAYMENT_REFUNDED = 'FULL_OVERPAYMENT_REFUNDED';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_PAYMENT_RECEIVED
     * @uses self::VALUE_UNDERPAYMENT_RECEIVED
     * @uses self::VALUE_OVERPAYMENT_RECEIVED
     * @uses self::VALUE_EXPIRED_PAYMENT_RECEIVED
     * @uses self::VALUE_EXPIRED_UNDERPAYMENT_RECEIVED
     * @uses self::VALUE_EXPIRED_OVERPAYMENT_RECEIVED
     * @uses self::VALUE_EXPIRED_PAYMENT_REFUND_REQUESTED
     * @uses self::VALUE_UNDERPAYMENT_REFUND_REQUESTED
     * @uses self::VALUE_EXPIRED_UNDERPAYMENT_REFUND_REQUESTED
     * @uses self::VALUE_OVERPAYMENT_REFUND_REQUESTED
     * @uses self::VALUE_FULL_OVERPAYMENT_REFUND_REQUESTED
     * @uses self::VALUE_EXPIRED_PAYMENT_REFUNDED
     * @uses self::VALUE_UNDERPAYMENT_REFUNDED
     * @uses self::VALUE_OVERPAYMENT_REFUNDED
     * @uses self::VALUE_FULL_OVERPAYMENT_REFUNDED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_EXPIRED,
            self::VALUE_PAYMENT_RECEIVED,
            self::VALUE_UNDERPAYMENT_RECEIVED,
            self::VALUE_OVERPAYMENT_RECEIVED,
            self::VALUE_EXPIRED_PAYMENT_RECEIVED,
            self::VALUE_EXPIRED_UNDERPAYMENT_RECEIVED,
            self::VALUE_EXPIRED_OVERPAYMENT_RECEIVED,
            self::VALUE_EXPIRED_PAYMENT_REFUND_REQUESTED,
            self::VALUE_UNDERPAYMENT_REFUND_REQUESTED,
            self::VALUE_EXPIRED_UNDERPAYMENT_REFUND_REQUESTED,
            self::VALUE_OVERPAYMENT_REFUND_REQUESTED,
            self::VALUE_FULL_OVERPAYMENT_REFUND_REQUESTED,
            self::VALUE_EXPIRED_PAYMENT_REFUNDED,
            self::VALUE_UNDERPAYMENT_REFUNDED,
            self::VALUE_OVERPAYMENT_REFUNDED,
            self::VALUE_FULL_OVERPAYMENT_REFUNDED,
        );
    }
}
