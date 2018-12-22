<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFormByName StructType
 * @subpackage Structs
 */
class GetFormByName extends AbstractStructBase
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
     * The name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The readFilterSimple
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public $readFilterSimple;
    /**
     * Constructor method for GetFormByName
     * @uses GetFormByName::setSchemaSource()
     * @uses GetFormByName::setKey()
     * @uses GetFormByName::setProjectId()
     * @uses GetFormByName::setName()
     * @uses GetFormByName::setReadFilterSimple()
     * @param string $schemaSource
     * @param string $key
     * @param string $projectId
     * @param string $name
     * @param \Confirmit\Authoring\StructType\ReadFilterSimple $readFilterSimple
     */
    public function __construct($schemaSource = null, $key = null, $projectId = null, $name = null, \Confirmit\Authoring\StructType\ReadFilterSimple $readFilterSimple = null)
    {
        $this
            ->setSchemaSource($schemaSource)
            ->setKey($key)
            ->setProjectId($projectId)
            ->setName($name)
            ->setReadFilterSimple($readFilterSimple);
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
     * @return \Confirmit\Authoring\StructType\GetFormByName
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
     * @return \Confirmit\Authoring\StructType\GetFormByName
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
     * @return \Confirmit\Authoring\StructType\GetFormByName
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
     * @return \Confirmit\Authoring\StructType\GetFormByName
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
     * Get readFilterSimple value
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple|null
     */
    public function getReadFilterSimple()
    {
        return $this->readFilterSimple;
    }
    /**
     * Set readFilterSimple value
     * @param \Confirmit\Authoring\StructType\ReadFilterSimple $readFilterSimple
     * @return \Confirmit\Authoring\StructType\GetFormByName
     */
    public function setReadFilterSimple(\Confirmit\Authoring\StructType\ReadFilterSimple $readFilterSimple = null)
    {
        $this->readFilterSimple = $readFilterSimple;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetFormByName
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
