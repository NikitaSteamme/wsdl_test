<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeOfTransaction EnumType
 * @subpackage Enumerations
 */
class TypeOfTransaction extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TRANSFER_INNER_SYSTEM'
     * @return string 'TRANSFER_INNER_SYSTEM'
     */
    const VALUE_TRANSFER_INNER_SYSTEM = 'TRANSFER_INNER_SYSTEM';
    /**
     * Constant for value 'TRANSFER_INNER_ACCOUNT'
     * @return string 'TRANSFER_INNER_ACCOUNT'
     */
    const VALUE_TRANSFER_INNER_ACCOUNT = 'TRANSFER_INNER_ACCOUNT';
    /**
     * Return allowed values
     * @uses self::VALUE_TRANSFER_INNER_SYSTEM
     * @uses self::VALUE_TRANSFER_INNER_ACCOUNT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TRANSFER_INNER_SYSTEM,
            self::VALUE_TRANSFER_INNER_ACCOUNT,
        );
    }
}
