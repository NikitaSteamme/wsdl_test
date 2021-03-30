<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sortOrder EnumType
 * @subpackage Enumerations
 */
class SortOrder extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ASC'
     * @return string 'ASC'
     */
    const VALUE_ASC = 'ASC';
    /**
     * Constant for value 'DESC'
     * @return string 'DESC'
     */
    const VALUE_DESC = 'DESC';
    /**
     * Return allowed values
     * @uses self::VALUE_ASC
     * @uses self::VALUE_DESC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASC,
            self::VALUE_DESC,
        );
    }
}
