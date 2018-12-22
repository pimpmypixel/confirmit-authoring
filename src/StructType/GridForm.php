<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GridForm StructType
 * @subpackage Structs
 */
class GridForm extends QuestionFormBase
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
     * The ScaleOrder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ScaleOrder;
    /**
     * The UseAnswerImages
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UseAnswerImages;
    /**
     * The Randomize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Randomize;
    /**
     * The Ordered
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Ordered;
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
     * The KeepPos
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $KeepPos;
    /**
     * The AnswerImageModus
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $AnswerImageModus;
    /**
     * The ScrollControlModus
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ScrollControlModus;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Custom;
    /**
     * The ScrollControlSize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ScrollControlSize;
    /**
     * The Slider
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Slider;
    /**
     * The RepeatHeaders
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RepeatHeaders;
    /**
     * The HeaderFrequency
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $HeaderFrequency;
    /**
     * The BottomHeaders
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $BottomHeaders;
    /**
     * The LeftAndRightGridText
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $LeftAndRightGridText;
    /**
     * The ShowScaleBars
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ShowScaleBars;
    /**
     * The AutoScaleWidth
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AutoScaleWidth;
    /**
     * The GridBars
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $GridBars;
    /**
     * The Carousel
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Carousel;
    /**
     * The StarRating
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $StarRating;
    /**
     * The GridBarsExcludeWeighted
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $GridBarsExcludeWeighted;
    /**
     * The CardSort
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $CardSort;
    /**
     * The CardSortIncrement
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $CardSortIncrement;
    /**
     * The CardSortDroppedIncrement
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $CardSortDroppedIncrement;
    /**
     * The CardSortVerticalDirection
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $CardSortVerticalDirection;
    /**
     * The ScrollBarHorizontal
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ScrollBarHorizontal;
    /**
     * The ScrollBarWidth
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ScrollBarWidth;
    /**
     * The AnswerButtonsMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerButtonsMode;
    /**
     * The GrayoutSelected
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $GrayoutSelected;
    /**
     * The Characteristic
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Characteristic;
    /**
     * The Answers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice4
     */
    public $Answers;
    /**
     * The Scales
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice5
     */
    public $Scales;
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
     * The ScalePrecodeMask
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScalePrecodeMask;
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
     * Constructor method for GridForm
     * @uses GridForm::setUsePredefinedScript()
     * @uses GridForm::setHasWeights()
     * @uses GridForm::setOtherColumns()
     * @uses GridForm::setOtherRows()
     * @uses GridForm::setTextWidth()
     * @uses GridForm::setTextWidthUnit()
     * @uses GridForm::setListRows()
     * @uses GridForm::setListColumns()
     * @uses GridForm::setAnswerlistOrder()
     * @uses GridForm::setSubHeaderOrder()
     * @uses GridForm::setScaleOrder()
     * @uses GridForm::setUseAnswerImages()
     * @uses GridForm::setRandomize()
     * @uses GridForm::setOrdered()
     * @uses GridForm::setDropdown()
     * @uses GridForm::setCustomDropdownTitle()
     * @uses GridForm::setKeepPos()
     * @uses GridForm::setAnswerImageModus()
     * @uses GridForm::setScrollControlModus()
     * @uses GridForm::setCustom()
     * @uses GridForm::setScrollControlSize()
     * @uses GridForm::setSlider()
     * @uses GridForm::setRepeatHeaders()
     * @uses GridForm::setHeaderFrequency()
     * @uses GridForm::setBottomHeaders()
     * @uses GridForm::setLeftAndRightGridText()
     * @uses GridForm::setShowScaleBars()
     * @uses GridForm::setAutoScaleWidth()
     * @uses GridForm::setGridBars()
     * @uses GridForm::setCarousel()
     * @uses GridForm::setStarRating()
     * @uses GridForm::setGridBarsExcludeWeighted()
     * @uses GridForm::setCardSort()
     * @uses GridForm::setCardSortIncrement()
     * @uses GridForm::setCardSortDroppedIncrement()
     * @uses GridForm::setCardSortVerticalDirection()
     * @uses GridForm::setScrollBarHorizontal()
     * @uses GridForm::setScrollBarWidth()
     * @uses GridForm::setAnswerButtonsMode()
     * @uses GridForm::setGrayoutSelected()
     * @uses GridForm::setCharacteristic()
     * @uses GridForm::setAnswers()
     * @uses GridForm::setScales()
     * @uses GridForm::setPrecodeMask()
     * @uses GridForm::setPrecodeMaskPredefinedScript()
     * @uses GridForm::setScalePrecodeMask()
     * @uses GridForm::setColumnMask()
     * @uses GridForm::setAnswerImageDefault()
     * @uses GridForm::setAnswerImageOver()
     * @uses GridForm::setAnswerImageSelected()
     * @uses GridForm::setAnswerImageHeight()
     * @uses GridForm::setAnswerImageWidth()
     * @uses GridForm::setSliderColor()
     * @uses GridForm::setImageWidth()
     * @uses GridForm::setImageHeight()
     * @param bool $usePredefinedScript
     * @param bool $hasWeights
     * @param int $otherColumns
     * @param int $otherRows
     * @param int $textWidth
     * @param string $textWidthUnit
     * @param int $listRows
     * @param int $listColumns
     * @param string $answerlistOrder
     * @param string $subHeaderOrder
     * @param string $scaleOrder
     * @param bool $useAnswerImages
     * @param bool $randomize
     * @param bool $ordered
     * @param bool $dropdown
     * @param bool $customDropdownTitle
     * @param bool $keepPos
     * @param int $answerImageModus
     * @param int $scrollControlModus
     * @param bool $custom
     * @param int $scrollControlSize
     * @param bool $slider
     * @param bool $repeatHeaders
     * @param int $headerFrequency
     * @param bool $bottomHeaders
     * @param bool $leftAndRightGridText
     * @param bool $showScaleBars
     * @param bool $autoScaleWidth
     * @param bool $gridBars
     * @param bool $carousel
     * @param bool $starRating
     * @param bool $gridBarsExcludeWeighted
     * @param bool $cardSort
     * @param int $cardSortIncrement
     * @param int $cardSortDroppedIncrement
     * @param int $cardSortVerticalDirection
     * @param int $scrollBarHorizontal
     * @param int $scrollBarWidth
     * @param string $answerButtonsMode
     * @param bool $grayoutSelected
     * @param int $characteristic
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice4 $answers
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice5 $scales
     * @param string $precodeMask
     * @param \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript
     * @param string $scalePrecodeMask
     * @param string $columnMask
     * @param string $answerImageDefault
     * @param string $answerImageOver
     * @param string $answerImageSelected
     * @param string $answerImageHeight
     * @param string $answerImageWidth
     * @param string $sliderColor
     * @param string $imageWidth
     * @param string $imageHeight
     */
    public function __construct($usePredefinedScript = null, $hasWeights = null, $otherColumns = null, $otherRows = null, $textWidth = null, $textWidthUnit = null, $listRows = null, $listColumns = null, $answerlistOrder = null, $subHeaderOrder = null, $scaleOrder = null, $useAnswerImages = null, $randomize = null, $ordered = null, $dropdown = null, $customDropdownTitle = null, $keepPos = null, $answerImageModus = null, $scrollControlModus = null, $custom = null, $scrollControlSize = null, $slider = null, $repeatHeaders = null, $headerFrequency = null, $bottomHeaders = null, $leftAndRightGridText = null, $showScaleBars = null, $autoScaleWidth = null, $gridBars = null, $carousel = null, $starRating = null, $gridBarsExcludeWeighted = null, $cardSort = null, $cardSortIncrement = null, $cardSortDroppedIncrement = null, $cardSortVerticalDirection = null, $scrollBarHorizontal = null, $scrollBarWidth = null, $answerButtonsMode = null, $grayoutSelected = null, $characteristic = null, \Confirmit\Authoring\StructType\ArrayOfChoice4 $answers = null, \Confirmit\Authoring\StructType\ArrayOfChoice5 $scales = null, $precodeMask = null, \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null, $scalePrecodeMask = null, $columnMask = null, $answerImageDefault = null, $answerImageOver = null, $answerImageSelected = null, $answerImageHeight = null, $answerImageWidth = null, $sliderColor = null, $imageWidth = null, $imageHeight = null)
    {
        $this
            ->setUsePredefinedScript($usePredefinedScript)
            ->setHasWeights($hasWeights)
            ->setOtherColumns($otherColumns)
            ->setOtherRows($otherRows)
            ->setTextWidth($textWidth)
            ->setTextWidthUnit($textWidthUnit)
            ->setListRows($listRows)
            ->setListColumns($listColumns)
            ->setAnswerlistOrder($answerlistOrder)
            ->setSubHeaderOrder($subHeaderOrder)
            ->setScaleOrder($scaleOrder)
            ->setUseAnswerImages($useAnswerImages)
            ->setRandomize($randomize)
            ->setOrdered($ordered)
            ->setDropdown($dropdown)
            ->setCustomDropdownTitle($customDropdownTitle)
            ->setKeepPos($keepPos)
            ->setAnswerImageModus($answerImageModus)
            ->setScrollControlModus($scrollControlModus)
            ->setCustom($custom)
            ->setScrollControlSize($scrollControlSize)
            ->setSlider($slider)
            ->setRepeatHeaders($repeatHeaders)
            ->setHeaderFrequency($headerFrequency)
            ->setBottomHeaders($bottomHeaders)
            ->setLeftAndRightGridText($leftAndRightGridText)
            ->setShowScaleBars($showScaleBars)
            ->setAutoScaleWidth($autoScaleWidth)
            ->setGridBars($gridBars)
            ->setCarousel($carousel)
            ->setStarRating($starRating)
            ->setGridBarsExcludeWeighted($gridBarsExcludeWeighted)
            ->setCardSort($cardSort)
            ->setCardSortIncrement($cardSortIncrement)
            ->setCardSortDroppedIncrement($cardSortDroppedIncrement)
            ->setCardSortVerticalDirection($cardSortVerticalDirection)
            ->setScrollBarHorizontal($scrollBarHorizontal)
            ->setScrollBarWidth($scrollBarWidth)
            ->setAnswerButtonsMode($answerButtonsMode)
            ->setGrayoutSelected($grayoutSelected)
            ->setCharacteristic($characteristic)
            ->setAnswers($answers)
            ->setScales($scales)
            ->setPrecodeMask($precodeMask)
            ->setPrecodeMaskPredefinedScript($precodeMaskPredefinedScript)
            ->setScalePrecodeMask($scalePrecodeMask)
            ->setColumnMask($columnMask)
            ->setAnswerImageDefault($answerImageDefault)
            ->setAnswerImageOver($answerImageOver)
            ->setAnswerImageSelected($answerImageSelected)
            ->setAnswerImageHeight($answerImageHeight)
            ->setAnswerImageWidth($answerImageWidth)
            ->setSliderColor($sliderColor)
            ->setImageWidth($imageWidth)
            ->setImageHeight($imageHeight);
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * Get ScaleOrder value
     * @return string
     */
    public function getScaleOrder()
    {
        return $this->ScaleOrder;
    }
    /**
     * Set ScaleOrder value
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $scaleOrder
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setScaleOrder($scaleOrder = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid($scaleOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $scaleOrder, implode(', ', \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues())), __LINE__);
        }
        $this->ScaleOrder = $scaleOrder;
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * Get ScrollControlModus value
     * @return int
     */
    public function getScrollControlModus()
    {
        return $this->ScrollControlModus;
    }
    /**
     * Set ScrollControlModus value
     * @param int $scrollControlModus
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setScrollControlModus($scrollControlModus = null)
    {
        // validation for constraint: int
        if (!is_null($scrollControlModus) && !is_numeric($scrollControlModus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scrollControlModus)), __LINE__);
        }
        $this->ScrollControlModus = $scrollControlModus;
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * Get ScrollControlSize value
     * @return int
     */
    public function getScrollControlSize()
    {
        return $this->ScrollControlSize;
    }
    /**
     * Set ScrollControlSize value
     * @param int $scrollControlSize
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setScrollControlSize($scrollControlSize = null)
    {
        // validation for constraint: int
        if (!is_null($scrollControlSize) && !is_numeric($scrollControlSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scrollControlSize)), __LINE__);
        }
        $this->ScrollControlSize = $scrollControlSize;
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * Get RepeatHeaders value
     * @return bool
     */
    public function getRepeatHeaders()
    {
        return $this->RepeatHeaders;
    }
    /**
     * Set RepeatHeaders value
     * @param bool $repeatHeaders
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setRepeatHeaders($repeatHeaders = null)
    {
        // validation for constraint: boolean
        if (!is_null($repeatHeaders) && !is_bool($repeatHeaders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($repeatHeaders)), __LINE__);
        }
        $this->RepeatHeaders = $repeatHeaders;
        return $this;
    }
    /**
     * Get HeaderFrequency value
     * @return int
     */
    public function getHeaderFrequency()
    {
        return $this->HeaderFrequency;
    }
    /**
     * Set HeaderFrequency value
     * @param int $headerFrequency
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setHeaderFrequency($headerFrequency = null)
    {
        // validation for constraint: int
        if (!is_null($headerFrequency) && !is_numeric($headerFrequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($headerFrequency)), __LINE__);
        }
        $this->HeaderFrequency = $headerFrequency;
        return $this;
    }
    /**
     * Get BottomHeaders value
     * @return bool
     */
    public function getBottomHeaders()
    {
        return $this->BottomHeaders;
    }
    /**
     * Set BottomHeaders value
     * @param bool $bottomHeaders
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setBottomHeaders($bottomHeaders = null)
    {
        // validation for constraint: boolean
        if (!is_null($bottomHeaders) && !is_bool($bottomHeaders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bottomHeaders)), __LINE__);
        }
        $this->BottomHeaders = $bottomHeaders;
        return $this;
    }
    /**
     * Get LeftAndRightGridText value
     * @return bool
     */
    public function getLeftAndRightGridText()
    {
        return $this->LeftAndRightGridText;
    }
    /**
     * Set LeftAndRightGridText value
     * @param bool $leftAndRightGridText
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setLeftAndRightGridText($leftAndRightGridText = null)
    {
        // validation for constraint: boolean
        if (!is_null($leftAndRightGridText) && !is_bool($leftAndRightGridText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($leftAndRightGridText)), __LINE__);
        }
        $this->LeftAndRightGridText = $leftAndRightGridText;
        return $this;
    }
    /**
     * Get ShowScaleBars value
     * @return bool
     */
    public function getShowScaleBars()
    {
        return $this->ShowScaleBars;
    }
    /**
     * Set ShowScaleBars value
     * @param bool $showScaleBars
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setShowScaleBars($showScaleBars = null)
    {
        // validation for constraint: boolean
        if (!is_null($showScaleBars) && !is_bool($showScaleBars)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showScaleBars)), __LINE__);
        }
        $this->ShowScaleBars = $showScaleBars;
        return $this;
    }
    /**
     * Get AutoScaleWidth value
     * @return bool
     */
    public function getAutoScaleWidth()
    {
        return $this->AutoScaleWidth;
    }
    /**
     * Set AutoScaleWidth value
     * @param bool $autoScaleWidth
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setAutoScaleWidth($autoScaleWidth = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoScaleWidth) && !is_bool($autoScaleWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoScaleWidth)), __LINE__);
        }
        $this->AutoScaleWidth = $autoScaleWidth;
        return $this;
    }
    /**
     * Get GridBars value
     * @return bool
     */
    public function getGridBars()
    {
        return $this->GridBars;
    }
    /**
     * Set GridBars value
     * @param bool $gridBars
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setGridBars($gridBars = null)
    {
        // validation for constraint: boolean
        if (!is_null($gridBars) && !is_bool($gridBars)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gridBars)), __LINE__);
        }
        $this->GridBars = $gridBars;
        return $this;
    }
    /**
     * Get Carousel value
     * @return bool
     */
    public function getCarousel()
    {
        return $this->Carousel;
    }
    /**
     * Set Carousel value
     * @param bool $carousel
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setCarousel($carousel = null)
    {
        // validation for constraint: boolean
        if (!is_null($carousel) && !is_bool($carousel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($carousel)), __LINE__);
        }
        $this->Carousel = $carousel;
        return $this;
    }
    /**
     * Get StarRating value
     * @return bool
     */
    public function getStarRating()
    {
        return $this->StarRating;
    }
    /**
     * Set StarRating value
     * @param bool $starRating
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setStarRating($starRating = null)
    {
        // validation for constraint: boolean
        if (!is_null($starRating) && !is_bool($starRating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($starRating)), __LINE__);
        }
        $this->StarRating = $starRating;
        return $this;
    }
    /**
     * Get GridBarsExcludeWeighted value
     * @return bool
     */
    public function getGridBarsExcludeWeighted()
    {
        return $this->GridBarsExcludeWeighted;
    }
    /**
     * Set GridBarsExcludeWeighted value
     * @param bool $gridBarsExcludeWeighted
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setGridBarsExcludeWeighted($gridBarsExcludeWeighted = null)
    {
        // validation for constraint: boolean
        if (!is_null($gridBarsExcludeWeighted) && !is_bool($gridBarsExcludeWeighted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gridBarsExcludeWeighted)), __LINE__);
        }
        $this->GridBarsExcludeWeighted = $gridBarsExcludeWeighted;
        return $this;
    }
    /**
     * Get CardSort value
     * @return bool
     */
    public function getCardSort()
    {
        return $this->CardSort;
    }
    /**
     * Set CardSort value
     * @param bool $cardSort
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setCardSort($cardSort = null)
    {
        // validation for constraint: boolean
        if (!is_null($cardSort) && !is_bool($cardSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cardSort)), __LINE__);
        }
        $this->CardSort = $cardSort;
        return $this;
    }
    /**
     * Get CardSortIncrement value
     * @return int
     */
    public function getCardSortIncrement()
    {
        return $this->CardSortIncrement;
    }
    /**
     * Set CardSortIncrement value
     * @param int $cardSortIncrement
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setCardSortIncrement($cardSortIncrement = null)
    {
        // validation for constraint: int
        if (!is_null($cardSortIncrement) && !is_numeric($cardSortIncrement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cardSortIncrement)), __LINE__);
        }
        $this->CardSortIncrement = $cardSortIncrement;
        return $this;
    }
    /**
     * Get CardSortDroppedIncrement value
     * @return int
     */
    public function getCardSortDroppedIncrement()
    {
        return $this->CardSortDroppedIncrement;
    }
    /**
     * Set CardSortDroppedIncrement value
     * @param int $cardSortDroppedIncrement
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setCardSortDroppedIncrement($cardSortDroppedIncrement = null)
    {
        // validation for constraint: int
        if (!is_null($cardSortDroppedIncrement) && !is_numeric($cardSortDroppedIncrement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cardSortDroppedIncrement)), __LINE__);
        }
        $this->CardSortDroppedIncrement = $cardSortDroppedIncrement;
        return $this;
    }
    /**
     * Get CardSortVerticalDirection value
     * @return int
     */
    public function getCardSortVerticalDirection()
    {
        return $this->CardSortVerticalDirection;
    }
    /**
     * Set CardSortVerticalDirection value
     * @param int $cardSortVerticalDirection
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setCardSortVerticalDirection($cardSortVerticalDirection = null)
    {
        // validation for constraint: int
        if (!is_null($cardSortVerticalDirection) && !is_numeric($cardSortVerticalDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cardSortVerticalDirection)), __LINE__);
        }
        $this->CardSortVerticalDirection = $cardSortVerticalDirection;
        return $this;
    }
    /**
     * Get ScrollBarHorizontal value
     * @return int
     */
    public function getScrollBarHorizontal()
    {
        return $this->ScrollBarHorizontal;
    }
    /**
     * Set ScrollBarHorizontal value
     * @param int $scrollBarHorizontal
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setScrollBarHorizontal($scrollBarHorizontal = null)
    {
        // validation for constraint: int
        if (!is_null($scrollBarHorizontal) && !is_numeric($scrollBarHorizontal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scrollBarHorizontal)), __LINE__);
        }
        $this->ScrollBarHorizontal = $scrollBarHorizontal;
        return $this;
    }
    /**
     * Get ScrollBarWidth value
     * @return int
     */
    public function getScrollBarWidth()
    {
        return $this->ScrollBarWidth;
    }
    /**
     * Set ScrollBarWidth value
     * @param int $scrollBarWidth
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setScrollBarWidth($scrollBarWidth = null)
    {
        // validation for constraint: int
        if (!is_null($scrollBarWidth) && !is_numeric($scrollBarWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scrollBarWidth)), __LINE__);
        }
        $this->ScrollBarWidth = $scrollBarWidth;
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * Get GrayoutSelected value
     * @return bool
     */
    public function getGrayoutSelected()
    {
        return $this->GrayoutSelected;
    }
    /**
     * Set GrayoutSelected value
     * @param bool $grayoutSelected
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setGrayoutSelected($grayoutSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($grayoutSelected) && !is_bool($grayoutSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($grayoutSelected)), __LINE__);
        }
        $this->GrayoutSelected = $grayoutSelected;
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * Get Answers value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice4|null
     */
    public function getAnswers()
    {
        return $this->Answers;
    }
    /**
     * Set Answers value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice4 $answers
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setAnswers(\Confirmit\Authoring\StructType\ArrayOfChoice4 $answers = null)
    {
        $this->Answers = $answers;
        return $this;
    }
    /**
     * Get Scales value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice5|null
     */
    public function getScales()
    {
        return $this->Scales;
    }
    /**
     * Set Scales value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice5 $scales
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setScales(\Confirmit\Authoring\StructType\ArrayOfChoice5 $scales = null)
    {
        $this->Scales = $scales;
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setPrecodeMaskPredefinedScript(\Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null)
    {
        $this->PrecodeMaskPredefinedScript = $precodeMaskPredefinedScript;
        return $this;
    }
    /**
     * Get ScalePrecodeMask value
     * @return string|null
     */
    public function getScalePrecodeMask()
    {
        return $this->ScalePrecodeMask;
    }
    /**
     * Set ScalePrecodeMask value
     * @param string $scalePrecodeMask
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function setScalePrecodeMask($scalePrecodeMask = null)
    {
        // validation for constraint: string
        if (!is_null($scalePrecodeMask) && !is_string($scalePrecodeMask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scalePrecodeMask)), __LINE__);
        }
        $this->ScalePrecodeMask = $scalePrecodeMask;
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * @return \Confirmit\Authoring\StructType\GridForm
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GridForm
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
