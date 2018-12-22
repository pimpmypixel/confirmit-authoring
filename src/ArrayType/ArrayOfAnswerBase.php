<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAnswerBase ArrayType
 * @subpackage Arrays
 */
class ArrayOfAnswerBase extends AbstractStructArrayBase
{
    /**
     * The AnswerBase
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\AnswerBase[]
     */
    public $AnswerBase;
    /**
     * Constructor method for ArrayOfAnswerBase
     * @uses ArrayOfAnswerBase::setAnswerBase()
     * @param \Confirmit\Authoring\StructType\AnswerBase[] $answerBase
     */
    public function __construct(array $answerBase = array())
    {
        $this
            ->setAnswerBase($answerBase);
    }
    /**
     * Get AnswerBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\AnswerBase[]|null
     */
    public function getAnswerBase()
    {
        return isset($this->AnswerBase) ? $this->AnswerBase : null;
    }
    /**
     * Set AnswerBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\AnswerBase[] $answerBase
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerBase
     */
    public function setAnswerBase(array $answerBase = array())
    {
        foreach ($answerBase as $arrayOfAnswerBaseAnswerBaseItem) {
            // validation for constraint: itemType
            if (!$arrayOfAnswerBaseAnswerBaseItem instanceof \Confirmit\Authoring\StructType\AnswerBase) {
                throw new \InvalidArgumentException(sprintf('The AnswerBase property can only contain items of \Confirmit\Authoring\StructType\AnswerBase, "%s" given', is_object($arrayOfAnswerBaseAnswerBaseItem) ? get_class($arrayOfAnswerBaseAnswerBaseItem) : gettype($arrayOfAnswerBaseAnswerBaseItem)), __LINE__);
            }
        }
        if (is_null($answerBase) || (is_array($answerBase) && empty($answerBase))) {
            unset($this->AnswerBase);
        } else {
            $this->AnswerBase = $answerBase;
        }
        return $this;
    }
    /**
     * Add item to AnswerBase value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\AnswerBase $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerBase
     */
    public function addToAnswerBase(\Confirmit\Authoring\StructType\AnswerBase $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\AnswerBase) {
            throw new \InvalidArgumentException(sprintf('The AnswerBase property can only contain items of \Confirmit\Authoring\StructType\AnswerBase, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AnswerBase[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\AnswerBase|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\AnswerBase|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\AnswerBase|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\AnswerBase|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\AnswerBase|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AnswerBase
     */
    public function getAttributeName()
    {
        return 'AnswerBase';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerBase
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
