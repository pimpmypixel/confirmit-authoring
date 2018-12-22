<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternalAnswersResponse StructType
 * @subpackage Structs
 */
class GetExternalAnswersResponse extends AbstractStructBase
{
    /**
     * The GetExternalAnswersResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfAnswerBase
     */
    public $GetExternalAnswersResult;
    /**
     * Constructor method for GetExternalAnswersResponse
     * @uses GetExternalAnswersResponse::setGetExternalAnswersResult()
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerBase $getExternalAnswersResult
     */
    public function __construct(\Confirmit\Authoring\ArrayType\ArrayOfAnswerBase $getExternalAnswersResult = null)
    {
        $this
            ->setGetExternalAnswersResult($getExternalAnswersResult);
    }
    /**
     * Get GetExternalAnswersResult value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerBase|null
     */
    public function getGetExternalAnswersResult()
    {
        return $this->GetExternalAnswersResult;
    }
    /**
     * Set GetExternalAnswersResult value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerBase $getExternalAnswersResult
     * @return \Confirmit\Authoring\StructType\GetExternalAnswersResponse
     */
    public function setGetExternalAnswersResult(\Confirmit\Authoring\ArrayType\ArrayOfAnswerBase $getExternalAnswersResult = null)
    {
        $this->GetExternalAnswersResult = $getExternalAnswersResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetExternalAnswersResponse
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
