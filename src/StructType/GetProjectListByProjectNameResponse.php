<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectListByProjectNameResponse StructType
 * @subpackage Structs
 */
class GetProjectListByProjectNameResponse extends AbstractStructBase
{
    /**
     * The GetProjectListByProjectNameResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectListResultSet
     */
    public $GetProjectListByProjectNameResult;
    /**
     * Constructor method for GetProjectListByProjectNameResponse
     * @uses GetProjectListByProjectNameResponse::setGetProjectListByProjectNameResult()
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByProjectNameResult
     */
    public function __construct(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByProjectNameResult = null)
    {
        $this
            ->setGetProjectListByProjectNameResult($getProjectListByProjectNameResult);
    }
    /**
     * Get GetProjectListByProjectNameResult value
     * @return \Confirmit\Authoring\StructType\ProjectListResultSet|null
     */
    public function getGetProjectListByProjectNameResult()
    {
        return $this->GetProjectListByProjectNameResult;
    }
    /**
     * Set GetProjectListByProjectNameResult value
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByProjectNameResult
     * @return \Confirmit\Authoring\StructType\GetProjectListByProjectNameResponse
     */
    public function setGetProjectListByProjectNameResult(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByProjectNameResult = null)
    {
        $this->GetProjectListByProjectNameResult = $getProjectListByProjectNameResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetProjectListByProjectNameResponse
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
