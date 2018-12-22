<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HieararchyAnswer StructType
 * @subpackage Structs
 */
class HieararchyAnswer extends AnswerBase
{
    /**
     * The HierarchyRootNodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode
     */
    public $HierarchyRootNodes;
    /**
     * Constructor method for HieararchyAnswer
     * @uses HieararchyAnswer::setHierarchyRootNodes()
     * @param \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode $hierarchyRootNodes
     */
    public function __construct(\Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode $hierarchyRootNodes = null)
    {
        $this
            ->setHierarchyRootNodes($hierarchyRootNodes);
    }
    /**
     * Get HierarchyRootNodes value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode|null
     */
    public function getHierarchyRootNodes()
    {
        return $this->HierarchyRootNodes;
    }
    /**
     * Set HierarchyRootNodes value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode $hierarchyRootNodes
     * @return \Confirmit\Authoring\StructType\HieararchyAnswer
     */
    public function setHierarchyRootNodes(\Confirmit\Authoring\ArrayType\ArrayOfHierarchyNode $hierarchyRootNodes = null)
    {
        $this->HierarchyRootNodes = $hierarchyRootNodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\HieararchyAnswer
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
