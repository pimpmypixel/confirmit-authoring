<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PredefinedList StructType
 * @subpackage Structs
 */
class PredefinedList extends Node
{
    /**
     * The ExcludeTranslation
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ExcludeTranslation;
    /**
     * The ReadOnly
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReadOnly;
    /**
     * The IncludeRightText
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IncludeRightText;
    /**
     * The UseAnswerImages
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UseAnswerImages;
    /**
     * The Seed
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Seed;
    /**
     * The Answers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice15
     */
    public $Answers;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The TranslationStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public $TranslationStatuses;
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
     * Constructor method for PredefinedList
     * @uses PredefinedList::setExcludeTranslation()
     * @uses PredefinedList::setReadOnly()
     * @uses PredefinedList::setIncludeRightText()
     * @uses PredefinedList::setUseAnswerImages()
     * @uses PredefinedList::setSeed()
     * @uses PredefinedList::setAnswers()
     * @uses PredefinedList::setName()
     * @uses PredefinedList::setTranslationStatuses()
     * @uses PredefinedList::setImageWidth()
     * @uses PredefinedList::setImageHeight()
     * @param bool $excludeTranslation
     * @param bool $readOnly
     * @param bool $includeRightText
     * @param bool $useAnswerImages
     * @param int $seed
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice15 $answers
     * @param string $name
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     * @param string $imageWidth
     * @param string $imageHeight
     */
    public function __construct($excludeTranslation = null, $readOnly = null, $includeRightText = null, $useAnswerImages = null, $seed = null, \Confirmit\Authoring\StructType\ArrayOfChoice15 $answers = null, $name = null, \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null, $imageWidth = null, $imageHeight = null)
    {
        $this
            ->setExcludeTranslation($excludeTranslation)
            ->setReadOnly($readOnly)
            ->setIncludeRightText($includeRightText)
            ->setUseAnswerImages($useAnswerImages)
            ->setSeed($seed)
            ->setAnswers($answers)
            ->setName($name)
            ->setTranslationStatuses($translationStatuses)
            ->setImageWidth($imageWidth)
            ->setImageHeight($imageHeight);
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
     * @return \Confirmit\Authoring\StructType\PredefinedList
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
     * @return \Confirmit\Authoring\StructType\PredefinedList
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
     * Get IncludeRightText value
     * @return bool
     */
    public function getIncludeRightText()
    {
        return $this->IncludeRightText;
    }
    /**
     * Set IncludeRightText value
     * @param bool $includeRightText
     * @return \Confirmit\Authoring\StructType\PredefinedList
     */
    public function setIncludeRightText($includeRightText = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeRightText) && !is_bool($includeRightText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeRightText)), __LINE__);
        }
        $this->IncludeRightText = $includeRightText;
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
     * @return \Confirmit\Authoring\StructType\PredefinedList
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
     * Get Seed value
     * @return int
     */
    public function getSeed()
    {
        return $this->Seed;
    }
    /**
     * Set Seed value
     * @param int $seed
     * @return \Confirmit\Authoring\StructType\PredefinedList
     */
    public function setSeed($seed = null)
    {
        // validation for constraint: int
        if (!is_null($seed) && !is_numeric($seed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seed)), __LINE__);
        }
        $this->Seed = $seed;
        return $this;
    }
    /**
     * Get Answers value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice15|null
     */
    public function getAnswers()
    {
        return $this->Answers;
    }
    /**
     * Set Answers value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice15 $answers
     * @return \Confirmit\Authoring\StructType\PredefinedList
     */
    public function setAnswers(\Confirmit\Authoring\StructType\ArrayOfChoice15 $answers = null)
    {
        $this->Answers = $answers;
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
     * @return \Confirmit\Authoring\StructType\PredefinedList
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
     * @return \Confirmit\Authoring\StructType\PredefinedList
     */
    public function setTranslationStatuses(\Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this->TranslationStatuses = $translationStatuses;
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
     * @return \Confirmit\Authoring\StructType\PredefinedList
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
     * @return \Confirmit\Authoring\StructType\PredefinedList
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
     * @return \Confirmit\Authoring\StructType\PredefinedList
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
