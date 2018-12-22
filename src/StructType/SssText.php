<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssText StructType
 * @subpackage Structs
 */
class SssText extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The lang
     * Meta informations extracted from the WSDL
     * - ref: xml:lang
     * - use: optional
     * @var string
     */
    public $lang;
    /**
     * The mode
     * @var string
     */
    public $mode;
    /**
     * Constructor method for SssText
     * @uses SssText::set_()
     * @uses SssText::setLang()
     * @uses SssText::setMode()
     * @param string $_
     * @param string $lang
     * @param string $mode
     */
    public function __construct($_ = null, $lang = null, $mode = null)
    {
        $this
            ->set_($_)
            ->setLang($lang)
            ->setMode($mode);
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
     * @param string $_
     * @return \Confirmit\Authoring\StructType\SssText
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Confirmit\Authoring\StructType\SssText
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \Confirmit\Authoring\StructType\SssText
     */
    public function setMode($mode = null)
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssText
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
