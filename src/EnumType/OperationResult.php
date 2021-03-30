<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for operationResult EnumType
 * @subpackage Enumerations
 */
class OperationResult extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SUCCESS'
     * @return string 'SUCCESS'
     */
    const VALUE_SUCCESS = 'SUCCESS';
    /**
     * Constant for value 'FAIL'
     * @return string 'FAIL'
     */
    const VALUE_FAIL = 'FAIL';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_FAIL,
        );
    }
}
