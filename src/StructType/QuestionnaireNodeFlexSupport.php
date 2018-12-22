<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuestionnaireNodeFlexSupport StructType
 * @subpackage Structs
 */
abstract class QuestionnaireNodeFlexSupport extends QuestionnaireNode
{
    /**
     * The ShowDownloadLink
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ShowDownloadLink;
    /**
     * The FallbackStrategy
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FallbackStrategy;
    /**
     * The QuestionPackItemId
     * @var string
     */
    public $QuestionPackItemId;
    /**
     * Constructor method for QuestionnaireNodeFlexSupport
     * @uses QuestionnaireNodeFlexSupport::setShowDownloadLink()
     * @uses QuestionnaireNodeFlexSupport::setFallbackStrategy()
     * @uses QuestionnaireNodeFlexSupport::setQuestionPackItemId()
     * @param bool $showDownloadLink
     * @param string $fallbackStrategy
     * @param string $questionPackItemId
     */
    public function __construct($showDownloadLink = null, $fallbackStrategy = null, $questionPackItemId = null)
    {
        $this
            ->setShowDownloadLink($showDownloadLink)
            ->setFallbackStrategy($fallbackStrategy)
            ->setQuestionPackItemId($questionPackItemId);
    }
    /**
     * Get ShowDownloadLink value
     * @return bool
     */
    public function getShowDownloadLink()
    {
        return $this->ShowDownloadLink;
    }
    /**
     * Set ShowDownloadLink value
     * @param bool $showDownloadLink
     * @return \Confirmit\Authoring\StructType\QuestionnaireNodeFlexSupport
     */
    public function setShowDownloadLink($showDownloadLink = null)
    {
        // validation for constraint: boolean
        if (!is_null($showDownloadLink) && !is_bool($showDownloadLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showDownloadLink)), __LINE__);
        }
        $this->ShowDownloadLink = $showDownloadLink;
        return $this;
    }
    /**
     * Get FallbackStrategy value
     * @return string
     */
    public function getFallbackStrategy()
    {
        return $this->FallbackStrategy;
    }
    /**
     * Set FallbackStrategy value
     * @uses \Confirmit\Authoring\EnumType\FlexFallbackStrategy::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\FlexFallbackStrategy::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fallbackStrategy
     * @return \Confirmit\Authoring\StructType\QuestionnaireNodeFlexSupport
     */
    public function setFallbackStrategy($fallbackStrategy = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\FlexFallbackStrategy::valueIsValid($fallbackStrategy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fallbackStrategy, implode(', ', \Confirmit\Authoring\EnumType\FlexFallbackStrategy::getValidValues())), __LINE__);
        }
        $this->FallbackStrategy = $fallbackStrategy;
        return $this;
    }
    /**
     * Get QuestionPackItemId value
     * @return string|null
     */
    public function getQuestionPackItemId()
    {
        return $this->QuestionPackItemId;
    }
    /**
     * Set QuestionPackItemId value
     * @param string $questionPackItemId
     * @return \Confirmit\Authoring\StructType\QuestionnaireNodeFlexSupport
     */
    public function setQuestionPackItemId($questionPackItemId = null)
    {
        // validation for constraint: string
        if (!is_null($questionPackItemId) && !is_string($questionPackItemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionPackItemId)), __LINE__);
        }
        $this->QuestionPackItemId = $questionPackItemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\QuestionnaireNodeFlexSupport
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
