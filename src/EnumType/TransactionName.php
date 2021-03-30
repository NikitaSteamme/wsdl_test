<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for transactionName EnumType
 * @subpackage Enumerations
 */
class TransactionName extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Constant for value 'CHECK_DEPOSIT'
     * @return string 'CHECK_DEPOSIT'
     */
    const VALUE_CHECK_DEPOSIT = 'CHECK_DEPOSIT';
    /**
     * Constant for value 'WIRE_TRANSFER_DEPOSIT'
     * @return string 'WIRE_TRANSFER_DEPOSIT'
     */
    const VALUE_WIRE_TRANSFER_DEPOSIT = 'WIRE_TRANSFER_DEPOSIT';
    /**
     * Constant for value 'WIRE_TRANSFER_WITHDRAW'
     * @return string 'WIRE_TRANSFER_WITHDRAW'
     */
    const VALUE_WIRE_TRANSFER_WITHDRAW = 'WIRE_TRANSFER_WITHDRAW';
    /**
     * Constant for value 'CHECK_WITHDRAW'
     * @return string 'CHECK_WITHDRAW'
     */
    const VALUE_CHECK_WITHDRAW = 'CHECK_WITHDRAW';
    /**
     * Constant for value 'INNER_ACCOUNT'
     * @return string 'INNER_ACCOUNT'
     */
    const VALUE_INNER_ACCOUNT = 'INNER_ACCOUNT';
    /**
     * Constant for value 'INNER_SYSTEM'
     * @return string 'INNER_SYSTEM'
     */
    const VALUE_INNER_SYSTEM = 'INNER_SYSTEM';
    /**
     * Constant for value 'CURRENCY_EXCHANGE'
     * @return string 'CURRENCY_EXCHANGE'
     */
    const VALUE_CURRENCY_EXCHANGE = 'CURRENCY_EXCHANGE';
    /**
     * Constant for value 'MONEY_REQUEST'
     * @return string 'MONEY_REQUEST'
     */
    const VALUE_MONEY_REQUEST = 'MONEY_REQUEST';
    /**
     * Constant for value 'REFERRAL_PAYMENT'
     * @return string 'REFERRAL_PAYMENT'
     */
    const VALUE_REFERRAL_PAYMENT = 'REFERRAL_PAYMENT';
    /**
     * Constant for value 'SYSTEM_PAYMENT'
     * @return string 'SYSTEM_PAYMENT'
     */
    const VALUE_SYSTEM_PAYMENT = 'SYSTEM_PAYMENT';
    /**
     * Constant for value 'REPAYMENT'
     * @return string 'REPAYMENT'
     */
    const VALUE_REPAYMENT = 'REPAYMENT';
    /**
     * Constant for value 'SCI_PAYMENT_OTHER_SYSTEM'
     * @return string 'SCI_PAYMENT_OTHER_SYSTEM'
     */
    const VALUE_SCI_PAYMENT_OTHER_SYSTEM = 'SCI_PAYMENT_OTHER_SYSTEM';
    /**
     * Constant for value 'BANK_CARD_TRANSFER'
     * @return string 'BANK_CARD_TRANSFER'
     */
    const VALUE_BANK_CARD_TRANSFER = 'BANK_CARD_TRANSFER';
    /**
     * Constant for value 'ADVCASH_CARD_TRANSFER'
     * @return string 'ADVCASH_CARD_TRANSFER'
     */
    const VALUE_ADVCASH_CARD_TRANSFER = 'ADVCASH_CARD_TRANSFER';
    /**
     * Constant for value 'WIRE_TRANSFER_DEPOSIT_3RD_PARTY'
     * @return string 'WIRE_TRANSFER_DEPOSIT_3RD_PARTY'
     */
    const VALUE_WIRE_TRANSFER_DEPOSIT_3_RD_PARTY = 'WIRE_TRANSFER_DEPOSIT_3RD_PARTY';
    /**
     * Constant for value 'EXTERNAL_SYSTEM_DEPOSIT'
     * @return string 'EXTERNAL_SYSTEM_DEPOSIT'
     */
    const VALUE_EXTERNAL_SYSTEM_DEPOSIT = 'EXTERNAL_SYSTEM_DEPOSIT';
    /**
     * Constant for value 'EXTERNAL_SYSTEM_WITHDRAWAL'
     * @return string 'EXTERNAL_SYSTEM_WITHDRAWAL'
     */
    const VALUE_EXTERNAL_SYSTEM_WITHDRAWAL = 'EXTERNAL_SYSTEM_WITHDRAWAL';
    /**
     * Constant for value 'BALANCE_ADJUSTMENT_DEPOSIT'
     * @return string 'BALANCE_ADJUSTMENT_DEPOSIT'
     */
    const VALUE_BALANCE_ADJUSTMENT_DEPOSIT = 'BALANCE_ADJUSTMENT_DEPOSIT';
    /**
     * Constant for value 'BALANCE_ADJUSTMENT_WITHDRAWAL'
     * @return string 'BALANCE_ADJUSTMENT_WITHDRAWAL'
     */
    const VALUE_BALANCE_ADJUSTMENT_WITHDRAWAL = 'BALANCE_ADJUSTMENT_WITHDRAWAL';
    /**
     * Constant for value 'SEPA_TRANSFER_DEPOSIT'
     * @return string 'SEPA_TRANSFER_DEPOSIT'
     */
    const VALUE_SEPA_TRANSFER_DEPOSIT = 'SEPA_TRANSFER_DEPOSIT';
    /**
     * Constant for value 'SEPA_TRANSFER_DEPOSIT_3RD_PARTY'
     * @return string 'SEPA_TRANSFER_DEPOSIT_3RD_PARTY'
     */
    const VALUE_SEPA_TRANSFER_DEPOSIT_3_RD_PARTY = 'SEPA_TRANSFER_DEPOSIT_3RD_PARTY';
    /**
     * Constant for value 'BONUS_PAYMENT'
     * @return string 'BONUS_PAYMENT'
     */
    const VALUE_BONUS_PAYMENT = 'BONUS_PAYMENT';
    /**
     * Constant for value 'ADVCASH_CARD_UNLOAD'
     * @return string 'ADVCASH_CARD_UNLOAD'
     */
    const VALUE_ADVCASH_CARD_UNLOAD = 'ADVCASH_CARD_UNLOAD';
    /**
     * Constant for value 'BANK_TRANSFER_REFUND'
     * @return string 'BANK_TRANSFER_REFUND'
     */
    const VALUE_BANK_TRANSFER_REFUND = 'BANK_TRANSFER_REFUND';
    /**
     * Constant for value 'SYSTEM_PAYMENT_DEPOSIT'
     * @return string 'SYSTEM_PAYMENT_DEPOSIT'
     */
    const VALUE_SYSTEM_PAYMENT_DEPOSIT = 'SYSTEM_PAYMENT_DEPOSIT';
    /**
     * Constant for value 'ADVCASH_SCI_CRYPTO_EXCHANGE_DEPOSIT'
     * @return string 'ADVCASH_SCI_CRYPTO_EXCHANGE_DEPOSIT'
     */
    const VALUE_ADVCASH_SCI_CRYPTO_EXCHANGE_DEPOSIT = 'ADVCASH_SCI_CRYPTO_EXCHANGE_DEPOSIT';
    /**
     * Constant for value 'ADVCASH_SCI_CRYPTO_EXCHANGE_WITHDRAWAL'
     * @return string 'ADVCASH_SCI_CRYPTO_EXCHANGE_WITHDRAWAL'
     */
    const VALUE_ADVCASH_SCI_CRYPTO_EXCHANGE_WITHDRAWAL = 'ADVCASH_SCI_CRYPTO_EXCHANGE_WITHDRAWAL';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_CHECK_DEPOSIT
     * @uses self::VALUE_WIRE_TRANSFER_DEPOSIT
     * @uses self::VALUE_WIRE_TRANSFER_WITHDRAW
     * @uses self::VALUE_CHECK_WITHDRAW
     * @uses self::VALUE_INNER_ACCOUNT
     * @uses self::VALUE_INNER_SYSTEM
     * @uses self::VALUE_CURRENCY_EXCHANGE
     * @uses self::VALUE_MONEY_REQUEST
     * @uses self::VALUE_REFERRAL_PAYMENT
     * @uses self::VALUE_SYSTEM_PAYMENT
     * @uses self::VALUE_REPAYMENT
     * @uses self::VALUE_SCI_PAYMENT_OTHER_SYSTEM
     * @uses self::VALUE_BANK_CARD_TRANSFER
     * @uses self::VALUE_ADVCASH_CARD_TRANSFER
     * @uses self::VALUE_WIRE_TRANSFER_DEPOSIT_3_RD_PARTY
     * @uses self::VALUE_EXTERNAL_SYSTEM_DEPOSIT
     * @uses self::VALUE_EXTERNAL_SYSTEM_WITHDRAWAL
     * @uses self::VALUE_BALANCE_ADJUSTMENT_DEPOSIT
     * @uses self::VALUE_BALANCE_ADJUSTMENT_WITHDRAWAL
     * @uses self::VALUE_SEPA_TRANSFER_DEPOSIT
     * @uses self::VALUE_SEPA_TRANSFER_DEPOSIT_3_RD_PARTY
     * @uses self::VALUE_BONUS_PAYMENT
     * @uses self::VALUE_ADVCASH_CARD_UNLOAD
     * @uses self::VALUE_BANK_TRANSFER_REFUND
     * @uses self::VALUE_SYSTEM_PAYMENT_DEPOSIT
     * @uses self::VALUE_ADVCASH_SCI_CRYPTO_EXCHANGE_DEPOSIT
     * @uses self::VALUE_ADVCASH_SCI_CRYPTO_EXCHANGE_WITHDRAWAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_CHECK_DEPOSIT,
            self::VALUE_WIRE_TRANSFER_DEPOSIT,
            self::VALUE_WIRE_TRANSFER_WITHDRAW,
            self::VALUE_CHECK_WITHDRAW,
            self::VALUE_INNER_ACCOUNT,
            self::VALUE_INNER_SYSTEM,
            self::VALUE_CURRENCY_EXCHANGE,
            self::VALUE_MONEY_REQUEST,
            self::VALUE_REFERRAL_PAYMENT,
            self::VALUE_SYSTEM_PAYMENT,
            self::VALUE_REPAYMENT,
            self::VALUE_SCI_PAYMENT_OTHER_SYSTEM,
            self::VALUE_BANK_CARD_TRANSFER,
            self::VALUE_ADVCASH_CARD_TRANSFER,
            self::VALUE_WIRE_TRANSFER_DEPOSIT_3_RD_PARTY,
            self::VALUE_EXTERNAL_SYSTEM_DEPOSIT,
            self::VALUE_EXTERNAL_SYSTEM_WITHDRAWAL,
            self::VALUE_BALANCE_ADJUSTMENT_DEPOSIT,
            self::VALUE_BALANCE_ADJUSTMENT_WITHDRAWAL,
            self::VALUE_SEPA_TRANSFER_DEPOSIT,
            self::VALUE_SEPA_TRANSFER_DEPOSIT_3_RD_PARTY,
            self::VALUE_BONUS_PAYMENT,
            self::VALUE_ADVCASH_CARD_UNLOAD,
            self::VALUE_BANK_TRANSFER_REFUND,
            self::VALUE_SYSTEM_PAYMENT_DEPOSIT,
            self::VALUE_ADVCASH_SCI_CRYPTO_EXCHANGE_DEPOSIT,
            self::VALUE_ADVCASH_SCI_CRYPTO_EXCHANGE_WITHDRAWAL,
        );
    }
}
