<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PredefinedScriptBase StructType
 * @subpackage Structs
 */
abstract class PredefinedScriptBase extends AbstractStructBase
{
    /**
     * The CurrentForm
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CurrentForm;
    /**
     * Constructor method for PredefinedScriptBase
     * @uses PredefinedScriptBase::setCurrentForm()
     * @param string $currentForm
     */
    public function __construct($currentForm = null)
    {
        $this
            ->setCurrentForm($currentForm);
    }
    /**
     * Get CurrentForm value
     * @return string|null
     */
    public function getCurrentForm()
    {
        return $this->CurrentForm;
    }
    /**
     * Set CurrentForm value
     * @param string $currentForm
     * @return \Confirmit\Authoring\StructType\PredefinedScriptBase
     */
    public function setCurrentForm($currentForm = null)
    {
        // validation for constraint: string
        if (!is_null($currentForm) && !is_string($currentForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentForm)), __LINE__);
        }
        $this->CurrentForm = $currentForm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\PredefinedScriptBase
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
