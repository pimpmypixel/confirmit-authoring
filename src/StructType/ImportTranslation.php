<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportTranslation StructType
 * @subpackage Structs
 */
class ImportTranslation extends AbstractStructBase
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
     * The projectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $projectId;
    /**
     * The translationXml
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $translationXml;
    /**
     * Constructor method for ImportTranslation
     * @uses ImportTranslation::setKey()
     * @uses ImportTranslation::setProjectId()
     * @uses ImportTranslation::setTranslationXml()
     * @param string $key
     * @param string $projectId
     * @param string $translationXml
     */
    public function __construct($key = null, $projectId = null, $translationXml = null)
    {
        $this
            ->setKey($key)
            ->setProjectId($projectId)
            ->setTranslationXml($translationXml);
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
     * @return \Confirmit\Authoring\StructType\ImportTranslation
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
     * Get projectId value
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param string $projectId
     * @return \Confirmit\Authoring\StructType\ImportTranslation
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: string
        if (!is_null($projectId) && !is_string($projectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Get translationXml value
     * @return string|null
     */
    public function getTranslationXml()
    {
        return $this->translationXml;
    }
    /**
     * Set translationXml value
     * @param string $translationXml
     * @return \Confirmit\Authoring\StructType\ImportTranslation
     */
    public function setTranslationXml($translationXml = null)
    {
        // validation for constraint: string
        if (!is_null($translationXml) && !is_string($translationXml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($translationXml)), __LINE__);
        }
        $this->translationXml = $translationXml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ImportTranslation
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
