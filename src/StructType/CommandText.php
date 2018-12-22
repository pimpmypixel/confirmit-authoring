<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommandText StructType
 * @subpackage Structs
 */
class CommandText extends AbstractStructBase
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Language;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * Constructor method for CommandText
     * @uses CommandText::setLanguage()
     * @uses CommandText::setText()
     * @param int $language
     * @param string $text
     */
    public function __construct($language = null, $text = null)
    {
        $this
            ->setLanguage($language)
            ->setText($text);
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
     * @return \Confirmit\Authoring\StructType\CommandText
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
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Confirmit\Authoring\StructType\CommandText
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\CommandText
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
