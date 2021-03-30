<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ecurrency EnumType
 * @subpackage Enumerations
 */
class Ecurrency extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BITCOIN'
     * @return string 'BITCOIN'
     */
    const VALUE_BITCOIN = 'BITCOIN';
    /**
     * Constant for value 'CAPITALIST'
     * @return string 'CAPITALIST'
     */
    const VALUE_CAPITALIST = 'CAPITALIST';
    /**
     * Constant for value 'ECOIN'
     * @return string 'ECOIN'
     */
    const VALUE_ECOIN = 'ECOIN';
    /**
     * Constant for value 'OKPAY'
     * @return string 'OKPAY'
     */
    const VALUE_OKPAY = 'OKPAY';
    /**
     * Constant for value 'PAXUM'
     * @return string 'PAXUM'
     */
    const VALUE_PAXUM = 'PAXUM';
    /**
     * Constant for value 'PAYEER'
     * @return string 'PAYEER'
     */
    const VALUE_PAYEER = 'PAYEER';
    /**
     * Constant for value 'PAYZA'
     * @return string 'PAYZA'
     */
    const VALUE_PAYZA = 'PAYZA';
    /**
     * Constant for value 'PERFECT_MONEY'
     * @return string 'PERFECT_MONEY'
     */
    const VALUE_PERFECT_MONEY = 'PERFECT_MONEY';
    /**
     * Constant for value 'WEB_MONEY'
     * @return string 'WEB_MONEY'
     */
    const VALUE_WEB_MONEY = 'WEB_MONEY';
    /**
     * Constant for value 'QIWI'
     * @return string 'QIWI'
     */
    const VALUE_QIWI = 'QIWI';
    /**
     * Constant for value 'YANDEX_MONEY'
     * @return string 'YANDEX_MONEY'
     */
    const VALUE_YANDEX_MONEY = 'YANDEX_MONEY';
    /**
     * Constant for value 'EPESE'
     * @return string 'EPESE'
     */
    const VALUE_EPESE = 'EPESE';
    /**
     * Constant for value 'ETHEREUM'
     * @return string 'ETHEREUM'
     */
    const VALUE_ETHEREUM = 'ETHEREUM';
    /**
     * Constant for value 'BITCOIN_CASH'
     * @return string 'BITCOIN_CASH'
     */
    const VALUE_BITCOIN_CASH = 'BITCOIN_CASH';
    /**
     * Constant for value 'LITECOIN'
     * @return string 'LITECOIN'
     */
    const VALUE_LITECOIN = 'LITECOIN';
    /**
     * Constant for value 'RIPPLE'
     * @return string 'RIPPLE'
     */
    const VALUE_RIPPLE = 'RIPPLE';
    /**
     * Constant for value 'ZCASH'
     * @return string 'ZCASH'
     */
    const VALUE_ZCASH = 'ZCASH';
    /**
     * Constant for value 'TETHER_OMNI'
     * @return string 'TETHER_OMNI'
     */
    const VALUE_TETHER_OMNI = 'TETHER_OMNI';
    /**
     * Constant for value 'TETHER_ERC20'
     * @return string 'TETHER_ERC20'
     */
    const VALUE_TETHER_ERC_20 = 'TETHER_ERC20';
    /**
     * Constant for value 'TETHER_TRC20'
     * @return string 'TETHER_TRC20'
     */
    const VALUE_TETHER_TRC_20 = 'TETHER_TRC20';
    /**
     * Constant for value 'TRON'
     * @return string 'TRON'
     */
    const VALUE_TRON = 'TRON';
    /**
     * Constant for value 'USD_COIN'
     * @return string 'USD_COIN'
     */
    const VALUE_USD_COIN = 'USD_COIN';
    /**
     * Constant for value 'DAI'
     * @return string 'DAI'
     */
    const VALUE_DAI = 'DAI';
    /**
     * Constant for value 'PAXOS_STANDARD'
     * @return string 'PAXOS_STANDARD'
     */
    const VALUE_PAXOS_STANDARD = 'PAXOS_STANDARD';
    /**
     * Constant for value 'TRUE_USD'
     * @return string 'TRUE_USD'
     */
    const VALUE_TRUE_USD = 'TRUE_USD';
    /**
     * Constant for value 'USDK'
     * @return string 'USDK'
     */
    const VALUE_USDK = 'USDK';
    /**
     * Constant for value 'STASIS_EURO'
     * @return string 'STASIS_EURO'
     */
    const VALUE_STASIS_EURO = 'STASIS_EURO';
    /**
     * Return allowed values
     * @uses self::VALUE_BITCOIN
     * @uses self::VALUE_CAPITALIST
     * @uses self::VALUE_ECOIN
     * @uses self::VALUE_OKPAY
     * @uses self::VALUE_PAXUM
     * @uses self::VALUE_PAYEER
     * @uses self::VALUE_PAYZA
     * @uses self::VALUE_PERFECT_MONEY
     * @uses self::VALUE_WEB_MONEY
     * @uses self::VALUE_QIWI
     * @uses self::VALUE_YANDEX_MONEY
     * @uses self::VALUE_EPESE
     * @uses self::VALUE_ETHEREUM
     * @uses self::VALUE_BITCOIN_CASH
     * @uses self::VALUE_LITECOIN
     * @uses self::VALUE_RIPPLE
     * @uses self::VALUE_ZCASH
     * @uses self::VALUE_TETHER_OMNI
     * @uses self::VALUE_TETHER_ERC_20
     * @uses self::VALUE_TETHER_TRC_20
     * @uses self::VALUE_TRON
     * @uses self::VALUE_USD_COIN
     * @uses self::VALUE_DAI
     * @uses self::VALUE_PAXOS_STANDARD
     * @uses self::VALUE_TRUE_USD
     * @uses self::VALUE_USDK
     * @uses self::VALUE_STASIS_EURO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BITCOIN,
            self::VALUE_CAPITALIST,
            self::VALUE_ECOIN,
            self::VALUE_OKPAY,
            self::VALUE_PAXUM,
            self::VALUE_PAYEER,
            self::VALUE_PAYZA,
            self::VALUE_PERFECT_MONEY,
            self::VALUE_WEB_MONEY,
            self::VALUE_QIWI,
            self::VALUE_YANDEX_MONEY,
            self::VALUE_EPESE,
            self::VALUE_ETHEREUM,
            self::VALUE_BITCOIN_CASH,
            self::VALUE_LITECOIN,
            self::VALUE_RIPPLE,
            self::VALUE_ZCASH,
            self::VALUE_TETHER_OMNI,
            self::VALUE_TETHER_ERC_20,
            self::VALUE_TETHER_TRC_20,
            self::VALUE_TRON,
            self::VALUE_USD_COIN,
            self::VALUE_DAI,
            self::VALUE_PAXOS_STANDARD,
            self::VALUE_TRUE_USD,
            self::VALUE_USDK,
            self::VALUE_STASIS_EURO,
        );
    }
}
