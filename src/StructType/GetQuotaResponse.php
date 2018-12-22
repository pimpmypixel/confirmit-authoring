<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuotaResponse StructType
 * @subpackage Structs
 */
class GetQuotaResponse extends AbstractStructBase
{
    /**
     * The GetQuotaResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $GetQuotaResult;
    /**
     * Constructor method for GetQuotaResponse
     * @uses GetQuotaResponse::setGetQuotaResult()
     * @param \Confirmit\Authoring\StructType\SurveySchema $getQuotaResult
     */
    public function __construct(\Confirmit\Authoring\StructType\SurveySchema $getQuotaResult = null)
    {
        $this
            ->setGetQuotaResult($getQuotaResult);
    }
    /**
     * Get GetQuotaResult value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getGetQuotaResult()
    {
        return $this->GetQuotaResult;
    }
    /**
     * Set GetQuotaResult value
     * @param \Confirmit\Authoring\StructType\SurveySchema $getQuotaResult
     * @return \Confirmit\Authoring\StructType\GetQuotaResponse
     */
    public function setGetQuotaResult(\Confirmit\Authoring\StructType\SurveySchema $getQuotaResult = null)
    {
        $this->GetQuotaResult = $getQuotaResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetQuotaResponse
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
