<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CallBlock StructType
 * @subpackage Structs
 */
class CallBlock extends QuestionnaireNode
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The BlockToCall
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BlockToCall;
    /**
     * Constructor method for CallBlock
     * @uses CallBlock::setName()
     * @uses CallBlock::setBlockToCall()
     * @param string $name
     * @param string $blockToCall
     */
    public function __construct($name = null, $blockToCall = null)
    {
        $this
            ->setName($name)
            ->setBlockToCall($blockToCall);
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
     * @return \Confirmit\Authoring\StructType\CallBlock
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
     * Get BlockToCall value
     * @return string|null
     */
    public function getBlockToCall()
    {
        return $this->BlockToCall;
    }
    /**
     * Set BlockToCall value
     * @param string $blockToCall
     * @return \Confirmit\Authoring\StructType\CallBlock
     */
    public function setBlockToCall($blockToCall = null)
    {
        // validation for constraint: string
        if (!is_null($blockToCall) && !is_string($blockToCall)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($blockToCall)), __LINE__);
        }
        $this->BlockToCall = $blockToCall;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\CallBlock
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
