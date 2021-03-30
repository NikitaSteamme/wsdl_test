<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named checkCurrencyExchange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CheckCurrencyExchange $parameters
     * @return \StructType\CheckCurrencyExchangeResponse|bool
     */
    public function checkCurrencyExchange(\StructType\CheckCurrencyExchange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('checkCurrencyExchange', array(
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
     * @return \StructType\CheckCurrencyExchangeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
