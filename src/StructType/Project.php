<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Project StructType
 * @subpackage Structs
 */
class Project extends AbstractStructBase
{
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Created;
    /**
     * The IsPanel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsPanel;
    /**
     * The IsSurveyPoll
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsSurveyPoll;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Company
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company;
    /**
     * The Creator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Creator;
    /**
     * The Closed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Closed;
    /**
     * The KeyWords
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfString
     */
    public $KeyWords;
    /**
     * The _Objid_Xml
     * @var string
     */
    public $_Objid_Xml;
    /**
     * Constructor method for Project
     * @uses Project::setCreated()
     * @uses Project::setIsPanel()
     * @uses Project::setIsSurveyPoll()
     * @uses Project::setName()
     * @uses Project::setId()
     * @uses Project::setCompany()
     * @uses Project::setCreator()
     * @uses Project::setClosed()
     * @uses Project::setKeyWords()
     * @uses Project::set_Objid_Xml()
     * @param string $created
     * @param bool $isPanel
     * @param bool $isSurveyPoll
     * @param string $name
     * @param string $id
     * @param string $company
     * @param string $creator
     * @param string $closed
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString $keyWords
     * @param string $_Objid_Xml
     */
    public function __construct($created = null, $isPanel = null, $isSurveyPoll = null, $name = null, $id = null, $company = null, $creator = null, $closed = null, \Confirmit\Authoring\ArrayType\ArrayOfString $keyWords = null, $_Objid_Xml = null)
    {
        $this
            ->setCreated($created)
            ->setIsPanel($isPanel)
            ->setIsSurveyPoll($isSurveyPoll)
            ->setName($name)
            ->setId($id)
            ->setCompany($company)
            ->setCreator($creator)
            ->setClosed($closed)
            ->setKeyWords($keyWords)
            ->set_Objid_Xml($_Objid_Xml);
    }
    /**
     * Get Created value
     * @return string
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return \Confirmit\Authoring\StructType\Project
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($created)), __LINE__);
        }
        $this->Created = $created;
        return $this;
    }
    /**
     * Get IsPanel value
     * @return bool
     */
    public function getIsPanel()
    {
        return $this->IsPanel;
    }
    /**
     * Set IsPanel value
     * @param bool $isPanel
     * @return \Confirmit\Authoring\StructType\Project
     */
    public function setIsPanel($isPanel = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPanel) && !is_bool($isPanel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPanel)), __LINE__);
        }
        $this->IsPanel = $isPanel;
        return $this;
    }
    /**
     * Get IsSurveyPoll value
     * @return bool
     */
    public function getIsSurveyPoll()
    {
        return $this->IsSurveyPoll;
    }
    /**
     * Set IsSurveyPoll value
     * @param bool $isSurveyPoll
     * @return \Confirmit\Authoring\StructType\Project
     */
    public function setIsSurveyPoll($isSurveyPoll = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSurveyPoll) && !is_bool($isSurveyPoll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSurveyPoll)), __LINE__);
        }
        $this->IsSurveyPoll = $isSurveyPoll;
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
     * @return \Confirmit\Authoring\StructType\Project
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
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Confirmit\Authoring\StructType\Project
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \Confirmit\Authoring\StructType\Project
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->Company = $company;
        return $this;
    }
    /**
     * Get Creator value
     * @return string|null
     */
    public function getCreator()
    {
        return $this->Creator;
    }
    /**
     * Set Creator value
     * @param string $creator
     * @return \Confirmit\Authoring\StructType\Project
     */
    public function setCreator($creator = null)
    {
        // validation for constraint: string
        if (!is_null($creator) && !is_string($creator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creator)), __LINE__);
        }
        $this->Creator = $creator;
        return $this;
    }
    /**
     * Get Closed value
     * @return string|null
     */
    public function getClosed()
    {
        return $this->Closed;
    }
    /**
     * Set Closed value
     * @param string $closed
     * @return \Confirmit\Authoring\StructType\Project
     */
    public function setClosed($closed = null)
    {
        // validation for constraint: string
        if (!is_null($closed) && !is_string($closed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closed)), __LINE__);
        }
        $this->Closed = $closed;
        return $this;
    }
    /**
     * Get KeyWords value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString|null
     */
    public function getKeyWords()
    {
        return $this->KeyWords;
    }
    /**
     * Set KeyWords value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString $keyWords
     * @return \Confirmit\Authoring\StructType\Project
     */
    public function setKeyWords(\Confirmit\Authoring\ArrayType\ArrayOfString $keyWords = null)
    {
        $this->KeyWords = $keyWords;
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
     * @return \Confirmit\Authoring\StructType\Project
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
     * @return \Confirmit\Authoring\StructType\Project
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
