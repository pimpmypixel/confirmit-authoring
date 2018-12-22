<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNodeResponse StructType
 * @subpackage Structs
 */
class GetNodeResponse extends AbstractStructBase
{
    /**
     * The GetNodeResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetNodeResult;
    /**
     * Constructor method for GetNodeResponse
     * @uses GetNodeResponse::setGetNodeResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getNodeResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getNodeResult = null)
    {
        $this
            ->setGetNodeResult($getNodeResult);
    }
    /**
     * Get GetNodeResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetNodeResult()
    {
        return $this->GetNodeResult;
    }
    /**
     * Set GetNodeResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getNodeResult
     * @return \Confirmit\Authoring\StructType\GetNodeResponse
     */
    public function setGetNodeResult(\Confirmit\Authoring\StructType\SurveySchema $getNodeResult = null)
    {
        $this->GetNodeResult = $getNodeResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetNodeResponse
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
