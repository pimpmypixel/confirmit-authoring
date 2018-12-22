<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Script StructType
 * @subpackage Structs
 */
class Script extends QuestionnaireNode
{
    /**
     * The UsePredefinedScript
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $UsePredefinedScript;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ScriptCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScriptCode;
    /**
     * The PredefinedScript
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\PredefinedScriptBase
     */
    public $PredefinedScript;
    /**
     * Constructor method for Script
     * @uses Script::setUsePredefinedScript()
     * @uses Script::setName()
     * @uses Script::setScriptCode()
     * @uses Script::setPredefinedScript()
     * @param bool $usePredefinedScript
     * @param string $name
     * @param string $scriptCode
     * @param \Confirmit\Authoring\StructType\PredefinedScriptBase $predefinedScript
     */
    public function __construct($usePredefinedScript = null, $name = null, $scriptCode = null, \Confirmit\Authoring\StructType\PredefinedScriptBase $predefinedScript = null)
    {
        $this
            ->setUsePredefinedScript($usePredefinedScript)
            ->setName($name)
            ->setScriptCode($scriptCode)
            ->setPredefinedScript($predefinedScript);
    }
    /**
     * Get UsePredefinedScript value
     * @return bool
     */
    public function getUsePredefinedScript()
    {
        return $this->UsePredefinedScript;
    }
    /**
     * Set UsePredefinedScript value
     * @param bool $usePredefinedScript
     * @return \Confirmit\Authoring\StructType\Script
     */
    public function setUsePredefinedScript($usePredefinedScript = null)
    {
        // validation for constraint: boolean
        if (!is_null($usePredefinedScript) && !is_bool($usePredefinedScript)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($usePredefinedScript)), __LINE__);
        }
        $this->UsePredefinedScript = $usePredefinedScript;
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
     * @return \Confirmit\Authoring\StructType\Script
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
     * Get ScriptCode value
     * @return string|null
     */
    public function getScriptCode()
    {
        return $this->ScriptCode;
    }
    /**
     * Set ScriptCode value
     * @param string $scriptCode
     * @return \Confirmit\Authoring\StructType\Script
     */
    public function setScriptCode($scriptCode = null)
    {
        // validation for constraint: string
        if (!is_null($scriptCode) && !is_string($scriptCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scriptCode)), __LINE__);
        }
        $this->ScriptCode = $scriptCode;
        return $this;
    }
    /**
     * Get PredefinedScript value
     * @return \Confirmit\Authoring\StructType\PredefinedScriptBase|null
     */
    public function getPredefinedScript()
    {
        return $this->PredefinedScript;
    }
    /**
     * Set PredefinedScript value
     * @param \Confirmit\Authoring\StructType\PredefinedScriptBase $predefinedScript
     * @return \Confirmit\Authoring\StructType\Script
     */
    public function setPredefinedScript(\Confirmit\Authoring\StructType\PredefinedScriptBase $predefinedScript = null)
    {
        $this->PredefinedScript = $predefinedScript;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Script
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
