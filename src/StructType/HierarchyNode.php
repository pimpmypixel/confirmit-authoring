<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HierarchyNode StructType
 * @subpackage Structs
 */
class HierarchyNode extends AbstractStructBase
{
    /**
     * The IsLeaf
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsLeaf;
    /**
     * The HasChildren
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HasChildren;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\HierarchyLevel
     */
    public $Level;
    /**
     * The Children
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode
     */
    public $Children;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for HierarchyNode
     * @uses HierarchyNode::setIsLeaf()
     * @uses HierarchyNode::setHasChildren()
     * @uses HierarchyNode::setLevel()
     * @uses HierarchyNode::setChildren()
     * @uses HierarchyNode::setId()
     * @param bool $isLeaf
     * @param bool $hasChildren
     * @param \Confirmit\Authoring\StructType\HierarchyLevel $level
     * @param \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode $children
     * @param string $id
     */
    public function __construct($isLeaf = null, $hasChildren = null, \Confirmit\Authoring\StructType\HierarchyLevel $level = null, \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode $children = null, $id = null)
    {
        $this
            ->setIsLeaf($isLeaf)
            ->setHasChildren($hasChildren)
            ->setLevel($level)
            ->setChildren($children)
            ->setId($id);
    }
    /**
     * Get IsLeaf value
     * @return bool
     */
    public function getIsLeaf()
    {
        return $this->IsLeaf;
    }
    /**
     * Set IsLeaf value
     * @param bool $isLeaf
     * @return \Confirmit\Authoring\StructType\HierarchyNode
     */
    public function setIsLeaf($isLeaf = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLeaf) && !is_bool($isLeaf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLeaf)), __LINE__);
        }
        $this->IsLeaf = $isLeaf;
        return $this;
    }
    /**
     * Get HasChildren value
     * @return bool
     */
    public function getHasChildren()
    {
        return $this->HasChildren;
    }
    /**
     * Set HasChildren value
     * @param bool $hasChildren
     * @return \Confirmit\Authoring\StructType\HierarchyNode
     */
    public function setHasChildren($hasChildren = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasChildren) && !is_bool($hasChildren)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasChildren)), __LINE__);
        }
        $this->HasChildren = $hasChildren;
        return $this;
    }
    /**
     * Get Level value
     * @return \Confirmit\Authoring\StructType\HierarchyLevel|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param \Confirmit\Authoring\StructType\HierarchyLevel $level
     * @return \Confirmit\Authoring\StructType\HierarchyNode
     */
    public function setLevel(\Confirmit\Authoring\StructType\HierarchyLevel $level = null)
    {
        $this->Level = $level;
        return $this;
    }
    /**
     * Get Children value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode|null
     */
    public function getChildren()
    {
        return $this->Children;
    }
    /**
     * Set Children value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode $children
     * @return \Confirmit\Authoring\StructType\HierarchyNode
     */
    public function setChildren(\Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode $children = null)
    {
        $this->Children = $children;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Confirmit\Authoring\StructType\HierarchyNode
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\HierarchyNode
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
