<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuestionnaireResponse StructType
 * @subpackage Structs
 */
class GetQuestionnaireResponse extends AbstractStructBase
{
    /**
     * The GetQuestionnaireResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetQuestionnaireResult;
    /**
     * Constructor method for GetQuestionnaireResponse
     * @uses GetQuestionnaireResponse::setGetQuestionnaireResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getQuestionnaireResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getQuestionnaireResult = null)
    {
        $this
            ->setGetQuestionnaireResult($getQuestionnaireResult);
    }
    /**
     * Get GetQuestionnaireResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetQuestionnaireResult()
    {
        return $this->GetQuestionnaireResult;
    }
    /**
     * Set GetQuestionnaireResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getQuestionnaireResult
     * @return \Confirmit\Authoring\StructType\GetQuestionnaireResponse
     */
    public function setGetQuestionnaireResult(\Confirmit\Authoring\StructType\SurveySchema $getQuestionnaireResult = null)
    {
        $this->GetQuestionnaireResult = $getQuestionnaireResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetQuestionnaireResponse
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
