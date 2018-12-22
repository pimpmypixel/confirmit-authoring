<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Block StructType
 * @subpackage Structs
 */
class Block extends QuestionnaireNode
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Order;
    /**
     * The BlockType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BlockType;
    /**
     * The Nodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public $Nodes;
    /**
     * The Descriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2
     */
    public $Descriptions;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for Block
     * @uses Block::setOrder()
     * @uses Block::setBlockType()
     * @uses Block::setNodes()
     * @uses Block::setDescriptions()
     * @uses Block::setName()
     * @param string $order
     * @param string $blockType
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice13 $nodes
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions
     * @param string $name
     */
    public function __construct($order = null, $blockType = null, \Confirmit\Authoring\StructType\ArrayOfChoice13 $nodes = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions = null, $name = null)
    {
        $this
            ->setOrder($order)
            ->setBlockType($blockType)
            ->setNodes($nodes)
            ->setDescriptions($descriptions)
            ->setName($name);
    }
    /**
     * Get Order value
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $order
     * @return \Confirmit\Authoring\StructType\Block
     */
    public function setOrder($order = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid($order)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order, implode(', ', \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get BlockType value
     * @return string
     */
    public function getBlockType()
    {
        return $this->BlockType;
    }
    /**
     * Set BlockType value
     * @uses \Confirmit\Authoring\EnumType\BlockType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\BlockType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $blockType
     * @return \Confirmit\Authoring\StructType\Block
     */
    public function setBlockType($blockType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\BlockType::valueIsValid($blockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $blockType, implode(', ', \Confirmit\Authoring\EnumType\BlockType::getValidValues())), __LINE__);
        }
        $this->BlockType = $blockType;
        return $this;
    }
    /**
     * Get Nodes value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13|null
     */
    public function getNodes()
    {
        return $this->Nodes;
    }
    /**
     * Set Nodes value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice13 $nodes
     * @return \Confirmit\Authoring\StructType\Block
     */
    public function setNodes(\Confirmit\Authoring\StructType\ArrayOfChoice13 $nodes = null)
    {
        $this->Nodes = $nodes;
        return $this;
    }
    /**
     * Get Descriptions value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2|null
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }
    /**
     * Set Descriptions value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions
     * @return \Confirmit\Authoring\StructType\Block
     */
    public function setDescriptions(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions = null)
    {
        $this->Descriptions = $descriptions;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Confirmit\Authoring\StructType\Block
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Block
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
