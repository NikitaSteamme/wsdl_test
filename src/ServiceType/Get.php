<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getCrypto2CardTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCrypto2CardTransaction $parameters
     * @return \StructType\GetCrypto2CardTransactionResponse|bool
     */
    public function getCrypto2CardTransaction(\StructType\GetCrypto2CardTransaction $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('getCrypto2CardTransaction', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrypto2CardTransactionByOrderId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCrypto2CardTransactionByOrderId $parameters
     * @return \StructType\GetCrypto2CardTransactionByOrderIdResponse|bool
     */
    public function getCrypto2CardTransactionByOrderId(\StructType\GetCrypto2CardTransactionByOrderId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('getCrypto2CardTransactionByOrderId', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBalances
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetBalances $parameters
     * @return \StructType\GetBalancesResponse|bool
     */
    public function getBalances(\StructType\GetBalances $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('getBalances', array(
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
     * @return \StructType\GetBalancesResponse|\StructType\GetCrypto2CardTransactionByOrderIdResponse|\StructType\GetCrypto2CardTransactionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
