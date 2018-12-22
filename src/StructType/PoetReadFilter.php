<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PoetReadFilter StructType
 * @subpackage Structs
 */
class PoetReadFilter extends ReadFilter
{
    /**
     * The ExcludeExtendedRoutingNodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ExcludeExtendedRoutingNodes;
    /**
     * The IncludeLastModified
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeLastModified;
    /**
     * The IncludeVersionTimestamp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeVersionTimestamp;
    /**
     * The DenyDeleteOnMerge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DenyDeleteOnMerge;
    /**
     * The DisableLogging
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DisableLogging;
    /**
     * The GeneratePrecodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $GeneratePrecodes;
    /**
     * The IncludeAllNodeTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeAllNodeTypes;
    /**
     * The IncludeDeletedNodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeDeletedNodes;
    /**
     * The IncludeChildren
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeChildren;
    /**
     * The IncludeText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeText;
    /**
     * The IncludeProperties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeProperties;
    /**
     * The IncludeAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeAnswers;
    /**
     * The NodeTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfNodeType
     */
    public $NodeTypes;
    /**
     * Constructor method for PoetReadFilter
     * @uses PoetReadFilter::setExcludeExtendedRoutingNodes()
     * @uses PoetReadFilter::setIncludeLastModified()
     * @uses PoetReadFilter::setIncludeVersionTimestamp()
     * @uses PoetReadFilter::setDenyDeleteOnMerge()
     * @uses PoetReadFilter::setDisableLogging()
     * @uses PoetReadFilter::setGeneratePrecodes()
     * @uses PoetReadFilter::setIncludeAllNodeTypes()
     * @uses PoetReadFilter::setIncludeDeletedNodes()
     * @uses PoetReadFilter::setIncludeChildren()
     * @uses PoetReadFilter::setIncludeText()
     * @uses PoetReadFilter::setIncludeProperties()
     * @uses PoetReadFilter::setIncludeAnswers()
     * @uses PoetReadFilter::setNodeTypes()
     * @param bool $excludeExtendedRoutingNodes
     * @param bool $includeLastModified
     * @param bool $includeVersionTimestamp
     * @param bool $denyDeleteOnMerge
     * @param bool $disableLogging
     * @param bool $generatePrecodes
     * @param bool $includeAllNodeTypes
     * @param bool $includeDeletedNodes
     * @param bool $includeChildren
     * @param bool $includeText
     * @param bool $includeProperties
     * @param bool $includeAnswers
     * @param \Confirmit\Authoring\ArrayType\ArrayOfNodeType $nodeTypes
     */
    public function __construct($excludeExtendedRoutingNodes = null, $includeLastModified = null, $includeVersionTimestamp = null, $denyDeleteOnMerge = null, $disableLogging = null, $generatePrecodes = null, $includeAllNodeTypes = null, $includeDeletedNodes = null, $includeChildren = null, $includeText = null, $includeProperties = null, $includeAnswers = null, \Confirmit\Authoring\ArrayType\ArrayOfNodeType $nodeTypes = null)
    {
        $this
            ->setExcludeExtendedRoutingNodes($excludeExtendedRoutingNodes)
            ->setIncludeLastModified($includeLastModified)
            ->setIncludeVersionTimestamp($includeVersionTimestamp)
            ->setDenyDeleteOnMerge($denyDeleteOnMerge)
            ->setDisableLogging($disableLogging)
            ->setGeneratePrecodes($generatePrecodes)
            ->setIncludeAllNodeTypes($includeAllNodeTypes)
            ->setIncludeDeletedNodes($includeDeletedNodes)
            ->setIncludeChildren($includeChildren)
            ->setIncludeText($includeText)
            ->setIncludeProperties($includeProperties)
            ->setIncludeAnswers($includeAnswers)
            ->setNodeTypes($nodeTypes);
    }
    /**
     * Get ExcludeExtendedRoutingNodes value
     * @return bool
     */
    public function getExcludeExtendedRoutingNodes()
    {
        return $this->ExcludeExtendedRoutingNodes;
    }
    /**
     * Set ExcludeExtendedRoutingNodes value
     * @param bool $excludeExtendedRoutingNodes
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setExcludeExtendedRoutingNodes($excludeExtendedRoutingNodes = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeExtendedRoutingNodes) && !is_bool($excludeExtendedRoutingNodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($excludeExtendedRoutingNodes)), __LINE__);
        }
        $this->ExcludeExtendedRoutingNodes = $excludeExtendedRoutingNodes;
        return $this;
    }
    /**
     * Get IncludeLastModified value
     * @return bool
     */
    public function getIncludeLastModified()
    {
        return $this->IncludeLastModified;
    }
    /**
     * Set IncludeLastModified value
     * @param bool $includeLastModified
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setIncludeLastModified($includeLastModified = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeLastModified) && !is_bool($includeLastModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeLastModified)), __LINE__);
        }
        $this->IncludeLastModified = $includeLastModified;
        return $this;
    }
    /**
     * Get IncludeVersionTimestamp value
     * @return bool
     */
    public function getIncludeVersionTimestamp()
    {
        return $this->IncludeVersionTimestamp;
    }
    /**
     * Set IncludeVersionTimestamp value
     * @param bool $includeVersionTimestamp
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setIncludeVersionTimestamp($includeVersionTimestamp = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeVersionTimestamp) && !is_bool($includeVersionTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeVersionTimestamp)), __LINE__);
        }
        $this->IncludeVersionTimestamp = $includeVersionTimestamp;
        return $this;
    }
    /**
     * Get DenyDeleteOnMerge value
     * @return bool
     */
    public function getDenyDeleteOnMerge()
    {
        return $this->DenyDeleteOnMerge;
    }
    /**
     * Set DenyDeleteOnMerge value
     * @param bool $denyDeleteOnMerge
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setDenyDeleteOnMerge($denyDeleteOnMerge = null)
    {
        // validation for constraint: boolean
        if (!is_null($denyDeleteOnMerge) && !is_bool($denyDeleteOnMerge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($denyDeleteOnMerge)), __LINE__);
        }
        $this->DenyDeleteOnMerge = $denyDeleteOnMerge;
        return $this;
    }
    /**
     * Get DisableLogging value
     * @return bool
     */
    public function getDisableLogging()
    {
        return $this->DisableLogging;
    }
    /**
     * Set DisableLogging value
     * @param bool $disableLogging
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setDisableLogging($disableLogging = null)
    {
        // validation for constraint: boolean
        if (!is_null($disableLogging) && !is_bool($disableLogging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disableLogging)), __LINE__);
        }
        $this->DisableLogging = $disableLogging;
        return $this;
    }
    /**
     * Get GeneratePrecodes value
     * @return bool
     */
    public function getGeneratePrecodes()
    {
        return $this->GeneratePrecodes;
    }
    /**
     * Set GeneratePrecodes value
     * @param bool $generatePrecodes
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setGeneratePrecodes($generatePrecodes = null)
    {
        // validation for constraint: boolean
        if (!is_null($generatePrecodes) && !is_bool($generatePrecodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($generatePrecodes)), __LINE__);
        }
        $this->GeneratePrecodes = $generatePrecodes;
        return $this;
    }
    /**
     * Get IncludeAllNodeTypes value
     * @return bool
     */
    public function getIncludeAllNodeTypes()
    {
        return $this->IncludeAllNodeTypes;
    }
    /**
     * Set IncludeAllNodeTypes value
     * @param bool $includeAllNodeTypes
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setIncludeAllNodeTypes($includeAllNodeTypes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeAllNodeTypes) && !is_bool($includeAllNodeTypes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeAllNodeTypes)), __LINE__);
        }
        $this->IncludeAllNodeTypes = $includeAllNodeTypes;
        return $this;
    }
    /**
     * Get IncludeDeletedNodes value
     * @return bool
     */
    public function getIncludeDeletedNodes()
    {
        return $this->IncludeDeletedNodes;
    }
    /**
     * Set IncludeDeletedNodes value
     * @param bool $includeDeletedNodes
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setIncludeDeletedNodes($includeDeletedNodes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeDeletedNodes) && !is_bool($includeDeletedNodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeDeletedNodes)), __LINE__);
        }
        $this->IncludeDeletedNodes = $includeDeletedNodes;
        return $this;
    }
    /**
     * Get IncludeChildren value
     * @return bool
     */
    public function getIncludeChildren()
    {
        return $this->IncludeChildren;
    }
    /**
     * Set IncludeChildren value
     * @param bool $includeChildren
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setIncludeChildren($includeChildren = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeChildren) && !is_bool($includeChildren)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeChildren)), __LINE__);
        }
        $this->IncludeChildren = $includeChildren;
        return $this;
    }
    /**
     * Get IncludeText value
     * @return bool
     */
    public function getIncludeText()
    {
        return $this->IncludeText;
    }
    /**
     * Set IncludeText value
     * @param bool $includeText
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setIncludeText($includeText = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeText) && !is_bool($includeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeText)), __LINE__);
        }
        $this->IncludeText = $includeText;
        return $this;
    }
    /**
     * Get IncludeProperties value
     * @return bool
     */
    public function getIncludeProperties()
    {
        return $this->IncludeProperties;
    }
    /**
     * Set IncludeProperties value
     * @param bool $includeProperties
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setIncludeProperties($includeProperties = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeProperties) && !is_bool($includeProperties)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeProperties)), __LINE__);
        }
        $this->IncludeProperties = $includeProperties;
        return $this;
    }
    /**
     * Get IncludeAnswers value
     * @return bool
     */
    public function getIncludeAnswers()
    {
        return $this->IncludeAnswers;
    }
    /**
     * Set IncludeAnswers value
     * @param bool $includeAnswers
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setIncludeAnswers($includeAnswers = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeAnswers) && !is_bool($includeAnswers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeAnswers)), __LINE__);
        }
        $this->IncludeAnswers = $includeAnswers;
        return $this;
    }
    /**
     * Get NodeTypes value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfNodeType|null
     */
    public function getNodeTypes()
    {
        return $this->NodeTypes;
    }
    /**
     * Set NodeTypes value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfNodeType $nodeTypes
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
     */
    public function setNodeTypes(\Confirmit\Authoring\ArrayType\ArrayOfNodeType $nodeTypes = null)
    {
        $this->NodeTypes = $nodeTypes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\PoetReadFilter
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
