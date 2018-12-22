<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddProjectResponse StructType
 * @subpackage Structs
 */
class AddProjectResponse extends AbstractStructBase
{
    /**
     * The AddProjectResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AddProjectResult;
    /**
     * Constructor method for AddProjectResponse
     * @uses AddProjectResponse::setAddProjectResult()
     * @param string $addProjectResult
     */
    public function __construct($addProjectResult = null)
    {
        $this
            ->setAddProjectResult($addProjectResult);
    }
    /**
     * Get AddProjectResult value
     * @return string|null
     */
    public function getAddProjectResult()
    {
        return $this->AddProjectResult;
    }
    /**
     * Set AddProjectResult value
     * @param string $addProjectResult
     * @return \Confirmit\Authoring\StructType\AddProjectResponse
     */
    public function setAddProjectResult($addProjectResult = null)
    {
        // validation for constraint: string
        if (!is_null($addProjectResult) && !is_string($addProjectResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addProjectResult)), __LINE__);
        }
        $this->AddProjectResult = $addProjectResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\AddProjectResponse
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
