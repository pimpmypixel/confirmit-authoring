<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInt ArrayType
 * @subpackage Arrays
 */
class ArrayOfInt extends AbstractStructArrayBase
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $Language;
    /**
     * Constructor method for ArrayOfInt
     * @uses ArrayOfInt::setLanguage()
     * @param int[] $language
     */
    public function __construct(array $language = array())
    {
        $this
            ->setLanguage($language);
    }
    /**
     * Get Language value
     * @return int[]|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @throws \InvalidArgumentException
     * @param int[] $language
     * @return \Confirmit\Authoring\ArrayType\ArrayOfInt
     */
    public function setLanguage(array $language = array())
    {
        foreach ($language as $arrayOfIntLanguageItem) {
            // validation for constraint: itemType
            if (!is_numeric($arrayOfIntLanguageItem)) {
                throw new \InvalidArgumentException(sprintf('The Language property can only contain items of int, "%s" given', is_object($arrayOfIntLanguageItem) ? get_class($arrayOfIntLanguageItem) : gettype($arrayOfIntLanguageItem)), __LINE__);
            }
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Add item to Language value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfInt
     */
    public function addToLanguage($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The Language property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Language[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return int|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return int|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return int|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return int|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return int|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Language
     */
    public function getAttributeName()
    {
        return 'Language';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfInt
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
