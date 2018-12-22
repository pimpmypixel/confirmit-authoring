<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportTranslation StructType
 * @subpackage Structs
 */
class ExportTranslation extends AbstractStructBase
{
    /**
     * The targetLanguage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $targetLanguage;
    /**
     * The baseLanguage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $baseLanguage;
    /**
     * The useFallbackLanguage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $useFallbackLanguage;
    /**
     * The fallbackLanguage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $fallbackLanguage;
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
     * Constructor method for ExportTranslation
     * @uses ExportTranslation::setTargetLanguage()
     * @uses ExportTranslation::setBaseLanguage()
     * @uses ExportTranslation::setUseFallbackLanguage()
     * @uses ExportTranslation::setFallbackLanguage()
     * @uses ExportTranslation::setKey()
     * @uses ExportTranslation::setProjectId()
     * @param int $targetLanguage
     * @param int $baseLanguage
     * @param bool $useFallbackLanguage
     * @param int $fallbackLanguage
     * @param string $key
     * @param string $projectId
     */
    public function __construct($targetLanguage = null, $baseLanguage = null, $useFallbackLanguage = null, $fallbackLanguage = null, $key = null, $projectId = null)
    {
        $this
            ->setTargetLanguage($targetLanguage)
            ->setBaseLanguage($baseLanguage)
            ->setUseFallbackLanguage($useFallbackLanguage)
            ->setFallbackLanguage($fallbackLanguage)
            ->setKey($key)
            ->setProjectId($projectId);
    }
    /**
     * Get targetLanguage value
     * @return int
     */
    public function getTargetLanguage()
    {
        return $this->targetLanguage;
    }
    /**
     * Set targetLanguage value
     * @param int $targetLanguage
     * @return \Confirmit\Authoring\StructType\ExportTranslation
     */
    public function setTargetLanguage($targetLanguage = null)
    {
        // validation for constraint: int
        if (!is_null($targetLanguage) && !is_numeric($targetLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($targetLanguage)), __LINE__);
        }
        $this->targetLanguage = $targetLanguage;
        return $this;
    }
    /**
     * Get baseLanguage value
     * @return int
     */
    public function getBaseLanguage()
    {
        return $this->baseLanguage;
    }
    /**
     * Set baseLanguage value
     * @param int $baseLanguage
     * @return \Confirmit\Authoring\StructType\ExportTranslation
     */
    public function setBaseLanguage($baseLanguage = null)
    {
        // validation for constraint: int
        if (!is_null($baseLanguage) && !is_numeric($baseLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($baseLanguage)), __LINE__);
        }
        $this->baseLanguage = $baseLanguage;
        return $this;
    }
    /**
     * Get useFallbackLanguage value
     * @return bool
     */
    public function getUseFallbackLanguage()
    {
        return $this->useFallbackLanguage;
    }
    /**
     * Set useFallbackLanguage value
     * @param bool $useFallbackLanguage
     * @return \Confirmit\Authoring\StructType\ExportTranslation
     */
    public function setUseFallbackLanguage($useFallbackLanguage = null)
    {
        // validation for constraint: boolean
        if (!is_null($useFallbackLanguage) && !is_bool($useFallbackLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useFallbackLanguage)), __LINE__);
        }
        $this->useFallbackLanguage = $useFallbackLanguage;
        return $this;
    }
    /**
     * Get fallbackLanguage value
     * @return int
     */
    public function getFallbackLanguage()
    {
        return $this->fallbackLanguage;
    }
    /**
     * Set fallbackLanguage value
     * @param int $fallbackLanguage
     * @return \Confirmit\Authoring\StructType\ExportTranslation
     */
    public function setFallbackLanguage($fallbackLanguage = null)
    {
        // validation for constraint: int
        if (!is_null($fallbackLanguage) && !is_numeric($fallbackLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fallbackLanguage)), __LINE__);
        }
        $this->fallbackLanguage = $fallbackLanguage;
        return $this;
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
     * @return \Confirmit\Authoring\StructType\ExportTranslation
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
     * @return \Confirmit\Authoring\StructType\ExportTranslation
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ExportTranslation
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
