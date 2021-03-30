<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'validationSendMoneyToAdvcashCard' => '\\StructType\\ValidationSendMoneyToAdvcashCard',
            'authDTO' => '\\StructType\\AuthDTO',
            'advcashCardTransferRequest' => '\\StructType\\AdvcashCardTransferRequest',
            'moneyRequest' => '\\StructType\\MoneyRequest',
            'validationSendMoneyToAdvcashCardResponse' => '\\StructType\\ValidationSendMoneyToAdvcashCardResponse',
            'sendMoneyToEcoinEU' => '\\StructType\\SendMoneyToEcoinEU',
            'withdrawToEcurrencyRequest' => '\\StructType\\WithdrawToEcurrencyRequest',
            'sendMoneyToEcoinEUResponse' => '\\StructType\\SendMoneyToEcoinEUResponse',
            'sendMoneyToEcoinEUResultHolder' => '\\StructType\\SendMoneyToEcoinEUResultHolder',
            'sendMoneyToMarketResultHolder' => '\\StructType\\SendMoneyToMarketResultHolder',
            'validateAccount' => '\\StructType\\ValidateAccount',
            'validateAccountRequestDTO' => '\\StructType\\ValidateAccountRequestDTO',
            'validateAccountResponse' => '\\StructType\\ValidateAccountResponse',
            'validateAccountResultDTO' => '\\StructType\\ValidateAccountResultDTO',
            'validateAccounts' => '\\StructType\\ValidateAccounts',
            'validateAccountsResponse' => '\\StructType\\ValidateAccountsResponse',
            'accountPresentDTO' => '\\StructType\\AccountPresentDTO',
            'sendMoneyToExmo' => '\\StructType\\SendMoneyToExmo',
            'sendMoneyToExmoResponse' => '\\StructType\\SendMoneyToExmoResponse',
            'sendMoneyToExmoResultHolder' => '\\StructType\\SendMoneyToExmoResultHolder',
            'register' => '\\StructType\\Register',
            'registrationRequest' => '\\StructType\\RegistrationRequest',
            'registerResponse' => '\\StructType\\RegisterResponse',
            'findTransaction' => '\\StructType\\FindTransaction',
            'findTransactionResponse' => '\\StructType\\FindTransactionResponse',
            'outcomingTransactionDTO' => '\\StructType\\OutcomingTransactionDTO',
            'abstractBaseDTO' => '\\StructType\\AbstractBaseDTO',
            'getCrypto2CardTransaction' => '\\StructType\\GetCrypto2CardTransaction',
            'getCrypto2CardTransactionResponse' => '\\StructType\\GetCrypto2CardTransactionResponse',
            'crypto2CardTransaction' => '\\StructType\\Crypto2CardTransaction',
            'makeCurrencyExchange' => '\\StructType\\MakeCurrencyExchange',
            'transferRequestDTO' => '\\StructType\\TransferRequestDTO',
            'makeCurrencyExchangeResponse' => '\\StructType\\MakeCurrencyExchangeResponse',
            'transferBankCard' => '\\StructType\\TransferBankCard',
            'bankCardTransferRequestDTO' => '\\StructType\\BankCardTransferRequestDTO',
            'transferBankCardResponse' => '\\StructType\\TransferBankCardResponse',
            'makeTransfer' => '\\StructType\\MakeTransfer',
            'makeTransferResponse' => '\\StructType\\MakeTransferResponse',
            'validationSendMoneyToEmail' => '\\StructType\\ValidationSendMoneyToEmail',
            'sendMoneyRequest' => '\\StructType\\SendMoneyRequest',
            'validationSendMoneyToEmailResponse' => '\\StructType\\ValidationSendMoneyToEmailResponse',
            'validationSendMoneyToEcoinEU' => '\\StructType\\ValidationSendMoneyToEcoinEU',
            'validationSendMoneyToEcoinEUResponse' => '\\StructType\\ValidationSendMoneyToEcoinEUResponse',
            'sendMoneyToBankCard' => '\\StructType\\SendMoneyToBankCard',
            'bankCardTransferRequest' => '\\StructType\\BankCardTransferRequest',
            'sendMoneyToBankCardResponse' => '\\StructType\\SendMoneyToBankCardResponse',
            'validateWithdrawalThroughExternalPaymentSystem' => '\\StructType\\ValidateWithdrawalThroughExternalPaymentSystem',
            'withdrawalThroughExternalPaymentSystemRequestDTO' => '\\StructType\\WithdrawalThroughExternalPaymentSystemRequestDTO',
            'validateWithdrawalThroughExternalPaymentSystemResponse' => '\\StructType\\ValidateWithdrawalThroughExternalPaymentSystemResponse',
            'cancelProtectedTransfer' => '\\StructType\\CancelProtectedTransfer',
            'cancelProtectedTransferResponse' => '\\StructType\\CancelProtectedTransferResponse',
            'cancelProtectedTransferResultHolder' => '\\StructType\\CancelProtectedTransferResultHolder',
            'createApi' => '\\StructType\\CreateApi',
            'createApiRequest' => '\\StructType\\CreateApiRequest',
            'createApiResponse' => '\\StructType\\CreateApiResponse',
            'validateEmailTransfer' => '\\StructType\\ValidateEmailTransfer',
            'emailTransferRequestDTO' => '\\StructType\\EmailTransferRequestDTO',
            'validateEmailTransferResponse' => '\\StructType\\ValidateEmailTransferResponse',
            'createBitcoinInvoice' => '\\StructType\\CreateBitcoinInvoice',
            'createBitcoinInvoiceRequest' => '\\StructType\\CreateBitcoinInvoiceRequest',
            'createBitcoinInvoiceResponse' => '\\StructType\\CreateBitcoinInvoiceResponse',
            'createBitcoinInvoiceResult' => '\\StructType\\CreateBitcoinInvoiceResult',
            'checkCurrencyExchange' => '\\StructType\\CheckCurrencyExchange',
            'checkCurrencyExchangeRequest' => '\\StructType\\CheckCurrencyExchangeRequest',
            'checkCurrencyExchangeResponse' => '\\StructType\\CheckCurrencyExchangeResponse',
            'checkCurrencyExchangeResultHolder' => '\\StructType\\CheckCurrencyExchangeResultHolder',
            'createCrypto2CardQuote' => '\\StructType\\CreateCrypto2CardQuote',
            'createCrypto2CardQuoteResponse' => '\\StructType\\CreateCrypto2CardQuoteResponse',
            'crypto2CardQuoteDTO' => '\\StructType\\Crypto2CardQuoteDTO',
            'validationCurrencyExchange' => '\\StructType\\ValidationCurrencyExchange',
            'currencyExchangeRequest' => '\\StructType\\CurrencyExchangeRequest',
            'validationCurrencyExchangeResponse' => '\\StructType\\ValidationCurrencyExchangeResponse',
            'history' => '\\StructType\\History',
            'MerchantAPITransactionFilter' => '\\StructType\\MerchantAPITransactionFilter',
            'historyResponse' => '\\StructType\\HistoryResponse',
            'validateCurrencyExchange' => '\\StructType\\ValidateCurrencyExchange',
            'validateCurrencyExchangeResponse' => '\\StructType\\ValidateCurrencyExchangeResponse',
            'confirmCrypto2CardQuote' => '\\StructType\\ConfirmCrypto2CardQuote',
            'confirmCrypto2CardQuoteRequest' => '\\StructType\\ConfirmCrypto2CardQuoteRequest',
            'confirmCrypto2CardQuoteResponse' => '\\StructType\\ConfirmCrypto2CardQuoteResponse',
            'validationSendMoneyToWex' => '\\StructType\\ValidationSendMoneyToWex',
            'validationSendMoneyToWexResponse' => '\\StructType\\ValidationSendMoneyToWexResponse',
            'confirmCryptoCurrencyWithdrawalInvoice' => '\\StructType\\ConfirmCryptoCurrencyWithdrawalInvoice',
            'confirmCryptoCurrencyWithdrawalInvoiceRequest' => '\\StructType\\ConfirmCryptoCurrencyWithdrawalInvoiceRequest',
            'confirmCryptoCurrencyWithdrawalInvoiceResponse' => '\\StructType\\ConfirmCryptoCurrencyWithdrawalInvoiceResponse',
            'findCryptoCurrencyWithdrawalInvoiceByOrderId' => '\\StructType\\FindCryptoCurrencyWithdrawalInvoiceByOrderId',
            'findCryptoCurrencyWithdrawalInvoiceByOrderIdResponse' => '\\StructType\\FindCryptoCurrencyWithdrawalInvoiceByOrderIdResponse',
            'cryptoCurrencyWithdrawalInvoiceDTO' => '\\StructType\\CryptoCurrencyWithdrawalInvoiceDTO',
            'getCrypto2CardTransactionByOrderId' => '\\StructType\\GetCrypto2CardTransactionByOrderId',
            'getCrypto2CardTransactionByOrderIdResponse' => '\\StructType\\GetCrypto2CardTransactionByOrderIdResponse',
            'sendMoneyToEmail' => '\\StructType\\SendMoneyToEmail',
            'sendMoneyToEmailResponse' => '\\StructType\\SendMoneyToEmailResponse',
            'validationSendMoneyToBankCard' => '\\StructType\\ValidationSendMoneyToBankCard',
            'validationSendMoneyToBankCardResponse' => '\\StructType\\ValidationSendMoneyToBankCardResponse',
            'sendMoneyToAdvcashCard' => '\\StructType\\SendMoneyToAdvcashCard',
            'sendMoneyToAdvcashCardResponse' => '\\StructType\\SendMoneyToAdvcashCardResponse',
            'currencyExchange' => '\\StructType\\CurrencyExchange',
            'currencyExchangeResponse' => '\\StructType\\CurrencyExchangeResponse',
            'sendMoney' => '\\StructType\\SendMoney',
            'sendMoneyResponse' => '\\StructType\\SendMoneyResponse',
            'validationSendMoneyToEcurrency' => '\\StructType\\ValidationSendMoneyToEcurrency',
            'validationSendMoneyToEcurrencyResponse' => '\\StructType\\ValidationSendMoneyToEcurrencyResponse',
            'sendMoneyToEcurrency' => '\\StructType\\SendMoneyToEcurrency',
            'sendMoneyToEcurrencyResponse' => '\\StructType\\SendMoneyToEcurrencyResponse',
            'transferAdvcashCard' => '\\StructType\\TransferAdvcashCard',
            'advcashCardTransferRequestDTO' => '\\StructType\\AdvcashCardTransferRequestDTO',
            'transferAdvcashCardResponse' => '\\StructType\\TransferAdvcashCardResponse',
            'createCryptoCurrencyWithdrawalInvoice' => '\\StructType\\CreateCryptoCurrencyWithdrawalInvoice',
            'createCryptoCurrencyWithdrawalInvoiceResponse' => '\\StructType\\CreateCryptoCurrencyWithdrawalInvoiceResponse',
            'validateBankCardTransfer' => '\\StructType\\ValidateBankCardTransfer',
            'validateBankCardTransferResponse' => '\\StructType\\ValidateBankCardTransferResponse',
            'emailTransfer' => '\\StructType\\EmailTransfer',
            'emailTransferResponse' => '\\StructType\\EmailTransferResponse',
            'withdrawalThroughExternalPaymentSystem' => '\\StructType\\WithdrawalThroughExternalPaymentSystem',
            'withdrawalThroughExternalPaymentSystemResponse' => '\\StructType\\WithdrawalThroughExternalPaymentSystemResponse',
            'validationSendMoneyToExmo' => '\\StructType\\ValidationSendMoneyToExmo',
            'validationSendMoneyToExmoResponse' => '\\StructType\\ValidationSendMoneyToExmoResponse',
            'validateAdvcashCardTransfer' => '\\StructType\\ValidateAdvcashCardTransfer',
            'validateAdvcashCardTransferResponse' => '\\StructType\\ValidateAdvcashCardTransferResponse',
            'findPaymentByOrderId' => '\\StructType\\FindPaymentByOrderId',
            'paymentOrderRequest' => '\\StructType\\PaymentOrderRequest',
            'findPaymentByOrderIdResponse' => '\\StructType\\FindPaymentByOrderIdResponse',
            'paymentOrderResult' => '\\StructType\\PaymentOrderResult',
            'findCryptoCurrencyWithdrawalInvoiceById' => '\\StructType\\FindCryptoCurrencyWithdrawalInvoiceById',
            'findCryptoCurrencyWithdrawalInvoiceByIdResponse' => '\\StructType\\FindCryptoCurrencyWithdrawalInvoiceByIdResponse',
            'createCryptoCurrencyInvoice' => '\\StructType\\CreateCryptoCurrencyInvoice',
            'createCryptoCurrencyInvoiceRequest' => '\\StructType\\CreateCryptoCurrencyInvoiceRequest',
            'createCryptoCurrencyInvoiceResponse' => '\\StructType\\CreateCryptoCurrencyInvoiceResponse',
            'createCryptoCurrencyInvoiceResult' => '\\StructType\\CreateCryptoCurrencyInvoiceResult',
            'validateTransfer' => '\\StructType\\ValidateTransfer',
            'validateTransferResponse' => '\\StructType\\ValidateTransferResponse',
            'validationSendMoney' => '\\StructType\\ValidationSendMoney',
            'validationSendMoneyResponse' => '\\StructType\\ValidationSendMoneyResponse',
            'getBalances' => '\\StructType\\GetBalances',
            'getBalancesResponse' => '\\StructType\\GetBalancesResponse',
            'walletBalanceDTO' => '\\StructType\\WalletBalanceDTO',
            'sendMoneyToWex' => '\\StructType\\SendMoneyToWex',
            'sendMoneyToWexResponse' => '\\StructType\\SendMoneyToWexResponse',
            'sendMoneyToWexResultHolder' => '\\StructType\\SendMoneyToWexResultHolder',
            'BadParametersException' => '\\StructType\\BadParametersException',
            'InternalException' => '\\StructType\\InternalException',
            'LimitPerTransactionException' => '\\StructType\\LimitPerTransactionException',
            'LimitPerMonthException' => '\\StructType\\LimitPerMonthException',
            'WrongParamsException' => '\\StructType\\WrongParamsException',
            'UserBlockedException' => '\\StructType\\UserBlockedException',
            'MerchantDisabledException' => '\\StructType\\MerchantDisabledException',
            'LimitPerQuarterException' => '\\StructType\\LimitPerQuarterException',
            'TransactionIsNotAvailableException' => '\\StructType\\TransactionIsNotAvailableException',
            'LimitPerDayException' => '\\StructType\\LimitPerDayException',
            'LimitPerYearException' => '\\StructType\\LimitPerYearException',
            'DatabaseException' => '\\StructType\\DatabaseException',
            'LifetimeLimitException' => '\\StructType\\LifetimeLimitException',
            'TransactionFailureException' => '\\StructType\\TransactionFailureException',
            'LimitPerCardPerDayException' => '\\StructType\\LimitPerCardPerDayException',
            'CardIsNotActiveException' => '\\StructType\\CardIsNotActiveException',
            'WrongIpException' => '\\StructType\\WrongIpException',
            'CountLimitException' => '\\StructType\\CountLimitException',
            'AdvcashCardMaxAllowedBalanceExceededException' => '\\StructType\\AdvcashCardMaxAllowedBalanceExceededException',
            'AccessDeniedException' => '\\StructType\\AccessDeniedException',
            'CardDoesNotExistException' => '\\StructType\\CardDoesNotExistException',
            'WalletDoesNotExist' => '\\StructType\\WalletDoesNotExist',
            'NotAuthException' => '\\StructType\\NotAuthException',
            'NotEnoughMoneyException' => '\\StructType\\NotEnoughMoneyException',
            'TransactionTemporaryNotAvailableException' => '\\StructType\\TransactionTemporaryNotAvailableException',
            'ApiException' => '\\StructType\\ApiException',
            'ExchangeCurrencyException' => '\\StructType\\ExchangeCurrencyException',
            'NotEnoughMoneyApiException' => '\\StructType\\NotEnoughMoneyApiException',
            'UserDoesNotExistException' => '\\StructType\\UserDoesNotExistException',
            'LimitsException' => '\\StructType\\LimitsException',
            'CallRestrictionException' => '\\StructType\\CallRestrictionException',
            'EmailAlreadyExistException' => '\\StructType\\EmailAlreadyExistException',
            'RegistrationException' => '\\StructType\\RegistrationException',
            'AdditionalDataRequiredException' => '\\StructType\\AdditionalDataRequiredException',
            'CardNumberIsNotValidException' => '\\StructType\\CardNumberIsNotValidException',
            'WalletCurrencyIncorrectException' => '\\StructType\\WalletCurrencyIncorrectException',
            'CodeIsNotValidException' => '\\StructType\\CodeIsNotValidException',
            'WrongEmailException' => '\\StructType\\WrongEmailException',
            'NotSupportedBankBinException' => '\\StructType\\NotSupportedBankBinException',
            'NotSupportedCountryException' => '\\StructType\\NotSupportedCountryException',
            'DuplicateOrderIdException' => '\\StructType\\DuplicateOrderIdException',
            'JAXBException' => '\\StructType\\JAXBException',
            'NotAvailableDepositSystemException' => '\\StructType\\NotAvailableDepositSystemException',
            'CryptoCurrencyMarketsUnavailableException' => '\\StructType\\CryptoCurrencyMarketsUnavailableException',
            'PhotoWithBankCardRequiredException' => '\\StructType\\PhotoWithBankCardRequiredException',
            'ProtectionCodeIsNotAllowedException' => '\\StructType\\ProtectionCodeIsNotAllowedException',
        );
    }
}