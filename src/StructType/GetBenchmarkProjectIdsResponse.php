<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBenchmarkProjectIdsResponse StructType
 * @subpackage Structs
 */
class GetBenchmarkProjectIdsResponse extends AbstractStructBase
{
    /**
     * The GetBenchmarkProjectIdsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfString1
     */
    public $GetBenchmarkProjectIdsResult;
    /**
     * Constructor method for GetBenchmarkProjectIdsResponse
     * @uses GetBenchmarkProjectIdsResponse::setGetBenchmarkProjectIdsResult()
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString1 $getBenchmarkProjectIdsResult
     */
    public function __construct(\Confirmit\Authoring\ArrayType\ArrayOfString1 $getBenchmarkProjectIdsResult = null)
    {
        $this
            ->setGetBenchmarkProjectIdsResult($getBenchmarkProjectIdsResult);
    }
    /**
     * Get GetBenchmarkProjectIdsResult value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString1|null
     */
    public function getGetBenchmarkProjectIdsResult()
    {
        return $this->GetBenchmarkProjectIdsResult;
    }
    /**
     * Set GetBenchmarkProjectIdsResult value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString1 $getBenchmarkProjectIdsResult
     * @return \Confirmit\Authoring\StructType\GetBenchmarkProjectIdsResponse
     */
    public function setGetBenchmarkProjectIdsResult(\Confirmit\Authoring\ArrayType\ArrayOfString1 $getBenchmarkProjectIdsResult = null)
    {
        $this->GetBenchmarkProjectIdsResult = $getBenchmarkProjectIdsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetBenchmarkProjectIdsResponse
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
