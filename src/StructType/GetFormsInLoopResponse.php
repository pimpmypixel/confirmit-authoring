<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFormsInLoopResponse StructType
 * @subpackage Structs
 */
class GetFormsInLoopResponse extends AbstractStructBase
{
    /**
     * The GetFormsInLoopResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetFormsInLoopResult;
    /**
     * Constructor method for GetFormsInLoopResponse
     * @uses GetFormsInLoopResponse::setGetFormsInLoopResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getFormsInLoopResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getFormsInLoopResult = null)
    {
        $this
            ->setGetFormsInLoopResult($getFormsInLoopResult);
    }
    /**
     * Get GetFormsInLoopResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetFormsInLoopResult()
    {
        return $this->GetFormsInLoopResult;
    }
    /**
     * Set GetFormsInLoopResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getFormsInLoopResult
     * @return \Confirmit\Authoring\StructType\GetFormsInLoopResponse
     */
    public function setGetFormsInLoopResult(\Confirmit\Authoring\StructType\SurveySchema $getFormsInLoopResult = null)
    {
        $this->GetFormsInLoopResult = $getFormsInLoopResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetFormsInLoopResponse
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
