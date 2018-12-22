<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LangSpecString StructType
 * @subpackage Structs
 */
class LangSpecString extends AbstractStructBase
{
    /**
     * The LanguageId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $LanguageId;
    /**
     * The LanguageString
     * @var string
     */
    public $LanguageString;
    /**
     * The LanguageValue
     * @var string
     */
    public $LanguageValue;
    /**
     * Constructor method for LangSpecString
     * @uses LangSpecString::setLanguageId()
     * @uses LangSpecString::setLanguageString()
     * @uses LangSpecString::setLanguageValue()
     * @param int $languageId
     * @param string $languageString
     * @param string $languageValue
     */
    public function __construct($languageId = null, $languageString = null, $languageValue = null)
    {
        $this
            ->setLanguageId($languageId)
            ->setLanguageString($languageString)
            ->setLanguageValue($languageValue);
    }
    /**
     * Get LanguageId value
     * @return int
     */
    public function getLanguageId()
    {
        return $this->LanguageId;
    }
    /**
     * Set LanguageId value
     * @param int $languageId
     * @return \Confirmit\Authoring\StructType\LangSpecString
     */
    public function setLanguageId($languageId = null)
    {
        // validation for constraint: int
        if (!is_null($languageId) && !is_numeric($languageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($languageId)), __LINE__);
        }
        $this->LanguageId = $languageId;
        return $this;
    }
    /**
     * Get LanguageString value
     * @return string|null
     */
    public function getLanguageString()
    {
        return $this->LanguageString;
    }
    /**
     * Set LanguageString value
     * @param string $languageString
     * @return \Confirmit\Authoring\StructType\LangSpecString
     */
    public function setLanguageString($languageString = null)
    {
        // validation for constraint: string
        if (!is_null($languageString) && !is_string($languageString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageString)), __LINE__);
        }
        $this->LanguageString = $languageString;
        return $this;
    }
    /**
     * Get LanguageValue value
     * @return string|null
     */
    public function getLanguageValue()
    {
        return $this->LanguageValue;
    }
    /**
     * Set LanguageValue value
     * @param string $languageValue
     * @return \Confirmit\Authoring\StructType\LangSpecString
     */
    public function setLanguageValue($languageValue = null)
    {
        // validation for constraint: string
        if (!is_null($languageValue) && !is_string($languageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageValue)), __LINE__);
        }
        $this->LanguageValue = $languageValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\LangSpecString
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
