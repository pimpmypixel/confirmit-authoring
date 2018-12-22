<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddProject StructType
 * @subpackage Structs
 */
class AddProject extends AbstractStructBase
{
    /**
     * The isPanel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $isPanel;
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $key;
    /**
     * Constructor method for AddProject
     * @uses AddProject::setIsPanel()
     * @uses AddProject::setKey()
     * @param bool $isPanel
     * @param string $key
     */
    public function __construct($isPanel = null, $key = null)
    {
        $this
            ->setIsPanel($isPanel)
            ->setKey($key);
    }
    /**
     * Get isPanel value
     * @return bool
     */
    public function getIsPanel()
    {
        return $this->isPanel;
    }
    /**
     * Set isPanel value
     * @param bool $isPanel
     * @return \Confirmit\Authoring\StructType\AddProject
     */
    public function setIsPanel($isPanel = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPanel) && !is_bool($isPanel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPanel)), __LINE__);
        }
        $this->isPanel = $isPanel;
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
     * @return \Confirmit\Authoring\StructType\AddProject
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\AddProject
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
