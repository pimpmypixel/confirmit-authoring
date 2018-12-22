<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssLevel StructType
 * @subpackage Structs
 */
class SssLevel extends AbstractStructBase
{
    /**
     * The parentposition
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $parentposition;
    /**
     * The parent
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssParent[]
     */
    public $parent;
    /**
     * The ident
     * @var string
     */
    public $ident;
    /**
     * The href
     * @var string
     */
    public $href;
    /**
     * Constructor method for SssLevel
     * @uses SssLevel::setParentposition()
     * @uses SssLevel::setParent()
     * @uses SssLevel::setIdent()
     * @uses SssLevel::setHref()
     * @param int $parentposition
     * @param \Confirmit\Authoring\StructType\SssParent[] $parent
     * @param string $ident
     * @param string $href
     */
    public function __construct($parentposition = null, array $parent = array(), $ident = null, $href = null)
    {
        $this
            ->setParentposition($parentposition)
            ->setParent($parent)
            ->setIdent($ident)
            ->setHref($href);
    }
    /**
     * Get parentposition value
     * @return int
     */
    public function getParentposition()
    {
        return $this->parentposition;
    }
    /**
     * Set parentposition value
     * @param int $parentposition
     * @return \Confirmit\Authoring\StructType\SssLevel
     */
    public function setParentposition($parentposition = null)
    {
        // validation for constraint: int
        if (!is_null($parentposition) && !is_numeric($parentposition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($parentposition)), __LINE__);
        }
        $this->parentposition = $parentposition;
        return $this;
    }
    /**
     * Get parent value
     * @return \Confirmit\Authoring\StructType\SssParent[]|null
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Set parent value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssParent[] $parent
     * @return \Confirmit\Authoring\StructType\SssLevel
     */
    public function setParent(array $parent = array())
    {
        foreach ($parent as $sssLevelParentItem) {
            // validation for constraint: itemType
            if (!$sssLevelParentItem instanceof \Confirmit\Authoring\StructType\SssParent) {
                throw new \InvalidArgumentException(sprintf('The parent property can only contain items of \Confirmit\Authoring\StructType\SssParent, "%s" given', is_object($sssLevelParentItem) ? get_class($sssLevelParentItem) : gettype($sssLevelParentItem)), __LINE__);
            }
        }
        $this->parent = $parent;
        return $this;
    }
    /**
     * Add item to parent value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\SssParent $item
     * @return \Confirmit\Authoring\StructType\SssLevel
     */
    public function addToParent(\Confirmit\Authoring\StructType\SssParent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\SssParent) {
            throw new \InvalidArgumentException(sprintf('The parent property can only contain items of \Confirmit\Authoring\StructType\SssParent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->parent[] = $item;
        return $this;
    }
    /**
     * Get ident value
     * @return string|null
     */
    public function getIdent()
    {
        return $this->ident;
    }
    /**
     * Set ident value
     * @param string $ident
     * @return \Confirmit\Authoring\StructType\SssLevel
     */
    public function setIdent($ident = null)
    {
        // validation for constraint: string
        if (!is_null($ident) && !is_string($ident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ident)), __LINE__);
        }
        $this->ident = $ident;
        return $this;
    }
    /**
     * Get href value
     * @return string|null
     */
    public function getHref()
    {
        return $this->href;
    }
    /**
     * Set href value
     * @param string $href
     * @return \Confirmit\Authoring\StructType\SssLevel
     */
    public function setHref($href = null)
    {
        // validation for constraint: string
        if (!is_null($href) && !is_string($href)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($href)), __LINE__);
        }
        $this->href = $href;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssLevel
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
