<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://wallet.advcash.com/wsm/merchantWebService?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://wallet.advcash.com/wsm/merchantWebService?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Validation ServiceType
 */
$validation = new \ServiceType\Validation($options);
/**
 * Sample call for validationSendMoneyToAdvcashCard operation/method
 */
if ($validation->validationSendMoneyToAdvcashCard(new \StructType\ValidationSendMoneyToAdvcashCard()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Sample call for validationSendMoneyToEmail operation/method
 */
if ($validation->validationSendMoneyToEmail(new \StructType\ValidationSendMoneyToEmail()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Sample call for validationSendMoneyToEcoinEU operation/method
 */
if ($validation->validationSendMoneyToEcoinEU(new \StructType\ValidationSendMoneyToEcoinEU()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Sample call for validationCurrencyExchange operation/method
 */
if ($validation->validationCurrencyExchange(new \StructType\ValidationCurrencyExchange()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Sample call for validationSendMoneyToWex operation/method
 */
if ($validation->validationSendMoneyToWex(new \StructType\ValidationSendMoneyToWex()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Sample call for validationSendMoneyToBankCard operation/method
 */
if ($validation->validationSendMoneyToBankCard(new \StructType\ValidationSendMoneyToBankCard()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Sample call for validationSendMoneyToEcurrency operation/method
 */
if ($validation->validationSendMoneyToEcurrency(new \StructType\ValidationSendMoneyToEcurrency()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Sample call for validationSendMoneyToExmo operation/method
 */
if ($validation->validationSendMoneyToExmo(new \StructType\ValidationSendMoneyToExmo()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Sample call for validationSendMoney operation/method
 */
if ($validation->validationSendMoney(new \StructType\ValidationSendMoney()) !== false) {
    print_r($validation->getResult());
} else {
    print_r($validation->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
/**
 * Sample call for sendMoneyToEcoinEU operation/method
 */
if ($send->sendMoneyToEcoinEU(new \StructType\SendMoneyToEcoinEU()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMoneyToExmo operation/method
 */
if ($send->sendMoneyToExmo(new \StructType\SendMoneyToExmo()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMoneyToBankCard operation/method
 */
if ($send->sendMoneyToBankCard(new \StructType\SendMoneyToBankCard()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMoneyToEmail operation/method
 */
if ($send->sendMoneyToEmail(new \StructType\SendMoneyToEmail()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMoneyToAdvcashCard operation/method
 */
if ($send->sendMoneyToAdvcashCard(new \StructType\SendMoneyToAdvcashCard()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMoney operation/method
 */
if ($send->sendMoney(new \StructType\SendMoney()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMoneyToEcurrency operation/method
 */
if ($send->sendMoneyToEcurrency(new \StructType\SendMoneyToEcurrency()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMoneyToWex operation/method
 */
if ($send->sendMoneyToWex(new \StructType\SendMoneyToWex()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \ServiceType\Validate($options);
/**
 * Sample call for validateAccount operation/method
 */
if ($validate->validateAccount(new \StructType\ValidateAccount()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateAccounts operation/method
 */
if ($validate->validateAccounts(new \StructType\ValidateAccounts()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateWithdrawalThroughExternalPaymentSystem operation/method
 */
if ($validate->validateWithdrawalThroughExternalPaymentSystem(new \StructType\ValidateWithdrawalThroughExternalPaymentSystem()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateEmailTransfer operation/method
 */
if ($validate->validateEmailTransfer(new \StructType\ValidateEmailTransfer()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateCurrencyExchange operation/method
 */
if ($validate->validateCurrencyExchange(new \StructType\ValidateCurrencyExchange()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateBankCardTransfer operation/method
 */
if ($validate->validateBankCardTransfer(new \StructType\ValidateBankCardTransfer()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateAdvcashCardTransfer operation/method
 */
if ($validate->validateAdvcashCardTransfer(new \StructType\ValidateAdvcashCardTransfer()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateTransfer operation/method
 */
if ($validate->validateTransfer(new \StructType\ValidateTransfer()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Register ServiceType
 */
$register = new \ServiceType\Register($options);
/**
 * Sample call for register operation/method
 */
if ($register->register(new \StructType\Register()) !== false) {
    print_r($register->getResult());
} else {
    print_r($register->getLastError());
}
/**
 * Samples for Find ServiceType
 */
$find = new \ServiceType\Find($options);
/**
 * Sample call for findTransaction operation/method
 */
if ($find->findTransaction(new \StructType\FindTransaction()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findCryptoCurrencyWithdrawalInvoiceByOrderId operation/method
 */
if ($find->findCryptoCurrencyWithdrawalInvoiceByOrderId(new \StructType\FindCryptoCurrencyWithdrawalInvoiceByOrderId()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findPaymentByOrderId operation/method
 */
if ($find->findPaymentByOrderId(new \StructType\FindPaymentByOrderId()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findCryptoCurrencyWithdrawalInvoiceById operation/method
 */
if ($find->findCryptoCurrencyWithdrawalInvoiceById(new \StructType\FindCryptoCurrencyWithdrawalInvoiceById()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getCrypto2CardTransaction operation/method
 */
if ($get->getCrypto2CardTransaction(new \StructType\GetCrypto2CardTransaction()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrypto2CardTransactionByOrderId operation/method
 */
if ($get->getCrypto2CardTransactionByOrderId(new \StructType\GetCrypto2CardTransactionByOrderId()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBalances operation/method
 */
if ($get->getBalances(new \StructType\GetBalances()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Make ServiceType
 */
$make = new \ServiceType\Make($options);
/**
 * Sample call for makeCurrencyExchange operation/method
 */
if ($make->makeCurrencyExchange(new \StructType\MakeCurrencyExchange()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for makeTransfer operation/method
 */
if ($make->makeTransfer(new \StructType\MakeTransfer()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Samples for Transfer ServiceType
 */
$transfer = new \ServiceType\Transfer($options);
/**
 * Sample call for transferBankCard operation/method
 */
if ($transfer->transferBankCard(new \StructType\TransferBankCard()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Sample call for transferAdvcashCard operation/method
 */
if ($transfer->transferAdvcashCard(new \StructType\TransferAdvcashCard()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \ServiceType\Cancel($options);
/**
 * Sample call for cancelProtectedTransfer operation/method
 */
if ($cancel->cancelProtectedTransfer(new \StructType\CancelProtectedTransfer()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \ServiceType\Create($options);
/**
 * Sample call for createApi operation/method
 */
if ($create->createApi(new \StructType\CreateApi()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createBitcoinInvoice operation/method
 */
if ($create->createBitcoinInvoice(new \StructType\CreateBitcoinInvoice()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createCrypto2CardQuote operation/method
 */
if ($create->createCrypto2CardQuote(new \StructType\CreateCrypto2CardQuote()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createCryptoCurrencyWithdrawalInvoice operation/method
 */
if ($create->createCryptoCurrencyWithdrawalInvoice(new \StructType\CreateCryptoCurrencyWithdrawalInvoice()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createCryptoCurrencyInvoice operation/method
 */
if ($create->createCryptoCurrencyInvoice(new \StructType\CreateCryptoCurrencyInvoice()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \ServiceType\Check($options);
/**
 * Sample call for checkCurrencyExchange operation/method
 */
if ($check->checkCurrencyExchange(new \StructType\CheckCurrencyExchange()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for History ServiceType
 */
$history = new \ServiceType\History($options);
/**
 * Sample call for history operation/method
 */
if ($history->history(new \StructType\History()) !== false) {
    print_r($history->getResult());
} else {
    print_r($history->getLastError());
}
/**
 * Samples for Confirm ServiceType
 */
$confirm = new \ServiceType\Confirm($options);
/**
 * Sample call for confirmCrypto2CardQuote operation/method
 */
if ($confirm->confirmCrypto2CardQuote(new \StructType\ConfirmCrypto2CardQuote()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Sample call for confirmCryptoCurrencyWithdrawalInvoice operation/method
 */
if ($confirm->confirmCryptoCurrencyWithdrawalInvoice(new \StructType\ConfirmCryptoCurrencyWithdrawalInvoice()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Samples for Currency ServiceType
 */
$currency = new \ServiceType\Currency($options);
/**
 * Sample call for currencyExchange operation/method
 */
if ($currency->currencyExchange(new \StructType\CurrencyExchange()) !== false) {
    print_r($currency->getResult());
} else {
    print_r($currency->getLastError());
}
/**
 * Samples for Email ServiceType
 */
$email = new \ServiceType\Email($options);
/**
 * Sample call for emailTransfer operation/method
 */
if ($email->emailTransfer(new \StructType\EmailTransfer()) !== false) {
    print_r($email->getResult());
} else {
    print_r($email->getLastError());
}
/**
 * Samples for Withdrawal ServiceType
 */
$withdrawal = new \ServiceType\Withdrawal($options);
/**
 * Sample call for withdrawalThroughExternalPaymentSystem operation/method
 */
if ($withdrawal->withdrawalThroughExternalPaymentSystem(new \StructType\WithdrawalThroughExternalPaymentSystem()) !== false) {
    print_r($withdrawal->getResult());
} else {
    print_r($withdrawal->getLastError());
}
