<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSurveyLayout StructType
 * @subpackage Structs
 */
class ExportSurveyLayout extends AbstractStructBase
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
     * The surveyLayoutId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $surveyLayoutId;
    /**
     * Constructor method for ExportSurveyLayout
     * @uses ExportSurveyLayout::setKey()
     * @uses ExportSurveyLayout::setSurveyLayoutId()
     * @param string $key
     * @param string $surveyLayoutId
     */
    public function __construct($key = null, $surveyLayoutId = null)
    {
        $this
            ->setKey($key)
            ->setSurveyLayoutId($surveyLayoutId);
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
     * @return \Confirmit\Authoring\StructType\ExportSurveyLayout
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
     * Get surveyLayoutId value
     * @return string|null
     */
    public function getSurveyLayoutId()
    {
        return $this->surveyLayoutId;
    }
    /**
     * Set surveyLayoutId value
     * @param string $surveyLayoutId
     * @return \Confirmit\Authoring\StructType\ExportSurveyLayout
     */
    public function setSurveyLayoutId($surveyLayoutId = null)
    {
        // validation for constraint: string
        if (!is_null($surveyLayoutId) && !is_string($surveyLayoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyLayoutId)), __LINE__);
        }
        $this->surveyLayoutId = $surveyLayoutId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ExportSurveyLayout
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
