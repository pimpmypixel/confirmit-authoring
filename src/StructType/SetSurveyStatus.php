<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSurveyStatus StructType
 * @subpackage Structs
 */
class SetSurveyStatus extends AbstractStructBase
{
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $status;
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
     * Constructor method for SetSurveyStatus
     * @uses SetSurveyStatus::setStatus()
     * @uses SetSurveyStatus::setKey()
     * @uses SetSurveyStatus::setProjectId()
     * @param string $status
     * @param string $key
     * @param string $projectId
     */
    public function __construct($status = null, $key = null, $projectId = null)
    {
        $this
            ->setStatus($status)
            ->setKey($key)
            ->setProjectId($projectId);
    }
    /**
     * Get status value
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Confirmit\Authoring\EnumType\SurveyStatusType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SurveyStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Confirmit\Authoring\StructType\SetSurveyStatus
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SurveyStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Confirmit\Authoring\EnumType\SurveyStatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
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
     * @return \Confirmit\Authoring\StructType\SetSurveyStatus
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
     * @return \Confirmit\Authoring\StructType\SetSurveyStatus
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
     * @return \Confirmit\Authoring\StructType\SetSurveyStatus
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
