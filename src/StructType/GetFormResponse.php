<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFormResponse StructType
 * @subpackage Structs
 */
class GetFormResponse extends AbstractStructBase
{
    /**
     * The GetFormResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetFormResult;
    /**
     * Constructor method for GetFormResponse
     * @uses GetFormResponse::setGetFormResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getFormResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getFormResult = null)
    {
        $this
            ->setGetFormResult($getFormResult);
    }
    /**
     * Get GetFormResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetFormResult()
    {
        return $this->GetFormResult;
    }
    /**
     * Set GetFormResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getFormResult
     * @return \Confirmit\Authoring\StructType\GetFormResponse
     */
    public function setGetFormResult(\Confirmit\Authoring\StructType\SurveySchema $getFormResult = null)
    {
        $this->GetFormResult = $getFormResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetFormResponse
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
