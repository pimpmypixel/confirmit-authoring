<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuotas StructType
 * @subpackage Structs
 */
class GetQuotas extends AbstractStructBase
{
    /**
     * The projectSpecific
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $projectSpecific;
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
     * Constructor method for GetQuotas
     * @uses GetQuotas::setProjectSpecific()
     * @uses GetQuotas::setKey()
     * @uses GetQuotas::setProjectId()
     * @param bool $projectSpecific
     * @param string $key
     * @param string $projectId
     */
    public function __construct($projectSpecific = null, $key = null, $projectId = null)
    {
        $this
            ->setProjectSpecific($projectSpecific)
            ->setKey($key)
            ->setProjectId($projectId);
    }
    /**
     * Get projectSpecific value
     * @return bool
     */
    public function getProjectSpecific()
    {
        return $this->projectSpecific;
    }
    /**
     * Set projectSpecific value
     * @param bool $projectSpecific
     * @return \Confirmit\Authoring\StructType\GetQuotas
     */
    public function setProjectSpecific($projectSpecific = null)
    {
        // validation for constraint: boolean
        if (!is_null($projectSpecific) && !is_bool($projectSpecific)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($projectSpecific)), __LINE__);
        }
        $this->projectSpecific = $projectSpecific;
        return $this;
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
     * @return \Confirmit\Authoring\StructType\GetQuotas
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
     * @return \Confirmit\Authoring\StructType\GetQuotas
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetQuotas
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
