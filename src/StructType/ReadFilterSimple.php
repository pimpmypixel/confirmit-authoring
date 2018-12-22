<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadFilterSimple StructType
 * @subpackage Structs
 */
class ReadFilterSimple extends AbstractStructBase
{
    /**
     * The IncludeAllLanguages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeAllLanguages;
    /**
     * The OverrideTextDataSourceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $OverrideTextDataSourceId;
    /**
     * The AnswerColorDataSourceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $AnswerColorDataSourceId;
    /**
     * The ExpandAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ExpandAnswers;
    /**
     * The ExpandLoopReferenceAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ExpandLoopReferenceAnswers;
    /**
     * The ExpandLoopRefOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ExpandLoopRefOption;
    /**
     * The ProjectSpecific
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ProjectSpecific;
    /**
     * The Languages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfInt
     */
    public $Languages;
    /**
     * Constructor method for ReadFilterSimple
     * @uses ReadFilterSimple::setIncludeAllLanguages()
     * @uses ReadFilterSimple::setOverrideTextDataSourceId()
     * @uses ReadFilterSimple::setAnswerColorDataSourceId()
     * @uses ReadFilterSimple::setExpandAnswers()
     * @uses ReadFilterSimple::setExpandLoopReferenceAnswers()
     * @uses ReadFilterSimple::setExpandLoopRefOption()
     * @uses ReadFilterSimple::setProjectSpecific()
     * @uses ReadFilterSimple::setLanguages()
     * @param bool $includeAllLanguages
     * @param string $overrideTextDataSourceId
     * @param string $answerColorDataSourceId
     * @param bool $expandAnswers
     * @param bool $expandLoopReferenceAnswers
     * @param string $expandLoopRefOption
     * @param bool $projectSpecific
     * @param \Confirmit\Authoring\ArrayType\ArrayOfInt $languages
     */
    public function __construct($includeAllLanguages = null, $overrideTextDataSourceId = null, $answerColorDataSourceId = null, $expandAnswers = null, $expandLoopReferenceAnswers = null, $expandLoopRefOption = null, $projectSpecific = null, \Confirmit\Authoring\ArrayType\ArrayOfInt $languages = null)
    {
        $this
            ->setIncludeAllLanguages($includeAllLanguages)
            ->setOverrideTextDataSourceId($overrideTextDataSourceId)
            ->setAnswerColorDataSourceId($answerColorDataSourceId)
            ->setExpandAnswers($expandAnswers)
            ->setExpandLoopReferenceAnswers($expandLoopReferenceAnswers)
            ->setExpandLoopRefOption($expandLoopRefOption)
            ->setProjectSpecific($projectSpecific)
            ->setLanguages($languages);
    }
    /**
     * Get IncludeAllLanguages value
     * @return bool
     */
    public function getIncludeAllLanguages()
    {
        return $this->IncludeAllLanguages;
    }
    /**
     * Set IncludeAllLanguages value
     * @param bool $includeAllLanguages
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public function setIncludeAllLanguages($includeAllLanguages = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeAllLanguages) && !is_bool($includeAllLanguages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeAllLanguages)), __LINE__);
        }
        $this->IncludeAllLanguages = $includeAllLanguages;
        return $this;
    }
    /**
     * Get OverrideTextDataSourceId value
     * @return string
     */
    public function getOverrideTextDataSourceId()
    {
        return $this->OverrideTextDataSourceId;
    }
    /**
     * Set OverrideTextDataSourceId value
     * @param string $overrideTextDataSourceId
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public function setOverrideTextDataSourceId($overrideTextDataSourceId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($overrideTextDataSourceId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $overrideTextDataSourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}", "%s" given', var_export($overrideTextDataSourceId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($overrideTextDataSourceId) && !is_string($overrideTextDataSourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($overrideTextDataSourceId)), __LINE__);
        }
        $this->OverrideTextDataSourceId = $overrideTextDataSourceId;
        return $this;
    }
    /**
     * Get AnswerColorDataSourceId value
     * @return string
     */
    public function getAnswerColorDataSourceId()
    {
        return $this->AnswerColorDataSourceId;
    }
    /**
     * Set AnswerColorDataSourceId value
     * @param string $answerColorDataSourceId
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public function setAnswerColorDataSourceId($answerColorDataSourceId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($answerColorDataSourceId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $answerColorDataSourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}", "%s" given', var_export($answerColorDataSourceId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($answerColorDataSourceId) && !is_string($answerColorDataSourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerColorDataSourceId)), __LINE__);
        }
        $this->AnswerColorDataSourceId = $answerColorDataSourceId;
        return $this;
    }
    /**
     * Get ExpandAnswers value
     * @return bool
     */
    public function getExpandAnswers()
    {
        return $this->ExpandAnswers;
    }
    /**
     * Set ExpandAnswers value
     * @param bool $expandAnswers
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public function setExpandAnswers($expandAnswers = null)
    {
        // validation for constraint: boolean
        if (!is_null($expandAnswers) && !is_bool($expandAnswers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expandAnswers)), __LINE__);
        }
        $this->ExpandAnswers = $expandAnswers;
        return $this;
    }
    /**
     * Get ExpandLoopReferenceAnswers value
     * @return bool
     */
    public function getExpandLoopReferenceAnswers()
    {
        return $this->ExpandLoopReferenceAnswers;
    }
    /**
     * Set ExpandLoopReferenceAnswers value
     * @param bool $expandLoopReferenceAnswers
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public function setExpandLoopReferenceAnswers($expandLoopReferenceAnswers = null)
    {
        // validation for constraint: boolean
        if (!is_null($expandLoopReferenceAnswers) && !is_bool($expandLoopReferenceAnswers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expandLoopReferenceAnswers)), __LINE__);
        }
        $this->ExpandLoopReferenceAnswers = $expandLoopReferenceAnswers;
        return $this;
    }
    /**
     * Get ExpandLoopRefOption value
     * @return string
     */
    public function getExpandLoopRefOption()
    {
        return $this->ExpandLoopRefOption;
    }
    /**
     * Set ExpandLoopRefOption value
     * @uses \Confirmit\Authoring\EnumType\ExpandLoopReferenceOption::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\ExpandLoopReferenceOption::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $expandLoopRefOption
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public function setExpandLoopRefOption($expandLoopRefOption = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\ExpandLoopReferenceOption::valueIsValid($expandLoopRefOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $expandLoopRefOption, implode(', ', \Confirmit\Authoring\EnumType\ExpandLoopReferenceOption::getValidValues())), __LINE__);
        }
        $this->ExpandLoopRefOption = $expandLoopRefOption;
        return $this;
    }
    /**
     * Get ProjectSpecific value
     * @return bool
     */
    public function getProjectSpecific()
    {
        return $this->ProjectSpecific;
    }
    /**
     * Set ProjectSpecific value
     * @param bool $projectSpecific
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public function setProjectSpecific($projectSpecific = null)
    {
        // validation for constraint: boolean
        if (!is_null($projectSpecific) && !is_bool($projectSpecific)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($projectSpecific)), __LINE__);
        }
        $this->ProjectSpecific = $projectSpecific;
        return $this;
    }
    /**
     * Get Languages value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfInt|null
     */
    public function getLanguages()
    {
        return $this->Languages;
    }
    /**
     * Set Languages value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfInt $languages
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public function setLanguages(\Confirmit\Authoring\ArrayType\ArrayOfInt $languages = null)
    {
        $this->Languages = $languages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple
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
