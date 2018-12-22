<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurveySchema StructType
 * @subpackage Structs
 */
class SurveySchema extends AbstractStructBase
{
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $State;
    /**
     * The SchemaSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SchemaSource;
    /**
     * The ReadFilter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ReadFilter
     */
    public $ReadFilter;
    /**
     * The Root
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\Root
     */
    public $Root;
    /**
     * Constructor method for SurveySchema
     * @uses SurveySchema::setState()
     * @uses SurveySchema::setSchemaSource()
     * @uses SurveySchema::setReadFilter()
     * @uses SurveySchema::setRoot()
     * @param string $state
     * @param string $schemaSource
     * @param \Confirmit\Authoring\StructType\ReadFilter $readFilter
     * @param \Confirmit\Authoring\StructType\Root $root
     */
    public function __construct($state = null, $schemaSource = null, \Confirmit\Authoring\StructType\ReadFilter $readFilter = null, \Confirmit\Authoring\StructType\Root $root = null)
    {
        $this
            ->setState($state)
            ->setSchemaSource($schemaSource)
            ->setReadFilter($readFilter)
            ->setRoot($root);
    }
    /**
     * Get State value
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \Confirmit\Authoring\EnumType\StateType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\StateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $state
     * @return \Confirmit\Authoring\StructType\SurveySchema
     */
    public function setState($state = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\StateType::valueIsValid($state)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $state, implode(', ', \Confirmit\Authoring\EnumType\StateType::getValidValues())), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get SchemaSource value
     * @return string
     */
    public function getSchemaSource()
    {
        return $this->SchemaSource;
    }
    /**
     * Set SchemaSource value
     * @uses \Confirmit\Authoring\EnumType\SchemaSourceType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SchemaSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $schemaSource
     * @return \Confirmit\Authoring\StructType\SurveySchema
     */
    public function setSchemaSource($schemaSource = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SchemaSourceType::valueIsValid($schemaSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $schemaSource, implode(', ', \Confirmit\Authoring\EnumType\SchemaSourceType::getValidValues())), __LINE__);
        }
        $this->SchemaSource = $schemaSource;
        return $this;
    }
    /**
     * Get ReadFilter value
     * @return \Confirmit\Authoring\StructType\ReadFilter|null
     */
    public function getReadFilter()
    {
        return $this->ReadFilter;
    }
    /**
     * Set ReadFilter value
     * @param \Confirmit\Authoring\StructType\ReadFilter $readFilter
     * @return \Confirmit\Authoring\StructType\SurveySchema
     */
    public function setReadFilter(\Confirmit\Authoring\StructType\ReadFilter $readFilter = null)
    {
        $this->ReadFilter = $readFilter;
        return $this;
    }
    /**
     * Get Root value
     * @return \Confirmit\Authoring\StructType\Root|null
     */
    public function getRoot()
    {
        return $this->Root;
    }
    /**
     * Set Root value
     * @param \Confirmit\Authoring\StructType\Root $root
     * @return \Confirmit\Authoring\StructType\SurveySchema
     */
    public function setRoot(\Confirmit\Authoring\StructType\Root $root = null)
    {
        $this->Root = $root;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SurveySchema
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
