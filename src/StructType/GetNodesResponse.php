<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNodesResponse StructType
 * @subpackage Structs
 */
class GetNodesResponse extends AbstractStructBase
{
    /**
     * The GetNodesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetNodesResult;
    /**
     * Constructor method for GetNodesResponse
     * @uses GetNodesResponse::setGetNodesResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getNodesResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getNodesResult = null)
    {
        $this
            ->setGetNodesResult($getNodesResult);
    }
    /**
     * Get GetNodesResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetNodesResult()
    {
        return $this->GetNodesResult;
    }
    /**
     * Set GetNodesResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getNodesResult
     * @return \Confirmit\Authoring\StructType\GetNodesResponse
     */
    public function setGetNodesResult(\Confirmit\Authoring\StructType\SurveySchema $getNodesResult = null)
    {
        $this->GetNodesResult = $getNodesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetNodesResponse
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
