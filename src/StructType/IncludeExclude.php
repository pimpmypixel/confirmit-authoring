<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncludeExclude StructType
 * @subpackage Structs
 */
class IncludeExclude extends PredefinedScriptBase
{
    /**
     * The IncludeExclude1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeExclude1;
    /**
     * The IncludeExclude2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeExclude2;
    /**
     * The QuestionA
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QuestionA;
    /**
     * The QuestionB
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QuestionB;
    /**
     * Constructor method for IncludeExclude
     * @uses IncludeExclude::setIncludeExclude1()
     * @uses IncludeExclude::setIncludeExclude2()
     * @uses IncludeExclude::setQuestionA()
     * @uses IncludeExclude::setQuestionB()
     * @param bool $includeExclude1
     * @param bool $includeExclude2
     * @param string $questionA
     * @param string $questionB
     */
    public function __construct($includeExclude1 = null, $includeExclude2 = null, $questionA = null, $questionB = null)
    {
        $this
            ->setIncludeExclude1($includeExclude1)
            ->setIncludeExclude2($includeExclude2)
            ->setQuestionA($questionA)
            ->setQuestionB($questionB);
    }
    /**
     * Get IncludeExclude1 value
     * @return bool
     */
    public function getIncludeExclude1()
    {
        return $this->IncludeExclude1;
    }
    /**
     * Set IncludeExclude1 value
     * @param bool $includeExclude1
     * @return \Confirmit\Authoring\StructType\IncludeExclude
     */
    public function setIncludeExclude1($includeExclude1 = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeExclude1) && !is_bool($includeExclude1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeExclude1)), __LINE__);
        }
        $this->IncludeExclude1 = $includeExclude1;
        return $this;
    }
    /**
     * Get IncludeExclude2 value
     * @return bool
     */
    public function getIncludeExclude2()
    {
        return $this->IncludeExclude2;
    }
    /**
     * Set IncludeExclude2 value
     * @param bool $includeExclude2
     * @return \Confirmit\Authoring\StructType\IncludeExclude
     */
    public function setIncludeExclude2($includeExclude2 = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeExclude2) && !is_bool($includeExclude2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeExclude2)), __LINE__);
        }
        $this->IncludeExclude2 = $includeExclude2;
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
     * @return \Confirmit\Authoring\StructType\IncludeExclude
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
     * Get QuestionB value
     * @return string|null
     */
    public function getQuestionB()
    {
        return $this->QuestionB;
    }
    /**
     * Set QuestionB value
     * @param string $questionB
     * @return \Confirmit\Authoring\StructType\IncludeExclude
     */
    public function setQuestionB($questionB = null)
    {
        // validation for constraint: string
        if (!is_null($questionB) && !is_string($questionB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionB)), __LINE__);
        }
        $this->QuestionB = $questionB;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\IncludeExclude
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
