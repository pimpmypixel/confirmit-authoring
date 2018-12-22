<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecializedTexts StructType
 * Meta informations extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class SpecializedTexts extends AbstractStructBase
{
    /**
     * The text
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssText[]
     */
    public $text;
    /**
     * Constructor method for SpecializedTexts
     * @uses SpecializedTexts::setText()
     * @param \Confirmit\Authoring\StructType\SssText[] $text
     */
    public function __construct(array $text = array())
    {
        $this
            ->setText($text);
    }
    /**
     * Get text value
     * @return \Confirmit\Authoring\StructType\SssText[]|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssText[] $text
     * @return \Confirmit\Authoring\StructType\SpecializedTexts
     */
    public function setText(array $text = array())
    {
        foreach ($text as $specializedTextsTextItem) {
            // validation for constraint: itemType
            if (!$specializedTextsTextItem instanceof \Confirmit\Authoring\StructType\SssText) {
                throw new \InvalidArgumentException(sprintf('The text property can only contain items of \Confirmit\Authoring\StructType\SssText, "%s" given', is_object($specializedTextsTextItem) ? get_class($specializedTextsTextItem) : gettype($specializedTextsTextItem)), __LINE__);
            }
        }
        $this->text = $text;
        return $this;
    }
    /**
     * Add item to text value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssText $item
     * @return \Confirmit\Authoring\StructType\SpecializedTexts
     */
    public function addToText(\Confirmit\Authoring\StructType\SssText $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\SssText) {
            throw new \InvalidArgumentException(sprintf('The text property can only contain items of \Confirmit\Authoring\StructType\SssText, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->text[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SpecializedTexts
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
