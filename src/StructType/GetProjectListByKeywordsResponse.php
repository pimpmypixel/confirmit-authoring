<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectListByKeywordsResponse StructType
 * @subpackage Structs
 */
class GetProjectListByKeywordsResponse extends AbstractStructBase
{
    /**
     * The GetProjectListByKeywordsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectListResultSet
     */
    public $GetProjectListByKeywordsResult;
    /**
     * Constructor method for GetProjectListByKeywordsResponse
     * @uses GetProjectListByKeywordsResponse::setGetProjectListByKeywordsResult()
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByKeywordsResult
     */
    public function __construct(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByKeywordsResult = null)
    {
        $this
            ->setGetProjectListByKeywordsResult($getProjectListByKeywordsResult);
    }
    /**
     * Get GetProjectListByKeywordsResult value
     * @return \Confirmit\Authoring\StructType\ProjectListResultSet|null
     */
    public function getGetProjectListByKeywordsResult()
    {
        return $this->GetProjectListByKeywordsResult;
    }
    /**
     * Set GetProjectListByKeywordsResult value
     * @param \Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByKeywordsResult
     * @return \Confirmit\Authoring\StructType\GetProjectListByKeywordsResponse
     */
    public function setGetProjectListByKeywordsResult(\Confirmit\Authoring\StructType\ProjectListResultSet $getProjectListByKeywordsResult = null)
    {
        $this->GetProjectListByKeywordsResult = $getProjectListByKeywordsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetProjectListByKeywordsResponse
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
