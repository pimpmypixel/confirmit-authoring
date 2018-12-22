<?php

namespace Confirmit\Authoring\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AddProjectFromTripleS
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\AddProjectFromTripleS $parameters
     * @return \Confirmit\Authoring\StructType\AddProjectFromTripleSResponse|bool
     */
    public function AddProjectFromTripleS(\Confirmit\Authoring\StructType\AddProjectFromTripleS $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddProjectFromTripleS($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddProject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\AddProject $parameters
     * @return \Confirmit\Authoring\StructType\AddProjectResponse|bool
     */
    public function AddProject(\Confirmit\Authoring\StructType\AddProject $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddProject($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Confirmit\Authoring\StructType\AddProjectFromTripleSResponse|\Confirmit\Authoring\StructType\AddProjectResponse
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
