<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormText StructType
 * @subpackage Structs
 */
class FormText extends AbstractStructBase
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Language;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The Instruction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Instruction;
    /**
     * Constructor method for FormText
     * @uses FormText::setLanguage()
     * @uses FormText::setTitle()
     * @uses FormText::setText()
     * @uses FormText::setInstruction()
     * @param int $language
     * @param string $title
     * @param string $text
     * @param string $instruction
     */
    public function __construct($language = null, $title = null, $text = null, $instruction = null)
    {
        $this
            ->setLanguage($language)
            ->setTitle($title)
            ->setText($text)
            ->setInstruction($instruction);
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
     * @return \Confirmit\Authoring\StructType\FormText
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
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Confirmit\Authoring\StructType\FormText
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
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
     * @return \Confirmit\Authoring\StructType\FormText
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
     * Get Instruction value
     * @return string|null
     */
    public function getInstruction()
    {
        return $this->Instruction;
    }
    /**
     * Set Instruction value
     * @param string $instruction
     * @return \Confirmit\Authoring\StructType\FormText
     */
    public function setInstruction($instruction = null)
    {
        // validation for constraint: string
        if (!is_null($instruction) && !is_string($instruction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($instruction)), __LINE__);
        }
        $this->Instruction = $instruction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\FormText
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
