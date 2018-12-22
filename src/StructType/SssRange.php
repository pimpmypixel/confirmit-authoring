<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssRange StructType
 * @subpackage Structs
 */
class SssRange extends SssValueBase
{
    /**
     * The from
     * @var string
     */
    public $from;
    /**
     * The to
     * @var string
     */
    public $to;
    /**
     * Constructor method for SssRange
     * @uses SssRange::setFrom()
     * @uses SssRange::setTo()
     * @param string $from
     * @param string $to
     */
    public function __construct($from = null, $to = null)
    {
        $this
            ->setFrom($from)
            ->setTo($to);
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Confirmit\Authoring\StructType\SssRange
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from)), __LINE__);
        }
        $this->from = $from;
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo()
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Confirmit\Authoring\StructType\SssRange
     */
    public function setTo($to = null)
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to)), __LINE__);
        }
        $this->to = $to;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssRange
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
