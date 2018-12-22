<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Update StructType
 * @subpackage Structs
 */
class Update extends AbstractStructBase
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
     * The schema
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SurveySchema
     */
    public $schema;
    /**
     * Constructor method for Update
     * @uses Update::setKey()
     * @uses Update::setProjectId()
     * @uses Update::setSchema()
     * @param string $key
     * @param string $projectId
     * @param \Confirmit\Authoring\StructType\SurveySchema $schema
     */
    public function __construct($key = null, $projectId = null, \Confirmit\Authoring\StructType\SurveySchema $schema = null)
    {
        $this
            ->setKey($key)
            ->setProjectId($projectId)
            ->setSchema($schema);
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
     * @return \Confirmit\Authoring\StructType\Update
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
     * @return \Confirmit\Authoring\StructType\Update
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
     * Get schema value
     * @return \Confirmit\Authoring\StructType\SurveySchema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * Set schema value
     * @param \Confirmit\Authoring\StructType\SurveySchema $schema
     * @return \Confirmit\Authoring\StructType\Update
     */
    public function setSchema(\Confirmit\Authoring\StructType\SurveySchema $schema = null)
    {
        $this->schema = $schema;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Update
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
