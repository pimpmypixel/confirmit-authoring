<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Telephone StructType
 * @subpackage Structs
 */
class Telephone extends QuestionnaireNode
{
    /**
     * The TelephoneCommandType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $TelephoneCommandType;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The TelephoneCommand
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\BaseTelephoneCommand
     */
    public $TelephoneCommand;
    /**
     * Constructor method for Telephone
     * @uses Telephone::setTelephoneCommandType()
     * @uses Telephone::setName()
     * @uses Telephone::setTelephoneCommand()
     * @param string $telephoneCommandType
     * @param string $name
     * @param \Confirmit\Authoring\StructType\BaseTelephoneCommand $telephoneCommand
     */
    public function __construct($telephoneCommandType = null, $name = null, \Confirmit\Authoring\StructType\BaseTelephoneCommand $telephoneCommand = null)
    {
        $this
            ->setTelephoneCommandType($telephoneCommandType)
            ->setName($name)
            ->setTelephoneCommand($telephoneCommand);
    }
    /**
     * Get TelephoneCommandType value
     * @return string
     */
    public function getTelephoneCommandType()
    {
        return $this->TelephoneCommandType;
    }
    /**
     * Set TelephoneCommandType value
     * @uses \Confirmit\Authoring\EnumType\TelephoneCommandType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\TelephoneCommandType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $telephoneCommandType
     * @return \Confirmit\Authoring\StructType\Telephone
     */
    public function setTelephoneCommandType($telephoneCommandType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\TelephoneCommandType::valueIsValid($telephoneCommandType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $telephoneCommandType, implode(', ', \Confirmit\Authoring\EnumType\TelephoneCommandType::getValidValues())), __LINE__);
        }
        $this->TelephoneCommandType = $telephoneCommandType;
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
     * @return \Confirmit\Authoring\StructType\Telephone
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
     * Get TelephoneCommand value
     * @return \Confirmit\Authoring\StructType\BaseTelephoneCommand|null
     */
    public function getTelephoneCommand()
    {
        return $this->TelephoneCommand;
    }
    /**
     * Set TelephoneCommand value
     * @param \Confirmit\Authoring\StructType\BaseTelephoneCommand $telephoneCommand
     * @return \Confirmit\Authoring\StructType\Telephone
     */
    public function setTelephoneCommand(\Confirmit\Authoring\StructType\BaseTelephoneCommand $telephoneCommand = null)
    {
        $this->TelephoneCommand = $telephoneCommand;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Telephone
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
