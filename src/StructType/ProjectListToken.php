<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProjectListToken StructType
 * @subpackage Structs
 */
class ProjectListToken extends AbstractStructBase
{
    /**
     * The AtEnd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $AtEnd;
    /**
     * The HasError
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $HasError;
    /**
     * The LastId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastId;
    /**
     * Constructor method for ProjectListToken
     * @uses ProjectListToken::setAtEnd()
     * @uses ProjectListToken::setHasError()
     * @uses ProjectListToken::setLastId()
     * @param bool $atEnd
     * @param bool $hasError
     * @param string $lastId
     */
    public function __construct($atEnd = null, $hasError = null, $lastId = null)
    {
        $this
            ->setAtEnd($atEnd)
            ->setHasError($hasError)
            ->setLastId($lastId);
    }
    /**
     * Get AtEnd value
     * @return bool
     */
    public function getAtEnd()
    {
        return $this->AtEnd;
    }
    /**
     * Set AtEnd value
     * @param bool $atEnd
     * @return \Confirmit\Authoring\StructType\ProjectListToken
     */
    public function setAtEnd($atEnd = null)
    {
        // validation for constraint: boolean
        if (!is_null($atEnd) && !is_bool($atEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($atEnd)), __LINE__);
        }
        $this->AtEnd = $atEnd;
        return $this;
    }
    /**
     * Get HasError value
     * @return bool
     */
    public function getHasError()
    {
        return $this->HasError;
    }
    /**
     * Set HasError value
     * @param bool $hasError
     * @return \Confirmit\Authoring\StructType\ProjectListToken
     */
    public function setHasError($hasError = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasError) && !is_bool($hasError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasError)), __LINE__);
        }
        $this->HasError = $hasError;
        return $this;
    }
    /**
     * Get LastId value
     * @return string|null
     */
    public function getLastId()
    {
        return $this->LastId;
    }
    /**
     * Set LastId value
     * @param string $lastId
     * @return \Confirmit\Authoring\StructType\ProjectListToken
     */
    public function setLastId($lastId = null)
    {
        // validation for constraint: string
        if (!is_null($lastId) && !is_string($lastId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastId)), __LINE__);
        }
        $this->LastId = $lastId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ProjectListToken
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
