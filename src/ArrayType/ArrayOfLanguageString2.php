<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLanguageString2 ArrayType
 * @subpackage Arrays
 */
class ArrayOfLanguageString2 extends AbstractStructArrayBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\LanguageString[]
     */
    public $Description;
    /**
     * Constructor method for ArrayOfLanguageString2
     * @uses ArrayOfLanguageString2::setDescription()
     * @param \Confirmit\Authoring\StructType\LanguageString[] $description
     */
    public function __construct(array $description = array())
    {
        $this
            ->setDescription($description);
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\LanguageString[]|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString[] $description
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $arrayOfLanguageString2DescriptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfLanguageString2DescriptionItem instanceof \Confirmit\Authoring\StructType\LanguageString) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($arrayOfLanguageString2DescriptionItem) ? get_class($arrayOfLanguageString2DescriptionItem) : gettype($arrayOfLanguageString2DescriptionItem)), __LINE__);
            }
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2
     */
    public function addToDescription(\Confirmit\Authoring\StructType\LanguageString $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\LanguageString) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\LanguageString|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\LanguageString|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\LanguageString|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\LanguageString|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\LanguageString|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Description
     */
    public function getAttributeName()
    {
        return 'Description';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2
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
