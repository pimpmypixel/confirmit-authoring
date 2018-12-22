<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredQuestionnaireResponse StructType
 * @subpackage Structs
 */
class GetFilteredQuestionnaireResponse extends AbstractStructBase
{
    /**
     * The GetFilteredQuestionnaireResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetFilteredQuestionnaireResult;
    /**
     * Constructor method for GetFilteredQuestionnaireResponse
     * @uses GetFilteredQuestionnaireResponse::setGetFilteredQuestionnaireResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getFilteredQuestionnaireResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getFilteredQuestionnaireResult = null)
    {
        $this
            ->setGetFilteredQuestionnaireResult($getFilteredQuestionnaireResult);
    }
    /**
     * Get GetFilteredQuestionnaireResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetFilteredQuestionnaireResult()
    {
        return $this->GetFilteredQuestionnaireResult;
    }
    /**
     * Set GetFilteredQuestionnaireResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getFilteredQuestionnaireResult
     * @return \Confirmit\Authoring\StructType\GetFilteredQuestionnaireResponse
     */
    public function setGetFilteredQuestionnaireResult(\Confirmit\Authoring\StructType\SurveySchema $getFilteredQuestionnaireResult = null)
    {
        $this->GetFilteredQuestionnaireResult = $getFilteredQuestionnaireResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetFilteredQuestionnaireResponse
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
