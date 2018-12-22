<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Loop StructType
 * @subpackage Structs
 */
class Loop extends QuestionnaireNode
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
     * The ExternalLookupType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ExternalLookupType;
    /**
     * The FieldWidth
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $FieldWidth;
    /**
     * The AnswerlistOrder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerlistOrder;
    /**
     * The Randomize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Randomize;
    /**
     * The ProgressBarWeight
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ProgressBarWeight;
    /**
     * The ExcludeTranslation
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ExcludeTranslation;
    /**
     * The AnswerListType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerListType;
    /**
     * The ReadOnly
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReadOnly;
    /**
     * The LoopMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice2
     */
    public $LoopMembers;
    /**
     * The Nodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice14
     */
    public $Nodes;
    /**
     * The Titles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7
     */
    public $Titles;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Hierarchy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\Hierarchy
     */
    public $Hierarchy;
    /**
     * The CustomTable
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\CustomTable
     */
    public $CustomTable;
    /**
     * The PrecodeMask
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrecodeMask;
    /**
     * The PrecodeMaskPredefinedScript
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\PredefinedScriptBase
     */
    public $PrecodeMaskPredefinedScript;
    /**
     * The TranslationStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public $TranslationStatuses;
    /**
     * The PersistentObjectId
     * @var string
     */
    public $PersistentObjectId;
    /**
     * Constructor method for Loop
     * @uses Loop::setUsePredefinedScript()
     * @uses Loop::setExternalLookupType()
     * @uses Loop::setFieldWidth()
     * @uses Loop::setAnswerlistOrder()
     * @uses Loop::setRandomize()
     * @uses Loop::setProgressBarWeight()
     * @uses Loop::setExcludeTranslation()
     * @uses Loop::setAnswerListType()
     * @uses Loop::setReadOnly()
     * @uses Loop::setLoopMembers()
     * @uses Loop::setNodes()
     * @uses Loop::setTitles()
     * @uses Loop::setName()
     * @uses Loop::setHierarchy()
     * @uses Loop::setCustomTable()
     * @uses Loop::setPrecodeMask()
     * @uses Loop::setPrecodeMaskPredefinedScript()
     * @uses Loop::setTranslationStatuses()
     * @uses Loop::setPersistentObjectId()
     * @param bool $usePredefinedScript
     * @param string $externalLookupType
     * @param int $fieldWidth
     * @param string $answerlistOrder
     * @param bool $randomize
     * @param int $progressBarWeight
     * @param bool $excludeTranslation
     * @param string $answerListType
     * @param bool $readOnly
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice2 $loopMembers
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice14 $nodes
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles
     * @param string $name
     * @param \Confirmit\Authoring\StructType\Hierarchy $hierarchy
     * @param \Confirmit\Authoring\StructType\CustomTable $customTable
     * @param string $precodeMask
     * @param \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     * @param string $persistentObjectId
     */
    public function __construct($usePredefinedScript = null, $externalLookupType = null, $fieldWidth = null, $answerlistOrder = null, $randomize = null, $progressBarWeight = null, $excludeTranslation = null, $answerListType = null, $readOnly = null, \Confirmit\Authoring\StructType\ArrayOfChoice2 $loopMembers = null, \Confirmit\Authoring\StructType\ArrayOfChoice14 $nodes = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles = null, $name = null, \Confirmit\Authoring\StructType\Hierarchy $hierarchy = null, \Confirmit\Authoring\StructType\CustomTable $customTable = null, $precodeMask = null, \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null, \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null, $persistentObjectId = null)
    {
        $this
            ->setUsePredefinedScript($usePredefinedScript)
            ->setExternalLookupType($externalLookupType)
            ->setFieldWidth($fieldWidth)
            ->setAnswerlistOrder($answerlistOrder)
            ->setRandomize($randomize)
            ->setProgressBarWeight($progressBarWeight)
            ->setExcludeTranslation($excludeTranslation)
            ->setAnswerListType($answerListType)
            ->setReadOnly($readOnly)
            ->setLoopMembers($loopMembers)
            ->setNodes($nodes)
            ->setTitles($titles)
            ->setName($name)
            ->setHierarchy($hierarchy)
            ->setCustomTable($customTable)
            ->setPrecodeMask($precodeMask)
            ->setPrecodeMaskPredefinedScript($precodeMaskPredefinedScript)
            ->setTranslationStatuses($translationStatuses)
            ->setPersistentObjectId($persistentObjectId);
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
     * @return \Confirmit\Authoring\StructType\Loop
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
     * Get ExternalLookupType value
     * @return string
     */
    public function getExternalLookupType()
    {
        return $this->ExternalLookupType;
    }
    /**
     * Set ExternalLookupType value
     * @uses \Confirmit\Authoring\EnumType\ExternalLookupType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\ExternalLookupType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $externalLookupType
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setExternalLookupType($externalLookupType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\ExternalLookupType::valueIsValid($externalLookupType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $externalLookupType, implode(', ', \Confirmit\Authoring\EnumType\ExternalLookupType::getValidValues())), __LINE__);
        }
        $this->ExternalLookupType = $externalLookupType;
        return $this;
    }
    /**
     * Get FieldWidth value
     * @return int
     */
    public function getFieldWidth()
    {
        return $this->FieldWidth;
    }
    /**
     * Set FieldWidth value
     * @param int $fieldWidth
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setFieldWidth($fieldWidth = null)
    {
        // validation for constraint: int
        if (!is_null($fieldWidth) && !is_numeric($fieldWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fieldWidth)), __LINE__);
        }
        $this->FieldWidth = $fieldWidth;
        return $this;
    }
    /**
     * Get AnswerlistOrder value
     * @return string
     */
    public function getAnswerlistOrder()
    {
        return $this->AnswerlistOrder;
    }
    /**
     * Set AnswerlistOrder value
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $answerlistOrder
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setAnswerlistOrder($answerlistOrder = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid($answerlistOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $answerlistOrder, implode(', ', \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues())), __LINE__);
        }
        $this->AnswerlistOrder = $answerlistOrder;
        return $this;
    }
    /**
     * Get Randomize value
     * @return bool
     */
    public function getRandomize()
    {
        return $this->Randomize;
    }
    /**
     * Set Randomize value
     * @param bool $randomize
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setRandomize($randomize = null)
    {
        // validation for constraint: boolean
        if (!is_null($randomize) && !is_bool($randomize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($randomize)), __LINE__);
        }
        $this->Randomize = $randomize;
        return $this;
    }
    /**
     * Get ProgressBarWeight value
     * @return int
     */
    public function getProgressBarWeight()
    {
        return $this->ProgressBarWeight;
    }
    /**
     * Set ProgressBarWeight value
     * @param int $progressBarWeight
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setProgressBarWeight($progressBarWeight = null)
    {
        // validation for constraint: int
        if (!is_null($progressBarWeight) && !is_numeric($progressBarWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($progressBarWeight)), __LINE__);
        }
        $this->ProgressBarWeight = $progressBarWeight;
        return $this;
    }
    /**
     * Get ExcludeTranslation value
     * @return bool
     */
    public function getExcludeTranslation()
    {
        return $this->ExcludeTranslation;
    }
    /**
     * Set ExcludeTranslation value
     * @param bool $excludeTranslation
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setExcludeTranslation($excludeTranslation = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeTranslation) && !is_bool($excludeTranslation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($excludeTranslation)), __LINE__);
        }
        $this->ExcludeTranslation = $excludeTranslation;
        return $this;
    }
    /**
     * Get AnswerListType value
     * @return string
     */
    public function getAnswerListType()
    {
        return $this->AnswerListType;
    }
    /**
     * Set AnswerListType value
     * @uses \Confirmit\Authoring\EnumType\AnswerListType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\AnswerListType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $answerListType
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setAnswerListType($answerListType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\AnswerListType::valueIsValid($answerListType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $answerListType, implode(', ', \Confirmit\Authoring\EnumType\AnswerListType::getValidValues())), __LINE__);
        }
        $this->AnswerListType = $answerListType;
        return $this;
    }
    /**
     * Get ReadOnly value
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param bool $readOnly
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        return $this;
    }
    /**
     * Get LoopMembers value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice2|null
     */
    public function getLoopMembers()
    {
        return $this->LoopMembers;
    }
    /**
     * Set LoopMembers value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice2 $loopMembers
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setLoopMembers(\Confirmit\Authoring\StructType\ArrayOfChoice2 $loopMembers = null)
    {
        $this->LoopMembers = $loopMembers;
        return $this;
    }
    /**
     * Get Nodes value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice14|null
     */
    public function getNodes()
    {
        return $this->Nodes;
    }
    /**
     * Set Nodes value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice14 $nodes
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setNodes(\Confirmit\Authoring\StructType\ArrayOfChoice14 $nodes = null)
    {
        $this->Nodes = $nodes;
        return $this;
    }
    /**
     * Get Titles value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7|null
     */
    public function getTitles()
    {
        return $this->Titles;
    }
    /**
     * Set Titles value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setTitles(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles = null)
    {
        $this->Titles = $titles;
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
     * @return \Confirmit\Authoring\StructType\Loop
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
     * Get Hierarchy value
     * @return \Confirmit\Authoring\StructType\Hierarchy|null
     */
    public function getHierarchy()
    {
        return $this->Hierarchy;
    }
    /**
     * Set Hierarchy value
     * @param \Confirmit\Authoring\StructType\Hierarchy $hierarchy
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setHierarchy(\Confirmit\Authoring\StructType\Hierarchy $hierarchy = null)
    {
        $this->Hierarchy = $hierarchy;
        return $this;
    }
    /**
     * Get CustomTable value
     * @return \Confirmit\Authoring\StructType\CustomTable|null
     */
    public function getCustomTable()
    {
        return $this->CustomTable;
    }
    /**
     * Set CustomTable value
     * @param \Confirmit\Authoring\StructType\CustomTable $customTable
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setCustomTable(\Confirmit\Authoring\StructType\CustomTable $customTable = null)
    {
        $this->CustomTable = $customTable;
        return $this;
    }
    /**
     * Get PrecodeMask value
     * @return string|null
     */
    public function getPrecodeMask()
    {
        return $this->PrecodeMask;
    }
    /**
     * Set PrecodeMask value
     * @param string $precodeMask
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setPrecodeMask($precodeMask = null)
    {
        // validation for constraint: string
        if (!is_null($precodeMask) && !is_string($precodeMask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($precodeMask)), __LINE__);
        }
        $this->PrecodeMask = $precodeMask;
        return $this;
    }
    /**
     * Get PrecodeMaskPredefinedScript value
     * @return \Confirmit\Authoring\StructType\PredefinedScriptBase|null
     */
    public function getPrecodeMaskPredefinedScript()
    {
        return $this->PrecodeMaskPredefinedScript;
    }
    /**
     * Set PrecodeMaskPredefinedScript value
     * @param \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setPrecodeMaskPredefinedScript(\Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null)
    {
        $this->PrecodeMaskPredefinedScript = $precodeMaskPredefinedScript;
        return $this;
    }
    /**
     * Get TranslationStatuses value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus|null
     */
    public function getTranslationStatuses()
    {
        return $this->TranslationStatuses;
    }
    /**
     * Set TranslationStatuses value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setTranslationStatuses(\Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this->TranslationStatuses = $translationStatuses;
        return $this;
    }
    /**
     * Get PersistentObjectId value
     * @return string|null
     */
    public function getPersistentObjectId()
    {
        return $this->PersistentObjectId;
    }
    /**
     * Set PersistentObjectId value
     * @param string $persistentObjectId
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function setPersistentObjectId($persistentObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($persistentObjectId) && !is_string($persistentObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($persistentObjectId)), __LINE__);
        }
        $this->PersistentObjectId = $persistentObjectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Loop
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
