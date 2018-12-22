<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDatabaseLastCompiled StructType
 * @subpackage Structs
 */
class GetDatabaseLastCompiled extends AbstractStructBase
{
    /**
     * The dbType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dbType;
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
     * Constructor method for GetDatabaseLastCompiled
     * @uses GetDatabaseLastCompiled::setDbType()
     * @uses GetDatabaseLastCompiled::setKey()
     * @uses GetDatabaseLastCompiled::setProjectId()
     * @param string $dbType
     * @param string $key
     * @param string $projectId
     */
    public function __construct($dbType = null, $key = null, $projectId = null)
    {
        $this
            ->setDbType($dbType)
            ->setKey($key)
            ->setProjectId($projectId);
    }
    /**
     * Get dbType value
     * @return string
     */
    public function getDbType()
    {
        return $this->dbType;
    }
    /**
     * Set dbType value
     * @uses \Confirmit\Authoring\EnumType\DatabaseType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\DatabaseType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dbType
     * @return \Confirmit\Authoring\StructType\GetDatabaseLastCompiled
     */
    public function setDbType($dbType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\DatabaseType::valueIsValid($dbType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dbType, implode(', ', \Confirmit\Authoring\EnumType\DatabaseType::getValidValues())), __LINE__);
        }
        $this->dbType = $dbType;
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
     * @return \Confirmit\Authoring\StructType\GetDatabaseLastCompiled
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
     * @return \Confirmit\Authoring\StructType\GetDatabaseLastCompiled
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
     * @return \Confirmit\Authoring\StructType\GetDatabaseLastCompiled
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
