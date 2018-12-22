<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoopLevelReference StructType
 * @subpackage Structs
 */
class LoopLevelReference extends AnswerBase
{
    /**
     * The LoopLevelName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LoopLevelName;
    /**
     * Constructor method for LoopLevelReference
     * @uses LoopLevelReference::setLoopLevelName()
     * @param string $loopLevelName
     */
    public function __construct($loopLevelName = null)
    {
        $this
            ->setLoopLevelName($loopLevelName);
    }
    /**
     * Get LoopLevelName value
     * @return string|null
     */
    public function getLoopLevelName()
    {
        return $this->LoopLevelName;
    }
    /**
     * Set LoopLevelName value
     * @param string $loopLevelName
     * @return \Confirmit\Authoring\StructType\LoopLevelReference
     */
    public function setLoopLevelName($loopLevelName = null)
    {
        // validation for constraint: string
        if (!is_null($loopLevelName) && !is_string($loopLevelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loopLevelName)), __LINE__);
        }
        $this->LoopLevelName = $loopLevelName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\LoopLevelReference
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
