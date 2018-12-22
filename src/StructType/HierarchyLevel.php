<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HierarchyLevel StructType
 * @subpackage Structs
 */
class HierarchyLevel extends AbstractStructBase
{
    /**
     * The TableName
     * @var string
     */
    public $TableName;
    /**
     * The RelationName
     * @var string
     */
    public $RelationName;
    /**
     * Constructor method for HierarchyLevel
     * @uses HierarchyLevel::setTableName()
     * @uses HierarchyLevel::setRelationName()
     * @param string $tableName
     * @param string $relationName
     */
    public function __construct($tableName = null, $relationName = null)
    {
        $this
            ->setTableName($tableName)
            ->setRelationName($relationName);
    }
    /**
     * Get TableName value
     * @return string|null
     */
    public function getTableName()
    {
        return $this->TableName;
    }
    /**
     * Set TableName value
     * @param string $tableName
     * @return \Confirmit\Authoring\StructType\HierarchyLevel
     */
    public function setTableName($tableName = null)
    {
        // validation for constraint: string
        if (!is_null($tableName) && !is_string($tableName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tableName)), __LINE__);
        }
        $this->TableName = $tableName;
        return $this;
    }
    /**
     * Get RelationName value
     * @return string|null
     */
    public function getRelationName()
    {
        return $this->RelationName;
    }
    /**
     * Set RelationName value
     * @param string $relationName
     * @return \Confirmit\Authoring\StructType\HierarchyLevel
     */
    public function setRelationName($relationName = null)
    {
        // validation for constraint: string
        if (!is_null($relationName) && !is_string($relationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relationName)), __LINE__);
        }
        $this->RelationName = $relationName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\HierarchyLevel
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
