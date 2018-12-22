<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllowIgnoreDialingCommand StructType
 * @subpackage Structs
 */
class AllowIgnoreDialingCommand extends BaseTelephoneCommand
{
    /**
     * The AllowDialing
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $AllowDialing;
    /**
     * Constructor method for AllowIgnoreDialingCommand
     * @uses AllowIgnoreDialingCommand::setAllowDialing()
     * @param bool $allowDialing
     */
    public function __construct($allowDialing = null)
    {
        $this
            ->setAllowDialing($allowDialing);
    }
    /**
     * Get AllowDialing value
     * @return bool
     */
    public function getAllowDialing()
    {
        return $this->AllowDialing;
    }
    /**
     * Set AllowDialing value
     * @param bool $allowDialing
     * @return \Confirmit\Authoring\StructType\AllowIgnoreDialingCommand
     */
    public function setAllowDialing($allowDialing = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowDialing) && !is_bool($allowDialing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowDialing)), __LINE__);
        }
        $this->AllowDialing = $allowDialing;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\AllowIgnoreDialingCommand
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
