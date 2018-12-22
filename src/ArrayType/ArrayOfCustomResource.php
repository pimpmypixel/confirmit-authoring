<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomResource ArrayType
 * @subpackage Arrays
 */
class ArrayOfCustomResource extends AbstractStructArrayBase
{
    /**
     * The CustomResource
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\CustomResource[]
     */
    public $CustomResource;
    /**
     * Constructor method for ArrayOfCustomResource
     * @uses ArrayOfCustomResource::setCustomResource()
     * @param \Confirmit\Authoring\StructType\CustomResource[] $customResource
     */
    public function __construct(array $customResource = array())
    {
        $this
            ->setCustomResource($customResource);
    }
    /**
     * Get CustomResource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\CustomResource[]|null
     */
    public function getCustomResource()
    {
        return isset($this->CustomResource) ? $this->CustomResource : null;
    }
    /**
     * Set CustomResource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\CustomResource[] $customResource
     * @return \Confirmit\Authoring\ArrayType\ArrayOfCustomResource
     */
    public function setCustomResource(array $customResource = array())
    {
        foreach ($customResource as $arrayOfCustomResourceCustomResourceItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomResourceCustomResourceItem instanceof \Confirmit\Authoring\StructType\CustomResource) {
                throw new \InvalidArgumentException(sprintf('The CustomResource property can only contain items of \Confirmit\Authoring\StructType\CustomResource, "%s" given', is_object($arrayOfCustomResourceCustomResourceItem) ? get_class($arrayOfCustomResourceCustomResourceItem) : gettype($arrayOfCustomResourceCustomResourceItem)), __LINE__);
            }
        }
        if (is_null($customResource) || (is_array($customResource) && empty($customResource))) {
            unset($this->CustomResource);
        } else {
            $this->CustomResource = $customResource;
        }
        return $this;
    }
    /**
     * Add item to CustomResource value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\CustomResource $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfCustomResource
     */
    public function addToCustomResource(\Confirmit\Authoring\StructType\CustomResource $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\CustomResource) {
            throw new \InvalidArgumentException(sprintf('The CustomResource property can only contain items of \Confirmit\Authoring\StructType\CustomResource, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomResource[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\CustomResource|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\CustomResource|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\CustomResource|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\CustomResource|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\CustomResource|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomResource
     */
    public function getAttributeName()
    {
        return 'CustomResource';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfCustomResource
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
