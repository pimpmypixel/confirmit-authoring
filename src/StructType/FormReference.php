<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormReference StructType
 * @subpackage Structs
 */
class FormReference extends AbstractStructBase
{
    /**
     * The FormPoetId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FormPoetId;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The _Objid_Xml
     * @var string
     */
    public $_Objid_Xml;
    /**
     * Constructor method for FormReference
     * @uses FormReference::setFormPoetId()
     * @uses FormReference::setName()
     * @uses FormReference::set_Objid_Xml()
     * @param string $formPoetId
     * @param string $name
     * @param string $_Objid_Xml
     */
    public function __construct($formPoetId = null, $name = null, $_Objid_Xml = null)
    {
        $this
            ->setFormPoetId($formPoetId)
            ->setName($name)
            ->set_Objid_Xml($_Objid_Xml);
    }
    /**
     * Get FormPoetId value
     * @return string|null
     */
    public function getFormPoetId()
    {
        return $this->FormPoetId;
    }
    /**
     * Set FormPoetId value
     * @param string $formPoetId
     * @return \Confirmit\Authoring\StructType\FormReference
     */
    public function setFormPoetId($formPoetId = null)
    {
        // validation for constraint: string
        if (!is_null($formPoetId) && !is_string($formPoetId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formPoetId)), __LINE__);
        }
        $this->FormPoetId = $formPoetId;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Confirmit\Authoring\StructType\FormReference
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get _Objid_Xml value
     * @return string|null
     */
    public function get_Objid_Xml()
    {
        return $this->_Objid_Xml;
    }
    /**
     * Set _Objid_Xml value
     * @param string $_Objid_Xml
     * @return \Confirmit\Authoring\StructType\FormReference
     */
    public function set_Objid_Xml($_Objid_Xml = null)
    {
        // validation for constraint: string
        if (!is_null($_Objid_Xml) && !is_string($_Objid_Xml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_Objid_Xml)), __LINE__);
        }
        $this->_Objid_Xml = $_Objid_Xml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\FormReference
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
