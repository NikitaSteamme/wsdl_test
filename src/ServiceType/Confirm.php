<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Confirm ServiceType
 * @subpackage Services
 */
class Confirm extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named confirmCrypto2CardQuote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConfirmCrypto2CardQuote $parameters
     * @return \StructType\ConfirmCrypto2CardQuoteResponse|bool
     */
    public function confirmCrypto2CardQuote(\StructType\ConfirmCrypto2CardQuote $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('confirmCrypto2CardQuote', array(
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
     * confirmCryptoCurrencyWithdrawalInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConfirmCryptoCurrencyWithdrawalInvoice $parameters
     * @return \StructType\ConfirmCryptoCurrencyWithdrawalInvoiceResponse|bool
     */
    public function confirmCryptoCurrencyWithdrawalInvoice(\StructType\ConfirmCryptoCurrencyWithdrawalInvoice $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('confirmCryptoCurrencyWithdrawalInvoice', array(
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
     * @return \StructType\ConfirmCrypto2CardQuoteResponse|\StructType\ConfirmCryptoCurrencyWithdrawalInvoiceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
