<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for currency EnumType
 * @subpackage Enumerations
 */
class Currency extends AbstractStructEnumBase
{
    /**
     * Constant for value 'USD'
     * @return string 'USD'
     */
    const VALUE_USD = 'USD';
    /**
     * Constant for value 'EUR'
     * @return string 'EUR'
     */
    const VALUE_EUR = 'EUR';
    /**
     * Constant for value 'RUR'
     * @return string 'RUR'
     */
    const VALUE_RUR = 'RUR';
    /**
     * Constant for value 'GBP'
     * @return string 'GBP'
     */
    const VALUE_GBP = 'GBP';
    /**
     * Constant for value 'UAH'
     * @return string 'UAH'
     */
    const VALUE_UAH = 'UAH';
    /**
     * Constant for value 'KZT'
     * @return string 'KZT'
     */
    const VALUE_KZT = 'KZT';
    /**
     * Constant for value 'BRL'
     * @return string 'BRL'
     */
    const VALUE_BRL = 'BRL';
    /**
     * Constant for value 'TRY'
     * @return string 'TRY'
     */
    const VALUE_TRY = 'TRY';
    /**
     * Constant for value 'AZN'
     * @return string 'AZN'
     */
    const VALUE_AZN = 'AZN';
    /**
     * Constant for value 'BTC'
     * @return string 'BTC'
     */
    const VALUE_BTC = 'BTC';
    /**
     * Return allowed values
     * @uses self::VALUE_USD
     * @uses self::VALUE_EUR
     * @uses self::VALUE_RUR
     * @uses self::VALUE_GBP
     * @uses self::VALUE_UAH
     * @uses self::VALUE_KZT
     * @uses self::VALUE_BRL
     * @uses self::VALUE_TRY
     * @uses self::VALUE_AZN
     * @uses self::VALUE_BTC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_USD,
            self::VALUE_EUR,
            self::VALUE_RUR,
            self::VALUE_GBP,
            self::VALUE_UAH,
            self::VALUE_KZT,
            self::VALUE_BRL,
            self::VALUE_TRY,
            self::VALUE_AZN,
            self::VALUE_BTC,
        );
    }
}
