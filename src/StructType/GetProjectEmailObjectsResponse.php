<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectEmailObjectsResponse StructType
 * @subpackage Structs
 */
class GetProjectEmailObjectsResponse extends AbstractStructBase
{
    /**
     * The GetProjectEmailObjectsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfEmailObject
     */
    public $GetProjectEmailObjectsResult;
    /**
     * Constructor method for GetProjectEmailObjectsResponse
     * @uses GetProjectEmailObjectsResponse::setGetProjectEmailObjectsResult()
     * @param \Confirmit\Authoring\ArrayType\ArrayOfEmailObject $getProjectEmailObjectsResult
     */
    public function __construct(\Confirmit\Authoring\ArrayType\ArrayOfEmailObject $getProjectEmailObjectsResult = null)
    {
        $this
            ->setGetProjectEmailObjectsResult($getProjectEmailObjectsResult);
    }
    /**
     * Get GetProjectEmailObjectsResult value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfEmailObject|null
     */
    public function getGetProjectEmailObjectsResult()
    {
        return $this->GetProjectEmailObjectsResult;
    }
    /**
     * Set GetProjectEmailObjectsResult value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfEmailObject $getProjectEmailObjectsResult
     * @return \Confirmit\Authoring\StructType\GetProjectEmailObjectsResponse
     */
    public function setGetProjectEmailObjectsResult(\Confirmit\Authoring\ArrayType\ArrayOfEmailObject $getProjectEmailObjectsResult = null)
    {
        $this->GetProjectEmailObjectsResult = $getProjectEmailObjectsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetProjectEmailObjectsResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
