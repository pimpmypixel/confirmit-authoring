<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLanguageString6 ArrayType
 * @subpackage Arrays
 */
class ArrayOfLanguageString6 extends AbstractStructArrayBase
{
    /**
     * The CustomLinkText
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\LanguageString[]
     */
    public $CustomLinkText;
    /**
     * Constructor method for ArrayOfLanguageString6
     * @uses ArrayOfLanguageString6::setCustomLinkText()
     * @param \Confirmit\Authoring\StructType\LanguageString[] $customLinkText
     */
    public function __construct(array $customLinkText = array())
    {
        $this
            ->setCustomLinkText($customLinkText);
    }
    /**
     * Get CustomLinkText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\LanguageString[]|null
     */
    public function getCustomLinkText()
    {
        return isset($this->CustomLinkText) ? $this->CustomLinkText : null;
    }
    /**
     * Set CustomLinkText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString[] $customLinkText
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString6
     */
    public function setCustomLinkText(array $customLinkText = array())
    {
        foreach ($customLinkText as $arrayOfLanguageString6CustomLinkTextItem) {
            // validation for constraint: itemType
            if (!$arrayOfLanguageString6CustomLinkTextItem instanceof \Confirmit\Authoring\StructType\LanguageString) {
                throw new \InvalidArgumentException(sprintf('The CustomLinkText property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($arrayOfLanguageString6CustomLinkTextItem) ? get_class($arrayOfLanguageString6CustomLinkTextItem) : gettype($arrayOfLanguageString6CustomLinkTextItem)), __LINE__);
            }
        }
        if (is_null($customLinkText) || (is_array($customLinkText) && empty($customLinkText))) {
            unset($this->CustomLinkText);
        } else {
            $this->CustomLinkText = $customLinkText;
        }
        return $this;
    }
    /**
     * Add item to CustomLinkText value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString6
     */
    public function addToCustomLinkText(\Confirmit\Authoring\StructType\LanguageString $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\LanguageString) {
            throw new \InvalidArgumentException(sprintf('The CustomLinkText property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomLinkText[] = $item;
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
     * @return string CustomLinkText
     */
    public function getAttributeName()
    {
        return 'CustomLinkText';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString6
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
