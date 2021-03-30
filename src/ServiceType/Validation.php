<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validation ServiceType
 * @subpackage Services
 */
class Validation extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named validationSendMoneyToAdvcashCard
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationSendMoneyToAdvcashCard $parameters
     * @return \StructType\ValidationSendMoneyToAdvcashCardResponse|bool
     */
    public function validationSendMoneyToAdvcashCard(\StructType\ValidationSendMoneyToAdvcashCard $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationSendMoneyToAdvcashCard', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validationSendMoneyToEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationSendMoneyToEmail $parameters
     * @return \StructType\ValidationSendMoneyToEmailResponse|bool
     */
    public function validationSendMoneyToEmail(\StructType\ValidationSendMoneyToEmail $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationSendMoneyToEmail', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validationSendMoneyToEcoinEU
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationSendMoneyToEcoinEU $parameters
     * @return \StructType\ValidationSendMoneyToEcoinEUResponse|bool
     */
    public function validationSendMoneyToEcoinEU(\StructType\ValidationSendMoneyToEcoinEU $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationSendMoneyToEcoinEU', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validationCurrencyExchange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationCurrencyExchange $parameters
     * @return \StructType\ValidationCurrencyExchangeResponse|bool
     */
    public function validationCurrencyExchange(\StructType\ValidationCurrencyExchange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationCurrencyExchange', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validationSendMoneyToWex
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationSendMoneyToWex $parameters
     * @return \StructType\ValidationSendMoneyToWexResponse|bool
     */
    public function validationSendMoneyToWex(\StructType\ValidationSendMoneyToWex $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationSendMoneyToWex', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validationSendMoneyToBankCard
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationSendMoneyToBankCard $parameters
     * @return \StructType\ValidationSendMoneyToBankCardResponse|bool
     */
    public function validationSendMoneyToBankCard(\StructType\ValidationSendMoneyToBankCard $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationSendMoneyToBankCard', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validationSendMoneyToEcurrency
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationSendMoneyToEcurrency $parameters
     * @return \StructType\ValidationSendMoneyToEcurrencyResponse|bool
     */
    public function validationSendMoneyToEcurrency(\StructType\ValidationSendMoneyToEcurrency $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationSendMoneyToEcurrency', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validationSendMoneyToExmo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationSendMoneyToExmo $parameters
     * @return \StructType\ValidationSendMoneyToExmoResponse|bool
     */
    public function validationSendMoneyToExmo(\StructType\ValidationSendMoneyToExmo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationSendMoneyToExmo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validationSendMoney
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidationSendMoney $parameters
     * @return \StructType\ValidationSendMoneyResponse|bool
     */
    public function validationSendMoney(\StructType\ValidationSendMoney $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('validationSendMoney', array(
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
     * @return \StructType\ValidationCurrencyExchangeResponse|\StructType\ValidationSendMoneyResponse|\StructType\ValidationSendMoneyToAdvcashCardResponse|\StructType\ValidationSendMoneyToBankCardResponse|\StructType\ValidationSendMoneyToEcoinEUResponse|\StructType\ValidationSendMoneyToEcurrencyResponse|\StructType\ValidationSendMoneyToEmailResponse|\StructType\ValidationSendMoneyToExmoResponse|\StructType\ValidationSendMoneyToWexResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
