<?php

namespace Confirmit\Authoring\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DeleteProject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\DeleteProject $parameters
     * @return \Confirmit\Authoring\StructType\DeleteProjectResponse|bool
     */
    public function DeleteProject(\Confirmit\Authoring\StructType\DeleteProject $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteProject($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteRouting
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\DeleteRouting $parameters
     * @return \Confirmit\Authoring\StructType\DeleteRoutingResponse|bool
     */
    public function DeleteRouting(\Confirmit\Authoring\StructType\DeleteRouting $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteRouting($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteQuestionnaire
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\DeleteQuestionnaire $parameters
     * @return \Confirmit\Authoring\StructType\DeleteQuestionnaireResponse|bool
     */
    public function DeleteQuestionnaire(\Confirmit\Authoring\StructType\DeleteQuestionnaire $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteQuestionnaire($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Confirmit\Authoring\StructType\DeleteProjectResponse|\Confirmit\Authoring\StructType\DeleteQuestionnaireResponse|\Confirmit\Authoring\StructType\DeleteRoutingResponse
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
