<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNodeType ArrayType
 * @subpackage Arrays
 */
class ArrayOfNodeType extends AbstractStructArrayBase
{
    /**
     * The NodeType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $NodeType;
    /**
     * Constructor method for ArrayOfNodeType
     * @uses ArrayOfNodeType::setNodeType()
     * @param string[] $nodeType
     */
    public function __construct(array $nodeType = array())
    {
        $this
            ->setNodeType($nodeType);
    }
    /**
     * Get NodeType value
     * @return string[]|null
     */
    public function getNodeType()
    {
        return $this->NodeType;
    }
    /**
     * Set NodeType value
     * @uses \Confirmit\Authoring\EnumType\NodeType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\NodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $nodeType
     * @return \Confirmit\Authoring\ArrayType\ArrayOfNodeType
     */
    public function setNodeType(array $nodeType = array())
    {
        $invalidValues = array();
        foreach ($nodeType as $arrayOfNodeTypeNodeTypeItem) {
            if (!\Confirmit\Authoring\EnumType\NodeType::valueIsValid($arrayOfNodeTypeNodeTypeItem)) {
                $invalidValues[] = var_export($arrayOfNodeTypeNodeTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Confirmit\Authoring\EnumType\NodeType::getValidValues())), __LINE__);
        }
        $this->NodeType = $nodeType;
        return $this;
    }
    /**
     * Add item to NodeType value
     * @uses \Confirmit\Authoring\EnumType\NodeType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\NodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfNodeType
     */
    public function addToNodeType($item)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\NodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Confirmit\Authoring\EnumType\NodeType::getValidValues())), __LINE__);
        }
        $this->NodeType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Confirmit\Authoring\EnumType\NodeType::valueIsValid()
     * @param string $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfNodeType
     */
    public function add($item)
    {
        if (!\Confirmit\Authoring\EnumType\NodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Confirmit\Authoring\EnumType\NodeType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NodeType
     */
    public function getAttributeName()
    {
        return 'NodeType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfNodeType
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
