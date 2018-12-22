<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice1 StructType
 * @subpackage Structs
 */
class ArrayOfChoice1 extends AbstractStructBase
{
    /**
     * The range
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\SssRange
     */
    public $range;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\SssValue
     */
    public $value;
    /**
     * Constructor method for ArrayOfChoice1
     * @uses ArrayOfChoice1::setRange()
     * @uses ArrayOfChoice1::setValue()
     * @param \Confirmit\Authoring\StructType\SssRange $range
     * @param \Confirmit\Authoring\StructType\SssValue $value
     */
    public function __construct(\Confirmit\Authoring\StructType\SssRange $range = null, \Confirmit\Authoring\StructType\SssValue $value = null)
    {
        $this
            ->setRange($range)
            ->setValue($value);
    }
    /**
     * Get range value
     * @return \Confirmit\Authoring\StructType\SssRange
     */
    public function getRange()
    {
        return $this->range;
    }
    /**
     * Set range value
     * @param \Confirmit\Authoring\StructType\SssRange $range
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice1
     */
    public function setRange(\Confirmit\Authoring\StructType\SssRange $range = null)
    {
        $this->range = $range;
        return $this;
    }
    /**
     * Get value value
     * @return \Confirmit\Authoring\StructType\SssValue
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param \Confirmit\Authoring\StructType\SssValue $value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice1
     */
    public function setValue(\Confirmit\Authoring\StructType\SssValue $value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice1
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
