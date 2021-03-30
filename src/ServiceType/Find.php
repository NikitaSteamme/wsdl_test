<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named findTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindTransaction $parameters
     * @return \StructType\FindTransactionResponse|bool
     */
    public function findTransaction(\StructType\FindTransaction $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('findTransaction', array(
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
     * findCryptoCurrencyWithdrawalInvoiceByOrderId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindCryptoCurrencyWithdrawalInvoiceByOrderId $parameters
     * @return \StructType\FindCryptoCurrencyWithdrawalInvoiceByOrderIdResponse|bool
     */
    public function findCryptoCurrencyWithdrawalInvoiceByOrderId(\StructType\FindCryptoCurrencyWithdrawalInvoiceByOrderId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('findCryptoCurrencyWithdrawalInvoiceByOrderId', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPaymentByOrderId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindPaymentByOrderId $parameters
     * @return \StructType\FindPaymentByOrderIdResponse|bool
     */
    public function findPaymentByOrderId(\StructType\FindPaymentByOrderId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('findPaymentByOrderId', array(
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
     * findCryptoCurrencyWithdrawalInvoiceById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindCryptoCurrencyWithdrawalInvoiceById $parameters
     * @return \StructType\FindCryptoCurrencyWithdrawalInvoiceByIdResponse|bool
     */
    public function findCryptoCurrencyWithdrawalInvoiceById(\StructType\FindCryptoCurrencyWithdrawalInvoiceById $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('findCryptoCurrencyWithdrawalInvoiceById', array(
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
     * @return \StructType\FindCryptoCurrencyWithdrawalInvoiceByIdResponse|\StructType\FindCryptoCurrencyWithdrawalInvoiceByOrderIdResponse|\StructType\FindPaymentByOrderIdResponse|\StructType\FindTransactionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
