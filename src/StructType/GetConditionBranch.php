<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConditionBranch StructType
 * @subpackage Structs
 */
class GetConditionBranch extends AbstractStructBase
{
    /**
     * The trueBranch
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $trueBranch;
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
     * The parent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\Condition
     */
    public $parent;
    /**
     * The poetReadFilter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public $poetReadFilter;
    /**
     * Constructor method for GetConditionBranch
     * @uses GetConditionBranch::setTrueBranch()
     * @uses GetConditionBranch::setKey()
     * @uses GetConditionBranch::setProjectId()
     * @uses GetConditionBranch::setParent()
     * @uses GetConditionBranch::setPoetReadFilter()
     * @param bool $trueBranch
     * @param string $key
     * @param string $projectId
     * @param \Confirmit\Authoring\StructType\Condition $parent
     * @param \Confirmit\Authoring\StructType\PoetReadFilter $poetReadFilter
     */
    public function __construct($trueBranch = null, $key = null, $projectId = null, \Confirmit\Authoring\StructType\Condition $parent = null, \Confirmit\Authoring\StructType\PoetReadFilter $poetReadFilter = null)
    {
        $this
            ->setTrueBranch($trueBranch)
            ->setKey($key)
            ->setProjectId($projectId)
            ->setParent($parent)
            ->setPoetReadFilter($poetReadFilter);
    }
    /**
     * Get trueBranch value
     * @return bool
     */
    public function getTrueBranch()
    {
        return $this->trueBranch;
    }
    /**
     * Set trueBranch value
     * @param bool $trueBranch
     * @return \Confirmit\Authoring\StructType\GetConditionBranch
     */
    public function setTrueBranch($trueBranch = null)
    {
        // validation for constraint: boolean
        if (!is_null($trueBranch) && !is_bool($trueBranch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($trueBranch)), __LINE__);
        }
        $this->trueBranch = $trueBranch;
        return $this;
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
     * @return \Confirmit\Authoring\StructType\GetConditionBranch
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
     * @return \Confirmit\Authoring\StructType\GetConditionBranch
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
     * Get parent value
     * @return \Confirmit\Authoring\StructType\Condition|null
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Set parent value
     * @param \Confirmit\Authoring\StructType\Condition $parent
     * @return \Confirmit\Authoring\StructType\GetConditionBranch
     */
    public function setParent(\Confirmit\Authoring\StructType\Condition $parent = null)
    {
        $this->parent = $parent;
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
     * @return \Confirmit\Authoring\StructType\GetConditionBranch
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
     * @return \Confirmit\Authoring\StructType\GetConditionBranch
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
