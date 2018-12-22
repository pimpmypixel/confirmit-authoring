<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNode StructType
 * @subpackage Structs
 */
class GetNode extends AbstractStructBase
{
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $key;
    /**
     * The projectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $projectId;
    /**
     * The node
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\Node
     */
    public $node;
    /**
     * The poetReadFilter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public $poetReadFilter;
    /**
     * Constructor method for GetNode
     * @uses GetNode::setKey()
     * @uses GetNode::setProjectId()
     * @uses GetNode::setNode()
     * @uses GetNode::setPoetReadFilter()
     * @param string $key
     * @param string $projectId
     * @param \Confirmit\Authoring\StructType\Node $node
     * @param \Confirmit\Authoring\StructType\PoetReadFilter $poetReadFilter
     */
    public function __construct($key = null, $projectId = null, \Confirmit\Authoring\StructType\Node $node = null, \Confirmit\Authoring\StructType\PoetReadFilter $poetReadFilter = null)
    {
        $this
            ->setKey($key)
            ->setProjectId($projectId)
            ->setNode($node)
            ->setPoetReadFilter($poetReadFilter);
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Confirmit\Authoring\StructType\GetNode
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get projectId value
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param string $projectId
     * @return \Confirmit\Authoring\StructType\GetNode
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: string
        if (!is_null($projectId) && !is_string($projectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Get node value
     * @return \Confirmit\Authoring\StructType\Node|null
     */
    public function getNode()
    {
        return $this->node;
    }
    /**
     * Set node value
     * @param \Confirmit\Authoring\StructType\Node $node
     * @return \Confirmit\Authoring\StructType\GetNode
     */
    public function setNode(\Confirmit\Authoring\StructType\Node $node = null)
    {
        $this->node = $node;
        return $this;
    }
    /**
     * Get poetReadFilter value
     * @return \Confirmit\Authoring\StructType\PoetReadFilter|null
     */
    public function getPoetReadFilter()
    {
        return $this->poetReadFilter;
    }
    /**
     * Set poetReadFilter value
     * @param \Confirmit\Authoring\StructType\PoetReadFilter $poetReadFilter
     * @return \Confirmit\Authoring\StructType\GetNode
     */
    public function setPoetReadFilter(\Confirmit\Authoring\StructType\PoetReadFilter $poetReadFilter = null)
    {
        $this->poetReadFilter = $poetReadFilter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetNode
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
