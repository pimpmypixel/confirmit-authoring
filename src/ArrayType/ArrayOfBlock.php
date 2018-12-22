<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBlock ArrayType
 * @subpackage Arrays
 */
class ArrayOfBlock extends AbstractStructArrayBase
{
    /**
     * The Block
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Block[]
     */
    public $Block;
    /**
     * Constructor method for ArrayOfBlock
     * @uses ArrayOfBlock::setBlock()
     * @param \Confirmit\Authoring\StructType\Block[] $block
     */
    public function __construct(array $block = array())
    {
        $this
            ->setBlock($block);
    }
    /**
     * Get Block value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\Block[]|null
     */
    public function getBlock()
    {
        return isset($this->Block) ? $this->Block : null;
    }
    /**
     * Set Block value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\Block[] $block
     * @return \Confirmit\Authoring\ArrayType\ArrayOfBlock
     */
    public function setBlock(array $block = array())
    {
        foreach ($block as $arrayOfBlockBlockItem) {
            // validation for constraint: itemType
            if (!$arrayOfBlockBlockItem instanceof \Confirmit\Authoring\StructType\Block) {
                throw new \InvalidArgumentException(sprintf('The Block property can only contain items of \Confirmit\Authoring\StructType\Block, "%s" given', is_object($arrayOfBlockBlockItem) ? get_class($arrayOfBlockBlockItem) : gettype($arrayOfBlockBlockItem)), __LINE__);
            }
        }
        if (is_null($block) || (is_array($block) && empty($block))) {
            unset($this->Block);
        } else {
            $this->Block = $block;
        }
        return $this;
    }
    /**
     * Add item to Block value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\Block $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfBlock
     */
    public function addToBlock(\Confirmit\Authoring\StructType\Block $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\Block) {
            throw new \InvalidArgumentException(sprintf('The Block property can only contain items of \Confirmit\Authoring\StructType\Block, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Block[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\Block|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\Block|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\Block|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\Block|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\Block|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Block
     */
    public function getAttributeName()
    {
        return 'Block';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfBlock
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
