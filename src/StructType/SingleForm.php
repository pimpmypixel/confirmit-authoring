<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleForm StructType
 * @subpackage Structs
 */
class SingleForm extends QuestionFormBase
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
     * The HasWeights
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $HasWeights;
    /**
     * The IsBoolean
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsBoolean;
    /**
     * The DBStorageType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DBStorageType;
    /**
     * The Characteristic
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Characteristic;
    /**
     * The OtherColumns
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $OtherColumns;
    /**
     * The OtherRows
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $OtherRows;
    /**
     * The Indexed
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Indexed;
    /**
     * The UseAnswerImages
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UseAnswerImages;
    /**
     * The ListRows
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ListRows;
    /**
     * The ListColumns
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ListColumns;
    /**
     * The Dropdown
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Dropdown;
    /**
     * The CustomDropdownTitle
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $CustomDropdownTitle;
    /**
     * The ReplicateDataForMultimode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReplicateDataForMultimode;
    /**
     * The AnswerButtonsMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerButtonsMode;
    /**
     * The KeepPos
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $KeepPos;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Custom;
    /**
     * The ReadOnly
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReadOnly;
    /**
     * The AnswerlistOrder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerlistOrder;
    /**
     * The SubHeaderOrder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SubHeaderOrder;
    /**
     * The Randomize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Randomize;
    /**
     * The AutoCheckOther
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AutoCheckOther;
    /**
     * The AnswerListType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerListType;
    /**
     * The ForceLeafSelection
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ForceLeafSelection;
    /**
     * The HierarchyMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $HierarchyMode;
    /**
     * The AnswerImageModus
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $AnswerImageModus;
    /**
     * The Slider
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Slider;
    /**
     * The IsCodingField
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsCodingField;
    /**
     * The HorizontalRatingScale
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HorizontalRatingScale;
    /**
     * The Answers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice3
     */
    public $Answers;
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
     * The ColumnMask
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ColumnMask;
    /**
     * The AnswerImageDefault
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageDefault;
    /**
     * The AnswerImageOver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageOver;
    /**
     * The AnswerImageSelected
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageSelected;
    /**
     * The AnswerImageHeight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageHeight;
    /**
     * The AnswerImageWidth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageWidth;
    /**
     * The SliderColor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SliderColor;
    /**
     * The ImageWidth
     * @var string
     */
    public $ImageWidth;
    /**
     * The ImageHeight
     * @var string
     */
    public $ImageHeight;
    /**
     * The DefaultAnswerPrecode
     * @var string
     */
    public $DefaultAnswerPrecode;
    /**
     * The RefusedAnswerPrecode
     * @var string
     */
    public $RefusedAnswerPrecode;
    /**
     * The OpenTextCodingField
     * @var string
     */
    public $OpenTextCodingField;
    /**
     * Constructor method for SingleForm
     * @uses SingleForm::setUsePredefinedScript()
     * @uses SingleForm::setHasWeights()
     * @uses SingleForm::setIsBoolean()
     * @uses SingleForm::setDBStorageType()
     * @uses SingleForm::setCharacteristic()
     * @uses SingleForm::setOtherColumns()
     * @uses SingleForm::setOtherRows()
     * @uses SingleForm::setIndexed()
     * @uses SingleForm::setUseAnswerImages()
     * @uses SingleForm::setListRows()
     * @uses SingleForm::setListColumns()
     * @uses SingleForm::setDropdown()
     * @uses SingleForm::setCustomDropdownTitle()
     * @uses SingleForm::setReplicateDataForMultimode()
     * @uses SingleForm::setAnswerButtonsMode()
     * @uses SingleForm::setKeepPos()
     * @uses SingleForm::setCustom()
     * @uses SingleForm::setReadOnly()
     * @uses SingleForm::setAnswerlistOrder()
     * @uses SingleForm::setSubHeaderOrder()
     * @uses SingleForm::setRandomize()
     * @uses SingleForm::setAutoCheckOther()
     * @uses SingleForm::setAnswerListType()
     * @uses SingleForm::setForceLeafSelection()
     * @uses SingleForm::setHierarchyMode()
     * @uses SingleForm::setAnswerImageModus()
     * @uses SingleForm::setSlider()
     * @uses SingleForm::setIsCodingField()
     * @uses SingleForm::setHorizontalRatingScale()
     * @uses SingleForm::setAnswers()
     * @uses SingleForm::setHierarchy()
     * @uses SingleForm::setCustomTable()
     * @uses SingleForm::setPrecodeMask()
     * @uses SingleForm::setPrecodeMaskPredefinedScript()
     * @uses SingleForm::setColumnMask()
     * @uses SingleForm::setAnswerImageDefault()
     * @uses SingleForm::setAnswerImageOver()
     * @uses SingleForm::setAnswerImageSelected()
     * @uses SingleForm::setAnswerImageHeight()
     * @uses SingleForm::setAnswerImageWidth()
     * @uses SingleForm::setSliderColor()
     * @uses SingleForm::setImageWidth()
     * @uses SingleForm::setImageHeight()
     * @uses SingleForm::setDefaultAnswerPrecode()
     * @uses SingleForm::setRefusedAnswerPrecode()
     * @uses SingleForm::setOpenTextCodingField()
     * @param bool $usePredefinedScript
     * @param bool $hasWeights
     * @param bool $isBoolean
     * @param string $dBStorageType
     * @param int $characteristic
     * @param int $otherColumns
     * @param int $otherRows
     * @param bool $indexed
     * @param bool $useAnswerImages
     * @param int $listRows
     * @param int $listColumns
     * @param bool $dropdown
     * @param bool $customDropdownTitle
     * @param bool $replicateDataForMultimode
     * @param string $answerButtonsMode
     * @param bool $keepPos
     * @param bool $custom
     * @param bool $readOnly
     * @param string $answerlistOrder
     * @param string $subHeaderOrder
     * @param bool $randomize
     * @param bool $autoCheckOther
     * @param string $answerListType
     * @param bool $forceLeafSelection
     * @param string $hierarchyMode
     * @param int $answerImageModus
     * @param bool $slider
     * @param bool $isCodingField
     * @param bool $horizontalRatingScale
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice3 $answers
     * @param \Confirmit\Authoring\StructType\Hierarchy $hierarchy
     * @param \Confirmit\Authoring\StructType\CustomTable $customTable
     * @param string $precodeMask
     * @param \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript
     * @param string $columnMask
     * @param string $answerImageDefault
     * @param string $answerImageOver
     * @param string $answerImageSelected
     * @param string $answerImageHeight
     * @param string $answerImageWidth
     * @param string $sliderColor
     * @param string $imageWidth
     * @param string $imageHeight
     * @param string $defaultAnswerPrecode
     * @param string $refusedAnswerPrecode
     * @param string $openTextCodingField
     */
    public function __construct($usePredefinedScript = null, $hasWeights = null, $isBoolean = null, $dBStorageType = null, $characteristic = null, $otherColumns = null, $otherRows = null, $indexed = null, $useAnswerImages = null, $listRows = null, $listColumns = null, $dropdown = null, $customDropdownTitle = null, $replicateDataForMultimode = null, $answerButtonsMode = null, $keepPos = null, $custom = null, $readOnly = null, $answerlistOrder = null, $subHeaderOrder = null, $randomize = null, $autoCheckOther = null, $answerListType = null, $forceLeafSelection = null, $hierarchyMode = null, $answerImageModus = null, $slider = null, $isCodingField = null, $horizontalRatingScale = null, \Confirmit\Authoring\StructType\ArrayOfChoice3 $answers = null, \Confirmit\Authoring\StructType\Hierarchy $hierarchy = null, \Confirmit\Authoring\StructType\CustomTable $customTable = null, $precodeMask = null, \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null, $columnMask = null, $answerImageDefault = null, $answerImageOver = null, $answerImageSelected = null, $answerImageHeight = null, $answerImageWidth = null, $sliderColor = null, $imageWidth = null, $imageHeight = null, $defaultAnswerPrecode = null, $refusedAnswerPrecode = null, $openTextCodingField = null)
    {
        $this
            ->setUsePredefinedScript($usePredefinedScript)
            ->setHasWeights($hasWeights)
            ->setIsBoolean($isBoolean)
            ->setDBStorageType($dBStorageType)
            ->setCharacteristic($characteristic)
            ->setOtherColumns($otherColumns)
            ->setOtherRows($otherRows)
            ->setIndexed($indexed)
            ->setUseAnswerImages($useAnswerImages)
            ->setListRows($listRows)
            ->setListColumns($listColumns)
            ->setDropdown($dropdown)
            ->setCustomDropdownTitle($customDropdownTitle)
            ->setReplicateDataForMultimode($replicateDataForMultimode)
            ->setAnswerButtonsMode($answerButtonsMode)
            ->setKeepPos($keepPos)
            ->setCustom($custom)
            ->setReadOnly($readOnly)
            ->setAnswerlistOrder($answerlistOrder)
            ->setSubHeaderOrder($subHeaderOrder)
            ->setRandomize($randomize)
            ->setAutoCheckOther($autoCheckOther)
            ->setAnswerListType($answerListType)
            ->setForceLeafSelection($forceLeafSelection)
            ->setHierarchyMode($hierarchyMode)
            ->setAnswerImageModus($answerImageModus)
            ->setSlider($slider)
            ->setIsCodingField($isCodingField)
            ->setHorizontalRatingScale($horizontalRatingScale)
            ->setAnswers($answers)
            ->setHierarchy($hierarchy)
            ->setCustomTable($customTable)
            ->setPrecodeMask($precodeMask)
            ->setPrecodeMaskPredefinedScript($precodeMaskPredefinedScript)
            ->setColumnMask($columnMask)
            ->setAnswerImageDefault($answerImageDefault)
            ->setAnswerImageOver($answerImageOver)
            ->setAnswerImageSelected($answerImageSelected)
            ->setAnswerImageHeight($answerImageHeight)
            ->setAnswerImageWidth($answerImageWidth)
            ->setSliderColor($sliderColor)
            ->setImageWidth($imageWidth)
            ->setImageHeight($imageHeight)
            ->setDefaultAnswerPrecode($defaultAnswerPrecode)
            ->setRefusedAnswerPrecode($refusedAnswerPrecode)
            ->setOpenTextCodingField($openTextCodingField);
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
     * @return \Confirmit\Authoring\StructType\SingleForm
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
     * Get HasWeights value
     * @return bool
     */
    public function getHasWeights()
    {
        return $this->HasWeights;
    }
    /**
     * Set HasWeights value
     * @param bool $hasWeights
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setHasWeights($hasWeights = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasWeights) && !is_bool($hasWeights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasWeights)), __LINE__);
        }
        $this->HasWeights = $hasWeights;
        return $this;
    }
    /**
     * Get IsBoolean value
     * @return bool
     */
    public function getIsBoolean()
    {
        return $this->IsBoolean;
    }
    /**
     * Set IsBoolean value
     * @param bool $isBoolean
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setIsBoolean($isBoolean = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBoolean) && !is_bool($isBoolean)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBoolean)), __LINE__);
        }
        $this->IsBoolean = $isBoolean;
        return $this;
    }
    /**
     * Get DBStorageType value
     * @return string
     */
    public function getDBStorageType()
    {
        return $this->DBStorageType;
    }
    /**
     * Set DBStorageType value
     * @uses \Confirmit\Authoring\EnumType\SqlDbType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SqlDbType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dBStorageType
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setDBStorageType($dBStorageType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SqlDbType::valueIsValid($dBStorageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dBStorageType, implode(', ', \Confirmit\Authoring\EnumType\SqlDbType::getValidValues())), __LINE__);
        }
        $this->DBStorageType = $dBStorageType;
        return $this;
    }
    /**
     * Get Characteristic value
     * @return int
     */
    public function getCharacteristic()
    {
        return $this->Characteristic;
    }
    /**
     * Set Characteristic value
     * @param int $characteristic
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setCharacteristic($characteristic = null)
    {
        // validation for constraint: int
        if (!is_null($characteristic) && !is_numeric($characteristic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($characteristic)), __LINE__);
        }
        $this->Characteristic = $characteristic;
        return $this;
    }
    /**
     * Get OtherColumns value
     * @return int
     */
    public function getOtherColumns()
    {
        return $this->OtherColumns;
    }
    /**
     * Set OtherColumns value
     * @param int $otherColumns
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setOtherColumns($otherColumns = null)
    {
        // validation for constraint: int
        if (!is_null($otherColumns) && !is_numeric($otherColumns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($otherColumns)), __LINE__);
        }
        $this->OtherColumns = $otherColumns;
        return $this;
    }
    /**
     * Get OtherRows value
     * @return int
     */
    public function getOtherRows()
    {
        return $this->OtherRows;
    }
    /**
     * Set OtherRows value
     * @param int $otherRows
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setOtherRows($otherRows = null)
    {
        // validation for constraint: int
        if (!is_null($otherRows) && !is_numeric($otherRows)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($otherRows)), __LINE__);
        }
        $this->OtherRows = $otherRows;
        return $this;
    }
    /**
     * Get Indexed value
     * @return bool
     */
    public function getIndexed()
    {
        return $this->Indexed;
    }
    /**
     * Set Indexed value
     * @param bool $indexed
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setIndexed($indexed = null)
    {
        // validation for constraint: boolean
        if (!is_null($indexed) && !is_bool($indexed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indexed)), __LINE__);
        }
        $this->Indexed = $indexed;
        return $this;
    }
    /**
     * Get UseAnswerImages value
     * @return bool
     */
    public function getUseAnswerImages()
    {
        return $this->UseAnswerImages;
    }
    /**
     * Set UseAnswerImages value
     * @param bool $useAnswerImages
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setUseAnswerImages($useAnswerImages = null)
    {
        // validation for constraint: boolean
        if (!is_null($useAnswerImages) && !is_bool($useAnswerImages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useAnswerImages)), __LINE__);
        }
        $this->UseAnswerImages = $useAnswerImages;
        return $this;
    }
    /**
     * Get ListRows value
     * @return int
     */
    public function getListRows()
    {
        return $this->ListRows;
    }
    /**
     * Set ListRows value
     * @param int $listRows
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setListRows($listRows = null)
    {
        // validation for constraint: int
        if (!is_null($listRows) && !is_numeric($listRows)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listRows)), __LINE__);
        }
        $this->ListRows = $listRows;
        return $this;
    }
    /**
     * Get ListColumns value
     * @return int
     */
    public function getListColumns()
    {
        return $this->ListColumns;
    }
    /**
     * Set ListColumns value
     * @param int $listColumns
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setListColumns($listColumns = null)
    {
        // validation for constraint: int
        if (!is_null($listColumns) && !is_numeric($listColumns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listColumns)), __LINE__);
        }
        $this->ListColumns = $listColumns;
        return $this;
    }
    /**
     * Get Dropdown value
     * @return bool
     */
    public function getDropdown()
    {
        return $this->Dropdown;
    }
    /**
     * Set Dropdown value
     * @param bool $dropdown
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setDropdown($dropdown = null)
    {
        // validation for constraint: boolean
        if (!is_null($dropdown) && !is_bool($dropdown)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dropdown)), __LINE__);
        }
        $this->Dropdown = $dropdown;
        return $this;
    }
    /**
     * Get CustomDropdownTitle value
     * @return bool
     */
    public function getCustomDropdownTitle()
    {
        return $this->CustomDropdownTitle;
    }
    /**
     * Set CustomDropdownTitle value
     * @param bool $customDropdownTitle
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setCustomDropdownTitle($customDropdownTitle = null)
    {
        // validation for constraint: boolean
        if (!is_null($customDropdownTitle) && !is_bool($customDropdownTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($customDropdownTitle)), __LINE__);
        }
        $this->CustomDropdownTitle = $customDropdownTitle;
        return $this;
    }
    /**
     * Get ReplicateDataForMultimode value
     * @return bool
     */
    public function getReplicateDataForMultimode()
    {
        return $this->ReplicateDataForMultimode;
    }
    /**
     * Set ReplicateDataForMultimode value
     * @param bool $replicateDataForMultimode
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setReplicateDataForMultimode($replicateDataForMultimode = null)
    {
        // validation for constraint: boolean
        if (!is_null($replicateDataForMultimode) && !is_bool($replicateDataForMultimode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($replicateDataForMultimode)), __LINE__);
        }
        $this->ReplicateDataForMultimode = $replicateDataForMultimode;
        return $this;
    }
    /**
     * Get AnswerButtonsMode value
     * @return string
     */
    public function getAnswerButtonsMode()
    {
        return $this->AnswerButtonsMode;
    }
    /**
     * Set AnswerButtonsMode value
     * @uses \Confirmit\Authoring\EnumType\AnswerButtonsMode::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\AnswerButtonsMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $answerButtonsMode
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAnswerButtonsMode($answerButtonsMode = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\AnswerButtonsMode::valueIsValid($answerButtonsMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $answerButtonsMode, implode(', ', \Confirmit\Authoring\EnumType\AnswerButtonsMode::getValidValues())), __LINE__);
        }
        $this->AnswerButtonsMode = $answerButtonsMode;
        return $this;
    }
    /**
     * Get KeepPos value
     * @return bool
     */
    public function getKeepPos()
    {
        return $this->KeepPos;
    }
    /**
     * Set KeepPos value
     * @param bool $keepPos
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setKeepPos($keepPos = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepPos) && !is_bool($keepPos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($keepPos)), __LINE__);
        }
        $this->KeepPos = $keepPos;
        return $this;
    }
    /**
     * Get Custom value
     * @return bool
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param bool $custom
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: boolean
        if (!is_null($custom) && !is_bool($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
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
     * @return \Confirmit\Authoring\StructType\SingleForm
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
     * @return \Confirmit\Authoring\StructType\SingleForm
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
     * Get SubHeaderOrder value
     * @return string
     */
    public function getSubHeaderOrder()
    {
        return $this->SubHeaderOrder;
    }
    /**
     * Set SubHeaderOrder value
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subHeaderOrder
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setSubHeaderOrder($subHeaderOrder = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid($subHeaderOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subHeaderOrder, implode(', ', \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues())), __LINE__);
        }
        $this->SubHeaderOrder = $subHeaderOrder;
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
     * @return \Confirmit\Authoring\StructType\SingleForm
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
     * Get AutoCheckOther value
     * @return bool
     */
    public function getAutoCheckOther()
    {
        return $this->AutoCheckOther;
    }
    /**
     * Set AutoCheckOther value
     * @param bool $autoCheckOther
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAutoCheckOther($autoCheckOther = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoCheckOther) && !is_bool($autoCheckOther)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoCheckOther)), __LINE__);
        }
        $this->AutoCheckOther = $autoCheckOther;
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
     * @return \Confirmit\Authoring\StructType\SingleForm
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
     * Get ForceLeafSelection value
     * @return bool
     */
    public function getForceLeafSelection()
    {
        return $this->ForceLeafSelection;
    }
    /**
     * Set ForceLeafSelection value
     * @param bool $forceLeafSelection
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setForceLeafSelection($forceLeafSelection = null)
    {
        // validation for constraint: boolean
        if (!is_null($forceLeafSelection) && !is_bool($forceLeafSelection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forceLeafSelection)), __LINE__);
        }
        $this->ForceLeafSelection = $forceLeafSelection;
        return $this;
    }
    /**
     * Get HierarchyMode value
     * @return string
     */
    public function getHierarchyMode()
    {
        return $this->HierarchyMode;
    }
    /**
     * Set HierarchyMode value
     * @uses \Confirmit\Authoring\EnumType\HierarchyUIMode::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\HierarchyUIMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $hierarchyMode
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setHierarchyMode($hierarchyMode = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\HierarchyUIMode::valueIsValid($hierarchyMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $hierarchyMode, implode(', ', \Confirmit\Authoring\EnumType\HierarchyUIMode::getValidValues())), __LINE__);
        }
        $this->HierarchyMode = $hierarchyMode;
        return $this;
    }
    /**
     * Get AnswerImageModus value
     * @return int
     */
    public function getAnswerImageModus()
    {
        return $this->AnswerImageModus;
    }
    /**
     * Set AnswerImageModus value
     * @param int $answerImageModus
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAnswerImageModus($answerImageModus = null)
    {
        // validation for constraint: int
        if (!is_null($answerImageModus) && !is_numeric($answerImageModus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($answerImageModus)), __LINE__);
        }
        $this->AnswerImageModus = $answerImageModus;
        return $this;
    }
    /**
     * Get Slider value
     * @return bool
     */
    public function getSlider()
    {
        return $this->Slider;
    }
    /**
     * Set Slider value
     * @param bool $slider
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setSlider($slider = null)
    {
        // validation for constraint: boolean
        if (!is_null($slider) && !is_bool($slider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($slider)), __LINE__);
        }
        $this->Slider = $slider;
        return $this;
    }
    /**
     * Get IsCodingField value
     * @return bool
     */
    public function getIsCodingField()
    {
        return $this->IsCodingField;
    }
    /**
     * Set IsCodingField value
     * @param bool $isCodingField
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setIsCodingField($isCodingField = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCodingField) && !is_bool($isCodingField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCodingField)), __LINE__);
        }
        $this->IsCodingField = $isCodingField;
        return $this;
    }
    /**
     * Get HorizontalRatingScale value
     * @return bool
     */
    public function getHorizontalRatingScale()
    {
        return $this->HorizontalRatingScale;
    }
    /**
     * Set HorizontalRatingScale value
     * @param bool $horizontalRatingScale
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setHorizontalRatingScale($horizontalRatingScale = null)
    {
        // validation for constraint: boolean
        if (!is_null($horizontalRatingScale) && !is_bool($horizontalRatingScale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($horizontalRatingScale)), __LINE__);
        }
        $this->HorizontalRatingScale = $horizontalRatingScale;
        return $this;
    }
    /**
     * Get Answers value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice3|null
     */
    public function getAnswers()
    {
        return $this->Answers;
    }
    /**
     * Set Answers value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice3 $answers
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAnswers(\Confirmit\Authoring\StructType\ArrayOfChoice3 $answers = null)
    {
        $this->Answers = $answers;
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
     * @return \Confirmit\Authoring\StructType\SingleForm
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
     * @return \Confirmit\Authoring\StructType\SingleForm
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
     * @return \Confirmit\Authoring\StructType\SingleForm
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
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setPrecodeMaskPredefinedScript(\Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null)
    {
        $this->PrecodeMaskPredefinedScript = $precodeMaskPredefinedScript;
        return $this;
    }
    /**
     * Get ColumnMask value
     * @return string|null
     */
    public function getColumnMask()
    {
        return $this->ColumnMask;
    }
    /**
     * Set ColumnMask value
     * @param string $columnMask
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setColumnMask($columnMask = null)
    {
        // validation for constraint: string
        if (!is_null($columnMask) && !is_string($columnMask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($columnMask)), __LINE__);
        }
        $this->ColumnMask = $columnMask;
        return $this;
    }
    /**
     * Get AnswerImageDefault value
     * @return string|null
     */
    public function getAnswerImageDefault()
    {
        return $this->AnswerImageDefault;
    }
    /**
     * Set AnswerImageDefault value
     * @param string $answerImageDefault
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAnswerImageDefault($answerImageDefault = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageDefault) && !is_string($answerImageDefault)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageDefault)), __LINE__);
        }
        $this->AnswerImageDefault = $answerImageDefault;
        return $this;
    }
    /**
     * Get AnswerImageOver value
     * @return string|null
     */
    public function getAnswerImageOver()
    {
        return $this->AnswerImageOver;
    }
    /**
     * Set AnswerImageOver value
     * @param string $answerImageOver
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAnswerImageOver($answerImageOver = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageOver) && !is_string($answerImageOver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageOver)), __LINE__);
        }
        $this->AnswerImageOver = $answerImageOver;
        return $this;
    }
    /**
     * Get AnswerImageSelected value
     * @return string|null
     */
    public function getAnswerImageSelected()
    {
        return $this->AnswerImageSelected;
    }
    /**
     * Set AnswerImageSelected value
     * @param string $answerImageSelected
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAnswerImageSelected($answerImageSelected = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageSelected) && !is_string($answerImageSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageSelected)), __LINE__);
        }
        $this->AnswerImageSelected = $answerImageSelected;
        return $this;
    }
    /**
     * Get AnswerImageHeight value
     * @return string|null
     */
    public function getAnswerImageHeight()
    {
        return $this->AnswerImageHeight;
    }
    /**
     * Set AnswerImageHeight value
     * @param string $answerImageHeight
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAnswerImageHeight($answerImageHeight = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageHeight) && !is_string($answerImageHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageHeight)), __LINE__);
        }
        $this->AnswerImageHeight = $answerImageHeight;
        return $this;
    }
    /**
     * Get AnswerImageWidth value
     * @return string|null
     */
    public function getAnswerImageWidth()
    {
        return $this->AnswerImageWidth;
    }
    /**
     * Set AnswerImageWidth value
     * @param string $answerImageWidth
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setAnswerImageWidth($answerImageWidth = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageWidth) && !is_string($answerImageWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageWidth)), __LINE__);
        }
        $this->AnswerImageWidth = $answerImageWidth;
        return $this;
    }
    /**
     * Get SliderColor value
     * @return string|null
     */
    public function getSliderColor()
    {
        return $this->SliderColor;
    }
    /**
     * Set SliderColor value
     * @param string $sliderColor
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setSliderColor($sliderColor = null)
    {
        // validation for constraint: string
        if (!is_null($sliderColor) && !is_string($sliderColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sliderColor)), __LINE__);
        }
        $this->SliderColor = $sliderColor;
        return $this;
    }
    /**
     * Get ImageWidth value
     * @return string|null
     */
    public function getImageWidth()
    {
        return $this->ImageWidth;
    }
    /**
     * Set ImageWidth value
     * @param string $imageWidth
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setImageWidth($imageWidth = null)
    {
        // validation for constraint: string
        if (!is_null($imageWidth) && !is_string($imageWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imageWidth)), __LINE__);
        }
        $this->ImageWidth = $imageWidth;
        return $this;
    }
    /**
     * Get ImageHeight value
     * @return string|null
     */
    public function getImageHeight()
    {
        return $this->ImageHeight;
    }
    /**
     * Set ImageHeight value
     * @param string $imageHeight
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setImageHeight($imageHeight = null)
    {
        // validation for constraint: string
        if (!is_null($imageHeight) && !is_string($imageHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imageHeight)), __LINE__);
        }
        $this->ImageHeight = $imageHeight;
        return $this;
    }
    /**
     * Get DefaultAnswerPrecode value
     * @return string|null
     */
    public function getDefaultAnswerPrecode()
    {
        return $this->DefaultAnswerPrecode;
    }
    /**
     * Set DefaultAnswerPrecode value
     * @param string $defaultAnswerPrecode
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setDefaultAnswerPrecode($defaultAnswerPrecode = null)
    {
        // validation for constraint: string
        if (!is_null($defaultAnswerPrecode) && !is_string($defaultAnswerPrecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultAnswerPrecode)), __LINE__);
        }
        $this->DefaultAnswerPrecode = $defaultAnswerPrecode;
        return $this;
    }
    /**
     * Get RefusedAnswerPrecode value
     * @return string|null
     */
    public function getRefusedAnswerPrecode()
    {
        return $this->RefusedAnswerPrecode;
    }
    /**
     * Set RefusedAnswerPrecode value
     * @param string $refusedAnswerPrecode
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setRefusedAnswerPrecode($refusedAnswerPrecode = null)
    {
        // validation for constraint: string
        if (!is_null($refusedAnswerPrecode) && !is_string($refusedAnswerPrecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refusedAnswerPrecode)), __LINE__);
        }
        $this->RefusedAnswerPrecode = $refusedAnswerPrecode;
        return $this;
    }
    /**
     * Get OpenTextCodingField value
     * @return string|null
     */
    public function getOpenTextCodingField()
    {
        return $this->OpenTextCodingField;
    }
    /**
     * Set OpenTextCodingField value
     * @param string $openTextCodingField
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function setOpenTextCodingField($openTextCodingField = null)
    {
        // validation for constraint: string
        if (!is_null($openTextCodingField) && !is_string($openTextCodingField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openTextCodingField)), __LINE__);
        }
        $this->OpenTextCodingField = $openTextCodingField;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SingleForm
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
