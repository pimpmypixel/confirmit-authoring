<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCommandText ArrayType
 * @subpackage Arrays
 */
class ArrayOfCommandText extends AbstractStructArrayBase
{
    /**
     * The DialingText
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\CommandText[]
     */
    public $DialingText;
    /**
     * Constructor method for ArrayOfCommandText
     * @uses ArrayOfCommandText::setDialingText()
     * @param \Confirmit\Authoring\StructType\CommandText[] $dialingText
     */
    public function __construct(array $dialingText = array())
    {
        $this
            ->setDialingText($dialingText);
    }
    /**
     * Get DialingText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\CommandText[]|null
     */
    public function getDialingText()
    {
        return isset($this->DialingText) ? $this->DialingText : null;
    }
    /**
     * Set DialingText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\CommandText[] $dialingText
     * @return \Confirmit\Authoring\ArrayType\ArrayOfCommandText
     */
    public function setDialingText(array $dialingText = array())
    {
        foreach ($dialingText as $arrayOfCommandTextDialingTextItem) {
            // validation for constraint: itemType
            if (!$arrayOfCommandTextDialingTextItem instanceof \Confirmit\Authoring\StructType\CommandText) {
                throw new \InvalidArgumentException(sprintf('The DialingText property can only contain items of \Confirmit\Authoring\StructType\CommandText, "%s" given', is_object($arrayOfCommandTextDialingTextItem) ? get_class($arrayOfCommandTextDialingTextItem) : gettype($arrayOfCommandTextDialingTextItem)), __LINE__);
            }
        }
        if (is_null($dialingText) || (is_array($dialingText) && empty($dialingText))) {
            unset($this->DialingText);
        } else {
            $this->DialingText = $dialingText;
        }
        return $this;
    }
    /**
     * Add item to DialingText value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\CommandText $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfCommandText
     */
    public function addToDialingText(\Confirmit\Authoring\StructType\CommandText $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\CommandText) {
            throw new \InvalidArgumentException(sprintf('The DialingText property can only contain items of \Confirmit\Authoring\StructType\CommandText, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DialingText[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\CommandText|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\CommandText|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\CommandText|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\CommandText|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\CommandText|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DialingText
     */
    public function getAttributeName()
    {
        return 'DialingText';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfCommandText
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
