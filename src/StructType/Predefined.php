<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Predefined StructType
 * @subpackage Structs
 */
class Predefined extends AnswerBase
{
    /**
     * The BarHeight
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $BarHeight;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for Predefined
     * @uses Predefined::setBarHeight()
     * @uses Predefined::setName()
     * @param int $barHeight
     * @param string $name
     */
    public function __construct($barHeight = null, $name = null)
    {
        $this
            ->setBarHeight($barHeight)
            ->setName($name);
    }
    /**
     * Get BarHeight value
     * @return int
     */
    public function getBarHeight()
    {
        return $this->BarHeight;
    }
    /**
     * Set BarHeight value
     * @param int $barHeight
     * @return \Confirmit\Authoring\StructType\Predefined
     */
    public function setBarHeight($barHeight = null)
    {
        // validation for constraint: int
        if (!is_null($barHeight) && !is_numeric($barHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($barHeight)), __LINE__);
        }
        $this->BarHeight = $barHeight;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Confirmit\Authoring\StructType\Predefined
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Predefined
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
