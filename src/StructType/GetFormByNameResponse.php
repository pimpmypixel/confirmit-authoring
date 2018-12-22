<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFormByNameResponse StructType
 * @subpackage Structs
 */
class GetFormByNameResponse extends AbstractStructBase
{
    /**
     * The GetFormByNameResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetFormByNameResult;
    /**
     * Constructor method for GetFormByNameResponse
     * @uses GetFormByNameResponse::setGetFormByNameResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getFormByNameResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getFormByNameResult = null)
    {
        $this
            ->setGetFormByNameResult($getFormByNameResult);
    }
    /**
     * Get GetFormByNameResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetFormByNameResult()
    {
        return $this->GetFormByNameResult;
    }
    /**
     * Set GetFormByNameResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getFormByNameResult
     * @return \Confirmit\Authoring\StructType\GetFormByNameResponse
     */
    public function setGetFormByNameResult(\Confirmit\Authoring\StructType\SurveySchema $getFormByNameResult = null)
    {
        $this->GetFormByNameResult = $getFormByNameResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetFormByNameResponse
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
