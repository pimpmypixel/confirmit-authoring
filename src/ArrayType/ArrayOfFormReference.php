<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFormReference ArrayType
 * @subpackage Arrays
 */
class ArrayOfFormReference extends AbstractStructArrayBase
{
    /**
     * The Form
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\FormReference[]
     */
    public $Form;
    /**
     * Constructor method for ArrayOfFormReference
     * @uses ArrayOfFormReference::setForm()
     * @param \Confirmit\Authoring\StructType\FormReference[] $form
     */
    public function __construct(array $form = array())
    {
        $this
            ->setForm($form);
    }
    /**
     * Get Form value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\FormReference[]|null
     */
    public function getForm()
    {
        return isset($this->Form) ? $this->Form : null;
    }
    /**
     * Set Form value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\FormReference[] $form
     * @return \Confirmit\Authoring\ArrayType\ArrayOfFormReference
     */
    public function setForm(array $form = array())
    {
        foreach ($form as $arrayOfFormReferenceFormItem) {
            // validation for constraint: itemType
            if (!$arrayOfFormReferenceFormItem instanceof \Confirmit\Authoring\StructType\FormReference) {
                throw new \InvalidArgumentException(sprintf('The Form property can only contain items of \Confirmit\Authoring\StructType\FormReference, "%s" given', is_object($arrayOfFormReferenceFormItem) ? get_class($arrayOfFormReferenceFormItem) : gettype($arrayOfFormReferenceFormItem)), __LINE__);
            }
        }
        if (is_null($form) || (is_array($form) && empty($form))) {
            unset($this->Form);
        } else {
            $this->Form = $form;
        }
        return $this;
    }
    /**
     * Add item to Form value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\FormReference $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfFormReference
     */
    public function addToForm(\Confirmit\Authoring\StructType\FormReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\FormReference) {
            throw new \InvalidArgumentException(sprintf('The Form property can only contain items of \Confirmit\Authoring\StructType\FormReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Form[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\FormReference|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\FormReference|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\FormReference|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\FormReference|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\FormReference|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Form
     */
    public function getAttributeName()
    {
        return 'Form';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfFormReference
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
