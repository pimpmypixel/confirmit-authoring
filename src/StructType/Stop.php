<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Stop StructType
 * @subpackage Structs
 */
class Stop extends QuestionnaireNode
{
    /**
     * The StopType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $StopType;
    /**
     * The ITS
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ITS;
    /**
     * The ExcludeTranslation
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ExcludeTranslation;
    /**
     * The PageMasterName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PageMasterName;
    /**
     * The CompleteTexts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString
     */
    public $CompleteTexts;
    /**
     * The CompleteTitles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString1
     */
    public $CompleteTitles;
    /**
     * The TranslationStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public $TranslationStatuses;
    /**
     * Constructor method for Stop
     * @uses Stop::setStopType()
     * @uses Stop::setITS()
     * @uses Stop::setExcludeTranslation()
     * @uses Stop::setPageMasterName()
     * @uses Stop::setCompleteTexts()
     * @uses Stop::setCompleteTitles()
     * @uses Stop::setTranslationStatuses()
     * @param string $stopType
     * @param int $iTS
     * @param bool $excludeTranslation
     * @param string $pageMasterName
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString $completeTexts
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString1 $completeTitles
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     */
    public function __construct($stopType = null, $iTS = null, $excludeTranslation = null, $pageMasterName = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString $completeTexts = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString1 $completeTitles = null, \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this
            ->setStopType($stopType)
            ->setITS($iTS)
            ->setExcludeTranslation($excludeTranslation)
            ->setPageMasterName($pageMasterName)
            ->setCompleteTexts($completeTexts)
            ->setCompleteTitles($completeTitles)
            ->setTranslationStatuses($translationStatuses);
    }
    /**
     * Get StopType value
     * @return string
     */
    public function getStopType()
    {
        return $this->StopType;
    }
    /**
     * Set StopType value
     * @uses \Confirmit\Authoring\EnumType\StopDataType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\StopDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $stopType
     * @return \Confirmit\Authoring\StructType\Stop
     */
    public function setStopType($stopType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\StopDataType::valueIsValid($stopType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $stopType, implode(', ', \Confirmit\Authoring\EnumType\StopDataType::getValidValues())), __LINE__);
        }
        $this->StopType = $stopType;
        return $this;
    }
    /**
     * Get ITS value
     * @return int
     */
    public function getITS()
    {
        return $this->ITS;
    }
    /**
     * Set ITS value
     * @param int $iTS
     * @return \Confirmit\Authoring\StructType\Stop
     */
    public function setITS($iTS = null)
    {
        // validation for constraint: int
        if (!is_null($iTS) && !is_numeric($iTS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iTS)), __LINE__);
        }
        $this->ITS = $iTS;
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
     * @return \Confirmit\Authoring\StructType\Stop
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
     * Get PageMasterName value
     * @return string|null
     */
    public function getPageMasterName()
    {
        return $this->PageMasterName;
    }
    /**
     * Set PageMasterName value
     * @param string $pageMasterName
     * @return \Confirmit\Authoring\StructType\Stop
     */
    public function setPageMasterName($pageMasterName = null)
    {
        // validation for constraint: string
        if (!is_null($pageMasterName) && !is_string($pageMasterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pageMasterName)), __LINE__);
        }
        $this->PageMasterName = $pageMasterName;
        return $this;
    }
    /**
     * Get CompleteTexts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString|null
     */
    public function getCompleteTexts()
    {
        return $this->CompleteTexts;
    }
    /**
     * Set CompleteTexts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString $completeTexts
     * @return \Confirmit\Authoring\StructType\Stop
     */
    public function setCompleteTexts(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString $completeTexts = null)
    {
        $this->CompleteTexts = $completeTexts;
        return $this;
    }
    /**
     * Get CompleteTitles value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString1|null
     */
    public function getCompleteTitles()
    {
        return $this->CompleteTitles;
    }
    /**
     * Set CompleteTitles value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString1 $completeTitles
     * @return \Confirmit\Authoring\StructType\Stop
     */
    public function setCompleteTitles(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString1 $completeTitles = null)
    {
        $this->CompleteTitles = $completeTitles;
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
     * @return \Confirmit\Authoring\StructType\Stop
     */
    public function setTranslationStatuses(\Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this->TranslationStatuses = $translationStatuses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Stop
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
