<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHierarchyNode ArrayType
 * @subpackage Arrays
 */
class ArrayOfHierarchyNode extends AbstractStructArrayBase
{
    /**
     * The HierarchyNode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\HierarchyNode[]
     */
    public $HierarchyNode;
    /**
     * Constructor method for ArrayOfHierarchyNode
     * @uses ArrayOfHierarchyNode::setHierarchyNode()
     * @param \Confirmit\Authoring\StructType\HierarchyNode[] $hierarchyNode
     */
    public function __construct(array $hierarchyNode = array())
    {
        $this
            ->setHierarchyNode($hierarchyNode);
    }
    /**
     * Get HierarchyNode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\HierarchyNode[]|null
     */
    public function getHierarchyNode()
    {
        return isset($this->HierarchyNode) ? $this->HierarchyNode : null;
    }
    /**
     * Set HierarchyNode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\HierarchyNode[] $hierarchyNode
     * @return \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode
     */
    public function setHierarchyNode(array $hierarchyNode = array())
    {
        foreach ($hierarchyNode as $arrayOfHierarchyNodeHierarchyNodeItem) {
            // validation for constraint: itemType
            if (!$arrayOfHierarchyNodeHierarchyNodeItem instanceof \Confirmit\Authoring\StructType\HierarchyNode) {
                throw new \InvalidArgumentException(sprintf('The HierarchyNode property can only contain items of \Confirmit\Authoring\StructType\HierarchyNode, "%s" given', is_object($arrayOfHierarchyNodeHierarchyNodeItem) ? get_class($arrayOfHierarchyNodeHierarchyNodeItem) : gettype($arrayOfHierarchyNodeHierarchyNodeItem)), __LINE__);
            }
        }
        if (is_null($hierarchyNode) || (is_array($hierarchyNode) && empty($hierarchyNode))) {
            unset($this->HierarchyNode);
        } else {
            $this->HierarchyNode = $hierarchyNode;
        }
        return $this;
    }
    /**
     * Add item to HierarchyNode value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\HierarchyNode $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode
     */
    public function addToHierarchyNode(\Confirmit\Authoring\StructType\HierarchyNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\HierarchyNode) {
            throw new \InvalidArgumentException(sprintf('The HierarchyNode property can only contain items of \Confirmit\Authoring\StructType\HierarchyNode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HierarchyNode[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\HierarchyNode|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\HierarchyNode|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\HierarchyNode|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\HierarchyNode|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\HierarchyNode|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string HierarchyNode
     */
    public function getAttributeName()
    {
        return 'HierarchyNode';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode
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
