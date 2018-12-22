<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAnswerText ArrayType
 * @subpackage Arrays
 */
class ArrayOfAnswerText extends AbstractStructArrayBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\AnswerText[]
     */
    public $Text;
    /**
     * Constructor method for ArrayOfAnswerText
     * @uses ArrayOfAnswerText::setText()
     * @param \Confirmit\Authoring\StructType\AnswerText[] $text
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
     * @return \Confirmit\Authoring\StructType\AnswerText[]|null
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
     * @param \Confirmit\Authoring\StructType\AnswerText[] $text
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerText
     */
    public function setText(array $text = array())
    {
        foreach ($text as $arrayOfAnswerTextTextItem) {
            // validation for constraint: itemType
            if (!$arrayOfAnswerTextTextItem instanceof \Confirmit\Authoring\StructType\AnswerText) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of \Confirmit\Authoring\StructType\AnswerText, "%s" given', is_object($arrayOfAnswerTextTextItem) ? get_class($arrayOfAnswerTextTextItem) : gettype($arrayOfAnswerTextTextItem)), __LINE__);
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
     * @param \Confirmit\Authoring\StructType\AnswerText $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerText
     */
    public function addToText(\Confirmit\Authoring\StructType\AnswerText $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\AnswerText) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of \Confirmit\Authoring\StructType\AnswerText, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\AnswerText|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\AnswerText|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\AnswerText|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\AnswerText|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\AnswerText|null
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
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerText
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
