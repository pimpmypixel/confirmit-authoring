<?php

namespace Confirmit\Authoring\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Duplicate ServiceType
 * @subpackage Services
 */
class Duplicate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DuplicateProject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\DuplicateProject $parameters
     * @return \Confirmit\Authoring\StructType\DuplicateProjectResponse|bool
     */
    public function DuplicateProject(\Confirmit\Authoring\StructType\DuplicateProject $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DuplicateProject($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Confirmit\Authoring\StructType\DuplicateProjectResponse
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
