<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLoopStructure StructType
 * @subpackage Structs
 */
class GetLoopStructure extends AbstractStructBase
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
     * Constructor method for GetLoopStructure
     * @uses GetLoopStructure::setSchemaSource()
     * @uses GetLoopStructure::setKey()
     * @uses GetLoopStructure::setProjectId()
     * @param string $schemaSource
     * @param string $key
     * @param string $projectId
     */
    public function __construct($schemaSource = null, $key = null, $projectId = null)
    {
        $this
            ->setSchemaSource($schemaSource)
            ->setKey($key)
            ->setProjectId($projectId);
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
     * @return \Confirmit\Authoring\StructType\GetLoopStructure
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
     * @return \Confirmit\Authoring\StructType\GetLoopStructure
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
     * @return \Confirmit\Authoring\StructType\GetLoopStructure
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetLoopStructure
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
