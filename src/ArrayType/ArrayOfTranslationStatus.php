<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTranslationStatus ArrayType
 * @subpackage Arrays
 */
class ArrayOfTranslationStatus extends AbstractStructArrayBase
{
    /**
     * The TranslationStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\TranslationStatus[]
     */
    public $TranslationStatus;
    /**
     * Constructor method for ArrayOfTranslationStatus
     * @uses ArrayOfTranslationStatus::setTranslationStatus()
     * @param \Confirmit\Authoring\StructType\TranslationStatus[] $translationStatus
     */
    public function __construct(array $translationStatus = array())
    {
        $this
            ->setTranslationStatus($translationStatus);
    }
    /**
     * Get TranslationStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\TranslationStatus[]|null
     */
    public function getTranslationStatus()
    {
        return isset($this->TranslationStatus) ? $this->TranslationStatus : null;
    }
    /**
     * Set TranslationStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\TranslationStatus[] $translationStatus
     * @return \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public function setTranslationStatus(array $translationStatus = array())
    {
        foreach ($translationStatus as $arrayOfTranslationStatusTranslationStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfTranslationStatusTranslationStatusItem instanceof \Confirmit\Authoring\StructType\TranslationStatus) {
                throw new \InvalidArgumentException(sprintf('The TranslationStatus property can only contain items of \Confirmit\Authoring\StructType\TranslationStatus, "%s" given', is_object($arrayOfTranslationStatusTranslationStatusItem) ? get_class($arrayOfTranslationStatusTranslationStatusItem) : gettype($arrayOfTranslationStatusTranslationStatusItem)), __LINE__);
            }
        }
        if (is_null($translationStatus) || (is_array($translationStatus) && empty($translationStatus))) {
            unset($this->TranslationStatus);
        } else {
            $this->TranslationStatus = $translationStatus;
        }
        return $this;
    }
    /**
     * Add item to TranslationStatus value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\TranslationStatus $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public function addToTranslationStatus(\Confirmit\Authoring\StructType\TranslationStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\TranslationStatus) {
            throw new \InvalidArgumentException(sprintf('The TranslationStatus property can only contain items of \Confirmit\Authoring\StructType\TranslationStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TranslationStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\TranslationStatus|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\TranslationStatus|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\TranslationStatus|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\TranslationStatus|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\TranslationStatus|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TranslationStatus
     */
    public function getAttributeName()
    {
        return 'TranslationStatus';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
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
