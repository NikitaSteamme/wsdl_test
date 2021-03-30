<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Currency ServiceType
 * @subpackage Services
 */
class Currency extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named currencyExchange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CurrencyExchange $parameters
     * @return \StructType\CurrencyExchangeResponse|bool
     */
    public function currencyExchange(\StructType\CurrencyExchange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('currencyExchange', array(
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
     * @return \StructType\CurrencyExchangeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
