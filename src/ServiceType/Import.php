<?php

namespace Confirmit\Authoring\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ImportSurvey
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\ImportSurvey $parameters
     * @return \Confirmit\Authoring\StructType\ImportSurveyResponse|bool
     */
    public function ImportSurvey(\Confirmit\Authoring\StructType\ImportSurvey $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ImportSurvey($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ImportTranslation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\ImportTranslation $parameters
     * @return \Confirmit\Authoring\StructType\ImportTranslationResponse|bool
     */
    public function ImportTranslation(\Confirmit\Authoring\StructType\ImportTranslation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ImportTranslation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Confirmit\Authoring\StructType\ImportSurveyResponse|\Confirmit\Authoring\StructType\ImportTranslationResponse
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
