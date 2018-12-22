<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssHierarchy StructType
 * @subpackage Structs
 */
class SssHierarchy extends AbstractStructBase
{
    /**
     * The level
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssLevel[]
     */
    public $level;
    /**
     * Constructor method for SssHierarchy
     * @uses SssHierarchy::setLevel()
     * @param \Confirmit\Authoring\StructType\SssLevel[] $level
     */
    public function __construct(array $level = array())
    {
        $this
            ->setLevel($level);
    }
    /**
     * Get level value
     * @return \Confirmit\Authoring\StructType\SssLevel[]|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssLevel[] $level
     * @return \Confirmit\Authoring\StructType\SssHierarchy
     */
    public function setLevel(array $level = array())
    {
        foreach ($level as $sssHierarchyLevelItem) {
            // validation for constraint: itemType
            if (!$sssHierarchyLevelItem instanceof \Confirmit\Authoring\StructType\SssLevel) {
                throw new \InvalidArgumentException(sprintf('The level property can only contain items of \Confirmit\Authoring\StructType\SssLevel, "%s" given', is_object($sssHierarchyLevelItem) ? get_class($sssHierarchyLevelItem) : gettype($sssHierarchyLevelItem)), __LINE__);
            }
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Add item to level value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssLevel $item
     * @return \Confirmit\Authoring\StructType\SssHierarchy
     */
    public function addToLevel(\Confirmit\Authoring\StructType\SssLevel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\SssLevel) {
            throw new \InvalidArgumentException(sprintf('The level property can only contain items of \Confirmit\Authoring\StructType\SssLevel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->level[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssHierarchy
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
