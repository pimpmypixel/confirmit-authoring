<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomProjectInfoFieldResponse StructType
 * @subpackage Structs
 */
class GetCustomProjectInfoFieldResponse extends AbstractStructBase
{
    /**
     * The GetCustomProjectInfoFieldResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetCustomProjectInfoFieldResult;
    /**
     * Constructor method for GetCustomProjectInfoFieldResponse
     * @uses GetCustomProjectInfoFieldResponse::setGetCustomProjectInfoFieldResult()
     * @param string $getCustomProjectInfoFieldResult
     */
    public function __construct($getCustomProjectInfoFieldResult = null)
    {
        $this
            ->setGetCustomProjectInfoFieldResult($getCustomProjectInfoFieldResult);
    }
    /**
     * Get GetCustomProjectInfoFieldResult value
     * @return string|null
     */
    public function getGetCustomProjectInfoFieldResult()
    {
        return $this->GetCustomProjectInfoFieldResult;
    }
    /**
     * Set GetCustomProjectInfoFieldResult value
     * @param string $getCustomProjectInfoFieldResult
     * @return \Confirmit\Authoring\StructType\GetCustomProjectInfoFieldResponse
     */
    public function setGetCustomProjectInfoFieldResult($getCustomProjectInfoFieldResult = null)
    {
        // validation for constraint: string
        if (!is_null($getCustomProjectInfoFieldResult) && !is_string($getCustomProjectInfoFieldResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getCustomProjectInfoFieldResult)), __LINE__);
        }
        $this->GetCustomProjectInfoFieldResult = $getCustomProjectInfoFieldResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetCustomProjectInfoFieldResponse
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
