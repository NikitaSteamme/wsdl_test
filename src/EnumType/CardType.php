<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for cardType EnumType
 * @subpackage Enumerations
 */
class CardType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'VIRTUAL'
     * @return string 'VIRTUAL'
     */
    const VALUE_VIRTUAL = 'VIRTUAL';
    /**
     * Constant for value 'PLASTIC'
     * @return string 'PLASTIC'
     */
    const VALUE_PLASTIC = 'PLASTIC';
    /**
     * Return allowed values
     * @uses self::VALUE_VIRTUAL
     * @uses self::VALUE_PLASTIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VIRTUAL,
            self::VALUE_PLASTIC,
        );
    }
}
