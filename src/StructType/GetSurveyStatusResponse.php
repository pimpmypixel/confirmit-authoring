<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSurveyStatusResponse StructType
 * @subpackage Structs
 */
class GetSurveyStatusResponse extends AbstractStructBase
{
    /**
     * The GetSurveyStatusResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $GetSurveyStatusResult;
    /**
     * Constructor method for GetSurveyStatusResponse
     * @uses GetSurveyStatusResponse::setGetSurveyStatusResult()
     * @param string $getSurveyStatusResult
     */
    public function __construct($getSurveyStatusResult = null)
    {
        $this
            ->setGetSurveyStatusResult($getSurveyStatusResult);
    }
    /**
     * Get GetSurveyStatusResult value
     * @return string
     */
    public function getGetSurveyStatusResult()
    {
        return $this->GetSurveyStatusResult;
    }
    /**
     * Set GetSurveyStatusResult value
     * @uses \Confirmit\Authoring\EnumType\SurveyStatusType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SurveyStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $getSurveyStatusResult
     * @return \Confirmit\Authoring\StructType\GetSurveyStatusResponse
     */
    public function setGetSurveyStatusResult($getSurveyStatusResult = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SurveyStatusType::valueIsValid($getSurveyStatusResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $getSurveyStatusResult, implode(', ', \Confirmit\Authoring\EnumType\SurveyStatusType::getValidValues())), __LINE__);
        }
        $this->GetSurveyStatusResult = $getSurveyStatusResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetSurveyStatusResponse
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
