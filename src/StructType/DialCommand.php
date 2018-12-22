<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DialCommand StructType
 * @subpackage Structs
 */
class DialCommand extends BaseTelephoneCommand
{
    /**
     * The TelephoneVariable
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TelephoneVariable;
    /**
     * The DialingTexts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfCommandText
     */
    public $DialingTexts;
    /**
     * Constructor method for DialCommand
     * @uses DialCommand::setTelephoneVariable()
     * @uses DialCommand::setDialingTexts()
     * @param string $telephoneVariable
     * @param \Confirmit\Authoring\ArrayType\ArrayOfCommandText $dialingTexts
     */
    public function __construct($telephoneVariable = null, \Confirmit\Authoring\ArrayType\ArrayOfCommandText $dialingTexts = null)
    {
        $this
            ->setTelephoneVariable($telephoneVariable)
            ->setDialingTexts($dialingTexts);
    }
    /**
     * Get TelephoneVariable value
     * @return string|null
     */
    public function getTelephoneVariable()
    {
        return $this->TelephoneVariable;
    }
    /**
     * Set TelephoneVariable value
     * @param string $telephoneVariable
     * @return \Confirmit\Authoring\StructType\DialCommand
     */
    public function setTelephoneVariable($telephoneVariable = null)
    {
        // validation for constraint: string
        if (!is_null($telephoneVariable) && !is_string($telephoneVariable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephoneVariable)), __LINE__);
        }
        $this->TelephoneVariable = $telephoneVariable;
        return $this;
    }
    /**
     * Get DialingTexts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfCommandText|null
     */
    public function getDialingTexts()
    {
        return $this->DialingTexts;
    }
    /**
     * Set DialingTexts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfCommandText $dialingTexts
     * @return \Confirmit\Authoring\StructType\DialCommand
     */
    public function setDialingTexts(\Confirmit\Authoring\ArrayType\ArrayOfCommandText $dialingTexts = null)
    {
        $this->DialingTexts = $dialingTexts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\DialCommand
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
