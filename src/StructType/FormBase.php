<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormBase StructType
 * @subpackage Structs
 */
abstract class FormBase extends QuestionnaireNodeFlexSupport
{
    /**
     * The NotRequired
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $NotRequired;
    /**
     * The FieldWidth
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $FieldWidth;
    /**
     * The Disabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Disabled;
    /**
     * The ExcludeTranslation
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ExcludeTranslation;
    /**
     * The VariableType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $VariableType;
    /**
     * The DataWriteAccessLevel
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $DataWriteAccessLevel;
    /**
     * The HasLoopLevelReference
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HasLoopLevelReference;
    /**
     * The DbType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DbType;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The FormTexts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfFormText
     */
    public $FormTexts;
    /**
     * The TranslationStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public $TranslationStatuses;
    /**
     * The QuestionTriggers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfString2
     */
    public $QuestionTriggers;
    /**
     * The StartupScript
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartupScript;
    /**
     * The QuestionMask
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QuestionMask;
    /**
     * The QuestionLayoutName
     * @var string
     */
    public $QuestionLayoutName;
    /**
     * The LoopLevelId
     * @var string
     */
    public $LoopLevelId;
    /**
     * The PersistentObjectId
     * @var string
     */
    public $PersistentObjectId;
    /**
     * The QuestionCategory
     * @var string
     */
    public $QuestionCategory;
    /**
     * The DefaultValue
     * @var string
     */
    public $DefaultValue;
    /**
     * Constructor method for FormBase
     * @uses FormBase::setNotRequired()
     * @uses FormBase::setFieldWidth()
     * @uses FormBase::setDisabled()
     * @uses FormBase::setExcludeTranslation()
     * @uses FormBase::setVariableType()
     * @uses FormBase::setDataWriteAccessLevel()
     * @uses FormBase::setHasLoopLevelReference()
     * @uses FormBase::setDbType()
     * @uses FormBase::setName()
     * @uses FormBase::setFormTexts()
     * @uses FormBase::setTranslationStatuses()
     * @uses FormBase::setQuestionTriggers()
     * @uses FormBase::setStartupScript()
     * @uses FormBase::setQuestionMask()
     * @uses FormBase::setQuestionLayoutName()
     * @uses FormBase::setLoopLevelId()
     * @uses FormBase::setPersistentObjectId()
     * @uses FormBase::setQuestionCategory()
     * @uses FormBase::setDefaultValue()
     * @param bool $notRequired
     * @param int $fieldWidth
     * @param bool $disabled
     * @param bool $excludeTranslation
     * @param string $variableType
     * @param int $dataWriteAccessLevel
     * @param bool $hasLoopLevelReference
     * @param string $dbType
     * @param string $name
     * @param \Confirmit\Authoring\ArrayType\ArrayOfFormText $formTexts
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString2 $questionTriggers
     * @param string $startupScript
     * @param string $questionMask
     * @param string $questionLayoutName
     * @param string $loopLevelId
     * @param string $persistentObjectId
     * @param string $questionCategory
     * @param string $defaultValue
     */
    public function __construct($notRequired = null, $fieldWidth = null, $disabled = null, $excludeTranslation = null, $variableType = null, $dataWriteAccessLevel = null, $hasLoopLevelReference = null, $dbType = null, $name = null, \Confirmit\Authoring\ArrayType\ArrayOfFormText $formTexts = null, \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null, \Confirmit\Authoring\ArrayType\ArrayOfString2 $questionTriggers = null, $startupScript = null, $questionMask = null, $questionLayoutName = null, $loopLevelId = null, $persistentObjectId = null, $questionCategory = null, $defaultValue = null)
    {
        $this
            ->setNotRequired($notRequired)
            ->setFieldWidth($fieldWidth)
            ->setDisabled($disabled)
            ->setExcludeTranslation($excludeTranslation)
            ->setVariableType($variableType)
            ->setDataWriteAccessLevel($dataWriteAccessLevel)
            ->setHasLoopLevelReference($hasLoopLevelReference)
            ->setDbType($dbType)
            ->setName($name)
            ->setFormTexts($formTexts)
            ->setTranslationStatuses($translationStatuses)
            ->setQuestionTriggers($questionTriggers)
            ->setStartupScript($startupScript)
            ->setQuestionMask($questionMask)
            ->setQuestionLayoutName($questionLayoutName)
            ->setLoopLevelId($loopLevelId)
            ->setPersistentObjectId($persistentObjectId)
            ->setQuestionCategory($questionCategory)
            ->setDefaultValue($defaultValue);
    }
    /**
     * Get NotRequired value
     * @return bool
     */
    public function getNotRequired()
    {
        return $this->NotRequired;
    }
    /**
     * Set NotRequired value
     * @param bool $notRequired
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setNotRequired($notRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($notRequired) && !is_bool($notRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($notRequired)), __LINE__);
        }
        $this->NotRequired = $notRequired;
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
     * @return \Confirmit\Authoring\StructType\FormBase
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
     * Get Disabled value
     * @return bool
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }
    /**
     * Set Disabled value
     * @param bool $disabled
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setDisabled($disabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($disabled) && !is_bool($disabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disabled)), __LINE__);
        }
        $this->Disabled = $disabled;
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
     * @return \Confirmit\Authoring\StructType\FormBase
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
     * Get VariableType value
     * @return string
     */
    public function getVariableType()
    {
        return $this->VariableType;
    }
    /**
     * Set VariableType value
     * @uses \Confirmit\Authoring\EnumType\VariableDataType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\VariableDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variableType
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setVariableType($variableType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\VariableDataType::valueIsValid($variableType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variableType, implode(', ', \Confirmit\Authoring\EnumType\VariableDataType::getValidValues())), __LINE__);
        }
        $this->VariableType = $variableType;
        return $this;
    }
    /**
     * Get DataWriteAccessLevel value
     * @return int
     */
    public function getDataWriteAccessLevel()
    {
        return $this->DataWriteAccessLevel;
    }
    /**
     * Set DataWriteAccessLevel value
     * @param int $dataWriteAccessLevel
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setDataWriteAccessLevel($dataWriteAccessLevel = null)
    {
        // validation for constraint: int
        if (!is_null($dataWriteAccessLevel) && !is_numeric($dataWriteAccessLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataWriteAccessLevel)), __LINE__);
        }
        $this->DataWriteAccessLevel = $dataWriteAccessLevel;
        return $this;
    }
    /**
     * Get HasLoopLevelReference value
     * @return bool
     */
    public function getHasLoopLevelReference()
    {
        return $this->HasLoopLevelReference;
    }
    /**
     * Set HasLoopLevelReference value
     * @param bool $hasLoopLevelReference
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setHasLoopLevelReference($hasLoopLevelReference = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasLoopLevelReference) && !is_bool($hasLoopLevelReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasLoopLevelReference)), __LINE__);
        }
        $this->HasLoopLevelReference = $hasLoopLevelReference;
        return $this;
    }
    /**
     * Get DbType value
     * @return string|null
     */
    public function getDbType()
    {
        return $this->DbType;
    }
    /**
     * Set DbType value
     * @param string $dbType
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setDbType($dbType = null)
    {
        // validation for constraint: string
        if (!is_null($dbType) && !is_string($dbType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dbType)), __LINE__);
        }
        $this->DbType = $dbType;
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
     * @return \Confirmit\Authoring\StructType\FormBase
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
     * Get FormTexts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfFormText|null
     */
    public function getFormTexts()
    {
        return $this->FormTexts;
    }
    /**
     * Set FormTexts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfFormText $formTexts
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setFormTexts(\Confirmit\Authoring\ArrayType\ArrayOfFormText $formTexts = null)
    {
        $this->FormTexts = $formTexts;
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
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setTranslationStatuses(\Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this->TranslationStatuses = $translationStatuses;
        return $this;
    }
    /**
     * Get QuestionTriggers value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString2|null
     */
    public function getQuestionTriggers()
    {
        return $this->QuestionTriggers;
    }
    /**
     * Set QuestionTriggers value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString2 $questionTriggers
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setQuestionTriggers(\Confirmit\Authoring\ArrayType\ArrayOfString2 $questionTriggers = null)
    {
        $this->QuestionTriggers = $questionTriggers;
        return $this;
    }
    /**
     * Get StartupScript value
     * @return string|null
     */
    public function getStartupScript()
    {
        return $this->StartupScript;
    }
    /**
     * Set StartupScript value
     * @param string $startupScript
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setStartupScript($startupScript = null)
    {
        // validation for constraint: string
        if (!is_null($startupScript) && !is_string($startupScript)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startupScript)), __LINE__);
        }
        $this->StartupScript = $startupScript;
        return $this;
    }
    /**
     * Get QuestionMask value
     * @return string|null
     */
    public function getQuestionMask()
    {
        return $this->QuestionMask;
    }
    /**
     * Set QuestionMask value
     * @param string $questionMask
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setQuestionMask($questionMask = null)
    {
        // validation for constraint: string
        if (!is_null($questionMask) && !is_string($questionMask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionMask)), __LINE__);
        }
        $this->QuestionMask = $questionMask;
        return $this;
    }
    /**
     * Get QuestionLayoutName value
     * @return string|null
     */
    public function getQuestionLayoutName()
    {
        return $this->QuestionLayoutName;
    }
    /**
     * Set QuestionLayoutName value
     * @param string $questionLayoutName
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setQuestionLayoutName($questionLayoutName = null)
    {
        // validation for constraint: string
        if (!is_null($questionLayoutName) && !is_string($questionLayoutName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionLayoutName)), __LINE__);
        }
        $this->QuestionLayoutName = $questionLayoutName;
        return $this;
    }
    /**
     * Get LoopLevelId value
     * @return string|null
     */
    public function getLoopLevelId()
    {
        return $this->LoopLevelId;
    }
    /**
     * Set LoopLevelId value
     * @param string $loopLevelId
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setLoopLevelId($loopLevelId = null)
    {
        // validation for constraint: string
        if (!is_null($loopLevelId) && !is_string($loopLevelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loopLevelId)), __LINE__);
        }
        $this->LoopLevelId = $loopLevelId;
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
     * @return \Confirmit\Authoring\StructType\FormBase
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
     * Get QuestionCategory value
     * @return string|null
     */
    public function getQuestionCategory()
    {
        return $this->QuestionCategory;
    }
    /**
     * Set QuestionCategory value
     * @param string $questionCategory
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setQuestionCategory($questionCategory = null)
    {
        // validation for constraint: string
        if (!is_null($questionCategory) && !is_string($questionCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionCategory)), __LINE__);
        }
        $this->QuestionCategory = $questionCategory;
        return $this;
    }
    /**
     * Get DefaultValue value
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }
    /**
     * Set DefaultValue value
     * @param string $defaultValue
     * @return \Confirmit\Authoring\StructType\FormBase
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultValue)), __LINE__);
        }
        $this->DefaultValue = $defaultValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\FormBase
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
