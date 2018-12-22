<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectListByCreatedDateResponse StructType
 * @subpackage Structs
 */
class GetProjectListByCreatedDateResponse extends AbstractStructBase
{
    /**
     * The GetProjectListByCreatedDateResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectListResultSet
     */
    public $GetProjectListByCreatedDateResult;
    /**
     * Constructor method for GetProjectListByCreatedDateResponse
     * @uses GetProjectListByCreatedDateResponse::setGetProjectListByCreatedDateResult()
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByCreatedDateResult
     */
    public function __construct(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByCreatedDateResult = null)
    {
        $this
            ->setGetProjectListByCreatedDateResult($getProjectListByCreatedDateResult);
    }
    /**
     * Get GetProjectListByCreatedDateResult value
     * @return \Confirmit\Authoring\StructType\ProjectListResultSet|null
     */
    public function getGetProjectListByCreatedDateResult()
    {
        return $this->GetProjectListByCreatedDateResult;
    }
    /**
     * Set GetProjectListByCreatedDateResult value
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByCreatedDateResult
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDateResponse
     */
    public function setGetProjectListByCreatedDateResult(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByCreatedDateResult = null)
    {
        $this->GetProjectListByCreatedDateResult = $getProjectListByCreatedDateResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDateResponse
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
