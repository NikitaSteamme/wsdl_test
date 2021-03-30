<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for transactionDirection EnumType
 * @subpackage Enumerations
 */
class TransactionDirection extends AbstractStructEnumBase
{
    /**
     * Constant for value 'INCOMING'
     * @return string 'INCOMING'
     */
    const VALUE_INCOMING = 'INCOMING';
    /**
     * Constant for value 'OUTGOING'
     * @return string 'OUTGOING'
     */
    const VALUE_OUTGOING = 'OUTGOING';
    /**
     * Return allowed values
     * @uses self::VALUE_INCOMING
     * @uses self::VALUE_OUTGOING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCOMING,
            self::VALUE_OUTGOING,
        );
    }
}
