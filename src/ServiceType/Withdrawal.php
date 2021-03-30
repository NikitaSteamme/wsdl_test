<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Withdrawal ServiceType
 * @subpackage Services
 */
class Withdrawal extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * withdrawalThroughExternalPaymentSystem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\WithdrawalThroughExternalPaymentSystem $parameters
     * @return \StructType\WithdrawalThroughExternalPaymentSystemResponse|bool
     */
    public function withdrawalThroughExternalPaymentSystem(\StructType\WithdrawalThroughExternalPaymentSystem $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('withdrawalThroughExternalPaymentSystem', array(
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
     * @return \StructType\WithdrawalThroughExternalPaymentSystemResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
