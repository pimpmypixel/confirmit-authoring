<?php

namespace Confirmit\Authoring\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Project ServiceType
 * @subpackage Services
 */
class Project extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ProjectExists
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\ProjectExists $parameters
     * @return \Confirmit\Authoring\StructType\ProjectExistsResponse|bool
     */
    public function ProjectExists(\Confirmit\Authoring\StructType\ProjectExists $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ProjectExists($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Confirmit\Authoring\StructType\ProjectExistsResponse
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
