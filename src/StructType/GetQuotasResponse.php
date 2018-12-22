<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuotasResponse StructType
 * @subpackage Structs
 */
class GetQuotasResponse extends AbstractStructBase
{
    /**
     * The GetQuotasResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetQuotasResult;
    /**
     * Constructor method for GetQuotasResponse
     * @uses GetQuotasResponse::setGetQuotasResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getQuotasResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getQuotasResult = null)
    {
        $this
            ->setGetQuotasResult($getQuotasResult);
    }
    /**
     * Get GetQuotasResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetQuotasResult()
    {
        return $this->GetQuotasResult;
    }
    /**
     * Set GetQuotasResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getQuotasResult
     * @return \Confirmit\Authoring\StructType\GetQuotasResponse
     */
    public function setGetQuotasResult(\Confirmit\Authoring\StructType\SurveySchema $getQuotasResult = null)
    {
        $this->GetQuotasResult = $getQuotasResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetQuotasResponse
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
