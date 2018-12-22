<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProjectList StructType
 * @subpackage Structs
 */
class ProjectList extends ProjectListBase
{
    /**
     * The Projects
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfProject
     */
    public $Projects;
    /**
     * Constructor method for ProjectList
     * @uses ProjectList::setProjects()
     * @param \Confirmit\Authoring\ArrayType\ArrayOfProject $projects
     */
    public function __construct(\Confirmit\Authoring\ArrayType\ArrayOfProject $projects = null)
    {
        $this
            ->setProjects($projects);
    }
    /**
     * Get Projects value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfProject|null
     */
    public function getProjects()
    {
        return $this->Projects;
    }
    /**
     * Set Projects value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfProject $projects
     * @return \Confirmit\Authoring\StructType\ProjectList
     */
    public function setProjects(\Confirmit\Authoring\ArrayType\ArrayOfProject $projects = null)
    {
        $this->Projects = $projects;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ProjectList
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
