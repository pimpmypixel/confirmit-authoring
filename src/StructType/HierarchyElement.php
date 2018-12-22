<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HierarchyElement StructType
 * @subpackage Structs
 */
class HierarchyElement extends AbstractStructBase
{
    /**
     * The RelationId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $RelationId;
    /**
     * The Hidden
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Hidden;
    /**
     * The Filter
     * @var string
     */
    public $Filter;
    /**
     * Constructor method for HierarchyElement
     * @uses HierarchyElement::setRelationId()
     * @uses HierarchyElement::setHidden()
     * @uses HierarchyElement::setFilter()
     * @param int $relationId
     * @param bool $hidden
     * @param string $filter
     */
    public function __construct($relationId = null, $hidden = null, $filter = null)
    {
        $this
            ->setRelationId($relationId)
            ->setHidden($hidden)
            ->setFilter($filter);
    }
    /**
     * Get RelationId value
     * @return int
     */
    public function getRelationId()
    {
        return $this->RelationId;
    }
    /**
     * Set RelationId value
     * @param int $relationId
     * @return \Confirmit\Authoring\StructType\HierarchyElement
     */
    public function setRelationId($relationId = null)
    {
        // validation for constraint: int
        if (!is_null($relationId) && !is_numeric($relationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($relationId)), __LINE__);
        }
        $this->RelationId = $relationId;
        return $this;
    }
    /**
     * Get Hidden value
     * @return bool
     */
    public function getHidden()
    {
        return $this->Hidden;
    }
    /**
     * Set Hidden value
     * @param bool $hidden
     * @return \Confirmit\Authoring\StructType\HierarchyElement
     */
    public function setHidden($hidden = null)
    {
        // validation for constraint: boolean
        if (!is_null($hidden) && !is_bool($hidden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hidden)), __LINE__);
        }
        $this->Hidden = $hidden;
        return $this;
    }
    /**
     * Get Filter value
     * @return string|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param string $filter
     * @return \Confirmit\Authoring\StructType\HierarchyElement
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filter)), __LINE__);
        }
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\HierarchyElement
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
