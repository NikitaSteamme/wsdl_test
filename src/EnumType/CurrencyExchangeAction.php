<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for currencyExchangeAction EnumType
 * @subpackage Enumerations
 */
class CurrencyExchangeAction extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BUY'
     * @return string 'BUY'
     */
    const VALUE_BUY = 'BUY';
    /**
     * Constant for value 'SELL'
     * @return string 'SELL'
     */
    const VALUE_SELL = 'SELL';
    /**
     * Return allowed values
     * @uses self::VALUE_BUY
     * @uses self::VALUE_SELL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUY,
            self::VALUE_SELL,
        );
    }
}
