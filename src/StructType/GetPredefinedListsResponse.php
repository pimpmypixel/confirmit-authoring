<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPredefinedListsResponse StructType
 * @subpackage Structs
 */
class GetPredefinedListsResponse extends AbstractStructBase
{
    /**
     * The GetPredefinedListsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetPredefinedListsResult;
    /**
     * Constructor method for GetPredefinedListsResponse
     * @uses GetPredefinedListsResponse::setGetPredefinedListsResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getPredefinedListsResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getPredefinedListsResult = null)
    {
        $this
            ->setGetPredefinedListsResult($getPredefinedListsResult);
    }
    /**
     * Get GetPredefinedListsResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetPredefinedListsResult()
    {
        return $this->GetPredefinedListsResult;
    }
    /**
     * Set GetPredefinedListsResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getPredefinedListsResult
     * @return \Confirmit\Authoring\StructType\GetPredefinedListsResponse
     */
    public function setGetPredefinedListsResult(\Confirmit\Authoring\StructType\SurveySchema $getPredefinedListsResult = null)
    {
        $this->GetPredefinedListsResult = $getPredefinedListsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetPredefinedListsResponse
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
