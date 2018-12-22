<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiForm StructType
 * @subpackage Structs
 */
class MultiForm extends QuestionFormBase
{
    /**
     * The HasWeights
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $HasWeights;
    /**
     * The UsePredefinedScript
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $UsePredefinedScript;
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
     * The VerticalSlider
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $VerticalSlider;
    /**
     * The SliderSize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $SliderSize;
    /**
     * The FormattingAssistance
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FormattingAssistance;
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
     * The Columns
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Columns;
    /**
     * The Rows
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Rows;
    /**
     * The Precision
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Precision;
    /**
     * The Scale
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Scale;
    /**
     * The LowerLimit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $LowerLimit;
    /**
     * The UpperLimit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $UpperLimit;
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
     * The KeepPos
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $KeepPos;
    /**
     * The SearchableAnswerlist
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SearchableAnswerlist;
    /**
     * The AnswerButtonsMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerButtonsMode;
    /**
     * The Numeric
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Numeric;
    /**
     * The RightText
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RightText;
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
     * The UseAnswerImages
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UseAnswerImages;
    /**
     * The ResizableMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ResizableMode;
    /**
     * The SubHeaderOrder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SubHeaderOrder;
    /**
     * The OpenText
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $OpenText;
    /**
     * The Ordered
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Ordered;
    /**
     * The CaptureOrder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $CaptureOrder;
    /**
     * The AutoCheckOther
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AutoCheckOther;
    /**
     * The AutoSum
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AutoSum;
    /**
     * The DragDropRanking
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $DragDropRanking;
    /**
     * The RankByClick
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RankByClick;
    /**
     * The LowerLimitType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $LowerLimitType;
    /**
     * The UpperLimitType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $UpperLimitType;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Custom;
    /**
     * The AnswerImageModus
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $AnswerImageModus;
    /**
     * The TextWidth
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $TextWidth;
    /**
     * The TextWidthUnit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $TextWidthUnit;
    /**
     * The MultiItemsSelectedEqual
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $MultiItemsSelectedEqual;
    /**
     * The MultiItemsSelectedMinimum
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $MultiItemsSelectedMinimum;
    /**
     * The MultiItemsSelectedMaximum
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $MultiItemsSelectedMaximum;
    /**
     * The MultiSumEqual
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $MultiSumEqual;
    /**
     * The MultiSumMinimum
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $MultiSumMinimum;
    /**
     * The MultiSumMaximum
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $MultiSumMaximum;
    /**
     * The Characteristic
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Characteristic;
    /**
     * The AnswerRequiredType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerRequiredType;
    /**
     * The Answers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice6
     */
    public $Answers;
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
     * The OpenTextCodingField
     * @var string
     */
    public $OpenTextCodingField;
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
     * The InputPrefix
     * @var string
     */
    public $InputPrefix;
    /**
     * The InputSuffix
     * @var string
     */
    public $InputSuffix;
    /**
     * The EqualsRepresentation
     * @var string
     */
    public $EqualsRepresentation;
    /**
     * Constructor method for MultiForm
     * @uses MultiForm::setHasWeights()
     * @uses MultiForm::setUsePredefinedScript()
     * @uses MultiForm::setSlider()
     * @uses MultiForm::setIsCodingField()
     * @uses MultiForm::setVerticalSlider()
     * @uses MultiForm::setSliderSize()
     * @uses MultiForm::setFormattingAssistance()
     * @uses MultiForm::setOtherColumns()
     * @uses MultiForm::setOtherRows()
     * @uses MultiForm::setColumns()
     * @uses MultiForm::setRows()
     * @uses MultiForm::setPrecision()
     * @uses MultiForm::setScale()
     * @uses MultiForm::setLowerLimit()
     * @uses MultiForm::setUpperLimit()
     * @uses MultiForm::setListRows()
     * @uses MultiForm::setListColumns()
     * @uses MultiForm::setKeepPos()
     * @uses MultiForm::setSearchableAnswerlist()
     * @uses MultiForm::setAnswerButtonsMode()
     * @uses MultiForm::setNumeric()
     * @uses MultiForm::setRightText()
     * @uses MultiForm::setAnswerlistOrder()
     * @uses MultiForm::setRandomize()
     * @uses MultiForm::setUseAnswerImages()
     * @uses MultiForm::setResizableMode()
     * @uses MultiForm::setSubHeaderOrder()
     * @uses MultiForm::setOpenText()
     * @uses MultiForm::setOrdered()
     * @uses MultiForm::setCaptureOrder()
     * @uses MultiForm::setAutoCheckOther()
     * @uses MultiForm::setAutoSum()
     * @uses MultiForm::setDragDropRanking()
     * @uses MultiForm::setRankByClick()
     * @uses MultiForm::setLowerLimitType()
     * @uses MultiForm::setUpperLimitType()
     * @uses MultiForm::setCustom()
     * @uses MultiForm::setAnswerImageModus()
     * @uses MultiForm::setTextWidth()
     * @uses MultiForm::setTextWidthUnit()
     * @uses MultiForm::setMultiItemsSelectedEqual()
     * @uses MultiForm::setMultiItemsSelectedMinimum()
     * @uses MultiForm::setMultiItemsSelectedMaximum()
     * @uses MultiForm::setMultiSumEqual()
     * @uses MultiForm::setMultiSumMinimum()
     * @uses MultiForm::setMultiSumMaximum()
     * @uses MultiForm::setCharacteristic()
     * @uses MultiForm::setAnswerRequiredType()
     * @uses MultiForm::setAnswers()
     * @uses MultiForm::setPrecodeMask()
     * @uses MultiForm::setPrecodeMaskPredefinedScript()
     * @uses MultiForm::setColumnMask()
     * @uses MultiForm::setAnswerImageDefault()
     * @uses MultiForm::setAnswerImageHeight()
     * @uses MultiForm::setAnswerImageWidth()
     * @uses MultiForm::setAnswerImageOver()
     * @uses MultiForm::setAnswerImageSelected()
     * @uses MultiForm::setImageWidth()
     * @uses MultiForm::setImageHeight()
     * @uses MultiForm::setOpenTextCodingField()
     * @uses MultiForm::setDefaultAnswerPrecode()
     * @uses MultiForm::setRefusedAnswerPrecode()
     * @uses MultiForm::setInputPrefix()
     * @uses MultiForm::setInputSuffix()
     * @uses MultiForm::setEqualsRepresentation()
     * @param bool $hasWeights
     * @param bool $usePredefinedScript
     * @param bool $slider
     * @param bool $isCodingField
     * @param bool $verticalSlider
     * @param int $sliderSize
     * @param bool $formattingAssistance
     * @param int $otherColumns
     * @param int $otherRows
     * @param int $columns
     * @param int $rows
     * @param int $precision
     * @param int $scale
     * @param float $lowerLimit
     * @param float $upperLimit
     * @param int $listRows
     * @param int $listColumns
     * @param bool $keepPos
     * @param bool $searchableAnswerlist
     * @param string $answerButtonsMode
     * @param bool $numeric
     * @param bool $rightText
     * @param string $answerlistOrder
     * @param bool $randomize
     * @param bool $useAnswerImages
     * @param int $resizableMode
     * @param string $subHeaderOrder
     * @param bool $openText
     * @param bool $ordered
     * @param bool $captureOrder
     * @param bool $autoCheckOther
     * @param bool $autoSum
     * @param bool $dragDropRanking
     * @param bool $rankByClick
     * @param string $lowerLimitType
     * @param string $upperLimitType
     * @param bool $custom
     * @param int $answerImageModus
     * @param int $textWidth
     * @param string $textWidthUnit
     * @param int $multiItemsSelectedEqual
     * @param int $multiItemsSelectedMinimum
     * @param int $multiItemsSelectedMaximum
     * @param float $multiSumEqual
     * @param float $multiSumMinimum
     * @param float $multiSumMaximum
     * @param int $characteristic
     * @param string $answerRequiredType
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice6 $answers
     * @param string $precodeMask
     * @param \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript
     * @param string $columnMask
     * @param string $answerImageDefault
     * @param string $answerImageHeight
     * @param string $answerImageWidth
     * @param string $answerImageOver
     * @param string $answerImageSelected
     * @param string $imageWidth
     * @param string $imageHeight
     * @param string $openTextCodingField
     * @param string $defaultAnswerPrecode
     * @param string $refusedAnswerPrecode
     * @param string $inputPrefix
     * @param string $inputSuffix
     * @param string $equalsRepresentation
     */
    public function __construct($hasWeights = null, $usePredefinedScript = null, $slider = null, $isCodingField = null, $verticalSlider = null, $sliderSize = null, $formattingAssistance = null, $otherColumns = null, $otherRows = null, $columns = null, $rows = null, $precision = null, $scale = null, $lowerLimit = null, $upperLimit = null, $listRows = null, $listColumns = null, $keepPos = null, $searchableAnswerlist = null, $answerButtonsMode = null, $numeric = null, $rightText = null, $answerlistOrder = null, $randomize = null, $useAnswerImages = null, $resizableMode = null, $subHeaderOrder = null, $openText = null, $ordered = null, $captureOrder = null, $autoCheckOther = null, $autoSum = null, $dragDropRanking = null, $rankByClick = null, $lowerLimitType = null, $upperLimitType = null, $custom = null, $answerImageModus = null, $textWidth = null, $textWidthUnit = null, $multiItemsSelectedEqual = null, $multiItemsSelectedMinimum = null, $multiItemsSelectedMaximum = null, $multiSumEqual = null, $multiSumMinimum = null, $multiSumMaximum = null, $characteristic = null, $answerRequiredType = null, \Confirmit\Authoring\StructType\ArrayOfChoice6 $answers = null, $precodeMask = null, \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null, $columnMask = null, $answerImageDefault = null, $answerImageHeight = null, $answerImageWidth = null, $answerImageOver = null, $answerImageSelected = null, $imageWidth = null, $imageHeight = null, $openTextCodingField = null, $defaultAnswerPrecode = null, $refusedAnswerPrecode = null, $inputPrefix = null, $inputSuffix = null, $equalsRepresentation = null)
    {
        $this
            ->setHasWeights($hasWeights)
            ->setUsePredefinedScript($usePredefinedScript)
            ->setSlider($slider)
            ->setIsCodingField($isCodingField)
            ->setVerticalSlider($verticalSlider)
            ->setSliderSize($sliderSize)
            ->setFormattingAssistance($formattingAssistance)
            ->setOtherColumns($otherColumns)
            ->setOtherRows($otherRows)
            ->setColumns($columns)
            ->setRows($rows)
            ->setPrecision($precision)
            ->setScale($scale)
            ->setLowerLimit($lowerLimit)
            ->setUpperLimit($upperLimit)
            ->setListRows($listRows)
            ->setListColumns($listColumns)
            ->setKeepPos($keepPos)
            ->setSearchableAnswerlist($searchableAnswerlist)
            ->setAnswerButtonsMode($answerButtonsMode)
            ->setNumeric($numeric)
            ->setRightText($rightText)
            ->setAnswerlistOrder($answerlistOrder)
            ->setRandomize($randomize)
            ->setUseAnswerImages($useAnswerImages)
            ->setResizableMode($resizableMode)
            ->setSubHeaderOrder($subHeaderOrder)
            ->setOpenText($openText)
            ->setOrdered($ordered)
            ->setCaptureOrder($captureOrder)
            ->setAutoCheckOther($autoCheckOther)
            ->setAutoSum($autoSum)
            ->setDragDropRanking($dragDropRanking)
            ->setRankByClick($rankByClick)
            ->setLowerLimitType($lowerLimitType)
            ->setUpperLimitType($upperLimitType)
            ->setCustom($custom)
            ->setAnswerImageModus($answerImageModus)
            ->setTextWidth($textWidth)
            ->setTextWidthUnit($textWidthUnit)
            ->setMultiItemsSelectedEqual($multiItemsSelectedEqual)
            ->setMultiItemsSelectedMinimum($multiItemsSelectedMinimum)
            ->setMultiItemsSelectedMaximum($multiItemsSelectedMaximum)
            ->setMultiSumEqual($multiSumEqual)
            ->setMultiSumMinimum($multiSumMinimum)
            ->setMultiSumMaximum($multiSumMaximum)
            ->setCharacteristic($characteristic)
            ->setAnswerRequiredType($answerRequiredType)
            ->setAnswers($answers)
            ->setPrecodeMask($precodeMask)
            ->setPrecodeMaskPredefinedScript($precodeMaskPredefinedScript)
            ->setColumnMask($columnMask)
            ->setAnswerImageDefault($answerImageDefault)
            ->setAnswerImageHeight($answerImageHeight)
            ->setAnswerImageWidth($answerImageWidth)
            ->setAnswerImageOver($answerImageOver)
            ->setAnswerImageSelected($answerImageSelected)
            ->setImageWidth($imageWidth)
            ->setImageHeight($imageHeight)
            ->setOpenTextCodingField($openTextCodingField)
            ->setDefaultAnswerPrecode($defaultAnswerPrecode)
            ->setRefusedAnswerPrecode($refusedAnswerPrecode)
            ->setInputPrefix($inputPrefix)
            ->setInputSuffix($inputSuffix)
            ->setEqualsRepresentation($equalsRepresentation);
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get VerticalSlider value
     * @return bool
     */
    public function getVerticalSlider()
    {
        return $this->VerticalSlider;
    }
    /**
     * Set VerticalSlider value
     * @param bool $verticalSlider
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setVerticalSlider($verticalSlider = null)
    {
        // validation for constraint: boolean
        if (!is_null($verticalSlider) && !is_bool($verticalSlider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($verticalSlider)), __LINE__);
        }
        $this->VerticalSlider = $verticalSlider;
        return $this;
    }
    /**
     * Get SliderSize value
     * @return int
     */
    public function getSliderSize()
    {
        return $this->SliderSize;
    }
    /**
     * Set SliderSize value
     * @param int $sliderSize
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setSliderSize($sliderSize = null)
    {
        // validation for constraint: int
        if (!is_null($sliderSize) && !is_numeric($sliderSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sliderSize)), __LINE__);
        }
        $this->SliderSize = $sliderSize;
        return $this;
    }
    /**
     * Get FormattingAssistance value
     * @return bool
     */
    public function getFormattingAssistance()
    {
        return $this->FormattingAssistance;
    }
    /**
     * Set FormattingAssistance value
     * @param bool $formattingAssistance
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setFormattingAssistance($formattingAssistance = null)
    {
        // validation for constraint: boolean
        if (!is_null($formattingAssistance) && !is_bool($formattingAssistance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($formattingAssistance)), __LINE__);
        }
        $this->FormattingAssistance = $formattingAssistance;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get Columns value
     * @return int
     */
    public function getColumns()
    {
        return $this->Columns;
    }
    /**
     * Set Columns value
     * @param int $columns
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setColumns($columns = null)
    {
        // validation for constraint: int
        if (!is_null($columns) && !is_numeric($columns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($columns)), __LINE__);
        }
        $this->Columns = $columns;
        return $this;
    }
    /**
     * Get Rows value
     * @return int
     */
    public function getRows()
    {
        return $this->Rows;
    }
    /**
     * Set Rows value
     * @param int $rows
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setRows($rows = null)
    {
        // validation for constraint: int
        if (!is_null($rows) && !is_numeric($rows)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rows)), __LINE__);
        }
        $this->Rows = $rows;
        return $this;
    }
    /**
     * Get Precision value
     * @return int
     */
    public function getPrecision()
    {
        return $this->Precision;
    }
    /**
     * Set Precision value
     * @param int $precision
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setPrecision($precision = null)
    {
        // validation for constraint: int
        if (!is_null($precision) && !is_numeric($precision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($precision)), __LINE__);
        }
        $this->Precision = $precision;
        return $this;
    }
    /**
     * Get Scale value
     * @return int
     */
    public function getScale()
    {
        return $this->Scale;
    }
    /**
     * Set Scale value
     * @param int $scale
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setScale($scale = null)
    {
        // validation for constraint: int
        if (!is_null($scale) && !is_numeric($scale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scale)), __LINE__);
        }
        $this->Scale = $scale;
        return $this;
    }
    /**
     * Get LowerLimit value
     * @return float
     */
    public function getLowerLimit()
    {
        return $this->LowerLimit;
    }
    /**
     * Set LowerLimit value
     * @param float $lowerLimit
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setLowerLimit($lowerLimit = null)
    {
        $this->LowerLimit = $lowerLimit;
        return $this;
    }
    /**
     * Get UpperLimit value
     * @return float
     */
    public function getUpperLimit()
    {
        return $this->UpperLimit;
    }
    /**
     * Set UpperLimit value
     * @param float $upperLimit
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setUpperLimit($upperLimit = null)
    {
        $this->UpperLimit = $upperLimit;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get SearchableAnswerlist value
     * @return bool
     */
    public function getSearchableAnswerlist()
    {
        return $this->SearchableAnswerlist;
    }
    /**
     * Set SearchableAnswerlist value
     * @param bool $searchableAnswerlist
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setSearchableAnswerlist($searchableAnswerlist = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchableAnswerlist) && !is_bool($searchableAnswerlist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($searchableAnswerlist)), __LINE__);
        }
        $this->SearchableAnswerlist = $searchableAnswerlist;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get Numeric value
     * @return bool
     */
    public function getNumeric()
    {
        return $this->Numeric;
    }
    /**
     * Set Numeric value
     * @param bool $numeric
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setNumeric($numeric = null)
    {
        // validation for constraint: boolean
        if (!is_null($numeric) && !is_bool($numeric)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($numeric)), __LINE__);
        }
        $this->Numeric = $numeric;
        return $this;
    }
    /**
     * Get RightText value
     * @return bool
     */
    public function getRightText()
    {
        return $this->RightText;
    }
    /**
     * Set RightText value
     * @param bool $rightText
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setRightText($rightText = null)
    {
        // validation for constraint: boolean
        if (!is_null($rightText) && !is_bool($rightText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rightText)), __LINE__);
        }
        $this->RightText = $rightText;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get ResizableMode value
     * @return int
     */
    public function getResizableMode()
    {
        return $this->ResizableMode;
    }
    /**
     * Set ResizableMode value
     * @param int $resizableMode
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setResizableMode($resizableMode = null)
    {
        // validation for constraint: int
        if (!is_null($resizableMode) && !is_numeric($resizableMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resizableMode)), __LINE__);
        }
        $this->ResizableMode = $resizableMode;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get OpenText value
     * @return bool
     */
    public function getOpenText()
    {
        return $this->OpenText;
    }
    /**
     * Set OpenText value
     * @param bool $openText
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setOpenText($openText = null)
    {
        // validation for constraint: boolean
        if (!is_null($openText) && !is_bool($openText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($openText)), __LINE__);
        }
        $this->OpenText = $openText;
        return $this;
    }
    /**
     * Get Ordered value
     * @return bool
     */
    public function getOrdered()
    {
        return $this->Ordered;
    }
    /**
     * Set Ordered value
     * @param bool $ordered
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setOrdered($ordered = null)
    {
        // validation for constraint: boolean
        if (!is_null($ordered) && !is_bool($ordered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ordered)), __LINE__);
        }
        $this->Ordered = $ordered;
        return $this;
    }
    /**
     * Get CaptureOrder value
     * @return bool
     */
    public function getCaptureOrder()
    {
        return $this->CaptureOrder;
    }
    /**
     * Set CaptureOrder value
     * @param bool $captureOrder
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setCaptureOrder($captureOrder = null)
    {
        // validation for constraint: boolean
        if (!is_null($captureOrder) && !is_bool($captureOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($captureOrder)), __LINE__);
        }
        $this->CaptureOrder = $captureOrder;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get AutoSum value
     * @return bool
     */
    public function getAutoSum()
    {
        return $this->AutoSum;
    }
    /**
     * Set AutoSum value
     * @param bool $autoSum
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setAutoSum($autoSum = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoSum) && !is_bool($autoSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoSum)), __LINE__);
        }
        $this->AutoSum = $autoSum;
        return $this;
    }
    /**
     * Get DragDropRanking value
     * @return bool
     */
    public function getDragDropRanking()
    {
        return $this->DragDropRanking;
    }
    /**
     * Set DragDropRanking value
     * @param bool $dragDropRanking
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setDragDropRanking($dragDropRanking = null)
    {
        // validation for constraint: boolean
        if (!is_null($dragDropRanking) && !is_bool($dragDropRanking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dragDropRanking)), __LINE__);
        }
        $this->DragDropRanking = $dragDropRanking;
        return $this;
    }
    /**
     * Get RankByClick value
     * @return bool
     */
    public function getRankByClick()
    {
        return $this->RankByClick;
    }
    /**
     * Set RankByClick value
     * @param bool $rankByClick
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setRankByClick($rankByClick = null)
    {
        // validation for constraint: boolean
        if (!is_null($rankByClick) && !is_bool($rankByClick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rankByClick)), __LINE__);
        }
        $this->RankByClick = $rankByClick;
        return $this;
    }
    /**
     * Get LowerLimitType value
     * @return string
     */
    public function getLowerLimitType()
    {
        return $this->LowerLimitType;
    }
    /**
     * Set LowerLimitType value
     * @uses \Confirmit\Authoring\EnumType\LowerLimitDataType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\LowerLimitDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $lowerLimitType
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setLowerLimitType($lowerLimitType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\LowerLimitDataType::valueIsValid($lowerLimitType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $lowerLimitType, implode(', ', \Confirmit\Authoring\EnumType\LowerLimitDataType::getValidValues())), __LINE__);
        }
        $this->LowerLimitType = $lowerLimitType;
        return $this;
    }
    /**
     * Get UpperLimitType value
     * @return string
     */
    public function getUpperLimitType()
    {
        return $this->UpperLimitType;
    }
    /**
     * Set UpperLimitType value
     * @uses \Confirmit\Authoring\EnumType\UpperLimitDataType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\UpperLimitDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $upperLimitType
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setUpperLimitType($upperLimitType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\UpperLimitDataType::valueIsValid($upperLimitType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $upperLimitType, implode(', ', \Confirmit\Authoring\EnumType\UpperLimitDataType::getValidValues())), __LINE__);
        }
        $this->UpperLimitType = $upperLimitType;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get TextWidth value
     * @return int
     */
    public function getTextWidth()
    {
        return $this->TextWidth;
    }
    /**
     * Set TextWidth value
     * @param int $textWidth
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setTextWidth($textWidth = null)
    {
        // validation for constraint: int
        if (!is_null($textWidth) && !is_numeric($textWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($textWidth)), __LINE__);
        }
        $this->TextWidth = $textWidth;
        return $this;
    }
    /**
     * Get TextWidthUnit value
     * @return string
     */
    public function getTextWidthUnit()
    {
        return $this->TextWidthUnit;
    }
    /**
     * Set TextWidthUnit value
     * @uses \Confirmit\Authoring\EnumType\WebMeasurementUnitType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\WebMeasurementUnitType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $textWidthUnit
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setTextWidthUnit($textWidthUnit = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\WebMeasurementUnitType::valueIsValid($textWidthUnit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $textWidthUnit, implode(', ', \Confirmit\Authoring\EnumType\WebMeasurementUnitType::getValidValues())), __LINE__);
        }
        $this->TextWidthUnit = $textWidthUnit;
        return $this;
    }
    /**
     * Get MultiItemsSelectedEqual value
     * @return int
     */
    public function getMultiItemsSelectedEqual()
    {
        return $this->MultiItemsSelectedEqual;
    }
    /**
     * Set MultiItemsSelectedEqual value
     * @param int $multiItemsSelectedEqual
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setMultiItemsSelectedEqual($multiItemsSelectedEqual = null)
    {
        // validation for constraint: int
        if (!is_null($multiItemsSelectedEqual) && !is_numeric($multiItemsSelectedEqual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($multiItemsSelectedEqual)), __LINE__);
        }
        $this->MultiItemsSelectedEqual = $multiItemsSelectedEqual;
        return $this;
    }
    /**
     * Get MultiItemsSelectedMinimum value
     * @return int
     */
    public function getMultiItemsSelectedMinimum()
    {
        return $this->MultiItemsSelectedMinimum;
    }
    /**
     * Set MultiItemsSelectedMinimum value
     * @param int $multiItemsSelectedMinimum
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setMultiItemsSelectedMinimum($multiItemsSelectedMinimum = null)
    {
        // validation for constraint: int
        if (!is_null($multiItemsSelectedMinimum) && !is_numeric($multiItemsSelectedMinimum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($multiItemsSelectedMinimum)), __LINE__);
        }
        $this->MultiItemsSelectedMinimum = $multiItemsSelectedMinimum;
        return $this;
    }
    /**
     * Get MultiItemsSelectedMaximum value
     * @return int
     */
    public function getMultiItemsSelectedMaximum()
    {
        return $this->MultiItemsSelectedMaximum;
    }
    /**
     * Set MultiItemsSelectedMaximum value
     * @param int $multiItemsSelectedMaximum
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setMultiItemsSelectedMaximum($multiItemsSelectedMaximum = null)
    {
        // validation for constraint: int
        if (!is_null($multiItemsSelectedMaximum) && !is_numeric($multiItemsSelectedMaximum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($multiItemsSelectedMaximum)), __LINE__);
        }
        $this->MultiItemsSelectedMaximum = $multiItemsSelectedMaximum;
        return $this;
    }
    /**
     * Get MultiSumEqual value
     * @return float
     */
    public function getMultiSumEqual()
    {
        return $this->MultiSumEqual;
    }
    /**
     * Set MultiSumEqual value
     * @param float $multiSumEqual
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setMultiSumEqual($multiSumEqual = null)
    {
        $this->MultiSumEqual = $multiSumEqual;
        return $this;
    }
    /**
     * Get MultiSumMinimum value
     * @return float
     */
    public function getMultiSumMinimum()
    {
        return $this->MultiSumMinimum;
    }
    /**
     * Set MultiSumMinimum value
     * @param float $multiSumMinimum
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setMultiSumMinimum($multiSumMinimum = null)
    {
        $this->MultiSumMinimum = $multiSumMinimum;
        return $this;
    }
    /**
     * Get MultiSumMaximum value
     * @return float
     */
    public function getMultiSumMaximum()
    {
        return $this->MultiSumMaximum;
    }
    /**
     * Set MultiSumMaximum value
     * @param float $multiSumMaximum
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setMultiSumMaximum($multiSumMaximum = null)
    {
        $this->MultiSumMaximum = $multiSumMaximum;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get AnswerRequiredType value
     * @return string
     */
    public function getAnswerRequiredType()
    {
        return $this->AnswerRequiredType;
    }
    /**
     * Set AnswerRequiredType value
     * @uses \Confirmit\Authoring\EnumType\AnswerRequiredType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\AnswerRequiredType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $answerRequiredType
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setAnswerRequiredType($answerRequiredType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\AnswerRequiredType::valueIsValid($answerRequiredType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $answerRequiredType, implode(', ', \Confirmit\Authoring\EnumType\AnswerRequiredType::getValidValues())), __LINE__);
        }
        $this->AnswerRequiredType = $answerRequiredType;
        return $this;
    }
    /**
     * Get Answers value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice6|null
     */
    public function getAnswers()
    {
        return $this->Answers;
    }
    /**
     * Set Answers value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice6 $answers
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setAnswers(\Confirmit\Authoring\StructType\ArrayOfChoice6 $answers = null)
    {
        $this->Answers = $answers;
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * @return \Confirmit\Authoring\StructType\MultiForm
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
     * Get InputPrefix value
     * @return string|null
     */
    public function getInputPrefix()
    {
        return $this->InputPrefix;
    }
    /**
     * Set InputPrefix value
     * @param string $inputPrefix
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setInputPrefix($inputPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($inputPrefix) && !is_string($inputPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inputPrefix)), __LINE__);
        }
        $this->InputPrefix = $inputPrefix;
        return $this;
    }
    /**
     * Get InputSuffix value
     * @return string|null
     */
    public function getInputSuffix()
    {
        return $this->InputSuffix;
    }
    /**
     * Set InputSuffix value
     * @param string $inputSuffix
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setInputSuffix($inputSuffix = null)
    {
        // validation for constraint: string
        if (!is_null($inputSuffix) && !is_string($inputSuffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inputSuffix)), __LINE__);
        }
        $this->InputSuffix = $inputSuffix;
        return $this;
    }
    /**
     * Get EqualsRepresentation value
     * @return string|null
     */
    public function getEqualsRepresentation()
    {
        return $this->EqualsRepresentation;
    }
    /**
     * Set EqualsRepresentation value
     * @param string $equalsRepresentation
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function setEqualsRepresentation($equalsRepresentation = null)
    {
        // validation for constraint: string
        if (!is_null($equalsRepresentation) && !is_string($equalsRepresentation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equalsRepresentation)), __LINE__);
        }
        $this->EqualsRepresentation = $equalsRepresentation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\MultiForm
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
