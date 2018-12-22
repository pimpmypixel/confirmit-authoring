<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLanguageString5 ArrayType
 * @subpackage Arrays
 */
class ArrayOfLanguageString5 extends AbstractStructArrayBase
{
    /**
     * The BodyPlaintext
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\LanguageString[]
     */
    public $BodyPlaintext;
    /**
     * Constructor method for ArrayOfLanguageString5
     * @uses ArrayOfLanguageString5::setBodyPlaintext()
     * @param \Confirmit\Authoring\StructType\LanguageString[] $bodyPlaintext
     */
    public function __construct(array $bodyPlaintext = array())
    {
        $this
            ->setBodyPlaintext($bodyPlaintext);
    }
    /**
     * Get BodyPlaintext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\LanguageString[]|null
     */
    public function getBodyPlaintext()
    {
        return isset($this->BodyPlaintext) ? $this->BodyPlaintext : null;
    }
    /**
     * Set BodyPlaintext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString[] $bodyPlaintext
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString5
     */
    public function setBodyPlaintext(array $bodyPlaintext = array())
    {
        foreach ($bodyPlaintext as $arrayOfLanguageString5BodyPlaintextItem) {
            // validation for constraint: itemType
            if (!$arrayOfLanguageString5BodyPlaintextItem instanceof \Confirmit\Authoring\StructType\LanguageString) {
                throw new \InvalidArgumentException(sprintf('The BodyPlaintext property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($arrayOfLanguageString5BodyPlaintextItem) ? get_class($arrayOfLanguageString5BodyPlaintextItem) : gettype($arrayOfLanguageString5BodyPlaintextItem)), __LINE__);
            }
        }
        if (is_null($bodyPlaintext) || (is_array($bodyPlaintext) && empty($bodyPlaintext))) {
            unset($this->BodyPlaintext);
        } else {
            $this->BodyPlaintext = $bodyPlaintext;
        }
        return $this;
    }
    /**
     * Add item to BodyPlaintext value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\LanguageString $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString5
     */
    public function addToBodyPlaintext(\Confirmit\Authoring\StructType\LanguageString $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\LanguageString) {
            throw new \InvalidArgumentException(sprintf('The BodyPlaintext property can only contain items of \Confirmit\Authoring\StructType\LanguageString, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BodyPlaintext[] = $item;
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
     * @return string BodyPlaintext
     */
    public function getAttributeName()
    {
        return 'BodyPlaintext';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString5
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
