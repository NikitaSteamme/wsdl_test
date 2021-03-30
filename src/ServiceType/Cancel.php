<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelProtectedTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CancelProtectedTransfer $parameters
     * @return \StructType\CancelProtectedTransferResponse|bool
     */
    public function cancelProtectedTransfer(\StructType\CancelProtectedTransfer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('cancelProtectedTransfer', array(
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
     * @return \StructType\CancelProtectedTransferResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
