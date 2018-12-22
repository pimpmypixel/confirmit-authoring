<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDatabaseLastCompiledResponse StructType
 * @subpackage Structs
 */
class GetDatabaseLastCompiledResponse extends AbstractStructBase
{
    /**
     * The GetDatabaseLastCompiledResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $GetDatabaseLastCompiledResult;
    /**
     * Constructor method for GetDatabaseLastCompiledResponse
     * @uses GetDatabaseLastCompiledResponse::setGetDatabaseLastCompiledResult()
     * @param string $getDatabaseLastCompiledResult
     */
    public function __construct($getDatabaseLastCompiledResult = null)
    {
        $this
            ->setGetDatabaseLastCompiledResult($getDatabaseLastCompiledResult);
    }
    /**
     * Get GetDatabaseLastCompiledResult value
     * @return string
     */
    public function getGetDatabaseLastCompiledResult()
    {
        return $this->GetDatabaseLastCompiledResult;
    }
    /**
     * Set GetDatabaseLastCompiledResult value
     * @param string $getDatabaseLastCompiledResult
     * @return \Confirmit\Authoring\StructType\GetDatabaseLastCompiledResponse
     */
    public function setGetDatabaseLastCompiledResult($getDatabaseLastCompiledResult = null)
    {
        // validation for constraint: string
        if (!is_null($getDatabaseLastCompiledResult) && !is_string($getDatabaseLastCompiledResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getDatabaseLastCompiledResult)), __LINE__);
        }
        $this->GetDatabaseLastCompiledResult = $getDatabaseLastCompiledResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetDatabaseLastCompiledResponse
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
