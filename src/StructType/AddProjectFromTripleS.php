<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddProjectFromTripleS StructType
 * @subpackage Structs
 */
class AddProjectFromTripleS extends AbstractStructBase
{
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $language;
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $key;
    /**
     * The sss
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssSchema
     */
    public $sss;
    /**
     * Constructor method for AddProjectFromTripleS
     * @uses AddProjectFromTripleS::setLanguage()
     * @uses AddProjectFromTripleS::setKey()
     * @uses AddProjectFromTripleS::setSss()
     * @param int $language
     * @param string $key
     * @param \Confirmit\Authoring\StructType\SssSchema $sss
     */
    public function __construct($language = null, $key = null, \Confirmit\Authoring\StructType\SssSchema $sss = null)
    {
        $this
            ->setLanguage($language)
            ->setKey($key)
            ->setSss($sss);
    }
    /**
     * Get language value
     * @return int
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param int $language
     * @return \Confirmit\Authoring\StructType\AddProjectFromTripleS
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: int
        if (!is_null($language) && !is_numeric($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
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
     * @return \Confirmit\Authoring\StructType\AddProjectFromTripleS
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
     * Get sss value
     * @return \Confirmit\Authoring\StructType\SssSchema|null
     */
    public function getSss()
    {
        return $this->sss;
    }
    /**
     * Set sss value
     * @param \Confirmit\Authoring\StructType\SssSchema $sss
     * @return \Confirmit\Authoring\StructType\AddProjectFromTripleS
     */
    public function setSss(\Confirmit\Authoring\StructType\SssSchema $sss = null)
    {
        $this->sss = $sss;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\AddProjectFromTripleS
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
