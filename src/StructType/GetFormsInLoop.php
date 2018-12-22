<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFormsInLoop StructType
 * @subpackage Structs
 */
class GetFormsInLoop extends AbstractStructBase
{
    /**
     * The schemaSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $schemaSource;
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $key;
    /**
     * The projectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $projectId;
    /**
     * The parent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\Node
     */
    public $parent;
    /**
     * The readFilter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ReadFilter
     */
    public $readFilter;
    /**
     * Constructor method for GetFormsInLoop
     * @uses GetFormsInLoop::setSchemaSource()
     * @uses GetFormsInLoop::setKey()
     * @uses GetFormsInLoop::setProjectId()
     * @uses GetFormsInLoop::setParent()
     * @uses GetFormsInLoop::setReadFilter()
     * @param string $schemaSource
     * @param string $key
     * @param string $projectId
     * @param \Confirmit\Authoring\StructType\Node $parent
     * @param \Confirmit\Authoring\StructType\ReadFilter $readFilter
     */
    public function __construct($schemaSource = null, $key = null, $projectId = null, \Confirmit\Authoring\StructType\Node $parent = null, \Confirmit\Authoring\StructType\ReadFilter $readFilter = null)
    {
        $this
            ->setSchemaSource($schemaSource)
            ->setKey($key)
            ->setProjectId($projectId)
            ->setParent($parent)
            ->setReadFilter($readFilter);
    }
    /**
     * Get schemaSource value
     * @return string
     */
    public function getSchemaSource()
    {
        return $this->schemaSource;
    }
    /**
     * Set schemaSource value
     * @uses \Confirmit\Authoring\EnumType\SchemaSourceType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SchemaSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $schemaSource
     * @return \Confirmit\Authoring\StructType\GetFormsInLoop
     */
    public function setSchemaSource($schemaSource = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SchemaSourceType::valueIsValid($schemaSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $schemaSource, implode(', ', \Confirmit\Authoring\EnumType\SchemaSourceType::getValidValues())), __LINE__);
        }
        $this->schemaSource = $schemaSource;
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Confirmit\Authoring\StructType\GetFormsInLoop
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get projectId value
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param string $projectId
     * @return \Confirmit\Authoring\StructType\GetFormsInLoop
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: string
        if (!is_null($projectId) && !is_string($projectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Get parent value
     * @return \Confirmit\Authoring\StructType\Node|null
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Set parent value
     * @param \Confirmit\Authoring\StructType\Node $parent
     * @return \Confirmit\Authoring\StructType\GetFormsInLoop
     */
    public function setParent(\Confirmit\Authoring\StructType\Node $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }
    /**
     * Get readFilter value
     * @return \Confirmit\Authoring\StructType\ReadFilter|null
     */
    public function getReadFilter()
    {
        return $this->readFilter;
    }
    /**
     * Set readFilter value
     * @param \Confirmit\Authoring\StructType\ReadFilter $readFilter
     * @return \Confirmit\Authoring\StructType\GetFormsInLoop
     */
    public function setReadFilter(\Confirmit\Authoring\StructType\ReadFilter $readFilter = null)
    {
        $this->readFilter = $readFilter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetFormsInLoop
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
