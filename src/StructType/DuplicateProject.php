<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateProject StructType
 * @subpackage Structs
 */
class DuplicateProject extends AbstractStructBase
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
     * The newProjectName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $newProjectName;
    /**
     * Constructor method for DuplicateProject
     * @uses DuplicateProject::setKey()
     * @uses DuplicateProject::setProjectId()
     * @uses DuplicateProject::setNewProjectName()
     * @param string $key
     * @param string $projectId
     * @param string $newProjectName
     */
    public function __construct($key = null, $projectId = null, $newProjectName = null)
    {
        $this
            ->setKey($key)
            ->setProjectId($projectId)
            ->setNewProjectName($newProjectName);
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
     * @return \Confirmit\Authoring\StructType\DuplicateProject
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
     * @return \Confirmit\Authoring\StructType\DuplicateProject
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
     * Get newProjectName value
     * @return string|null
     */
    public function getNewProjectName()
    {
        return $this->newProjectName;
    }
    /**
     * Set newProjectName value
     * @param string $newProjectName
     * @return \Confirmit\Authoring\StructType\DuplicateProject
     */
    public function setNewProjectName($newProjectName = null)
    {
        // validation for constraint: string
        if (!is_null($newProjectName) && !is_string($newProjectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newProjectName)), __LINE__);
        }
        $this->newProjectName = $newProjectName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\DuplicateProject
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
