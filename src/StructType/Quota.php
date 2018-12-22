<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Quota StructType
 * @subpackage Structs
 */
class Quota extends Node
{
    /**
     * The Hidden
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Hidden;
    /**
     * The IsCatiQuota
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsCatiQuota;
    /**
     * The IsShownInCatiSupervisor
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsShownInCatiSupervisor;
    /**
     * The IsOptimisticQuota
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsOptimisticQuota;
    /**
     * The LiveLimit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $LiveLimit;
    /**
     * The LiveLimitType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $LiveLimitType;
    /**
     * The ShowInSingleTargetsMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ShowInSingleTargetsMode;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Forms
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfFormReference
     */
    public $Forms;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The PersistentObjectId
     * @var string
     */
    public $PersistentObjectId;
    /**
     * Constructor method for Quota
     * @uses Quota::setHidden()
     * @uses Quota::setIsCatiQuota()
     * @uses Quota::setIsShownInCatiSupervisor()
     * @uses Quota::setIsOptimisticQuota()
     * @uses Quota::setLiveLimit()
     * @uses Quota::setLiveLimitType()
     * @uses Quota::setShowInSingleTargetsMode()
     * @uses Quota::setName()
     * @uses Quota::setForms()
     * @uses Quota::setEmailAddress()
     * @uses Quota::setPersistentObjectId()
     * @param bool $hidden
     * @param bool $isCatiQuota
     * @param bool $isShownInCatiSupervisor
     * @param bool $isOptimisticQuota
     * @param int $liveLimit
     * @param int $liveLimitType
     * @param bool $showInSingleTargetsMode
     * @param string $name
     * @param \Confirmit\Authoring\ArrayType\ArrayOfFormReference $forms
     * @param string $emailAddress
     * @param string $persistentObjectId
     */
    public function __construct($hidden = null, $isCatiQuota = null, $isShownInCatiSupervisor = null, $isOptimisticQuota = null, $liveLimit = null, $liveLimitType = null, $showInSingleTargetsMode = null, $name = null, \Confirmit\Authoring\ArrayType\ArrayOfFormReference $forms = null, $emailAddress = null, $persistentObjectId = null)
    {
        $this
            ->setHidden($hidden)
            ->setIsCatiQuota($isCatiQuota)
            ->setIsShownInCatiSupervisor($isShownInCatiSupervisor)
            ->setIsOptimisticQuota($isOptimisticQuota)
            ->setLiveLimit($liveLimit)
            ->setLiveLimitType($liveLimitType)
            ->setShowInSingleTargetsMode($showInSingleTargetsMode)
            ->setName($name)
            ->setForms($forms)
            ->setEmailAddress($emailAddress)
            ->setPersistentObjectId($persistentObjectId);
    }
    /**
     * Get Hidden value
     * @return bool
     */
    public function getHidden()
    {
        return $this->Hidden;
    }
    /**
     * Set Hidden value
     * @param bool $hidden
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setHidden($hidden = null)
    {
        // validation for constraint: boolean
        if (!is_null($hidden) && !is_bool($hidden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hidden)), __LINE__);
        }
        $this->Hidden = $hidden;
        return $this;
    }
    /**
     * Get IsCatiQuota value
     * @return bool
     */
    public function getIsCatiQuota()
    {
        return $this->IsCatiQuota;
    }
    /**
     * Set IsCatiQuota value
     * @param bool $isCatiQuota
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setIsCatiQuota($isCatiQuota = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCatiQuota) && !is_bool($isCatiQuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCatiQuota)), __LINE__);
        }
        $this->IsCatiQuota = $isCatiQuota;
        return $this;
    }
    /**
     * Get IsShownInCatiSupervisor value
     * @return bool
     */
    public function getIsShownInCatiSupervisor()
    {
        return $this->IsShownInCatiSupervisor;
    }
    /**
     * Set IsShownInCatiSupervisor value
     * @param bool $isShownInCatiSupervisor
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setIsShownInCatiSupervisor($isShownInCatiSupervisor = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShownInCatiSupervisor) && !is_bool($isShownInCatiSupervisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShownInCatiSupervisor)), __LINE__);
        }
        $this->IsShownInCatiSupervisor = $isShownInCatiSupervisor;
        return $this;
    }
    /**
     * Get IsOptimisticQuota value
     * @return bool
     */
    public function getIsOptimisticQuota()
    {
        return $this->IsOptimisticQuota;
    }
    /**
     * Set IsOptimisticQuota value
     * @param bool $isOptimisticQuota
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setIsOptimisticQuota($isOptimisticQuota = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOptimisticQuota) && !is_bool($isOptimisticQuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOptimisticQuota)), __LINE__);
        }
        $this->IsOptimisticQuota = $isOptimisticQuota;
        return $this;
    }
    /**
     * Get LiveLimit value
     * @return int
     */
    public function getLiveLimit()
    {
        return $this->LiveLimit;
    }
    /**
     * Set LiveLimit value
     * @param int $liveLimit
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setLiveLimit($liveLimit = null)
    {
        // validation for constraint: int
        if (!is_null($liveLimit) && !is_numeric($liveLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($liveLimit)), __LINE__);
        }
        $this->LiveLimit = $liveLimit;
        return $this;
    }
    /**
     * Get LiveLimitType value
     * @return int
     */
    public function getLiveLimitType()
    {
        return $this->LiveLimitType;
    }
    /**
     * Set LiveLimitType value
     * @param int $liveLimitType
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setLiveLimitType($liveLimitType = null)
    {
        // validation for constraint: int
        if (!is_null($liveLimitType) && !is_numeric($liveLimitType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($liveLimitType)), __LINE__);
        }
        $this->LiveLimitType = $liveLimitType;
        return $this;
    }
    /**
     * Get ShowInSingleTargetsMode value
     * @return bool
     */
    public function getShowInSingleTargetsMode()
    {
        return $this->ShowInSingleTargetsMode;
    }
    /**
     * Set ShowInSingleTargetsMode value
     * @param bool $showInSingleTargetsMode
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setShowInSingleTargetsMode($showInSingleTargetsMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($showInSingleTargetsMode) && !is_bool($showInSingleTargetsMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showInSingleTargetsMode)), __LINE__);
        }
        $this->ShowInSingleTargetsMode = $showInSingleTargetsMode;
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
     * @return \Confirmit\Authoring\StructType\Quota
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
     * Get Forms value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfFormReference|null
     */
    public function getForms()
    {
        return $this->Forms;
    }
    /**
     * Set Forms value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfFormReference $forms
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setForms(\Confirmit\Authoring\ArrayType\ArrayOfFormReference $forms = null)
    {
        $this->Forms = $forms;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get PersistentObjectId value
     * @return string|null
     */
    public function getPersistentObjectId()
    {
        return $this->PersistentObjectId;
    }
    /**
     * Set PersistentObjectId value
     * @param string $persistentObjectId
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function setPersistentObjectId($persistentObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($persistentObjectId) && !is_string($persistentObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($persistentObjectId)), __LINE__);
        }
        $this->PersistentObjectId = $persistentObjectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Quota
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
