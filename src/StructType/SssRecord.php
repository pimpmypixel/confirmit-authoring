<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssRecord StructType
 * @subpackage Structs
 */
class SssRecord extends AbstractStructBase
{
    /**
     * The variable
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssVariable[]
     */
    public $variable;
    /**
     * The format
     * @var string
     */
    public $format;
    /**
     * The ident
     * @var string
     */
    public $ident;
    /**
     * The href
     * @var string
     */
    public $href;
    /**
     * The skip
     * @var string
     */
    public $skip;
    /**
     * Constructor method for SssRecord
     * @uses SssRecord::setVariable()
     * @uses SssRecord::setFormat()
     * @uses SssRecord::setIdent()
     * @uses SssRecord::setHref()
     * @uses SssRecord::setSkip()
     * @param \Confirmit\Authoring\StructType\SssVariable[] $variable
     * @param string $format
     * @param string $ident
     * @param string $href
     * @param string $skip
     */
    public function __construct(array $variable = array(), $format = null, $ident = null, $href = null, $skip = null)
    {
        $this
            ->setVariable($variable)
            ->setFormat($format)
            ->setIdent($ident)
            ->setHref($href)
            ->setSkip($skip);
    }
    /**
     * Get variable value
     * @return \Confirmit\Authoring\StructType\SssVariable[]|null
     */
    public function getVariable()
    {
        return $this->variable;
    }
    /**
     * Set variable value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssVariable[] $variable
     * @return \Confirmit\Authoring\StructType\SssRecord
     */
    public function setVariable(array $variable = array())
    {
        foreach ($variable as $sssRecordVariableItem) {
            // validation for constraint: itemType
            if (!$sssRecordVariableItem instanceof \Confirmit\Authoring\StructType\SssVariable) {
                throw new \InvalidArgumentException(sprintf('The variable property can only contain items of \Confirmit\Authoring\StructType\SssVariable, "%s" given', is_object($sssRecordVariableItem) ? get_class($sssRecordVariableItem) : gettype($sssRecordVariableItem)), __LINE__);
            }
        }
        $this->variable = $variable;
        return $this;
    }
    /**
     * Add item to variable value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssVariable $item
     * @return \Confirmit\Authoring\StructType\SssRecord
     */
    public function addToVariable(\Confirmit\Authoring\StructType\SssVariable $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\SssVariable) {
            throw new \InvalidArgumentException(sprintf('The variable property can only contain items of \Confirmit\Authoring\StructType\SssVariable, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->variable[] = $item;
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Confirmit\Authoring\StructType\SssRecord
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Get ident value
     * @return string|null
     */
    public function getIdent()
    {
        return $this->ident;
    }
    /**
     * Set ident value
     * @param string $ident
     * @return \Confirmit\Authoring\StructType\SssRecord
     */
    public function setIdent($ident = null)
    {
        // validation for constraint: string
        if (!is_null($ident) && !is_string($ident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ident)), __LINE__);
        }
        $this->ident = $ident;
        return $this;
    }
    /**
     * Get href value
     * @return string|null
     */
    public function getHref()
    {
        return $this->href;
    }
    /**
     * Set href value
     * @param string $href
     * @return \Confirmit\Authoring\StructType\SssRecord
     */
    public function setHref($href = null)
    {
        // validation for constraint: string
        if (!is_null($href) && !is_string($href)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($href)), __LINE__);
        }
        $this->href = $href;
        return $this;
    }
    /**
     * Get skip value
     * @return string|null
     */
    public function getSkip()
    {
        return $this->skip;
    }
    /**
     * Set skip value
     * @param string $skip
     * @return \Confirmit\Authoring\StructType\SssRecord
     */
    public function setSkip($skip = null)
    {
        // validation for constraint: string
        if (!is_null($skip) && !is_string($skip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($skip)), __LINE__);
        }
        $this->skip = $skip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssRecord
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
