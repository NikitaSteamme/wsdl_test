<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for coinName EnumType
 * @subpackage Enumerations
 */
class CoinName extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BTC'
     * @return string 'BTC'
     */
    const VALUE_BTC = 'BTC';
    /**
     * Constant for value 'ETH'
     * @return string 'ETH'
     */
    const VALUE_ETH = 'ETH';
    /**
     * Constant for value 'XRP'
     * @return string 'XRP'
     */
    const VALUE_XRP = 'XRP';
    /**
     * Constant for value 'BCH'
     * @return string 'BCH'
     */
    const VALUE_BCH = 'BCH';
    /**
     * Constant for value 'LTC'
     * @return string 'LTC'
     */
    const VALUE_LTC = 'LTC';
    /**
     * Constant for value 'BTG'
     * @return string 'BTG'
     */
    const VALUE_BTG = 'BTG';
    /**
     * Constant for value 'DOGE'
     * @return string 'DOGE'
     */
    const VALUE_DOGE = 'DOGE';
    /**
     * Constant for value 'ZEC'
     * @return string 'ZEC'
     */
    const VALUE_ZEC = 'ZEC';
    /**
     * Constant for value 'DASH'
     * @return string 'DASH'
     */
    const VALUE_DASH = 'DASH';
    /**
     * Constant for value 'XLM'
     * @return string 'XLM'
     */
    const VALUE_XLM = 'XLM';
    /**
     * Constant for value 'USDT'
     * @return string 'USDT'
     */
    const VALUE_USDT = 'USDT';
    /**
     * Constant for value 'USDC'
     * @return string 'USDC'
     */
    const VALUE_USDC = 'USDC';
    /**
     * Constant for value 'DAI'
     * @return string 'DAI'
     */
    const VALUE_DAI = 'DAI';
    /**
     * Constant for value 'PAX'
     * @return string 'PAX'
     */
    const VALUE_PAX = 'PAX';
    /**
     * Constant for value 'TUSD'
     * @return string 'TUSD'
     */
    const VALUE_TUSD = 'TUSD';
    /**
     * Constant for value 'USDK'
     * @return string 'USDK'
     */
    const VALUE_USDK = 'USDK';
    /**
     * Constant for value 'EURS'
     * @return string 'EURS'
     */
    const VALUE_EURS = 'EURS';
    /**
     * Constant for value 'BRZT'
     * @return string 'BRZT'
     */
    const VALUE_BRZT = 'BRZT';
    /**
     * Constant for value 'TRX'
     * @return string 'TRX'
     */
    const VALUE_TRX = 'TRX';
    /**
     * Constant for value 'BNB'
     * @return string 'BNB'
     */
    const VALUE_BNB = 'BNB';
    /**
     * Constant for value 'BAT'
     * @return string 'BAT'
     */
    const VALUE_BAT = 'BAT';
    /**
     * Constant for value 'BUSD'
     * @return string 'BUSD'
     */
    const VALUE_BUSD = 'BUSD';
    /**
     * Constant for value 'XTZ'
     * @return string 'XTZ'
     */
    const VALUE_XTZ = 'XTZ';
    /**
     * Constant for value 'ZIL'
     * @return string 'ZIL'
     */
    const VALUE_ZIL = 'ZIL';
    /**
     * Constant for value 'CHZ'
     * @return string 'CHZ'
     */
    const VALUE_CHZ = 'CHZ';
    /**
     * Constant for value 'USDT_ERC20'
     * @return string 'USDT_ERC20'
     */
    const VALUE_USDT_ERC_20 = 'USDT_ERC20';
    /**
     * Constant for value 'USDT_TRC20'
     * @return string 'USDT_TRC20'
     */
    const VALUE_USDT_TRC_20 = 'USDT_TRC20';
    /**
     * Return allowed values
     * @uses self::VALUE_BTC
     * @uses self::VALUE_ETH
     * @uses self::VALUE_XRP
     * @uses self::VALUE_BCH
     * @uses self::VALUE_LTC
     * @uses self::VALUE_BTG
     * @uses self::VALUE_DOGE
     * @uses self::VALUE_ZEC
     * @uses self::VALUE_DASH
     * @uses self::VALUE_XLM
     * @uses self::VALUE_USDT
     * @uses self::VALUE_USDC
     * @uses self::VALUE_DAI
     * @uses self::VALUE_PAX
     * @uses self::VALUE_TUSD
     * @uses self::VALUE_USDK
     * @uses self::VALUE_EURS
     * @uses self::VALUE_BRZT
     * @uses self::VALUE_TRX
     * @uses self::VALUE_BNB
     * @uses self::VALUE_BAT
     * @uses self::VALUE_BUSD
     * @uses self::VALUE_XTZ
     * @uses self::VALUE_ZIL
     * @uses self::VALUE_CHZ
     * @uses self::VALUE_USDT_ERC_20
     * @uses self::VALUE_USDT_TRC_20
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BTC,
            self::VALUE_ETH,
            self::VALUE_XRP,
            self::VALUE_BCH,
            self::VALUE_LTC,
            self::VALUE_BTG,
            self::VALUE_DOGE,
            self::VALUE_ZEC,
            self::VALUE_DASH,
            self::VALUE_XLM,
            self::VALUE_USDT,
            self::VALUE_USDC,
            self::VALUE_DAI,
            self::VALUE_PAX,
            self::VALUE_TUSD,
            self::VALUE_USDK,
            self::VALUE_EURS,
            self::VALUE_BRZT,
            self::VALUE_TRX,
            self::VALUE_BNB,
            self::VALUE_BAT,
            self::VALUE_BUSD,
            self::VALUE_XTZ,
            self::VALUE_ZIL,
            self::VALUE_CHZ,
            self::VALUE_USDT_ERC_20,
            self::VALUE_USDT_TRC_20,
        );
    }
}
