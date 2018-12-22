<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLangSpecString ArrayType
 * @subpackage Arrays
 */
class ArrayOfLangSpecString extends AbstractStructArrayBase
{
    /**
     * The LangSpecString
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\LangSpecString[]
     */
    public $LangSpecString;
    /**
     * Constructor method for ArrayOfLangSpecString
     * @uses ArrayOfLangSpecString::setLangSpecString()
     * @param \Confirmit\Authoring\StructType\LangSpecString[] $langSpecString
     */
    public function __construct(array $langSpecString = array())
    {
        $this
            ->setLangSpecString($langSpecString);
    }
    /**
     * Get LangSpecString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\LangSpecString[]|null
     */
    public function getLangSpecString()
    {
        return isset($this->LangSpecString) ? $this->LangSpecString : null;
    }
    /**
     * Set LangSpecString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LangSpecString[] $langSpecString
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLangSpecString
     */
    public function setLangSpecString(array $langSpecString = array())
    {
        foreach ($langSpecString as $arrayOfLangSpecStringLangSpecStringItem) {
            // validation for constraint: itemType
            if (!$arrayOfLangSpecStringLangSpecStringItem instanceof \Confirmit\Authoring\StructType\LangSpecString) {
                throw new \InvalidArgumentException(sprintf('The LangSpecString property can only contain items of \Confirmit\Authoring\StructType\LangSpecString, "%s" given', is_object($arrayOfLangSpecStringLangSpecStringItem) ? get_class($arrayOfLangSpecStringLangSpecStringItem) : gettype($arrayOfLangSpecStringLangSpecStringItem)), __LINE__);
            }
        }
        if (is_null($langSpecString) || (is_array($langSpecString) && empty($langSpecString))) {
            unset($this->LangSpecString);
        } else {
            $this->LangSpecString = $langSpecString;
        }
        return $this;
    }
    /**
     * Add item to LangSpecString value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LangSpecString $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLangSpecString
     */
    public function addToLangSpecString(\Confirmit\Authoring\StructType\LangSpecString $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\LangSpecString) {
            throw new \InvalidArgumentException(sprintf('The LangSpecString property can only contain items of \Confirmit\Authoring\StructType\LangSpecString, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LangSpecString[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\LangSpecString|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\LangSpecString|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\LangSpecString|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\LangSpecString|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\LangSpecString|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LangSpecString
     */
    public function getAttributeName()
    {
        return 'LangSpecString';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLangSpecString
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
