<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for cryptoCurrencyTransportProtocol EnumType
 * @subpackage Enumerations
 */
class CryptoCurrencyTransportProtocol extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OMNI'
     * @return string 'OMNI'
     */
    const VALUE_OMNI = 'OMNI';
    /**
     * Constant for value 'ETHEREUM'
     * @return string 'ETHEREUM'
     */
    const VALUE_ETHEREUM = 'ETHEREUM';
    /**
     * Constant for value 'TRON'
     * @return string 'TRON'
     */
    const VALUE_TRON = 'TRON';
    /**
     * Return allowed values
     * @uses self::VALUE_OMNI
     * @uses self::VALUE_ETHEREUM
     * @uses self::VALUE_TRON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OMNI,
            self::VALUE_ETHEREUM,
            self::VALUE_TRON,
        );
    }
}
