<?php

namespace Confirmit\Authoring\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Export ServiceType
 * @subpackage Services
 */
class Export extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ExportSurvey
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\ExportSurvey $parameters
     * @return \Confirmit\Authoring\StructType\ExportSurveyResponse|bool
     */
    public function ExportSurvey(\Confirmit\Authoring\StructType\ExportSurvey $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ExportSurvey($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ExportSurveyLayout
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\ExportSurveyLayout $parameters
     * @return \Confirmit\Authoring\StructType\ExportSurveyLayoutResponse|bool
     */
    public function ExportSurveyLayout(\Confirmit\Authoring\StructType\ExportSurveyLayout $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ExportSurveyLayout($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ExportSurveyWithHTMLRemoved
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\ExportSurveyWithHTMLRemoved $parameters
     * @return \Confirmit\Authoring\StructType\ExportSurveyWithHTMLRemovedResponse|bool
     */
    public function ExportSurveyWithHTMLRemoved(\Confirmit\Authoring\StructType\ExportSurveyWithHTMLRemoved $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ExportSurveyWithHTMLRemoved($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ExportTranslation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\ExportTranslation $parameters
     * @return \Confirmit\Authoring\StructType\ExportTranslationResponse|bool
     */
    public function ExportTranslation(\Confirmit\Authoring\StructType\ExportTranslation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ExportTranslation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Confirmit\Authoring\StructType\ExportSurveyLayoutResponse|\Confirmit\Authoring\StructType\ExportSurveyResponse|\Confirmit\Authoring\StructType\ExportSurveyWithHTMLRemovedResponse|\Confirmit\Authoring\StructType\ExportTranslationResponse
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
