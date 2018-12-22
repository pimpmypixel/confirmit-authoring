<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectListResponse StructType
 * @subpackage Structs
 */
class GetProjectListResponse extends AbstractStructBase
{
    /**
     * The GetProjectListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectListResultSet
     */
    public $GetProjectListResult;
    /**
     * Constructor method for GetProjectListResponse
     * @uses GetProjectListResponse::setGetProjectListResult()
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListResult
     */
    public function __construct(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListResult = null)
    {
        $this
            ->setGetProjectListResult($getProjectListResult);
    }
    /**
     * Get GetProjectListResult value
     * @return \Confirmit\Authoring\StructType\ProjectListResultSet|null
     */
    public function getGetProjectListResult()
    {
        return $this->GetProjectListResult;
    }
    /**
     * Set GetProjectListResult value
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListResult
     * @return \Confirmit\Authoring\StructType\GetProjectListResponse
     */
    public function setGetProjectListResult(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListResult = null)
    {
        $this->GetProjectListResult = $getProjectListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetProjectListResponse
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
