<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportSurvey StructType
 * @subpackage Structs
 */
class ImportSurvey extends AbstractStructBase
{
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $key;
    /**
     * The surveyXml
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $surveyXml;
    /**
     * Constructor method for ImportSurvey
     * @uses ImportSurvey::setKey()
     * @uses ImportSurvey::setSurveyXml()
     * @param string $key
     * @param string $surveyXml
     */
    public function __construct($key = null, $surveyXml = null)
    {
        $this
            ->setKey($key)
            ->setSurveyXml($surveyXml);
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Confirmit\Authoring\StructType\ImportSurvey
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get surveyXml value
     * @return string|null
     */
    public function getSurveyXml()
    {
        return $this->surveyXml;
    }
    /**
     * Set surveyXml value
     * @param string $surveyXml
     * @return \Confirmit\Authoring\StructType\ImportSurvey
     */
    public function setSurveyXml($surveyXml = null)
    {
        // validation for constraint: string
        if (!is_null($surveyXml) && !is_string($surveyXml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyXml)), __LINE__);
        }
        $this->surveyXml = $surveyXml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ImportSurvey
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
