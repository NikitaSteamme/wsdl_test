<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named validateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateAccount $parameters
     * @return \StructType\ValidateAccountResponse|bool
     */
    public function validateAccount(\StructType\ValidateAccount $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validateAccount', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateAccounts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateAccounts $parameters
     * @return \StructType\ValidateAccountsResponse|bool
     */
    public function validateAccounts(\StructType\ValidateAccounts $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validateAccounts', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * validateWithdrawalThroughExternalPaymentSystem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateWithdrawalThroughExternalPaymentSystem $parameters
     * @return \StructType\ValidateWithdrawalThroughExternalPaymentSystemResponse|bool
     */
    public function validateWithdrawalThroughExternalPaymentSystem(\StructType\ValidateWithdrawalThroughExternalPaymentSystem $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validateWithdrawalThroughExternalPaymentSystem', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateEmailTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateEmailTransfer $parameters
     * @return \StructType\ValidateEmailTransferResponse|bool
     */
    public function validateEmailTransfer(\StructType\ValidateEmailTransfer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validateEmailTransfer', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateCurrencyExchange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateCurrencyExchange $parameters
     * @return \StructType\ValidateCurrencyExchangeResponse|bool
     */
    public function validateCurrencyExchange(\StructType\ValidateCurrencyExchange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validateCurrencyExchange', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateBankCardTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateBankCardTransfer $parameters
     * @return \StructType\ValidateBankCardTransferResponse|bool
     */
    public function validateBankCardTransfer(\StructType\ValidateBankCardTransfer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validateBankCardTransfer', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateAdvcashCardTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateAdvcashCardTransfer $parameters
     * @return \StructType\ValidateAdvcashCardTransferResponse|bool
     */
    public function validateAdvcashCardTransfer(\StructType\ValidateAdvcashCardTransfer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validateAdvcashCardTransfer', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateTransfer $parameters
     * @return \StructType\ValidateTransferResponse|bool
     */
    public function validateTransfer(\StructType\ValidateTransfer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validateTransfer', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ValidateAccountResponse|\StructType\ValidateAccountsResponse|\StructType\ValidateAdvcashCardTransferResponse|\StructType\ValidateBankCardTransferResponse|\StructType\ValidateCurrencyExchangeResponse|\StructType\ValidateEmailTransferResponse|\StructType\ValidateTransferResponse|\StructType\ValidateWithdrawalThroughExternalPaymentSystemResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
