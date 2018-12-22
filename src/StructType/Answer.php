<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Answer StructType
 * @subpackage Structs
 */
class Answer extends AnswerBase
{
    /**
     * The ColumnWidth
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ColumnWidth;
    /**
     * The LookupId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $LookupId;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Weight;
    /**
     * The Punch
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Punch;
    /**
     * The SkipType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SkipType;
    /**
     * The SkipEndStatus
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SkipEndStatus;
    /**
     * The RdgSingleProportion
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $RdgSingleProportion;
    /**
     * The RdgMultiProportion
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $RdgMultiProportion;
    /**
     * The BarHeight
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $BarHeight;
    /**
     * The Texts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfAnswerText
     */
    public $Texts;
    /**
     * The TextsRight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfAnswerText
     */
    public $TextsRight;
    /**
     * The Expression
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expression;
    /**
     * The BackgroundColor
     * @var string
     */
    public $BackgroundColor;
    /**
     * The SkipPageName
     * @var string
     */
    public $SkipPageName;
    /**
     * The DefaultImageUrl
     * @var string
     */
    public $DefaultImageUrl;
    /**
     * The HoverImageUrl
     * @var string
     */
    public $HoverImageUrl;
    /**
     * The SelectedImageUrl
     * @var string
     */
    public $SelectedImageUrl;
    /**
     * Constructor method for Answer
     * @uses Answer::setColumnWidth()
     * @uses Answer::setLookupId()
     * @uses Answer::setWeight()
     * @uses Answer::setPunch()
     * @uses Answer::setSkipType()
     * @uses Answer::setSkipEndStatus()
     * @uses Answer::setRdgSingleProportion()
     * @uses Answer::setRdgMultiProportion()
     * @uses Answer::setBarHeight()
     * @uses Answer::setTexts()
     * @uses Answer::setTextsRight()
     * @uses Answer::setExpression()
     * @uses Answer::setBackgroundColor()
     * @uses Answer::setSkipPageName()
     * @uses Answer::setDefaultImageUrl()
     * @uses Answer::setHoverImageUrl()
     * @uses Answer::setSelectedImageUrl()
     * @param int $columnWidth
     * @param int $lookupId
     * @param float $weight
     * @param string $punch
     * @param string $skipType
     * @param string $skipEndStatus
     * @param int $rdgSingleProportion
     * @param int $rdgMultiProportion
     * @param int $barHeight
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $textsRight
     * @param string $expression
     * @param string $backgroundColor
     * @param string $skipPageName
     * @param string $defaultImageUrl
     * @param string $hoverImageUrl
     * @param string $selectedImageUrl
     */
    public function __construct($columnWidth = null, $lookupId = null, $weight = null, $punch = null, $skipType = null, $skipEndStatus = null, $rdgSingleProportion = null, $rdgMultiProportion = null, $barHeight = null, \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts = null, \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $textsRight = null, $expression = null, $backgroundColor = null, $skipPageName = null, $defaultImageUrl = null, $hoverImageUrl = null, $selectedImageUrl = null)
    {
        $this
            ->setColumnWidth($columnWidth)
            ->setLookupId($lookupId)
            ->setWeight($weight)
            ->setPunch($punch)
            ->setSkipType($skipType)
            ->setSkipEndStatus($skipEndStatus)
            ->setRdgSingleProportion($rdgSingleProportion)
            ->setRdgMultiProportion($rdgMultiProportion)
            ->setBarHeight($barHeight)
            ->setTexts($texts)
            ->setTextsRight($textsRight)
            ->setExpression($expression)
            ->setBackgroundColor($backgroundColor)
            ->setSkipPageName($skipPageName)
            ->setDefaultImageUrl($defaultImageUrl)
            ->setHoverImageUrl($hoverImageUrl)
            ->setSelectedImageUrl($selectedImageUrl);
    }
    /**
     * Get ColumnWidth value
     * @return int
     */
    public function getColumnWidth()
    {
        return $this->ColumnWidth;
    }
    /**
     * Set ColumnWidth value
     * @param int $columnWidth
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setColumnWidth($columnWidth = null)
    {
        // validation for constraint: int
        if (!is_null($columnWidth) && !is_numeric($columnWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($columnWidth)), __LINE__);
        }
        $this->ColumnWidth = $columnWidth;
        return $this;
    }
    /**
     * Get LookupId value
     * @return int
     */
    public function getLookupId()
    {
        return $this->LookupId;
    }
    /**
     * Set LookupId value
     * @param int $lookupId
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setLookupId($lookupId = null)
    {
        // validation for constraint: int
        if (!is_null($lookupId) && !is_numeric($lookupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lookupId)), __LINE__);
        }
        $this->LookupId = $lookupId;
        return $this;
    }
    /**
     * Get Weight value
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $weight
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setWeight($weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Punch value
     * @return string
     */
    public function getPunch()
    {
        return $this->Punch;
    }
    /**
     * Set Punch value
     * @uses \Confirmit\Authoring\EnumType\PunchType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\PunchType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $punch
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setPunch($punch = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\PunchType::valueIsValid($punch)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $punch, implode(', ', \Confirmit\Authoring\EnumType\PunchType::getValidValues())), __LINE__);
        }
        $this->Punch = $punch;
        return $this;
    }
    /**
     * Get SkipType value
     * @return string
     */
    public function getSkipType()
    {
        return $this->SkipType;
    }
    /**
     * Set SkipType value
     * @uses \Confirmit\Authoring\EnumType\SkipType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SkipType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $skipType
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setSkipType($skipType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SkipType::valueIsValid($skipType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $skipType, implode(', ', \Confirmit\Authoring\EnumType\SkipType::getValidValues())), __LINE__);
        }
        $this->SkipType = $skipType;
        return $this;
    }
    /**
     * Get SkipEndStatus value
     * @return string
     */
    public function getSkipEndStatus()
    {
        return $this->SkipEndStatus;
    }
    /**
     * Set SkipEndStatus value
     * @uses \Confirmit\Authoring\EnumType\StopDataType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\StopDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $skipEndStatus
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setSkipEndStatus($skipEndStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\StopDataType::valueIsValid($skipEndStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $skipEndStatus, implode(', ', \Confirmit\Authoring\EnumType\StopDataType::getValidValues())), __LINE__);
        }
        $this->SkipEndStatus = $skipEndStatus;
        return $this;
    }
    /**
     * Get RdgSingleProportion value
     * @return int
     */
    public function getRdgSingleProportion()
    {
        return $this->RdgSingleProportion;
    }
    /**
     * Set RdgSingleProportion value
     * @param int $rdgSingleProportion
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setRdgSingleProportion($rdgSingleProportion = null)
    {
        // validation for constraint: int
        if (!is_null($rdgSingleProportion) && !is_numeric($rdgSingleProportion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rdgSingleProportion)), __LINE__);
        }
        $this->RdgSingleProportion = $rdgSingleProportion;
        return $this;
    }
    /**
     * Get RdgMultiProportion value
     * @return int
     */
    public function getRdgMultiProportion()
    {
        return $this->RdgMultiProportion;
    }
    /**
     * Set RdgMultiProportion value
     * @param int $rdgMultiProportion
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setRdgMultiProportion($rdgMultiProportion = null)
    {
        // validation for constraint: int
        if (!is_null($rdgMultiProportion) && !is_numeric($rdgMultiProportion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rdgMultiProportion)), __LINE__);
        }
        $this->RdgMultiProportion = $rdgMultiProportion;
        return $this;
    }
    /**
     * Get BarHeight value
     * @return int
     */
    public function getBarHeight()
    {
        return $this->BarHeight;
    }
    /**
     * Set BarHeight value
     * @param int $barHeight
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setBarHeight($barHeight = null)
    {
        // validation for constraint: int
        if (!is_null($barHeight) && !is_numeric($barHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($barHeight)), __LINE__);
        }
        $this->BarHeight = $barHeight;
        return $this;
    }
    /**
     * Get Texts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerText|null
     */
    public function getTexts()
    {
        return $this->Texts;
    }
    /**
     * Set Texts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setTexts(\Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts = null)
    {
        $this->Texts = $texts;
        return $this;
    }
    /**
     * Get TextsRight value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerText|null
     */
    public function getTextsRight()
    {
        return $this->TextsRight;
    }
    /**
     * Set TextsRight value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $textsRight
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setTextsRight(\Confirmit\Authoring\ArrayType\ArrayOfAnswerText $textsRight = null)
    {
        $this->TextsRight = $textsRight;
        return $this;
    }
    /**
     * Get Expression value
     * @return string|null
     */
    public function getExpression()
    {
        return $this->Expression;
    }
    /**
     * Set Expression value
     * @param string $expression
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setExpression($expression = null)
    {
        // validation for constraint: string
        if (!is_null($expression) && !is_string($expression)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expression)), __LINE__);
        }
        $this->Expression = $expression;
        return $this;
    }
    /**
     * Get BackgroundColor value
     * @return string|null
     */
    public function getBackgroundColor()
    {
        return $this->BackgroundColor;
    }
    /**
     * Set BackgroundColor value
     * @param string $backgroundColor
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setBackgroundColor($backgroundColor = null)
    {
        // validation for constraint: string
        if (!is_null($backgroundColor) && !is_string($backgroundColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backgroundColor)), __LINE__);
        }
        $this->BackgroundColor = $backgroundColor;
        return $this;
    }
    /**
     * Get SkipPageName value
     * @return string|null
     */
    public function getSkipPageName()
    {
        return $this->SkipPageName;
    }
    /**
     * Set SkipPageName value
     * @param string $skipPageName
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setSkipPageName($skipPageName = null)
    {
        // validation for constraint: string
        if (!is_null($skipPageName) && !is_string($skipPageName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($skipPageName)), __LINE__);
        }
        $this->SkipPageName = $skipPageName;
        return $this;
    }
    /**
     * Get DefaultImageUrl value
     * @return string|null
     */
    public function getDefaultImageUrl()
    {
        return $this->DefaultImageUrl;
    }
    /**
     * Set DefaultImageUrl value
     * @param string $defaultImageUrl
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setDefaultImageUrl($defaultImageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($defaultImageUrl) && !is_string($defaultImageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultImageUrl)), __LINE__);
        }
        $this->DefaultImageUrl = $defaultImageUrl;
        return $this;
    }
    /**
     * Get HoverImageUrl value
     * @return string|null
     */
    public function getHoverImageUrl()
    {
        return $this->HoverImageUrl;
    }
    /**
     * Set HoverImageUrl value
     * @param string $hoverImageUrl
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setHoverImageUrl($hoverImageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($hoverImageUrl) && !is_string($hoverImageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hoverImageUrl)), __LINE__);
        }
        $this->HoverImageUrl = $hoverImageUrl;
        return $this;
    }
    /**
     * Get SelectedImageUrl value
     * @return string|null
     */
    public function getSelectedImageUrl()
    {
        return $this->SelectedImageUrl;
    }
    /**
     * Set SelectedImageUrl value
     * @param string $selectedImageUrl
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function setSelectedImageUrl($selectedImageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($selectedImageUrl) && !is_string($selectedImageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($selectedImageUrl)), __LINE__);
        }
        $this->SelectedImageUrl = $selectedImageUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Answer
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
