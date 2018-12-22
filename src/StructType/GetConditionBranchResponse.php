<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConditionBranchResponse StructType
 * @subpackage Structs
 */
class GetConditionBranchResponse extends AbstractStructBase
{
    /**
     * The GetConditionBranchResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetConditionBranchResult;
    /**
     * Constructor method for GetConditionBranchResponse
     * @uses GetConditionBranchResponse::setGetConditionBranchResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getConditionBranchResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getConditionBranchResult = null)
    {
        $this
            ->setGetConditionBranchResult($getConditionBranchResult);
    }
    /**
     * Get GetConditionBranchResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetConditionBranchResult()
    {
        return $this->GetConditionBranchResult;
    }
    /**
     * Set GetConditionBranchResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getConditionBranchResult
     * @return \Confirmit\Authoring\StructType\GetConditionBranchResponse
     */
    public function setGetConditionBranchResult(\Confirmit\Authoring\StructType\SurveySchema $getConditionBranchResult = null)
    {
        $this->GetConditionBranchResult = $getConditionBranchResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetConditionBranchResponse
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
