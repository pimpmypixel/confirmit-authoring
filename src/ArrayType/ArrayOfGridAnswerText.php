<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGridAnswerText ArrayType
 * @subpackage Arrays
 */
class ArrayOfGridAnswerText extends AbstractStructArrayBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\GridAnswerText[]
     */
    public $Text;
    /**
     * Constructor method for ArrayOfGridAnswerText
     * @uses ArrayOfGridAnswerText::setText()
     * @param \Confirmit\Authoring\StructType\GridAnswerText[] $text
     */
    public function __construct(array $text = array())
    {
        $this
            ->setText($text);
    }
    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\GridAnswerText[]|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }
    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\GridAnswerText[] $text
     * @return \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText
     */
    public function setText(array $text = array())
    {
        foreach ($text as $arrayOfGridAnswerTextTextItem) {
            // validation for constraint: itemType
            if (!$arrayOfGridAnswerTextTextItem instanceof \Confirmit\Authoring\StructType\GridAnswerText) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of \Confirmit\Authoring\StructType\GridAnswerText, "%s" given', is_object($arrayOfGridAnswerTextTextItem) ? get_class($arrayOfGridAnswerTextTextItem) : gettype($arrayOfGridAnswerTextTextItem)), __LINE__);
            }
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\GridAnswerText $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText
     */
    public function addToText(\Confirmit\Authoring\StructType\GridAnswerText $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\GridAnswerText) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of \Confirmit\Authoring\StructType\GridAnswerText, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\GridAnswerText|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\GridAnswerText|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\GridAnswerText|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\GridAnswerText|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\GridAnswerText|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Text
     */
    public function getAttributeName()
    {
        return 'Text';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText
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
