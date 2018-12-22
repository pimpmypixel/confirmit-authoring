<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Root StructType
 * @subpackage Structs
 */
class Root extends Node
{
    /**
     * The NewChildrenAllowed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $NewChildrenAllowed;
    /**
     * The Nodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public $Nodes;
    /**
     * The NodeType
     * @var string
     */
    public $NodeType;
    /**
     * Constructor method for Root
     * @uses Root::setNewChildrenAllowed()
     * @uses Root::setNodes()
     * @uses Root::setNodeType()
     * @param bool $newChildrenAllowed
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice17 $nodes
     * @param string $nodeType
     */
    public function __construct($newChildrenAllowed = null, \Confirmit\Authoring\StructType\ArrayOfChoice17 $nodes = null, $nodeType = null)
    {
        $this
            ->setNewChildrenAllowed($newChildrenAllowed)
            ->setNodes($nodes)
            ->setNodeType($nodeType);
    }
    /**
     * Get NewChildrenAllowed value
     * @return bool
     */
    public function getNewChildrenAllowed()
    {
        return $this->NewChildrenAllowed;
    }
    /**
     * Set NewChildrenAllowed value
     * @param bool $newChildrenAllowed
     * @return \Confirmit\Authoring\StructType\Root
     */
    public function setNewChildrenAllowed($newChildrenAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($newChildrenAllowed) && !is_bool($newChildrenAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($newChildrenAllowed)), __LINE__);
        }
        $this->NewChildrenAllowed = $newChildrenAllowed;
        return $this;
    }
    /**
     * Get Nodes value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17|null
     */
    public function getNodes()
    {
        return $this->Nodes;
    }
    /**
     * Set Nodes value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice17 $nodes
     * @return \Confirmit\Authoring\StructType\Root
     */
    public function setNodes(\Confirmit\Authoring\StructType\ArrayOfChoice17 $nodes = null)
    {
        $this->Nodes = $nodes;
        return $this;
    }
    /**
     * Get NodeType value
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->NodeType;
    }
    /**
     * Set NodeType value
     * @param string $nodeType
     * @return \Confirmit\Authoring\StructType\Root
     */
    public function setNodeType($nodeType = null)
    {
        // validation for constraint: string
        if (!is_null($nodeType) && !is_string($nodeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nodeType)), __LINE__);
        }
        $this->NodeType = $nodeType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Root
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
