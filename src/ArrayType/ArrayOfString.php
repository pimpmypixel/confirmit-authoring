<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString ArrayType
 * @subpackage Arrays
 */
class ArrayOfString extends AbstractStructArrayBase
{
    /**
     * The KeyWord
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $KeyWord;
    /**
     * Constructor method for ArrayOfString
     * @uses ArrayOfString::setKeyWord()
     * @param string[] $keyWord
     */
    public function __construct(array $keyWord = array())
    {
        $this
            ->setKeyWord($keyWord);
    }
    /**
     * Get KeyWord value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getKeyWord()
    {
        return isset($this->KeyWord) ? $this->KeyWord : null;
    }
    /**
     * Set KeyWord value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $keyWord
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString
     */
    public function setKeyWord(array $keyWord = array())
    {
        foreach ($keyWord as $arrayOfStringKeyWordItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfStringKeyWordItem)) {
                throw new \InvalidArgumentException(sprintf('The KeyWord property can only contain items of string, "%s" given', is_object($arrayOfStringKeyWordItem) ? get_class($arrayOfStringKeyWordItem) : gettype($arrayOfStringKeyWordItem)), __LINE__);
            }
        }
        if (is_null($keyWord) || (is_array($keyWord) && empty($keyWord))) {
            unset($this->KeyWord);
        } else {
            $this->KeyWord = $keyWord;
        }
        return $this;
    }
    /**
     * Add item to KeyWord value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString
     */
    public function addToKeyWord($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The KeyWord property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeyWord[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyWord
     */
    public function getAttributeName()
    {
        return 'KeyWord';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString
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
