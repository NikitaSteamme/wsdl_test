<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'ClassMap' => $baseDir . '/src/ClassMap.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'EnumType\\CardType' => $baseDir . '/src/EnumType/CardType.php',
    'EnumType\\CoinName' => $baseDir . '/src/EnumType/CoinName.php',
    'EnumType\\CryptoCurrencyDepositPaymentStatus' => $baseDir . '/src/EnumType/CryptoCurrencyDepositPaymentStatus.php',
    'EnumType\\CryptoCurrencyTransportProtocol' => $baseDir . '/src/EnumType/CryptoCurrencyTransportProtocol.php',
    'EnumType\\CryptoCurrencyWithdrawalInvoiceStatus' => $baseDir . '/src/EnumType/CryptoCurrencyWithdrawalInvoiceStatus.php',
    'EnumType\\Currency' => $baseDir . '/src/EnumType/Currency.php',
    'EnumType\\CurrencyExchangeAction' => $baseDir . '/src/EnumType/CurrencyExchangeAction.php',
    'EnumType\\DateIntervals' => $baseDir . '/src/EnumType/DateIntervals.php',
    'EnumType\\DepositPaymentMethodType' => $baseDir . '/src/EnumType/DepositPaymentMethodType.php',
    'EnumType\\Ecurrency' => $baseDir . '/src/EnumType/Ecurrency.php',
    'EnumType\\ExceptionType' => $baseDir . '/src/EnumType/ExceptionType.php',
    'EnumType\\ExternalSystemWithdrawalType' => $baseDir . '/src/EnumType/ExternalSystemWithdrawalType.php',
    'EnumType\\LimitSource' => $baseDir . '/src/EnumType/LimitSource.php',
    'EnumType\\OperationResult' => $baseDir . '/src/EnumType/OperationResult.php',
    'EnumType\\PaymentRequestStatus' => $baseDir . '/src/EnumType/PaymentRequestStatus.php',
    'EnumType\\SciAllowedPaymentSystems' => $baseDir . '/src/EnumType/SciAllowedPaymentSystems.php',
    'EnumType\\SortOrder' => $baseDir . '/src/EnumType/SortOrder.php',
    'EnumType\\SupportedLanguage' => $baseDir . '/src/EnumType/SupportedLanguage.php',
    'EnumType\\TransactionDirection' => $baseDir . '/src/EnumType/TransactionDirection.php',
    'EnumType\\TransactionName' => $baseDir . '/src/EnumType/TransactionName.php',
    'EnumType\\TransactionStatus' => $baseDir . '/src/EnumType/TransactionStatus.php',
    'EnumType\\TypeOfTransaction' => $baseDir . '/src/EnumType/TypeOfTransaction.php',
    'EnumType\\VerificationStatus' => $baseDir . '/src/EnumType/VerificationStatus.php',
    'ServiceType\\Cancel' => $baseDir . '/src/ServiceType/Cancel.php',
    'ServiceType\\Check' => $baseDir . '/src/ServiceType/Check.php',
    'ServiceType\\Confirm' => $baseDir . '/src/ServiceType/Confirm.php',
    'ServiceType\\Create' => $baseDir . '/src/ServiceType/Create.php',
    'ServiceType\\Currency' => $baseDir . '/src/ServiceType/Currency.php',
    'ServiceType\\Email' => $baseDir . '/src/ServiceType/Email.php',
    'ServiceType\\Find' => $baseDir . '/src/ServiceType/Find.php',
    'ServiceType\\Get' => $baseDir . '/src/ServiceType/Get.php',
    'ServiceType\\History' => $baseDir . '/src/ServiceType/History.php',
    'ServiceType\\Make' => $baseDir . '/src/ServiceType/Make.php',
    'ServiceType\\Register' => $baseDir . '/src/ServiceType/Register.php',
    'ServiceType\\Send' => $baseDir . '/src/ServiceType/Send.php',
    'ServiceType\\Transfer' => $baseDir . '/src/ServiceType/Transfer.php',
    'ServiceType\\Validate' => $baseDir . '/src/ServiceType/Validate.php',
    'ServiceType\\Validation' => $baseDir . '/src/ServiceType/Validation.php',
    'ServiceType\\Withdrawal' => $baseDir . '/src/ServiceType/Withdrawal.php',
    'StructType\\AbstractBaseDTO' => $baseDir . '/src/StructType/AbstractBaseDTO.php',
    'StructType\\AccessDeniedException' => $baseDir . '/src/StructType/AccessDeniedException.php',
    'StructType\\AccountPresentDTO' => $baseDir . '/src/StructType/AccountPresentDTO.php',
    'StructType\\AdditionalDataRequiredException' => $baseDir . '/src/StructType/AdditionalDataRequiredException.php',
    'StructType\\AdvcashCardMaxAllowedBalanceExceededException' => $baseDir . '/src/StructType/AdvcashCardMaxAllowedBalanceExceededException.php',
    'StructType\\AdvcashCardTransferRequest' => $baseDir . '/src/StructType/AdvcashCardTransferRequest.php',
    'StructType\\AdvcashCardTransferRequestDTO' => $baseDir . '/src/StructType/AdvcashCardTransferRequestDTO.php',
    'StructType\\ApiException' => $baseDir . '/src/StructType/ApiException.php',
    'StructType\\AuthDTO' => $baseDir . '/src/StructType/AuthDTO.php',
    'StructType\\BadParametersException' => $baseDir . '/src/StructType/BadParametersException.php',
    'StructType\\BankCardTransferRequest' => $baseDir . '/src/StructType/BankCardTransferRequest.php',
    'StructType\\BankCardTransferRequestDTO' => $baseDir . '/src/StructType/BankCardTransferRequestDTO.php',
    'StructType\\CallRestrictionException' => $baseDir . '/src/StructType/CallRestrictionException.php',
    'StructType\\CancelProtectedTransfer' => $baseDir . '/src/StructType/CancelProtectedTransfer.php',
    'StructType\\CancelProtectedTransferResponse' => $baseDir . '/src/StructType/CancelProtectedTransferResponse.php',
    'StructType\\CancelProtectedTransferResultHolder' => $baseDir . '/src/StructType/CancelProtectedTransferResultHolder.php',
    'StructType\\CardDoesNotExistException' => $baseDir . '/src/StructType/CardDoesNotExistException.php',
    'StructType\\CardIsNotActiveException' => $baseDir . '/src/StructType/CardIsNotActiveException.php',
    'StructType\\CardNumberIsNotValidException' => $baseDir . '/src/StructType/CardNumberIsNotValidException.php',
    'StructType\\CheckCurrencyExchange' => $baseDir . '/src/StructType/CheckCurrencyExchange.php',
    'StructType\\CheckCurrencyExchangeRequest' => $baseDir . '/src/StructType/CheckCurrencyExchangeRequest.php',
    'StructType\\CheckCurrencyExchangeResponse' => $baseDir . '/src/StructType/CheckCurrencyExchangeResponse.php',
    'StructType\\CheckCurrencyExchangeResultHolder' => $baseDir . '/src/StructType/CheckCurrencyExchangeResultHolder.php',
    'StructType\\CodeIsNotValidException' => $baseDir . '/src/StructType/CodeIsNotValidException.php',
    'StructType\\ConfirmCrypto2CardQuote' => $baseDir . '/src/StructType/ConfirmCrypto2CardQuote.php',
    'StructType\\ConfirmCrypto2CardQuoteRequest' => $baseDir . '/src/StructType/ConfirmCrypto2CardQuoteRequest.php',
    'StructType\\ConfirmCrypto2CardQuoteResponse' => $baseDir . '/src/StructType/ConfirmCrypto2CardQuoteResponse.php',
    'StructType\\ConfirmCryptoCurrencyWithdrawalInvoice' => $baseDir . '/src/StructType/ConfirmCryptoCurrencyWithdrawalInvoice.php',
    'StructType\\ConfirmCryptoCurrencyWithdrawalInvoiceRequest' => $baseDir . '/src/StructType/ConfirmCryptoCurrencyWithdrawalInvoiceRequest.php',
    'StructType\\ConfirmCryptoCurrencyWithdrawalInvoiceResponse' => $baseDir . '/src/StructType/ConfirmCryptoCurrencyWithdrawalInvoiceResponse.php',
    'StructType\\CountLimitException' => $baseDir . '/src/StructType/CountLimitException.php',
    'StructType\\CreateApi' => $baseDir . '/src/StructType/CreateApi.php',
    'StructType\\CreateApiRequest' => $baseDir . '/src/StructType/CreateApiRequest.php',
    'StructType\\CreateApiResponse' => $baseDir . '/src/StructType/CreateApiResponse.php',
    'StructType\\CreateBitcoinInvoice' => $baseDir . '/src/StructType/CreateBitcoinInvoice.php',
    'StructType\\CreateBitcoinInvoiceRequest' => $baseDir . '/src/StructType/CreateBitcoinInvoiceRequest.php',
    'StructType\\CreateBitcoinInvoiceResponse' => $baseDir . '/src/StructType/CreateBitcoinInvoiceResponse.php',
    'StructType\\CreateBitcoinInvoiceResult' => $baseDir . '/src/StructType/CreateBitcoinInvoiceResult.php',
    'StructType\\CreateCrypto2CardQuote' => $baseDir . '/src/StructType/CreateCrypto2CardQuote.php',
    'StructType\\CreateCrypto2CardQuoteResponse' => $baseDir . '/src/StructType/CreateCrypto2CardQuoteResponse.php',
    'StructType\\CreateCryptoCurrencyInvoice' => $baseDir . '/src/StructType/CreateCryptoCurrencyInvoice.php',
    'StructType\\CreateCryptoCurrencyInvoiceRequest' => $baseDir . '/src/StructType/CreateCryptoCurrencyInvoiceRequest.php',
    'StructType\\CreateCryptoCurrencyInvoiceResponse' => $baseDir . '/src/StructType/CreateCryptoCurrencyInvoiceResponse.php',
    'StructType\\CreateCryptoCurrencyInvoiceResult' => $baseDir . '/src/StructType/CreateCryptoCurrencyInvoiceResult.php',
    'StructType\\CreateCryptoCurrencyWithdrawalInvoice' => $baseDir . '/src/StructType/CreateCryptoCurrencyWithdrawalInvoice.php',
    'StructType\\CreateCryptoCurrencyWithdrawalInvoiceResponse' => $baseDir . '/src/StructType/CreateCryptoCurrencyWithdrawalInvoiceResponse.php',
    'StructType\\Crypto2CardQuoteDTO' => $baseDir . '/src/StructType/Crypto2CardQuoteDTO.php',
    'StructType\\Crypto2CardTransaction' => $baseDir . '/src/StructType/Crypto2CardTransaction.php',
    'StructType\\CryptoCurrencyMarketsUnavailableException' => $baseDir . '/src/StructType/CryptoCurrencyMarketsUnavailableException.php',
    'StructType\\CryptoCurrencyWithdrawalInvoiceDTO' => $baseDir . '/src/StructType/CryptoCurrencyWithdrawalInvoiceDTO.php',
    'StructType\\CurrencyExchange' => $baseDir . '/src/StructType/CurrencyExchange.php',
    'StructType\\CurrencyExchangeRequest' => $baseDir . '/src/StructType/CurrencyExchangeRequest.php',
    'StructType\\CurrencyExchangeResponse' => $baseDir . '/src/StructType/CurrencyExchangeResponse.php',
    'StructType\\DatabaseException' => $baseDir . '/src/StructType/DatabaseException.php',
    'StructType\\DuplicateOrderIdException' => $baseDir . '/src/StructType/DuplicateOrderIdException.php',
    'StructType\\EmailAlreadyExistException' => $baseDir . '/src/StructType/EmailAlreadyExistException.php',
    'StructType\\EmailTransfer' => $baseDir . '/src/StructType/EmailTransfer.php',
    'StructType\\EmailTransferRequestDTO' => $baseDir . '/src/StructType/EmailTransferRequestDTO.php',
    'StructType\\EmailTransferResponse' => $baseDir . '/src/StructType/EmailTransferResponse.php',
    'StructType\\ExchangeCurrencyException' => $baseDir . '/src/StructType/ExchangeCurrencyException.php',
    'StructType\\FindCryptoCurrencyWithdrawalInvoiceById' => $baseDir . '/src/StructType/FindCryptoCurrencyWithdrawalInvoiceById.php',
    'StructType\\FindCryptoCurrencyWithdrawalInvoiceByIdResponse' => $baseDir . '/src/StructType/FindCryptoCurrencyWithdrawalInvoiceByIdResponse.php',
    'StructType\\FindCryptoCurrencyWithdrawalInvoiceByOrderId' => $baseDir . '/src/StructType/FindCryptoCurrencyWithdrawalInvoiceByOrderId.php',
    'StructType\\FindCryptoCurrencyWithdrawalInvoiceByOrderIdResponse' => $baseDir . '/src/StructType/FindCryptoCurrencyWithdrawalInvoiceByOrderIdResponse.php',
    'StructType\\FindPaymentByOrderId' => $baseDir . '/src/StructType/FindPaymentByOrderId.php',
    'StructType\\FindPaymentByOrderIdResponse' => $baseDir . '/src/StructType/FindPaymentByOrderIdResponse.php',
    'StructType\\FindTransaction' => $baseDir . '/src/StructType/FindTransaction.php',
    'StructType\\FindTransactionResponse' => $baseDir . '/src/StructType/FindTransactionResponse.php',
    'StructType\\GetBalances' => $baseDir . '/src/StructType/GetBalances.php',
    'StructType\\GetBalancesResponse' => $baseDir . '/src/StructType/GetBalancesResponse.php',
    'StructType\\GetCrypto2CardTransaction' => $baseDir . '/src/StructType/GetCrypto2CardTransaction.php',
    'StructType\\GetCrypto2CardTransactionByOrderId' => $baseDir . '/src/StructType/GetCrypto2CardTransactionByOrderId.php',
    'StructType\\GetCrypto2CardTransactionByOrderIdResponse' => $baseDir . '/src/StructType/GetCrypto2CardTransactionByOrderIdResponse.php',
    'StructType\\GetCrypto2CardTransactionResponse' => $baseDir . '/src/StructType/GetCrypto2CardTransactionResponse.php',
    'StructType\\History' => $baseDir . '/src/StructType/History.php',
    'StructType\\HistoryResponse' => $baseDir . '/src/StructType/HistoryResponse.php',
    'StructType\\InternalException' => $baseDir . '/src/StructType/InternalException.php',
    'StructType\\JAXBException' => $baseDir . '/src/StructType/JAXBException.php',
    'StructType\\LifetimeLimitException' => $baseDir . '/src/StructType/LifetimeLimitException.php',
    'StructType\\LimitPerCardPerDayException' => $baseDir . '/src/StructType/LimitPerCardPerDayException.php',
    'StructType\\LimitPerDayException' => $baseDir . '/src/StructType/LimitPerDayException.php',
    'StructType\\LimitPerMonthException' => $baseDir . '/src/StructType/LimitPerMonthException.php',
    'StructType\\LimitPerQuarterException' => $baseDir . '/src/StructType/LimitPerQuarterException.php',
    'StructType\\LimitPerTransactionException' => $baseDir . '/src/StructType/LimitPerTransactionException.php',
    'StructType\\LimitPerYearException' => $baseDir . '/src/StructType/LimitPerYearException.php',
    'StructType\\LimitsException' => $baseDir . '/src/StructType/LimitsException.php',
    'StructType\\MakeCurrencyExchange' => $baseDir . '/src/StructType/MakeCurrencyExchange.php',
    'StructType\\MakeCurrencyExchangeResponse' => $baseDir . '/src/StructType/MakeCurrencyExchangeResponse.php',
    'StructType\\MakeTransfer' => $baseDir . '/src/StructType/MakeTransfer.php',
    'StructType\\MakeTransferResponse' => $baseDir . '/src/StructType/MakeTransferResponse.php',
    'StructType\\MerchantAPITransactionFilter' => $baseDir . '/src/StructType/MerchantAPITransactionFilter.php',
    'StructType\\MerchantDisabledException' => $baseDir . '/src/StructType/MerchantDisabledException.php',
    'StructType\\MoneyRequest' => $baseDir . '/src/StructType/MoneyRequest.php',
    'StructType\\NotAuthException' => $baseDir . '/src/StructType/NotAuthException.php',
    'StructType\\NotAvailableDepositSystemException' => $baseDir . '/src/StructType/NotAvailableDepositSystemException.php',
    'StructType\\NotEnoughMoneyApiException' => $baseDir . '/src/StructType/NotEnoughMoneyApiException.php',
    'StructType\\NotEnoughMoneyException' => $baseDir . '/src/StructType/NotEnoughMoneyException.php',
    'StructType\\NotSupportedBankBinException' => $baseDir . '/src/StructType/NotSupportedBankBinException.php',
    'StructType\\NotSupportedCountryException' => $baseDir . '/src/StructType/NotSupportedCountryException.php',
    'StructType\\OutcomingTransactionDTO' => $baseDir . '/src/StructType/OutcomingTransactionDTO.php',
    'StructType\\PaymentOrderRequest' => $baseDir . '/src/StructType/PaymentOrderRequest.php',
    'StructType\\PaymentOrderResult' => $baseDir . '/src/StructType/PaymentOrderResult.php',
    'StructType\\PhotoWithBankCardRequiredException' => $baseDir . '/src/StructType/PhotoWithBankCardRequiredException.php',
    'StructType\\ProtectionCodeIsNotAllowedException' => $baseDir . '/src/StructType/ProtectionCodeIsNotAllowedException.php',
    'StructType\\Register' => $baseDir . '/src/StructType/Register.php',
    'StructType\\RegisterResponse' => $baseDir . '/src/StructType/RegisterResponse.php',
    'StructType\\RegistrationException' => $baseDir . '/src/StructType/RegistrationException.php',
    'StructType\\RegistrationRequest' => $baseDir . '/src/StructType/RegistrationRequest.php',
    'StructType\\SendMoney' => $baseDir . '/src/StructType/SendMoney.php',
    'StructType\\SendMoneyRequest' => $baseDir . '/src/StructType/SendMoneyRequest.php',
    'StructType\\SendMoneyResponse' => $baseDir . '/src/StructType/SendMoneyResponse.php',
    'StructType\\SendMoneyToAdvcashCard' => $baseDir . '/src/StructType/SendMoneyToAdvcashCard.php',
    'StructType\\SendMoneyToAdvcashCardResponse' => $baseDir . '/src/StructType/SendMoneyToAdvcashCardResponse.php',
    'StructType\\SendMoneyToBankCard' => $baseDir . '/src/StructType/SendMoneyToBankCard.php',
    'StructType\\SendMoneyToBankCardResponse' => $baseDir . '/src/StructType/SendMoneyToBankCardResponse.php',
    'StructType\\SendMoneyToEcoinEU' => $baseDir . '/src/StructType/SendMoneyToEcoinEU.php',
    'StructType\\SendMoneyToEcoinEUResponse' => $baseDir . '/src/StructType/SendMoneyToEcoinEUResponse.php',
    'StructType\\SendMoneyToEcoinEUResultHolder' => $baseDir . '/src/StructType/SendMoneyToEcoinEUResultHolder.php',
    'StructType\\SendMoneyToEcurrency' => $baseDir . '/src/StructType/SendMoneyToEcurrency.php',
    'StructType\\SendMoneyToEcurrencyResponse' => $baseDir . '/src/StructType/SendMoneyToEcurrencyResponse.php',
    'StructType\\SendMoneyToEmail' => $baseDir . '/src/StructType/SendMoneyToEmail.php',
    'StructType\\SendMoneyToEmailResponse' => $baseDir . '/src/StructType/SendMoneyToEmailResponse.php',
    'StructType\\SendMoneyToExmo' => $baseDir . '/src/StructType/SendMoneyToExmo.php',
    'StructType\\SendMoneyToExmoResponse' => $baseDir . '/src/StructType/SendMoneyToExmoResponse.php',
    'StructType\\SendMoneyToExmoResultHolder' => $baseDir . '/src/StructType/SendMoneyToExmoResultHolder.php',
    'StructType\\SendMoneyToMarketResultHolder' => $baseDir . '/src/StructType/SendMoneyToMarketResultHolder.php',
    'StructType\\SendMoneyToWex' => $baseDir . '/src/StructType/SendMoneyToWex.php',
    'StructType\\SendMoneyToWexResponse' => $baseDir . '/src/StructType/SendMoneyToWexResponse.php',
    'StructType\\SendMoneyToWexResultHolder' => $baseDir . '/src/StructType/SendMoneyToWexResultHolder.php',
    'StructType\\TransactionFailureException' => $baseDir . '/src/StructType/TransactionFailureException.php',
    'StructType\\TransactionIsNotAvailableException' => $baseDir . '/src/StructType/TransactionIsNotAvailableException.php',
    'StructType\\TransactionTemporaryNotAvailableException' => $baseDir . '/src/StructType/TransactionTemporaryNotAvailableException.php',
    'StructType\\TransferAdvcashCard' => $baseDir . '/src/StructType/TransferAdvcashCard.php',
    'StructType\\TransferAdvcashCardResponse' => $baseDir . '/src/StructType/TransferAdvcashCardResponse.php',
    'StructType\\TransferBankCard' => $baseDir . '/src/StructType/TransferBankCard.php',
    'StructType\\TransferBankCardResponse' => $baseDir . '/src/StructType/TransferBankCardResponse.php',
    'StructType\\TransferRequestDTO' => $baseDir . '/src/StructType/TransferRequestDTO.php',
    'StructType\\UserBlockedException' => $baseDir . '/src/StructType/UserBlockedException.php',
    'StructType\\UserDoesNotExistException' => $baseDir . '/src/StructType/UserDoesNotExistException.php',
    'StructType\\ValidateAccount' => $baseDir . '/src/StructType/ValidateAccount.php',
    'StructType\\ValidateAccountRequestDTO' => $baseDir . '/src/StructType/ValidateAccountRequestDTO.php',
    'StructType\\ValidateAccountResponse' => $baseDir . '/src/StructType/ValidateAccountResponse.php',
    'StructType\\ValidateAccountResultDTO' => $baseDir . '/src/StructType/ValidateAccountResultDTO.php',
    'StructType\\ValidateAccounts' => $baseDir . '/src/StructType/ValidateAccounts.php',
    'StructType\\ValidateAccountsResponse' => $baseDir . '/src/StructType/ValidateAccountsResponse.php',
    'StructType\\ValidateAdvcashCardTransfer' => $baseDir . '/src/StructType/ValidateAdvcashCardTransfer.php',
    'StructType\\ValidateAdvcashCardTransferResponse' => $baseDir . '/src/StructType/ValidateAdvcashCardTransferResponse.php',
    'StructType\\ValidateBankCardTransfer' => $baseDir . '/src/StructType/ValidateBankCardTransfer.php',
    'StructType\\ValidateBankCardTransferResponse' => $baseDir . '/src/StructType/ValidateBankCardTransferResponse.php',
    'StructType\\ValidateCurrencyExchange' => $baseDir . '/src/StructType/ValidateCurrencyExchange.php',
    'StructType\\ValidateCurrencyExchangeResponse' => $baseDir . '/src/StructType/ValidateCurrencyExchangeResponse.php',
    'StructType\\ValidateEmailTransfer' => $baseDir . '/src/StructType/ValidateEmailTransfer.php',
    'StructType\\ValidateEmailTransferResponse' => $baseDir . '/src/StructType/ValidateEmailTransferResponse.php',
    'StructType\\ValidateTransfer' => $baseDir . '/src/StructType/ValidateTransfer.php',
    'StructType\\ValidateTransferResponse' => $baseDir . '/src/StructType/ValidateTransferResponse.php',
    'StructType\\ValidateWithdrawalThroughExternalPaymentSystem' => $baseDir . '/src/StructType/ValidateWithdrawalThroughExternalPaymentSystem.php',
    'StructType\\ValidateWithdrawalThroughExternalPaymentSystemResponse' => $baseDir . '/src/StructType/ValidateWithdrawalThroughExternalPaymentSystemResponse.php',
    'StructType\\ValidationCurrencyExchange' => $baseDir . '/src/StructType/ValidationCurrencyExchange.php',
    'StructType\\ValidationCurrencyExchangeResponse' => $baseDir . '/src/StructType/ValidationCurrencyExchangeResponse.php',
    'StructType\\ValidationSendMoney' => $baseDir . '/src/StructType/ValidationSendMoney.php',
    'StructType\\ValidationSendMoneyResponse' => $baseDir . '/src/StructType/ValidationSendMoneyResponse.php',
    'StructType\\ValidationSendMoneyToAdvcashCard' => $baseDir . '/src/StructType/ValidationSendMoneyToAdvcashCard.php',
    'StructType\\ValidationSendMoneyToAdvcashCardResponse' => $baseDir . '/src/StructType/ValidationSendMoneyToAdvcashCardResponse.php',
    'StructType\\ValidationSendMoneyToBankCard' => $baseDir . '/src/StructType/ValidationSendMoneyToBankCard.php',
    'StructType\\ValidationSendMoneyToBankCardResponse' => $baseDir . '/src/StructType/ValidationSendMoneyToBankCardResponse.php',
    'StructType\\ValidationSendMoneyToEcoinEU' => $baseDir . '/src/StructType/ValidationSendMoneyToEcoinEU.php',
    'StructType\\ValidationSendMoneyToEcoinEUResponse' => $baseDir . '/src/StructType/ValidationSendMoneyToEcoinEUResponse.php',
    'StructType\\ValidationSendMoneyToEcurrency' => $baseDir . '/src/StructType/ValidationSendMoneyToEcurrency.php',
    'StructType\\ValidationSendMoneyToEcurrencyResponse' => $baseDir . '/src/StructType/ValidationSendMoneyToEcurrencyResponse.php',
    'StructType\\ValidationSendMoneyToEmail' => $baseDir . '/src/StructType/ValidationSendMoneyToEmail.php',
    'StructType\\ValidationSendMoneyToEmailResponse' => $baseDir . '/src/StructType/ValidationSendMoneyToEmailResponse.php',
    'StructType\\ValidationSendMoneyToExmo' => $baseDir . '/src/StructType/ValidationSendMoneyToExmo.php',
    'StructType\\ValidationSendMoneyToExmoResponse' => $baseDir . '/src/StructType/ValidationSendMoneyToExmoResponse.php',
    'StructType\\ValidationSendMoneyToWex' => $baseDir . '/src/StructType/ValidationSendMoneyToWex.php',
    'StructType\\ValidationSendMoneyToWexResponse' => $baseDir . '/src/StructType/ValidationSendMoneyToWexResponse.php',
    'StructType\\WalletBalanceDTO' => $baseDir . '/src/StructType/WalletBalanceDTO.php',
    'StructType\\WalletCurrencyIncorrectException' => $baseDir . '/src/StructType/WalletCurrencyIncorrectException.php',
    'StructType\\WalletDoesNotExist' => $baseDir . '/src/StructType/WalletDoesNotExist.php',
    'StructType\\WithdrawToEcurrencyRequest' => $baseDir . '/src/StructType/WithdrawToEcurrencyRequest.php',
    'StructType\\WithdrawalThroughExternalPaymentSystem' => $baseDir . '/src/StructType/WithdrawalThroughExternalPaymentSystem.php',
    'StructType\\WithdrawalThroughExternalPaymentSystemRequestDTO' => $baseDir . '/src/StructType/WithdrawalThroughExternalPaymentSystemRequestDTO.php',
    'StructType\\WithdrawalThroughExternalPaymentSystemResponse' => $baseDir . '/src/StructType/WithdrawalThroughExternalPaymentSystemResponse.php',
    'StructType\\WrongEmailException' => $baseDir . '/src/StructType/WrongEmailException.php',
    'StructType\\WrongIpException' => $baseDir . '/src/StructType/WrongIpException.php',
    'StructType\\WrongParamsException' => $baseDir . '/src/StructType/WrongParamsException.php',
    'WsdlToPhp\\PackageBase\\AbstractSoapClientBase' => $vendorDir . '/wsdltophp/packagebase/src/AbstractSoapClientBase.php',
    'WsdlToPhp\\PackageBase\\AbstractStructArrayBase' => $vendorDir . '/wsdltophp/packagebase/src/AbstractStructArrayBase.php',
    'WsdlToPhp\\PackageBase\\AbstractStructBase' => $vendorDir . '/wsdltophp/packagebase/src/AbstractStructBase.php',
    'WsdlToPhp\\PackageBase\\AbstractStructEnumBase' => $vendorDir . '/wsdltophp/packagebase/src/AbstractStructEnumBase.php',
    'WsdlToPhp\\PackageBase\\SoapClientInterface' => $vendorDir . '/wsdltophp/packagebase/src/SoapClientInterface.php',
    'WsdlToPhp\\PackageBase\\StructArrayInterface' => $vendorDir . '/wsdltophp/packagebase/src/StructArrayInterface.php',
    'WsdlToPhp\\PackageBase\\StructEnumInterface' => $vendorDir . '/wsdltophp/packagebase/src/StructEnumInterface.php',
    'WsdlToPhp\\PackageBase\\StructInterface' => $vendorDir . '/wsdltophp/packagebase/src/StructInterface.php',
    'WsdlToPhp\\PackageBase\\Utils' => $vendorDir . '/wsdltophp/packagebase/src/Utils.php',
);
