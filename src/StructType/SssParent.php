<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssParent StructType
 * @subpackage Structs
 */
class SssParent extends AbstractStructBase
{
    /**
     * The ordered
     * @var string
     */
    public $ordered;
    /**
     * The linkvar
     * @var string
     */
    public $linkvar;
    /**
     * The level
     * @var string
     */
    public $level;
    /**
     * The parlev
     * @var string
     */
    public $parlev;
    /**
     * Constructor method for SssParent
     * @uses SssParent::setOrdered()
     * @uses SssParent::setLinkvar()
     * @uses SssParent::setLevel()
     * @uses SssParent::setParlev()
     * @param string $ordered
     * @param string $linkvar
     * @param string $level
     * @param string $parlev
     */
    public function __construct($ordered = null, $linkvar = null, $level = null, $parlev = null)
    {
        $this
            ->setOrdered($ordered)
            ->setLinkvar($linkvar)
            ->setLevel($level)
            ->setParlev($parlev);
    }
    /**
     * Get ordered value
     * @return string|null
     */
    public function getOrdered()
    {
        return $this->ordered;
    }
    /**
     * Set ordered value
     * @param string $ordered
     * @return \Confirmit\Authoring\StructType\SssParent
     */
    public function setOrdered($ordered = null)
    {
        // validation for constraint: string
        if (!is_null($ordered) && !is_string($ordered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ordered)), __LINE__);
        }
        $this->ordered = $ordered;
        return $this;
    }
    /**
     * Get linkvar value
     * @return string|null
     */
    public function getLinkvar()
    {
        return $this->linkvar;
    }
    /**
     * Set linkvar value
     * @param string $linkvar
     * @return \Confirmit\Authoring\StructType\SssParent
     */
    public function setLinkvar($linkvar = null)
    {
        // validation for constraint: string
        if (!is_null($linkvar) && !is_string($linkvar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkvar)), __LINE__);
        }
        $this->linkvar = $linkvar;
        return $this;
    }
    /**
     * Get level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param string $level
     * @return \Confirmit\Authoring\StructType\SssParent
     */
    public function setLevel($level = null)
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($level)), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Get parlev value
     * @return string|null
     */
    public function getParlev()
    {
        return $this->parlev;
    }
    /**
     * Set parlev value
     * @param string $parlev
     * @return \Confirmit\Authoring\StructType\SssParent
     */
    public function setParlev($parlev = null)
    {
        // validation for constraint: string
        if (!is_null($parlev) && !is_string($parlev)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parlev)), __LINE__);
        }
        $this->parlev = $parlev;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssParent
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
