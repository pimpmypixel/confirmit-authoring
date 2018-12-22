<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateProjectResponse StructType
 * @subpackage Structs
 */
class DuplicateProjectResponse extends AbstractStructBase
{
    /**
     * The DuplicateProjectResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DuplicateProjectResult;
    /**
     * Constructor method for DuplicateProjectResponse
     * @uses DuplicateProjectResponse::setDuplicateProjectResult()
     * @param string $duplicateProjectResult
     */
    public function __construct($duplicateProjectResult = null)
    {
        $this
            ->setDuplicateProjectResult($duplicateProjectResult);
    }
    /**
     * Get DuplicateProjectResult value
     * @return string|null
     */
    public function getDuplicateProjectResult()
    {
        return $this->DuplicateProjectResult;
    }
    /**
     * Set DuplicateProjectResult value
     * @param string $duplicateProjectResult
     * @return \Confirmit\Authoring\StructType\DuplicateProjectResponse
     */
    public function setDuplicateProjectResult($duplicateProjectResult = null)
    {
        // validation for constraint: string
        if (!is_null($duplicateProjectResult) && !is_string($duplicateProjectResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duplicateProjectResult)), __LINE__);
        }
        $this->DuplicateProjectResult = $duplicateProjectResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\DuplicateProjectResponse
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
