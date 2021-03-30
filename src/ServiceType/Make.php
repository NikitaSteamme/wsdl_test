<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Make ServiceType
 * @subpackage Services
 */
class Make extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named makeCurrencyExchange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MakeCurrencyExchange $parameters
     * @return \StructType\MakeCurrencyExchangeResponse|bool
     */
    public function makeCurrencyExchange(\StructType\MakeCurrencyExchange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('makeCurrencyExchange', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named makeTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MakeTransfer $parameters
     * @return \StructType\MakeTransferResponse|bool
     */
    public function makeTransfer(\StructType\MakeTransfer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('makeTransfer', array(
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
     * @return \StructType\MakeCurrencyExchangeResponse|\StructType\MakeTransferResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
