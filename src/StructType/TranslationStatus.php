<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TranslationStatus StructType
 * @subpackage Structs
 */
class TranslationStatus extends \Confirmit\Authoring\EnumType\StatusType
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Language;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for TranslationStatus
     * @uses TranslationStatus::setLanguage()
     * @uses TranslationStatus::set_()
     * @param int $language
     * @param string $_
     */
    public function __construct($language = null, $_ = null)
    {
        $this
            ->setLanguage($language)
            ->set_($_);
    }
    /**
     * Get Language value
     * @return int
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param int $language
     * @return \Confirmit\Authoring\StructType\TranslationStatus
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: int
        if (!is_null($language) && !is_numeric($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @uses \Confirmit\Authoring\EnumType\StatusType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\StatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \Confirmit\Authoring\StructType\TranslationStatus
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\StatusType::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $_, implode(', ', \Confirmit\Authoring\EnumType\StatusType::getValidValues())), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\TranslationStatus
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
