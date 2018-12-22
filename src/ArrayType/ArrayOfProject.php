<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProject ArrayType
 * @subpackage Arrays
 */
class ArrayOfProject extends AbstractStructArrayBase
{
    /**
     * The Project
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Project[]
     */
    public $Project;
    /**
     * Constructor method for ArrayOfProject
     * @uses ArrayOfProject::setProject()
     * @param \Confirmit\Authoring\StructType\Project[] $project
     */
    public function __construct(array $project = array())
    {
        $this
            ->setProject($project);
    }
    /**
     * Get Project value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\Project[]|null
     */
    public function getProject()
    {
        return isset($this->Project) ? $this->Project : null;
    }
    /**
     * Set Project value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\Project[] $project
     * @return \Confirmit\Authoring\ArrayType\ArrayOfProject
     */
    public function setProject(array $project = array())
    {
        foreach ($project as $arrayOfProjectProjectItem) {
            // validation for constraint: itemType
            if (!$arrayOfProjectProjectItem instanceof \Confirmit\Authoring\StructType\Project) {
                throw new \InvalidArgumentException(sprintf('The Project property can only contain items of \Confirmit\Authoring\StructType\Project, "%s" given', is_object($arrayOfProjectProjectItem) ? get_class($arrayOfProjectProjectItem) : gettype($arrayOfProjectProjectItem)), __LINE__);
            }
        }
        if (is_null($project) || (is_array($project) && empty($project))) {
            unset($this->Project);
        } else {
            $this->Project = $project;
        }
        return $this;
    }
    /**
     * Add item to Project value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\Project $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfProject
     */
    public function addToProject(\Confirmit\Authoring\StructType\Project $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\Project) {
            throw new \InvalidArgumentException(sprintf('The Project property can only contain items of \Confirmit\Authoring\StructType\Project, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Project[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\Project|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\Project|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\Project|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\Project|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\Project|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Project
     */
    public function getAttributeName()
    {
        return 'Project';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfProject
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
