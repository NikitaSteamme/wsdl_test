<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transfer ServiceType
 * @subpackage Services
 */
class Transfer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named transferBankCard
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TransferBankCard $parameters
     * @return \StructType\TransferBankCardResponse|bool
     */
    public function transferBankCard(\StructType\TransferBankCard $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('transferBankCard', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named transferAdvcashCard
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TransferAdvcashCard $parameters
     * @return \StructType\TransferAdvcashCardResponse|bool
     */
    public function transferAdvcashCard(\StructType\TransferAdvcashCard $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('transferAdvcashCard', array(
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
     * @return \StructType\TransferAdvcashCardResponse|\StructType\TransferBankCardResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
