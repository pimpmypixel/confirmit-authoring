<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssValue StructType
 * Meta informations extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class SssValue extends SssValueBase
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
     * The code
     * @var string
     */
    public $code;
    /**
     * The precode
     * @var string
     */
    public $precode;
    /**
     * The score
     * @var string
     */
    public $score;
    /**
     * Constructor method for SssValue
     * @uses SssValue::setText()
     * @uses SssValue::setCode()
     * @uses SssValue::setPrecode()
     * @uses SssValue::setScore()
     * @param \Confirmit\Authoring\StructType\SssText[] $text
     * @param string $code
     * @param string $precode
     * @param string $score
     */
    public function __construct(array $text = array(), $code = null, $precode = null, $score = null)
    {
        $this
            ->setText($text)
            ->setCode($code)
            ->setPrecode($precode)
            ->setScore($score);
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
     * @return \Confirmit\Authoring\StructType\SssValue
     */
    public function setText(array $text = array())
    {
        foreach ($text as $sssValueTextItem) {
            // validation for constraint: itemType
            if (!$sssValueTextItem instanceof \Confirmit\Authoring\StructType\SssText) {
                throw new \InvalidArgumentException(sprintf('The text property can only contain items of \Confirmit\Authoring\StructType\SssText, "%s" given', is_object($sssValueTextItem) ? get_class($sssValueTextItem) : gettype($sssValueTextItem)), __LINE__);
            }
        }
        $this->text = $text;
        return $this;
    }
    /**
     * Add item to text value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssText $item
     * @return \Confirmit\Authoring\StructType\SssValue
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
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Confirmit\Authoring\StructType\SssValue
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get precode value
     * @return string|null
     */
    public function getPrecode()
    {
        return $this->precode;
    }
    /**
     * Set precode value
     * @param string $precode
     * @return \Confirmit\Authoring\StructType\SssValue
     */
    public function setPrecode($precode = null)
    {
        // validation for constraint: string
        if (!is_null($precode) && !is_string($precode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($precode)), __LINE__);
        }
        $this->precode = $precode;
        return $this;
    }
    /**
     * Get score value
     * @return string|null
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * Set score value
     * @param string $score
     * @return \Confirmit\Authoring\StructType\SssValue
     */
    public function setScore($score = null)
    {
        // validation for constraint: string
        if (!is_null($score) && !is_string($score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($score)), __LINE__);
        }
        $this->score = $score;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssValue
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
