<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createApi
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateApi $parameters
     * @return \StructType\CreateApiResponse|bool
     */
    public function createApi(\StructType\CreateApi $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('createApi', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBitcoinInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateBitcoinInvoice $parameters
     * @return \StructType\CreateBitcoinInvoiceResponse|bool
     */
    public function createBitcoinInvoice(\StructType\CreateBitcoinInvoice $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('createBitcoinInvoice', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createCrypto2CardQuote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateCrypto2CardQuote $parameters
     * @return \StructType\CreateCrypto2CardQuoteResponse|bool
     */
    public function createCrypto2CardQuote(\StructType\CreateCrypto2CardQuote $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('createCrypto2CardQuote', array(
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
     * createCryptoCurrencyWithdrawalInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateCryptoCurrencyWithdrawalInvoice $parameters
     * @return \StructType\CreateCryptoCurrencyWithdrawalInvoiceResponse|bool
     */
    public function createCryptoCurrencyWithdrawalInvoice(\StructType\CreateCryptoCurrencyWithdrawalInvoice $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('createCryptoCurrencyWithdrawalInvoice', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createCryptoCurrencyInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateCryptoCurrencyInvoice $parameters
     * @return \StructType\CreateCryptoCurrencyInvoiceResponse|bool
     */
    public function createCryptoCurrencyInvoice(\StructType\CreateCryptoCurrencyInvoice $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('createCryptoCurrencyInvoice', array(
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
     * @return \StructType\CreateApiResponse|\StructType\CreateBitcoinInvoiceResponse|\StructType\CreateCrypto2CardQuoteResponse|\StructType\CreateCryptoCurrencyInvoiceResponse|\StructType\CreateCryptoCurrencyWithdrawalInvoiceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
