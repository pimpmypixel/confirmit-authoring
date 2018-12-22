<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaskOnQuestion StructType
 * @subpackage Structs
 */
class MaskOnQuestion extends PredefinedScriptBase
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
     * The Question1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Question1;
    /**
     * Constructor method for MaskOnQuestion
     * @uses MaskOnQuestion::setIncludeExclude()
     * @uses MaskOnQuestion::setQuestion1()
     * @param bool $includeExclude
     * @param string $question1
     */
    public function __construct($includeExclude = null, $question1 = null)
    {
        $this
            ->setIncludeExclude($includeExclude)
            ->setQuestion1($question1);
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
     * @return \Confirmit\Authoring\StructType\MaskOnQuestion
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
     * Get Question1 value
     * @return string|null
     */
    public function getQuestion1()
    {
        return $this->Question1;
    }
    /**
     * Set Question1 value
     * @param string $question1
     * @return \Confirmit\Authoring\StructType\MaskOnQuestion
     */
    public function setQuestion1($question1 = null)
    {
        // validation for constraint: string
        if (!is_null($question1) && !is_string($question1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($question1)), __LINE__);
        }
        $this->Question1 = $question1;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\MaskOnQuestion
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
