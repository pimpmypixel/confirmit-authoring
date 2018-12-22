<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProjectExistsResponse StructType
 * @subpackage Structs
 */
class ProjectExistsResponse extends AbstractStructBase
{
    /**
     * The ProjectExistsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ProjectExistsResult;
    /**
     * Constructor method for ProjectExistsResponse
     * @uses ProjectExistsResponse::setProjectExistsResult()
     * @param bool $projectExistsResult
     */
    public function __construct($projectExistsResult = null)
    {
        $this
            ->setProjectExistsResult($projectExistsResult);
    }
    /**
     * Get ProjectExistsResult value
     * @return bool
     */
    public function getProjectExistsResult()
    {
        return $this->ProjectExistsResult;
    }
    /**
     * Set ProjectExistsResult value
     * @param bool $projectExistsResult
     * @return \Confirmit\Authoring\StructType\ProjectExistsResponse
     */
    public function setProjectExistsResult($projectExistsResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($projectExistsResult) && !is_bool($projectExistsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($projectExistsResult)), __LINE__);
        }
        $this->ProjectExistsResult = $projectExistsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ProjectExistsResponse
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
