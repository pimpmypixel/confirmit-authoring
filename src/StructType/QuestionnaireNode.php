<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuestionnaireNode StructType
 * @subpackage Structs
 */
abstract class QuestionnaireNode extends Node
{
    /**
     * The VersionTimestamp
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $VersionTimestamp;
    /**
     * The Deleted
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Deleted;
    /**
     * Constructor method for QuestionnaireNode
     * @uses QuestionnaireNode::setVersionTimestamp()
     * @uses QuestionnaireNode::setDeleted()
     * @param string $versionTimestamp
     * @param bool $deleted
     */
    public function __construct($versionTimestamp = null, $deleted = null)
    {
        $this
            ->setVersionTimestamp($versionTimestamp)
            ->setDeleted($deleted);
    }
    /**
     * Get VersionTimestamp value
     * @return string
     */
    public function getVersionTimestamp()
    {
        return $this->VersionTimestamp;
    }
    /**
     * Set VersionTimestamp value
     * @param string $versionTimestamp
     * @return \Confirmit\Authoring\StructType\QuestionnaireNode
     */
    public function setVersionTimestamp($versionTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($versionTimestamp) && !is_string($versionTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($versionTimestamp)), __LINE__);
        }
        $this->VersionTimestamp = $versionTimestamp;
        return $this;
    }
    /**
     * Get Deleted value
     * @return bool
     */
    public function getDeleted()
    {
        return $this->Deleted;
    }
    /**
     * Set Deleted value
     * @param bool $deleted
     * @return \Confirmit\Authoring\StructType\QuestionnaireNode
     */
    public function setDeleted($deleted = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleted) && !is_bool($deleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deleted)), __LINE__);
        }
        $this->Deleted = $deleted;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\QuestionnaireNode
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
