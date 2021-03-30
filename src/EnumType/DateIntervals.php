<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for dateIntervals EnumType
 * @subpackage Enumerations
 */
class DateIntervals extends AbstractStructEnumBase
{
    /**
     * Constant for value 'hour'
     * @return string 'hour'
     */
    const VALUE_HOUR = 'hour';
    /**
     * Constant for value 'day'
     * @return string 'day'
     */
    const VALUE_DAY = 'day';
    /**
     * Constant for value 'week'
     * @return string 'week'
     */
    const VALUE_WEEK = 'week';
    /**
     * Constant for value 'month'
     * @return string 'month'
     */
    const VALUE_MONTH = 'month';
    /**
     * Constant for value 'year'
     * @return string 'year'
     */
    const VALUE_YEAR = 'year';
    /**
     * Constant for value 'wrong'
     * @return string 'wrong'
     */
    const VALUE_WRONG = 'wrong';
    /**
     * Return allowed values
     * @uses self::VALUE_HOUR
     * @uses self::VALUE_DAY
     * @uses self::VALUE_WEEK
     * @uses self::VALUE_MONTH
     * @uses self::VALUE_YEAR
     * @uses self::VALUE_WRONG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HOUR,
            self::VALUE_DAY,
            self::VALUE_WEEK,
            self::VALUE_MONTH,
            self::VALUE_YEAR,
            self::VALUE_WRONG,
        );
    }
}
