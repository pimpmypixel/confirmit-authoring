<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPredefinedListResponse StructType
 * @subpackage Structs
 */
class GetPredefinedListResponse extends AbstractStructBase
{
    /**
     * The GetPredefinedListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetPredefinedListResult;
    /**
     * Constructor method for GetPredefinedListResponse
     * @uses GetPredefinedListResponse::setGetPredefinedListResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getPredefinedListResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getPredefinedListResult = null)
    {
        $this
            ->setGetPredefinedListResult($getPredefinedListResult);
    }
    /**
     * Get GetPredefinedListResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetPredefinedListResult()
    {
        return $this->GetPredefinedListResult;
    }
    /**
     * Set GetPredefinedListResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getPredefinedListResult
     * @return \Confirmit\Authoring\StructType\GetPredefinedListResponse
     */
    public function setGetPredefinedListResult(\Confirmit\Authoring\StructType\SurveySchema $getPredefinedListResult = null)
    {
        $this->GetPredefinedListResult = $getPredefinedListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetPredefinedListResponse
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
