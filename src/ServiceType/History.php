<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for History ServiceType
 * @subpackage Services
 */
class History extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named history
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\History $parameters
     * @return \StructType\HistoryResponse|bool
     */
    public function history(\StructType\History $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('history', array(
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
     * @return \StructType\HistoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
