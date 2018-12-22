<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLanguageString9 ArrayType
 * @subpackage Arrays
 */
class ArrayOfLanguageString9 extends AbstractStructArrayBase
{
    /**
     * The HelpLinkUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\LanguageString[]
     */
    public $HelpLinkUrl;
    /**
     * Constructor method for ArrayOfLanguageString9
     * @uses ArrayOfLanguageString9::setHelpLinkUrl()
     * @param \Confirmit\Authoring\StructType\LanguageString[] $helpLinkUrl
     */
    public function __construct(array $helpLinkUrl = array())
    {
        $this
            ->setHelpLinkUrl($helpLinkUrl);
    }
    /**
     * Get HelpLinkUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\LanguageString[]|null
     */
    public function getHelpLinkUrl()
    {
        return isset($this->HelpLinkUrl) ? $this->HelpLinkUrl : null;
    }
    /**
     * Set HelpLinkUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString[] $helpLinkUrl
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString9
     */
    public function setHelpLinkUrl(array $helpLinkUrl = array())
    {
        foreach ($helpLinkUrl as $arrayOfLanguageString9HelpLinkUrlItem) {
            // validation for constraint: itemType
            if (!$arrayOfLanguageString9HelpLinkUrlItem instanceof \Confirmit\Authoring\StructType\LanguageString) {
                throw new \InvalidArgumentException(sprintf('The HelpLinkUrl property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($arrayOfLanguageString9HelpLinkUrlItem) ? get_class($arrayOfLanguageString9HelpLinkUrlItem) : gettype($arrayOfLanguageString9HelpLinkUrlItem)), __LINE__);
            }
        }
        if (is_null($helpLinkUrl) || (is_array($helpLinkUrl) && empty($helpLinkUrl))) {
            unset($this->HelpLinkUrl);
        } else {
            $this->HelpLinkUrl = $helpLinkUrl;
        }
        return $this;
    }
    /**
     * Add item to HelpLinkUrl value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString9
     */
    public function addToHelpLinkUrl(\Confirmit\Authoring\StructType\LanguageString $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\LanguageString) {
            throw new \InvalidArgumentException(sprintf('The HelpLinkUrl property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HelpLinkUrl[] = $item;
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
     * @return string HelpLinkUrl
     */
    public function getAttributeName()
    {
        return 'HelpLinkUrl';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString9
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
