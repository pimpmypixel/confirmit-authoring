<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Node StructType
 * @subpackage Structs
 */
abstract class Node extends AbstractStructBase
{
    /**
     * The _Objid_Xml
     * @var string
     */
    public $_Objid_Xml;
    /**
     * Constructor method for Node
     * @uses Node::set_Objid_Xml()
     * @param string $_Objid_Xml
     */
    public function __construct($_Objid_Xml = null)
    {
        $this
            ->set_Objid_Xml($_Objid_Xml);
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
     * @return \Confirmit\Authoring\StructType\Node
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
     * @return \Confirmit\Authoring\StructType\Node
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
