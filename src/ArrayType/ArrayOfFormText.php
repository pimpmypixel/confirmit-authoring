<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFormText ArrayType
 * @subpackage Arrays
 */
class ArrayOfFormText extends AbstractStructArrayBase
{
    /**
     * The FormText
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\FormText[]
     */
    public $FormText;
    /**
     * Constructor method for ArrayOfFormText
     * @uses ArrayOfFormText::setFormText()
     * @param \Confirmit\Authoring\StructType\FormText[] $formText
     */
    public function __construct(array $formText = array())
    {
        $this
            ->setFormText($formText);
    }
    /**
     * Get FormText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\FormText[]|null
     */
    public function getFormText()
    {
        return isset($this->FormText) ? $this->FormText : null;
    }
    /**
     * Set FormText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\FormText[] $formText
     * @return \Confirmit\Authoring\ArrayType\ArrayOfFormText
     */
    public function setFormText(array $formText = array())
    {
        foreach ($formText as $arrayOfFormTextFormTextItem) {
            // validation for constraint: itemType
            if (!$arrayOfFormTextFormTextItem instanceof \Confirmit\Authoring\StructType\FormText) {
                throw new \InvalidArgumentException(sprintf('The FormText property can only contain items of \Confirmit\Authoring\StructType\FormText, "%s" given', is_object($arrayOfFormTextFormTextItem) ? get_class($arrayOfFormTextFormTextItem) : gettype($arrayOfFormTextFormTextItem)), __LINE__);
            }
        }
        if (is_null($formText) || (is_array($formText) && empty($formText))) {
            unset($this->FormText);
        } else {
            $this->FormText = $formText;
        }
        return $this;
    }
    /**
     * Add item to FormText value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\FormText $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfFormText
     */
    public function addToFormText(\Confirmit\Authoring\StructType\FormText $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\FormText) {
            throw new \InvalidArgumentException(sprintf('The FormText property can only contain items of \Confirmit\Authoring\StructType\FormText, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FormText[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\FormText|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\FormText|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\FormText|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\FormText|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\FormText|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FormText
     */
    public function getAttributeName()
    {
        return 'FormText';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfFormText
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
