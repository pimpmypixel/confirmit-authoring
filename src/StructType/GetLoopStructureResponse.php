<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLoopStructureResponse StructType
 * @subpackage Structs
 */
class GetLoopStructureResponse extends AbstractStructBase
{
    /**
     * The GetLoopStructureResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetLoopStructureResult;
    /**
     * Constructor method for GetLoopStructureResponse
     * @uses GetLoopStructureResponse::setGetLoopStructureResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getLoopStructureResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getLoopStructureResult = null)
    {
        $this
            ->setGetLoopStructureResult($getLoopStructureResult);
    }
    /**
     * Get GetLoopStructureResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetLoopStructureResult()
    {
        return $this->GetLoopStructureResult;
    }
    /**
     * Set GetLoopStructureResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getLoopStructureResult
     * @return \Confirmit\Authoring\StructType\GetLoopStructureResponse
     */
    public function setGetLoopStructureResult(\Confirmit\Authoring\StructType\SurveySchema $getLoopStructureResult = null)
    {
        $this->GetLoopStructureResult = $getLoopStructureResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetLoopStructureResponse
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
