<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssSurvey StructType
 * @subpackage Structs
 */
class SssSurvey extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $version;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SpecializedTexts
     */
    public $title;
    /**
     * The record
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssRecord
     */
    public $record;
    /**
     * Constructor method for SssSurvey
     * @uses SssSurvey::setName()
     * @uses SssSurvey::setVersion()
     * @uses SssSurvey::setTitle()
     * @uses SssSurvey::setRecord()
     * @param string $name
     * @param string $version
     * @param \Confirmit\Authoring\StructType\SpecializedTexts $title
     * @param \Confirmit\Authoring\StructType\SssRecord $record
     */
    public function __construct($name = null, $version = null, \Confirmit\Authoring\StructType\SpecializedTexts $title = null, \Confirmit\Authoring\StructType\SssRecord $record = null)
    {
        $this
            ->setName($name)
            ->setVersion($version)
            ->setTitle($title)
            ->setRecord($record);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Confirmit\Authoring\StructType\SssSurvey
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Confirmit\Authoring\StructType\SssSurvey
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Get title value
     * @return \Confirmit\Authoring\StructType\SpecializedTexts|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param \Confirmit\Authoring\StructType\SpecializedTexts $title
     * @return \Confirmit\Authoring\StructType\SssSurvey
     */
    public function setTitle(\Confirmit\Authoring\StructType\SpecializedTexts $title = null)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Get record value
     * @return \Confirmit\Authoring\StructType\SssRecord|null
     */
    public function getRecord()
    {
        return $this->record;
    }
    /**
     * Set record value
     * @param \Confirmit\Authoring\StructType\SssRecord $record
     * @return \Confirmit\Authoring\StructType\SssSurvey
     */
    public function setRecord(\Confirmit\Authoring\StructType\SssRecord $record = null)
    {
        $this->record = $record;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssSurvey
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
