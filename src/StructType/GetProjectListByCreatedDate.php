<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectListByCreatedDate StructType
 * @subpackage Structs
 */
class GetProjectListByCreatedDate extends AbstractStructBase
{
    /**
     * The projectType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $projectType;
    /**
     * The allProjects
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $allProjects;
    /**
     * The topN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $topN;
    /**
     * The createdFrom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $createdFrom;
    /**
     * The createdTo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $createdTo;
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $key;
    /**
     * The token
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectListToken
     */
    public $token;
    /**
     * Constructor method for GetProjectListByCreatedDate
     * @uses GetProjectListByCreatedDate::setProjectType()
     * @uses GetProjectListByCreatedDate::setAllProjects()
     * @uses GetProjectListByCreatedDate::setTopN()
     * @uses GetProjectListByCreatedDate::setCreatedFrom()
     * @uses GetProjectListByCreatedDate::setCreatedTo()
     * @uses GetProjectListByCreatedDate::setKey()
     * @uses GetProjectListByCreatedDate::setToken()
     * @param string $projectType
     * @param bool $allProjects
     * @param int $topN
     * @param string $createdFrom
     * @param string $createdTo
     * @param string $key
     * @param \Confirmit\Authoring\StructType\ProjectListToken $token
     */
    public function __construct($projectType = null, $allProjects = null, $topN = null, $createdFrom = null, $createdTo = null, $key = null, \Confirmit\Authoring\StructType\ProjectListToken $token = null)
    {
        $this
            ->setProjectType($projectType)
            ->setAllProjects($allProjects)
            ->setTopN($topN)
            ->setCreatedFrom($createdFrom)
            ->setCreatedTo($createdTo)
            ->setKey($key)
            ->setToken($token);
    }
    /**
     * Get projectType value
     * @return string
     */
    public function getProjectType()
    {
        return $this->projectType;
    }
    /**
     * Set projectType value
     * @uses \Confirmit\Authoring\EnumType\ProjectType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\ProjectType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $projectType
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDate
     */
    public function setProjectType($projectType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\ProjectType::valueIsValid($projectType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $projectType, implode(', ', \Confirmit\Authoring\EnumType\ProjectType::getValidValues())), __LINE__);
        }
        $this->projectType = $projectType;
        return $this;
    }
    /**
     * Get allProjects value
     * @return bool
     */
    public function getAllProjects()
    {
        return $this->allProjects;
    }
    /**
     * Set allProjects value
     * @param bool $allProjects
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDate
     */
    public function setAllProjects($allProjects = null)
    {
        // validation for constraint: boolean
        if (!is_null($allProjects) && !is_bool($allProjects)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allProjects)), __LINE__);
        }
        $this->allProjects = $allProjects;
        return $this;
    }
    /**
     * Get topN value
     * @return int
     */
    public function getTopN()
    {
        return $this->topN;
    }
    /**
     * Set topN value
     * @param int $topN
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDate
     */
    public function setTopN($topN = null)
    {
        // validation for constraint: int
        if (!is_null($topN) && !is_numeric($topN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($topN)), __LINE__);
        }
        $this->topN = $topN;
        return $this;
    }
    /**
     * Get createdFrom value
     * @return string
     */
    public function getCreatedFrom()
    {
        return $this->createdFrom;
    }
    /**
     * Set createdFrom value
     * @param string $createdFrom
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDate
     */
    public function setCreatedFrom($createdFrom = null)
    {
        // validation for constraint: string
        if (!is_null($createdFrom) && !is_string($createdFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdFrom)), __LINE__);
        }
        $this->createdFrom = $createdFrom;
        return $this;
    }
    /**
     * Get createdTo value
     * @return string
     */
    public function getCreatedTo()
    {
        return $this->createdTo;
    }
    /**
     * Set createdTo value
     * @param string $createdTo
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDate
     */
    public function setCreatedTo($createdTo = null)
    {
        // validation for constraint: string
        if (!is_null($createdTo) && !is_string($createdTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdTo)), __LINE__);
        }
        $this->createdTo = $createdTo;
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
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDate
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
     * Get token value
     * @return \Confirmit\Authoring\StructType\ProjectListToken|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param \Confirmit\Authoring\StructType\ProjectListToken $token
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDate
     */
    public function setToken(\Confirmit\Authoring\StructType\ProjectListToken $token = null)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDate
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
