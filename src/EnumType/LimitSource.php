<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for limitSource EnumType
 * @subpackage Enumerations
 */
class LimitSource extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SENDER'
     * @return string 'SENDER'
     */
    const VALUE_SENDER = 'SENDER';
    /**
     * Constant for value 'RECEIVER'
     * @return string 'RECEIVER'
     */
    const VALUE_RECEIVER = 'RECEIVER';
    /**
     * Return allowed values
     * @uses self::VALUE_SENDER
     * @uses self::VALUE_RECEIVER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SENDER,
            self::VALUE_RECEIVER,
        );
    }
}
