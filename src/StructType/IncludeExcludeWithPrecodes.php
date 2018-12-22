<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncludeExcludeWithPrecodes StructType
 * @subpackage Structs
 */
class IncludeExcludeWithPrecodes extends PredefinedScriptBase
{
    /**
     * The IncludeExclude
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeExclude;
    /**
     * The QuestionA
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QuestionA;
    /**
     * The ForceInclude
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ForceInclude;
    /**
     * The ForceExclude
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ForceExclude;
    /**
     * Constructor method for IncludeExcludeWithPrecodes
     * @uses IncludeExcludeWithPrecodes::setIncludeExclude()
     * @uses IncludeExcludeWithPrecodes::setQuestionA()
     * @uses IncludeExcludeWithPrecodes::setForceInclude()
     * @uses IncludeExcludeWithPrecodes::setForceExclude()
     * @param bool $includeExclude
     * @param string $questionA
     * @param string $forceInclude
     * @param string $forceExclude
     */
    public function __construct($includeExclude = null, $questionA = null, $forceInclude = null, $forceExclude = null)
    {
        $this
            ->setIncludeExclude($includeExclude)
            ->setQuestionA($questionA)
            ->setForceInclude($forceInclude)
            ->setForceExclude($forceExclude);
    }
    /**
     * Get IncludeExclude value
     * @return bool
     */
    public function getIncludeExclude()
    {
        return $this->IncludeExclude;
    }
    /**
     * Set IncludeExclude value
     * @param bool $includeExclude
     * @return \Confirmit\Authoring\StructType\IncludeExcludeWithPrecodes
     */
    public function setIncludeExclude($includeExclude = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeExclude) && !is_bool($includeExclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeExclude)), __LINE__);
        }
        $this->IncludeExclude = $includeExclude;
        return $this;
    }
    /**
     * Get QuestionA value
     * @return string|null
     */
    public function getQuestionA()
    {
        return $this->QuestionA;
    }
    /**
     * Set QuestionA value
     * @param string $questionA
     * @return \Confirmit\Authoring\StructType\IncludeExcludeWithPrecodes
     */
    public function setQuestionA($questionA = null)
    {
        // validation for constraint: string
        if (!is_null($questionA) && !is_string($questionA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionA)), __LINE__);
        }
        $this->QuestionA = $questionA;
        return $this;
    }
    /**
     * Get ForceInclude value
     * @return string|null
     */
    public function getForceInclude()
    {
        return $this->ForceInclude;
    }
    /**
     * Set ForceInclude value
     * @param string $forceInclude
     * @return \Confirmit\Authoring\StructType\IncludeExcludeWithPrecodes
     */
    public function setForceInclude($forceInclude = null)
    {
        // validation for constraint: string
        if (!is_null($forceInclude) && !is_string($forceInclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forceInclude)), __LINE__);
        }
        $this->ForceInclude = $forceInclude;
        return $this;
    }
    /**
     * Get ForceExclude value
     * @return string|null
     */
    public function getForceExclude()
    {
        return $this->ForceExclude;
    }
    /**
     * Set ForceExclude value
     * @param string $forceExclude
     * @return \Confirmit\Authoring\StructType\IncludeExcludeWithPrecodes
     */
    public function setForceExclude($forceExclude = null)
    {
        // validation for constraint: string
        if (!is_null($forceExclude) && !is_string($forceExclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forceExclude)), __LINE__);
        }
        $this->ForceExclude = $forceExclude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\IncludeExcludeWithPrecodes
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
