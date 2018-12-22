<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddProjectFromTripleSResponse StructType
 * @subpackage Structs
 */
class AddProjectFromTripleSResponse extends AbstractStructBase
{
    /**
     * The AddProjectFromTripleSResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AddProjectFromTripleSResult;
    /**
     * Constructor method for AddProjectFromTripleSResponse
     * @uses AddProjectFromTripleSResponse::setAddProjectFromTripleSResult()
     * @param string $addProjectFromTripleSResult
     */
    public function __construct($addProjectFromTripleSResult = null)
    {
        $this
            ->setAddProjectFromTripleSResult($addProjectFromTripleSResult);
    }
    /**
     * Get AddProjectFromTripleSResult value
     * @return string|null
     */
    public function getAddProjectFromTripleSResult()
    {
        return $this->AddProjectFromTripleSResult;
    }
    /**
     * Set AddProjectFromTripleSResult value
     * @param string $addProjectFromTripleSResult
     * @return \Confirmit\Authoring\StructType\AddProjectFromTripleSResponse
     */
    public function setAddProjectFromTripleSResult($addProjectFromTripleSResult = null)
    {
        // validation for constraint: string
        if (!is_null($addProjectFromTripleSResult) && !is_string($addProjectFromTripleSResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addProjectFromTripleSResult)), __LINE__);
        }
        $this->AddProjectFromTripleSResult = $addProjectFromTripleSResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\AddProjectFromTripleSResponse
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
