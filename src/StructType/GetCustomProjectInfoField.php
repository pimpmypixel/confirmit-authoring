<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomProjectInfoField StructType
 * @subpackage Structs
 */
class GetCustomProjectInfoField extends AbstractStructBase
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
     * The fieldId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $fieldId;
    /**
     * Constructor method for GetCustomProjectInfoField
     * @uses GetCustomProjectInfoField::setKey()
     * @uses GetCustomProjectInfoField::setProjectId()
     * @uses GetCustomProjectInfoField::setFieldId()
     * @param string $key
     * @param string $projectId
     * @param string $fieldId
     */
    public function __construct($key = null, $projectId = null, $fieldId = null)
    {
        $this
            ->setKey($key)
            ->setProjectId($projectId)
            ->setFieldId($fieldId);
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
     * @return \Confirmit\Authoring\StructType\GetCustomProjectInfoField
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
     * @return \Confirmit\Authoring\StructType\GetCustomProjectInfoField
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
     * Get fieldId value
     * @return string|null
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }
    /**
     * Set fieldId value
     * @param string $fieldId
     * @return \Confirmit\Authoring\StructType\GetCustomProjectInfoField
     */
    public function setFieldId($fieldId = null)
    {
        // validation for constraint: string
        if (!is_null($fieldId) && !is_string($fieldId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldId)), __LINE__);
        }
        $this->fieldId = $fieldId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetCustomProjectInfoField
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
