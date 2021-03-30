<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for supportedLanguage EnumType
 * @subpackage Enumerations
 */
class SupportedLanguage extends AbstractStructEnumBase
{
    /**
     * Constant for value 'en'
     * @return string 'en'
     */
    const VALUE_EN = 'en';
    /**
     * Constant for value 'ru'
     * @return string 'ru'
     */
    const VALUE_RU = 'ru';
    /**
     * Return allowed values
     * @uses self::VALUE_EN
     * @uses self::VALUE_RU
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EN,
            self::VALUE_RU,
        );
    }
}
