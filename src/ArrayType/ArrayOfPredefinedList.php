<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPredefinedList ArrayType
 * @subpackage Arrays
 */
class ArrayOfPredefinedList extends AbstractStructArrayBase
{
    /**
     * The PredefinedList
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\PredefinedList[]
     */
    public $PredefinedList;
    /**
     * Constructor method for ArrayOfPredefinedList
     * @uses ArrayOfPredefinedList::setPredefinedList()
     * @param \Confirmit\Authoring\StructType\PredefinedList[] $predefinedList
     */
    public function __construct(array $predefinedList = array())
    {
        $this
            ->setPredefinedList($predefinedList);
    }
    /**
     * Get PredefinedList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\PredefinedList[]|null
     */
    public function getPredefinedList()
    {
        return isset($this->PredefinedList) ? $this->PredefinedList : null;
    }
    /**
     * Set PredefinedList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\PredefinedList[] $predefinedList
     * @return \Confirmit\Authoring\ArrayType\ArrayOfPredefinedList
     */
    public function setPredefinedList(array $predefinedList = array())
    {
        foreach ($predefinedList as $arrayOfPredefinedListPredefinedListItem) {
            // validation for constraint: itemType
            if (!$arrayOfPredefinedListPredefinedListItem instanceof \Confirmit\Authoring\StructType\PredefinedList) {
                throw new \InvalidArgumentException(sprintf('The PredefinedList property can only contain items of \Confirmit\Authoring\StructType\PredefinedList, "%s" given', is_object($arrayOfPredefinedListPredefinedListItem) ? get_class($arrayOfPredefinedListPredefinedListItem) : gettype($arrayOfPredefinedListPredefinedListItem)), __LINE__);
            }
        }
        if (is_null($predefinedList) || (is_array($predefinedList) && empty($predefinedList))) {
            unset($this->PredefinedList);
        } else {
            $this->PredefinedList = $predefinedList;
        }
        return $this;
    }
    /**
     * Add item to PredefinedList value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\PredefinedList $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfPredefinedList
     */
    public function addToPredefinedList(\Confirmit\Authoring\StructType\PredefinedList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\PredefinedList) {
            throw new \InvalidArgumentException(sprintf('The PredefinedList property can only contain items of \Confirmit\Authoring\StructType\PredefinedList, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PredefinedList[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\PredefinedList|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\PredefinedList|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\PredefinedList|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\PredefinedList|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\PredefinedList|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PredefinedList
     */
    public function getAttributeName()
    {
        return 'PredefinedList';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfPredefinedList
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
