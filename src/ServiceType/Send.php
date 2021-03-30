<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named sendMoneyToEcoinEU
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendMoneyToEcoinEU $parameters
     * @return \StructType\SendMoneyToEcoinEUResponse|bool
     */
    public function sendMoneyToEcoinEU(\StructType\SendMoneyToEcoinEU $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sendMoneyToEcoinEU', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMoneyToExmo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendMoneyToExmo $parameters
     * @return \StructType\SendMoneyToExmoResponse|bool
     */
    public function sendMoneyToExmo(\StructType\SendMoneyToExmo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sendMoneyToExmo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMoneyToBankCard
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendMoneyToBankCard $parameters
     * @return \StructType\SendMoneyToBankCardResponse|bool
     */
    public function sendMoneyToBankCard(\StructType\SendMoneyToBankCard $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sendMoneyToBankCard', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMoneyToEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendMoneyToEmail $parameters
     * @return \StructType\SendMoneyToEmailResponse|bool
     */
    public function sendMoneyToEmail(\StructType\SendMoneyToEmail $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sendMoneyToEmail', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMoneyToAdvcashCard
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendMoneyToAdvcashCard $parameters
     * @return \StructType\SendMoneyToAdvcashCardResponse|bool
     */
    public function sendMoneyToAdvcashCard(\StructType\SendMoneyToAdvcashCard $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sendMoneyToAdvcashCard', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMoney
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendMoney $parameters
     * @return \StructType\SendMoneyResponse|bool
     */
    public function sendMoney(\StructType\SendMoney $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sendMoney', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMoneyToEcurrency
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendMoneyToEcurrency $parameters
     * @return \StructType\SendMoneyToEcurrencyResponse|bool
     */
    public function sendMoneyToEcurrency(\StructType\SendMoneyToEcurrency $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sendMoneyToEcurrency', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMoneyToWex
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendMoneyToWex $parameters
     * @return \StructType\SendMoneyToWexResponse|bool
     */
    public function sendMoneyToWex(\StructType\SendMoneyToWex $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sendMoneyToWex', array(
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
     * @return \StructType\SendMoneyResponse|\StructType\SendMoneyToAdvcashCardResponse|\StructType\SendMoneyToBankCardResponse|\StructType\SendMoneyToEcoinEUResponse|\StructType\SendMoneyToEcurrencyResponse|\StructType\SendMoneyToEmailResponse|\StructType\SendMoneyToExmoResponse|\StructType\SendMoneyToWexResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
