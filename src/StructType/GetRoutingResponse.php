<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRoutingResponse StructType
 * @subpackage Structs
 */
class GetRoutingResponse extends AbstractStructBase
{
    /**
     * The GetRoutingResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetRoutingResult;
    /**
     * Constructor method for GetRoutingResponse
     * @uses GetRoutingResponse::setGetRoutingResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getRoutingResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getRoutingResult = null)
    {
        $this
            ->setGetRoutingResult($getRoutingResult);
    }
    /**
     * Get GetRoutingResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetRoutingResult()
    {
        return $this->GetRoutingResult;
    }
    /**
     * Set GetRoutingResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getRoutingResult
     * @return \Confirmit\Authoring\StructType\GetRoutingResponse
     */
    public function setGetRoutingResult(\Confirmit\Authoring\StructType\SurveySchema $getRoutingResult = null)
    {
        $this->GetRoutingResult = $getRoutingResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetRoutingResponse
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
