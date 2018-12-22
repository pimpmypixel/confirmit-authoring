<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssSchema StructType
 * @subpackage Structs
 */
class SssSchema extends AbstractStructBase
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * The time
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $time;
    /**
     * The origin
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $origin;
    /**
     * The user
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $user;
    /**
     * The survey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssSurvey
     */
    public $survey;
    /**
     * The languages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $languages;
    /**
     * The modes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $modes;
    /**
     * The hierarchy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssHierarchy
     */
    public $hierarchy;
    /**
     * The quantum
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssQuantum
     */
    public $quantum;
    /**
     * The version
     * @var string
     */
    public $version;
    /**
     * Constructor method for SssSchema
     * @uses SssSchema::setDate()
     * @uses SssSchema::setTime()
     * @uses SssSchema::setOrigin()
     * @uses SssSchema::setUser()
     * @uses SssSchema::setSurvey()
     * @uses SssSchema::setLanguages()
     * @uses SssSchema::setModes()
     * @uses SssSchema::setHierarchy()
     * @uses SssSchema::setQuantum()
     * @uses SssSchema::setVersion()
     * @param string $date
     * @param string $time
     * @param string $origin
     * @param string $user
     * @param \Confirmit\Authoring\StructType\SssSurvey $survey
     * @param string $languages
     * @param string $modes
     * @param \Confirmit\Authoring\StructType\SssHierarchy $hierarchy
     * @param \Confirmit\Authoring\StructType\SssQuantum $quantum
     * @param string $version
     */
    public function __construct($date = null, $time = null, $origin = null, $user = null, \Confirmit\Authoring\StructType\SssSurvey $survey = null, $languages = null, $modes = null, \Confirmit\Authoring\StructType\SssHierarchy $hierarchy = null, \Confirmit\Authoring\StructType\SssQuantum $quantum = null, $version = null)
    {
        $this
            ->setDate($date)
            ->setTime($time)
            ->setOrigin($origin)
            ->setUser($user)
            ->setSurvey($survey)
            ->setLanguages($languages)
            ->setModes($modes)
            ->setHierarchy($hierarchy)
            ->setQuantum($quantum)
            ->setVersion($version);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->time = $time;
        return $this;
    }
    /**
     * Get origin value
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param string $origin
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        return $this;
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($user)), __LINE__);
        }
        $this->user = $user;
        return $this;
    }
    /**
     * Get survey value
     * @return \Confirmit\Authoring\StructType\SssSurvey|null
     */
    public function getSurvey()
    {
        return $this->survey;
    }
    /**
     * Set survey value
     * @param \Confirmit\Authoring\StructType\SssSurvey $survey
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setSurvey(\Confirmit\Authoring\StructType\SssSurvey $survey = null)
    {
        $this->survey = $survey;
        return $this;
    }
    /**
     * Get languages value
     * @return string|null
     */
    public function getLanguages()
    {
        return $this->languages;
    }
    /**
     * Set languages value
     * @param string $languages
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setLanguages($languages = null)
    {
        // validation for constraint: string
        if (!is_null($languages) && !is_string($languages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languages)), __LINE__);
        }
        $this->languages = $languages;
        return $this;
    }
    /**
     * Get modes value
     * @return string|null
     */
    public function getModes()
    {
        return $this->modes;
    }
    /**
     * Set modes value
     * @param string $modes
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setModes($modes = null)
    {
        // validation for constraint: string
        if (!is_null($modes) && !is_string($modes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modes)), __LINE__);
        }
        $this->modes = $modes;
        return $this;
    }
    /**
     * Get hierarchy value
     * @return \Confirmit\Authoring\StructType\SssHierarchy|null
     */
    public function getHierarchy()
    {
        return $this->hierarchy;
    }
    /**
     * Set hierarchy value
     * @param \Confirmit\Authoring\StructType\SssHierarchy $hierarchy
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setHierarchy(\Confirmit\Authoring\StructType\SssHierarchy $hierarchy = null)
    {
        $this->hierarchy = $hierarchy;
        return $this;
    }
    /**
     * Get quantum value
     * @return \Confirmit\Authoring\StructType\SssQuantum|null
     */
    public function getQuantum()
    {
        return $this->quantum;
    }
    /**
     * Set quantum value
     * @param \Confirmit\Authoring\StructType\SssQuantum $quantum
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setQuantum(\Confirmit\Authoring\StructType\SssQuantum $quantum = null)
    {
        $this->quantum = $quantum;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Confirmit\Authoring\StructType\SssSchema
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssSchema
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
