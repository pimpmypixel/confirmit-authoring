<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString2 ArrayType
 * @subpackage Arrays
 */
class ArrayOfString2 extends AbstractStructArrayBase
{
    /**
     * The QuestionTrigger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $QuestionTrigger;
    /**
     * Constructor method for ArrayOfString2
     * @uses ArrayOfString2::setQuestionTrigger()
     * @param string[] $questionTrigger
     */
    public function __construct(array $questionTrigger = array())
    {
        $this
            ->setQuestionTrigger($questionTrigger);
    }
    /**
     * Get QuestionTrigger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getQuestionTrigger()
    {
        return isset($this->QuestionTrigger) ? $this->QuestionTrigger : null;
    }
    /**
     * Set QuestionTrigger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $questionTrigger
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString2
     */
    public function setQuestionTrigger(array $questionTrigger = array())
    {
        foreach ($questionTrigger as $arrayOfString2QuestionTriggerItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfString2QuestionTriggerItem)) {
                throw new \InvalidArgumentException(sprintf('The QuestionTrigger property can only contain items of string, "%s" given', is_object($arrayOfString2QuestionTriggerItem) ? get_class($arrayOfString2QuestionTriggerItem) : gettype($arrayOfString2QuestionTriggerItem)), __LINE__);
            }
        }
        if (is_null($questionTrigger) || (is_array($questionTrigger) && empty($questionTrigger))) {
            unset($this->QuestionTrigger);
        } else {
            $this->QuestionTrigger = $questionTrigger;
        }
        return $this;
    }
    /**
     * Add item to QuestionTrigger value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString2
     */
    public function addToQuestionTrigger($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The QuestionTrigger property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuestionTrigger[] = $item;
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
     * @return string QuestionTrigger
     */
    public function getAttributeName()
    {
        return 'QuestionTrigger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString2
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
