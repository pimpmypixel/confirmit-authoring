<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Grid3DForm StructType
 * @subpackage Structs
 */
class Grid3DForm extends FormBase
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
     * The ScaleOrder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ScaleOrder;
    /**
     * The Randomize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Randomize;
    /**
     * The ScrollControlModus
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ScrollControlModus;
    /**
     * The ScrollControlSize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ScrollControlSize;
    /**
     * The UseAnswerImages
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UseAnswerImages;
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
     * The AnswerButtonsMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $AnswerButtonsMode;
    /**
     * The Transpose
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Transpose;
    /**
     * The NotPerformDataCleaningOnMasking
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $NotPerformDataCleaningOnMasking;
    /**
     * The Nodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice7
     */
    public $Nodes;
    /**
     * The Answers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice8
     */
    public $Answers;
    /**
     * The ValidationCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ValidationCode;
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
     * The TransposeQuestionsMask
     * @var string
     */
    public $TransposeQuestionsMask;
    /**
     * Constructor method for Grid3DForm
     * @uses Grid3DForm::setUsePredefinedScript()
     * @uses Grid3DForm::setOtherColumns()
     * @uses Grid3DForm::setOtherRows()
     * @uses Grid3DForm::setScrollBarHorizontal()
     * @uses Grid3DForm::setScrollBarWidth()
     * @uses Grid3DForm::setAnswerlistOrder()
     * @uses Grid3DForm::setSubHeaderOrder()
     * @uses Grid3DForm::setTextWidth()
     * @uses Grid3DForm::setTextWidthUnit()
     * @uses Grid3DForm::setScaleOrder()
     * @uses Grid3DForm::setRandomize()
     * @uses Grid3DForm::setScrollControlModus()
     * @uses Grid3DForm::setScrollControlSize()
     * @uses Grid3DForm::setUseAnswerImages()
     * @uses Grid3DForm::setRepeatHeaders()
     * @uses Grid3DForm::setHeaderFrequency()
     * @uses Grid3DForm::setBottomHeaders()
     * @uses Grid3DForm::setAnswerButtonsMode()
     * @uses Grid3DForm::setTranspose()
     * @uses Grid3DForm::setNotPerformDataCleaningOnMasking()
     * @uses Grid3DForm::setNodes()
     * @uses Grid3DForm::setAnswers()
     * @uses Grid3DForm::setValidationCode()
     * @uses Grid3DForm::setPrecodeMask()
     * @uses Grid3DForm::setPrecodeMaskPredefinedScript()
     * @uses Grid3DForm::setImageWidth()
     * @uses Grid3DForm::setImageHeight()
     * @uses Grid3DForm::setTransposeQuestionsMask()
     * @param bool $usePredefinedScript
     * @param int $otherColumns
     * @param int $otherRows
     * @param int $scrollBarHorizontal
     * @param int $scrollBarWidth
     * @param string $answerlistOrder
     * @param string $subHeaderOrder
     * @param int $textWidth
     * @param string $textWidthUnit
     * @param string $scaleOrder
     * @param bool $randomize
     * @param int $scrollControlModus
     * @param int $scrollControlSize
     * @param bool $useAnswerImages
     * @param bool $repeatHeaders
     * @param int $headerFrequency
     * @param bool $bottomHeaders
     * @param string $answerButtonsMode
     * @param bool $transpose
     * @param bool $notPerformDataCleaningOnMasking
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice7 $nodes
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice8 $answers
     * @param string $validationCode
     * @param string $precodeMask
     * @param \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript
     * @param string $imageWidth
     * @param string $imageHeight
     * @param string $transposeQuestionsMask
     */
    public function __construct($usePredefinedScript = null, $otherColumns = null, $otherRows = null, $scrollBarHorizontal = null, $scrollBarWidth = null, $answerlistOrder = null, $subHeaderOrder = null, $textWidth = null, $textWidthUnit = null, $scaleOrder = null, $randomize = null, $scrollControlModus = null, $scrollControlSize = null, $useAnswerImages = null, $repeatHeaders = null, $headerFrequency = null, $bottomHeaders = null, $answerButtonsMode = null, $transpose = null, $notPerformDataCleaningOnMasking = null, \Confirmit\Authoring\StructType\ArrayOfChoice7 $nodes = null, \Confirmit\Authoring\StructType\ArrayOfChoice8 $answers = null, $validationCode = null, $precodeMask = null, \Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null, $imageWidth = null, $imageHeight = null, $transposeQuestionsMask = null)
    {
        $this
            ->setUsePredefinedScript($usePredefinedScript)
            ->setOtherColumns($otherColumns)
            ->setOtherRows($otherRows)
            ->setScrollBarHorizontal($scrollBarHorizontal)
            ->setScrollBarWidth($scrollBarWidth)
            ->setAnswerlistOrder($answerlistOrder)
            ->setSubHeaderOrder($subHeaderOrder)
            ->setTextWidth($textWidth)
            ->setTextWidthUnit($textWidthUnit)
            ->setScaleOrder($scaleOrder)
            ->setRandomize($randomize)
            ->setScrollControlModus($scrollControlModus)
            ->setScrollControlSize($scrollControlSize)
            ->setUseAnswerImages($useAnswerImages)
            ->setRepeatHeaders($repeatHeaders)
            ->setHeaderFrequency($headerFrequency)
            ->setBottomHeaders($bottomHeaders)
            ->setAnswerButtonsMode($answerButtonsMode)
            ->setTranspose($transpose)
            ->setNotPerformDataCleaningOnMasking($notPerformDataCleaningOnMasking)
            ->setNodes($nodes)
            ->setAnswers($answers)
            ->setValidationCode($validationCode)
            ->setPrecodeMask($precodeMask)
            ->setPrecodeMaskPredefinedScript($precodeMaskPredefinedScript)
            ->setImageWidth($imageWidth)
            ->setImageHeight($imageHeight)
            ->setTransposeQuestionsMask($transposeQuestionsMask);
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * Get Transpose value
     * @return bool
     */
    public function getTranspose()
    {
        return $this->Transpose;
    }
    /**
     * Set Transpose value
     * @param bool $transpose
     * @return \Confirmit\Authoring\StructType\Grid3DForm
     */
    public function setTranspose($transpose = null)
    {
        // validation for constraint: boolean
        if (!is_null($transpose) && !is_bool($transpose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($transpose)), __LINE__);
        }
        $this->Transpose = $transpose;
        return $this;
    }
    /**
     * Get NotPerformDataCleaningOnMasking value
     * @return bool
     */
    public function getNotPerformDataCleaningOnMasking()
    {
        return $this->NotPerformDataCleaningOnMasking;
    }
    /**
     * Set NotPerformDataCleaningOnMasking value
     * @param bool $notPerformDataCleaningOnMasking
     * @return \Confirmit\Authoring\StructType\Grid3DForm
     */
    public function setNotPerformDataCleaningOnMasking($notPerformDataCleaningOnMasking = null)
    {
        // validation for constraint: boolean
        if (!is_null($notPerformDataCleaningOnMasking) && !is_bool($notPerformDataCleaningOnMasking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($notPerformDataCleaningOnMasking)), __LINE__);
        }
        $this->NotPerformDataCleaningOnMasking = $notPerformDataCleaningOnMasking;
        return $this;
    }
    /**
     * Get Nodes value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice7|null
     */
    public function getNodes()
    {
        return $this->Nodes;
    }
    /**
     * Set Nodes value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice7 $nodes
     * @return \Confirmit\Authoring\StructType\Grid3DForm
     */
    public function setNodes(\Confirmit\Authoring\StructType\ArrayOfChoice7 $nodes = null)
    {
        $this->Nodes = $nodes;
        return $this;
    }
    /**
     * Get Answers value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice8|null
     */
    public function getAnswers()
    {
        return $this->Answers;
    }
    /**
     * Set Answers value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice8 $answers
     * @return \Confirmit\Authoring\StructType\Grid3DForm
     */
    public function setAnswers(\Confirmit\Authoring\StructType\ArrayOfChoice8 $answers = null)
    {
        $this->Answers = $answers;
        return $this;
    }
    /**
     * Get ValidationCode value
     * @return string|null
     */
    public function getValidationCode()
    {
        return $this->ValidationCode;
    }
    /**
     * Set ValidationCode value
     * @param string $validationCode
     * @return \Confirmit\Authoring\StructType\Grid3DForm
     */
    public function setValidationCode($validationCode = null)
    {
        // validation for constraint: string
        if (!is_null($validationCode) && !is_string($validationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validationCode)), __LINE__);
        }
        $this->ValidationCode = $validationCode;
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
     */
    public function setPrecodeMaskPredefinedScript(\Confirmit\Authoring\StructType\PredefinedScriptBase $precodeMaskPredefinedScript = null)
    {
        $this->PrecodeMaskPredefinedScript = $precodeMaskPredefinedScript;
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
     * Get TransposeQuestionsMask value
     * @return string|null
     */
    public function getTransposeQuestionsMask()
    {
        return $this->TransposeQuestionsMask;
    }
    /**
     * Set TransposeQuestionsMask value
     * @param string $transposeQuestionsMask
     * @return \Confirmit\Authoring\StructType\Grid3DForm
     */
    public function setTransposeQuestionsMask($transposeQuestionsMask = null)
    {
        // validation for constraint: string
        if (!is_null($transposeQuestionsMask) && !is_string($transposeQuestionsMask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transposeQuestionsMask)), __LINE__);
        }
        $this->TransposeQuestionsMask = $transposeQuestionsMask;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Grid3DForm
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
