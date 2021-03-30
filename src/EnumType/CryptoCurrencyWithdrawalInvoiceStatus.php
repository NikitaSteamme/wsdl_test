<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for cryptoCurrencyWithdrawalInvoiceStatus EnumType
 * @subpackage Enumerations
 */
class CryptoCurrencyWithdrawalInvoiceStatus extends AbstractStructEnumBase
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
     * Constant for value 'COMPLETED'
     * @return string 'COMPLETED'
     */
    const VALUE_COMPLETED = 'COMPLETED';
    /**
     * Constant for value 'PROCESSING'
     * @return string 'PROCESSING'
     */
    const VALUE_PROCESSING = 'PROCESSING';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_PROCESSING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_EXPIRED,
            self::VALUE_COMPLETED,
            self::VALUE_PROCESSING,
        );
    }
}
