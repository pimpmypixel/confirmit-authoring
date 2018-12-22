<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssSpread StructType
 * @subpackage Structs
 */
class SssSpread extends AbstractStructBase
{
    /**
     * The subfields
     * @var string
     */
    public $subfields;
    /**
     * The width
     * @var string
     */
    public $width;
    /**
     * Constructor method for SssSpread
     * @uses SssSpread::setSubfields()
     * @uses SssSpread::setWidth()
     * @param string $subfields
     * @param string $width
     */
    public function __construct($subfields = null, $width = null)
    {
        $this
            ->setSubfields($subfields)
            ->setWidth($width);
    }
    /**
     * Get subfields value
     * @return string|null
     */
    public function getSubfields()
    {
        return $this->subfields;
    }
    /**
     * Set subfields value
     * @param string $subfields
     * @return \Confirmit\Authoring\StructType\SssSpread
     */
    public function setSubfields($subfields = null)
    {
        // validation for constraint: string
        if (!is_null($subfields) && !is_string($subfields)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subfields)), __LINE__);
        }
        $this->subfields = $subfields;
        return $this;
    }
    /**
     * Get width value
     * @return string|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param string $width
     * @return \Confirmit\Authoring\StructType\SssSpread
     */
    public function setWidth($width = null)
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssSpread
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
