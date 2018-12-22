<?php

namespace Confirmit\Authoring\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SetCustomProjectInfoField
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\SetCustomProjectInfoField $parameters
     * @return \Confirmit\Authoring\StructType\SetCustomProjectInfoFieldResponse|bool
     */
    public function SetCustomProjectInfoField(\Confirmit\Authoring\StructType\SetCustomProjectInfoField $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetCustomProjectInfoField($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetSurveyStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\SetSurveyStatus $parameters
     * @return \Confirmit\Authoring\StructType\SetSurveyStatusResponse|bool
     */
    public function SetSurveyStatus(\Confirmit\Authoring\StructType\SetSurveyStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetSurveyStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Confirmit\Authoring\StructType\SetCustomProjectInfoFieldResponse|\Confirmit\Authoring\StructType\SetSurveyStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
