<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Folder StructType
 * @subpackage Structs
 */
class Folder extends QuestionnaireNodeFlexSupport
{
    /**
     * The ReadOnly
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReadOnly;
    /**
     * The IsView
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsView;
    /**
     * The LocallyScoped
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $LocallyScoped;
    /**
     * The Nodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice10
     */
    public $Nodes;
    /**
     * The Descriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2
     */
    public $Descriptions;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for Folder
     * @uses Folder::setReadOnly()
     * @uses Folder::setIsView()
     * @uses Folder::setLocallyScoped()
     * @uses Folder::setNodes()
     * @uses Folder::setDescriptions()
     * @uses Folder::setName()
     * @param bool $readOnly
     * @param bool $isView
     * @param bool $locallyScoped
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice10 $nodes
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions
     * @param string $name
     */
    public function __construct($readOnly = null, $isView = null, $locallyScoped = null, \Confirmit\Authoring\StructType\ArrayOfChoice10 $nodes = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions = null, $name = null)
    {
        $this
            ->setReadOnly($readOnly)
            ->setIsView($isView)
            ->setLocallyScoped($locallyScoped)
            ->setNodes($nodes)
            ->setDescriptions($descriptions)
            ->setName($name);
    }
    /**
     * Get ReadOnly value
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param bool $readOnly
     * @return \Confirmit\Authoring\StructType\Folder
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        return $this;
    }
    /**
     * Get IsView value
     * @return bool
     */
    public function getIsView()
    {
        return $this->IsView;
    }
    /**
     * Set IsView value
     * @param bool $isView
     * @return \Confirmit\Authoring\StructType\Folder
     */
    public function setIsView($isView = null)
    {
        // validation for constraint: boolean
        if (!is_null($isView) && !is_bool($isView)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isView)), __LINE__);
        }
        $this->IsView = $isView;
        return $this;
    }
    /**
     * Get LocallyScoped value
     * @return bool
     */
    public function getLocallyScoped()
    {
        return $this->LocallyScoped;
    }
    /**
     * Set LocallyScoped value
     * @param bool $locallyScoped
     * @return \Confirmit\Authoring\StructType\Folder
     */
    public function setLocallyScoped($locallyScoped = null)
    {
        // validation for constraint: boolean
        if (!is_null($locallyScoped) && !is_bool($locallyScoped)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($locallyScoped)), __LINE__);
        }
        $this->LocallyScoped = $locallyScoped;
        return $this;
    }
    /**
     * Get Nodes value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice10|null
     */
    public function getNodes()
    {
        return $this->Nodes;
    }
    /**
     * Set Nodes value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice10 $nodes
     * @return \Confirmit\Authoring\StructType\Folder
     */
    public function setNodes(\Confirmit\Authoring\StructType\ArrayOfChoice10 $nodes = null)
    {
        $this->Nodes = $nodes;
        return $this;
    }
    /**
     * Get Descriptions value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2|null
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }
    /**
     * Set Descriptions value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions
     * @return \Confirmit\Authoring\StructType\Folder
     */
    public function setDescriptions(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions = null)
    {
        $this->Descriptions = $descriptions;
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
     * @return \Confirmit\Authoring\StructType\Folder
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Folder
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
