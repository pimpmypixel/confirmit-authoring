<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectInfoResponse StructType
 * @subpackage Structs
 */
class GetProjectInfoResponse extends AbstractStructBase
{
    /**
     * The GetProjectInfoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetProjectInfoResult;
    /**
     * Constructor method for GetProjectInfoResponse
     * @uses GetProjectInfoResponse::setGetProjectInfoResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getProjectInfoResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getProjectInfoResult = null)
    {
        $this
            ->setGetProjectInfoResult($getProjectInfoResult);
    }
    /**
     * Get GetProjectInfoResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetProjectInfoResult()
    {
        return $this->GetProjectInfoResult;
    }
    /**
     * Set GetProjectInfoResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getProjectInfoResult
     * @return \Confirmit\Authoring\StructType\GetProjectInfoResponse
     */
    public function setGetProjectInfoResult(\Confirmit\Authoring\StructType\SurveySchema $getProjectInfoResult = null)
    {
        $this->GetProjectInfoResult = $getProjectInfoResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetProjectInfoResponse
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
