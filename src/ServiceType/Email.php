<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Email ServiceType
 * @subpackage Services
 */
class Email extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named emailTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\EmailTransfer $parameters
     * @return \StructType\EmailTransferResponse|bool
     */
    public function emailTransfer(\StructType\EmailTransfer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('emailTransfer', array(
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
     * @return \StructType\EmailTransferResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
