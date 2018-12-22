<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Hierarchy StructType
 * @subpackage Structs
 */
class Hierarchy extends ExternalLookup
{
    /**
     * The HierarchyId
     * Meta informations extracted from the WSDL
     * - use: required
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $HierarchyId;
    /**
     * The HierarchyElements
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfHierarchyElement
     */
    public $HierarchyElements;
    /**
     * Constructor method for Hierarchy
     * @uses Hierarchy::setHierarchyId()
     * @uses Hierarchy::setHierarchyElements()
     * @param string $hierarchyId
     * @param \Confirmit\Authoring\ArrayType\ArrayOfHierarchyElement $hierarchyElements
     */
    public function __construct($hierarchyId = null, \Confirmit\Authoring\ArrayType\ArrayOfHierarchyElement $hierarchyElements = null)
    {
        $this
            ->setHierarchyId($hierarchyId)
            ->setHierarchyElements($hierarchyElements);
    }
    /**
     * Get HierarchyId value
     * @return string
     */
    public function getHierarchyId()
    {
        return $this->HierarchyId;
    }
    /**
     * Set HierarchyId value
     * @param string $hierarchyId
     * @return \Confirmit\Authoring\StructType\Hierarchy
     */
    public function setHierarchyId($hierarchyId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($hierarchyId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $hierarchyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}", "%s" given', var_export($hierarchyId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($hierarchyId) && !is_string($hierarchyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hierarchyId)), __LINE__);
        }
        $this->HierarchyId = $hierarchyId;
        return $this;
    }
    /**
     * Get HierarchyElements value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfHierarchyElement|null
     */
    public function getHierarchyElements()
    {
        return $this->HierarchyElements;
    }
    /**
     * Set HierarchyElements value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfHierarchyElement $hierarchyElements
     * @return \Confirmit\Authoring\StructType\Hierarchy
     */
    public function setHierarchyElements(\Confirmit\Authoring\ArrayType\ArrayOfHierarchyElement $hierarchyElements = null)
    {
        $this->HierarchyElements = $hierarchyElements;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Hierarchy
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
