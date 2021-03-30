<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for paymentRequestStatus EnumType
 * @subpackage Enumerations
 */
class PaymentRequestStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NEW'
     * @return string 'NEW'
     */
    const VALUE_NEW = 'NEW';
    /**
     * Constant for value 'PENDING_REFUND'
     * @return string 'PENDING_REFUND'
     */
    const VALUE_PENDING_REFUND = 'PENDING_REFUND';
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
     * Constant for value 'EXPIRED'
     * @return string 'EXPIRED'
     */
    const VALUE_EXPIRED = 'EXPIRED';
    /**
     * Constant for value 'REFUNDED'
     * @return string 'REFUNDED'
     */
    const VALUE_REFUNDED = 'REFUNDED';
    /**
     * Constant for value 'COMPLETED_OVERPAYMENT_REFUND'
     * @return string 'COMPLETED_OVERPAYMENT_REFUND'
     */
    const VALUE_COMPLETED_OVERPAYMENT_REFUND = 'COMPLETED_OVERPAYMENT_REFUND';
    /**
     * Constant for value 'COMPLETED_OVERPAYMENT_REFUNDED'
     * @return string 'COMPLETED_OVERPAYMENT_REFUNDED'
     */
    const VALUE_COMPLETED_OVERPAYMENT_REFUNDED = 'COMPLETED_OVERPAYMENT_REFUNDED';
    /**
     * Constant for value 'PENDING_APPROVAL'
     * @return string 'PENDING_APPROVAL'
     */
    const VALUE_PENDING_APPROVAL = 'PENDING_APPROVAL';
    /**
     * Constant for value 'PENDING_THIRD_PARTY_CONFIRMATION'
     * @return string 'PENDING_THIRD_PARTY_CONFIRMATION'
     */
    const VALUE_PENDING_THIRD_PARTY_CONFIRMATION = 'PENDING_THIRD_PARTY_CONFIRMATION';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW
     * @uses self::VALUE_PENDING_REFUND
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_REFUNDED
     * @uses self::VALUE_COMPLETED_OVERPAYMENT_REFUND
     * @uses self::VALUE_COMPLETED_OVERPAYMENT_REFUNDED
     * @uses self::VALUE_PENDING_APPROVAL
     * @uses self::VALUE_PENDING_THIRD_PARTY_CONFIRMATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_PENDING_REFUND,
            self::VALUE_COMPLETED,
            self::VALUE_CANCELED,
            self::VALUE_EXPIRED,
            self::VALUE_REFUNDED,
            self::VALUE_COMPLETED_OVERPAYMENT_REFUND,
            self::VALUE_COMPLETED_OVERPAYMENT_REFUNDED,
            self::VALUE_PENDING_APPROVAL,
            self::VALUE_PENDING_THIRD_PARTY_CONFIRMATION,
        );
    }
}
