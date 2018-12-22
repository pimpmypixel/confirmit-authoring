<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProjectListResultSet StructType
 * @subpackage Structs
 */
class ProjectListResultSet extends AbstractStructBase
{
    /**
     * The List
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectList
     */
    public $List;
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectListToken
     */
    public $Token;
    /**
     * Constructor method for ProjectListResultSet
     * @uses ProjectListResultSet::setList()
     * @uses ProjectListResultSet::setToken()
     * @param \Confirmit\Authoring\StructType\ProjectList $list
     * @param \Confirmit\Authoring\StructType\ProjectListToken $token
     */
    public function __construct(\Confirmit\Authoring\StructType\ProjectList $list = null, \Confirmit\Authoring\StructType\ProjectListToken $token = null)
    {
        $this
            ->setList($list)
            ->setToken($token);
    }
    /**
     * Get List value
     * @return \Confirmit\Authoring\StructType\ProjectList|null
     */
    public function getList()
    {
        return $this->List;
    }
    /**
     * Set List value
     * @param \Confirmit\Authoring\StructType\ProjectList $list
     * @return \Confirmit\Authoring\StructType\ProjectListResultSet
     */
    public function setList(\Confirmit\Authoring\StructType\ProjectList $list = null)
    {
        $this->List = $list;
        return $this;
    }
    /**
     * Get Token value
     * @return \Confirmit\Authoring\StructType\ProjectListToken|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param \Confirmit\Authoring\StructType\ProjectListToken $token
     * @return \Confirmit\Authoring\StructType\ProjectListResultSet
     */
    public function setToken(\Confirmit\Authoring\StructType\ProjectListToken $token = null)
    {
        $this->Token = $token;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ProjectListResultSet
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
