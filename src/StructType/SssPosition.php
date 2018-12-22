<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssPosition StructType
 * @subpackage Structs
 */
class SssPosition extends AbstractStructBase
{
    /**
     * The start
     * @var string
     */
    public $start;
    /**
     * The finish
     * @var string
     */
    public $finish;
    /**
     * Constructor method for SssPosition
     * @uses SssPosition::setStart()
     * @uses SssPosition::setFinish()
     * @param string $start
     * @param string $finish
     */
    public function __construct($start = null, $finish = null)
    {
        $this
            ->setStart($start)
            ->setFinish($finish);
    }
    /**
     * Get start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Confirmit\Authoring\StructType\SssPosition
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->start = $start;
        return $this;
    }
    /**
     * Get finish value
     * @return string|null
     */
    public function getFinish()
    {
        return $this->finish;
    }
    /**
     * Set finish value
     * @param string $finish
     * @return \Confirmit\Authoring\StructType\SssPosition
     */
    public function setFinish($finish = null)
    {
        // validation for constraint: string
        if (!is_null($finish) && !is_string($finish)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($finish)), __LINE__);
        }
        $this->finish = $finish;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssPosition
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
