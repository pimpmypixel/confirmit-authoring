<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectListByCreatorResponse StructType
 * @subpackage Structs
 */
class GetProjectListByCreatorResponse extends AbstractStructBase
{
    /**
     * The GetProjectListByCreatorResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectListResultSet
     */
    public $GetProjectListByCreatorResult;
    /**
     * Constructor method for GetProjectListByCreatorResponse
     * @uses GetProjectListByCreatorResponse::setGetProjectListByCreatorResult()
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByCreatorResult
     */
    public function __construct(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByCreatorResult = null)
    {
        $this
            ->setGetProjectListByCreatorResult($getProjectListByCreatorResult);
    }
    /**
     * Get GetProjectListByCreatorResult value
     * @return \Confirmit\Authoring\StructType\ProjectListResultSet|null
     */
    public function getGetProjectListByCreatorResult()
    {
        return $this->GetProjectListByCreatorResult;
    }
    /**
     * Set GetProjectListByCreatorResult value
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByCreatorResult
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatorResponse
     */
    public function setGetProjectListByCreatorResult(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByCreatorResult = null)
    {
        $this->GetProjectListByCreatorResult = $getProjectListByCreatorResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatorResponse
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
