<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLanguageString11 ArrayType
 * @subpackage Arrays
 */
class ArrayOfLanguageString11 extends AbstractStructArrayBase
{
    /**
     * The EndLinkUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\LanguageString[]
     */
    public $EndLinkUrl;
    /**
     * Constructor method for ArrayOfLanguageString11
     * @uses ArrayOfLanguageString11::setEndLinkUrl()
     * @param \Confirmit\Authoring\StructType\LanguageString[] $endLinkUrl
     */
    public function __construct(array $endLinkUrl = array())
    {
        $this
            ->setEndLinkUrl($endLinkUrl);
    }
    /**
     * Get EndLinkUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\LanguageString[]|null
     */
    public function getEndLinkUrl()
    {
        return isset($this->EndLinkUrl) ? $this->EndLinkUrl : null;
    }
    /**
     * Set EndLinkUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString[] $endLinkUrl
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString11
     */
    public function setEndLinkUrl(array $endLinkUrl = array())
    {
        foreach ($endLinkUrl as $arrayOfLanguageString11EndLinkUrlItem) {
            // validation for constraint: itemType
            if (!$arrayOfLanguageString11EndLinkUrlItem instanceof \Confirmit\Authoring\StructType\LanguageString) {
                throw new \InvalidArgumentException(sprintf('The EndLinkUrl property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($arrayOfLanguageString11EndLinkUrlItem) ? get_class($arrayOfLanguageString11EndLinkUrlItem) : gettype($arrayOfLanguageString11EndLinkUrlItem)), __LINE__);
            }
        }
        if (is_null($endLinkUrl) || (is_array($endLinkUrl) && empty($endLinkUrl))) {
            unset($this->EndLinkUrl);
        } else {
            $this->EndLinkUrl = $endLinkUrl;
        }
        return $this;
    }
    /**
     * Add item to EndLinkUrl value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString11
     */
    public function addToEndLinkUrl(\Confirmit\Authoring\StructType\LanguageString $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\LanguageString) {
            throw new \InvalidArgumentException(sprintf('The EndLinkUrl property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EndLinkUrl[] = $item;
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
     * @return string EndLinkUrl
     */
    public function getAttributeName()
    {
        return 'EndLinkUrl';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString11
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
