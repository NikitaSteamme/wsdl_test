<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Register ServiceType
 * @subpackage Services
 */
class Register extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named register
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Register $parameters
     * @return \StructType\RegisterResponse|bool
     */
    public function register(\StructType\Register $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('register', array(
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
     * @return \StructType\RegisterResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
