<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Page StructType
 * @subpackage Structs
 */
class Page extends QuestionnaireNode
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Order;
    /**
     * The ForceDesktop
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ForceDesktop;
    /**
     * The PageMasterName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PageMasterName;
    /**
     * The PageLayoutName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PageLayoutName;
    /**
     * The Nodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice9
     */
    public $Nodes;
    /**
     * The Titles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7
     */
    public $Titles;
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
     * The TranslationStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public $TranslationStatuses;
    /**
     * Constructor method for Page
     * @uses Page::setOrder()
     * @uses Page::setForceDesktop()
     * @uses Page::setPageMasterName()
     * @uses Page::setPageLayoutName()
     * @uses Page::setNodes()
     * @uses Page::setTitles()
     * @uses Page::setDescriptions()
     * @uses Page::setName()
     * @uses Page::setTranslationStatuses()
     * @param string $order
     * @param bool $forceDesktop
     * @param string $pageMasterName
     * @param string $pageLayoutName
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice9 $nodes
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions
     * @param string $name
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     */
    public function __construct($order = null, $forceDesktop = null, $pageMasterName = null, $pageLayoutName = null, \Confirmit\Authoring\StructType\ArrayOfChoice9 $nodes = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions = null, $name = null, \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this
            ->setOrder($order)
            ->setForceDesktop($forceDesktop)
            ->setPageMasterName($pageMasterName)
            ->setPageLayoutName($pageLayoutName)
            ->setNodes($nodes)
            ->setTitles($titles)
            ->setDescriptions($descriptions)
            ->setName($name)
            ->setTranslationStatuses($translationStatuses);
    }
    /**
     * Get Order value
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $order
     * @return \Confirmit\Authoring\StructType\Page
     */
    public function setOrder($order = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\TraverseOrderType::valueIsValid($order)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order, implode(', ', \Confirmit\Authoring\EnumType\TraverseOrderType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get ForceDesktop value
     * @return bool
     */
    public function getForceDesktop()
    {
        return $this->ForceDesktop;
    }
    /**
     * Set ForceDesktop value
     * @param bool $forceDesktop
     * @return \Confirmit\Authoring\StructType\Page
     */
    public function setForceDesktop($forceDesktop = null)
    {
        // validation for constraint: boolean
        if (!is_null($forceDesktop) && !is_bool($forceDesktop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forceDesktop)), __LINE__);
        }
        $this->ForceDesktop = $forceDesktop;
        return $this;
    }
    /**
     * Get PageMasterName value
     * @return string|null
     */
    public function getPageMasterName()
    {
        return $this->PageMasterName;
    }
    /**
     * Set PageMasterName value
     * @param string $pageMasterName
     * @return \Confirmit\Authoring\StructType\Page
     */
    public function setPageMasterName($pageMasterName = null)
    {
        // validation for constraint: string
        if (!is_null($pageMasterName) && !is_string($pageMasterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pageMasterName)), __LINE__);
        }
        $this->PageMasterName = $pageMasterName;
        return $this;
    }
    /**
     * Get PageLayoutName value
     * @return string|null
     */
    public function getPageLayoutName()
    {
        return $this->PageLayoutName;
    }
    /**
     * Set PageLayoutName value
     * @param string $pageLayoutName
     * @return \Confirmit\Authoring\StructType\Page
     */
    public function setPageLayoutName($pageLayoutName = null)
    {
        // validation for constraint: string
        if (!is_null($pageLayoutName) && !is_string($pageLayoutName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pageLayoutName)), __LINE__);
        }
        $this->PageLayoutName = $pageLayoutName;
        return $this;
    }
    /**
     * Get Nodes value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice9|null
     */
    public function getNodes()
    {
        return $this->Nodes;
    }
    /**
     * Set Nodes value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice9 $nodes
     * @return \Confirmit\Authoring\StructType\Page
     */
    public function setNodes(\Confirmit\Authoring\StructType\ArrayOfChoice9 $nodes = null)
    {
        $this->Nodes = $nodes;
        return $this;
    }
    /**
     * Get Titles value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7|null
     */
    public function getTitles()
    {
        return $this->Titles;
    }
    /**
     * Set Titles value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles
     * @return \Confirmit\Authoring\StructType\Page
     */
    public function setTitles(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles = null)
    {
        $this->Titles = $titles;
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
     * @return \Confirmit\Authoring\StructType\Page
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
     * @return \Confirmit\Authoring\StructType\Page
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
     * Get TranslationStatuses value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus|null
     */
    public function getTranslationStatuses()
    {
        return $this->TranslationStatuses;
    }
    /**
     * Set TranslationStatuses value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     * @return \Confirmit\Authoring\StructType\Page
     */
    public function setTranslationStatuses(\Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this->TranslationStatuses = $translationStatuses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Page
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
