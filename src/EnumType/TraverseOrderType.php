<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for TraverseOrderType EnumType
 * @subpackage Enumerations
 */
class TraverseOrderType
{
    /**
     * Constant for value 'InOrder'
     * @return string 'InOrder'
     */
    const VALUE_IN_ORDER = 'InOrder';
    /**
     * Constant for value 'Randomize'
     * @return string 'Randomize'
     */
    const VALUE_RANDOMIZE = 'Randomize';
    /**
     * Constant for value 'Rotate'
     * @return string 'Rotate'
     */
    const VALUE_ROTATE = 'Rotate';
    /**
     * Constant for value 'Alphabetic'
     * @return string 'Alphabetic'
     */
    const VALUE_ALPHABETIC = 'Alphabetic';
    /**
     * Constant for value 'Flip'
     * @return string 'Flip'
     */
    const VALUE_FLIP = 'Flip';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_IN_ORDER
     * @uses self::VALUE_RANDOMIZE
     * @uses self::VALUE_ROTATE
     * @uses self::VALUE_ALPHABETIC
     * @uses self::VALUE_FLIP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_ORDER,
            self::VALUE_RANDOMIZE,
            self::VALUE_ROTATE,
            self::VALUE_ALPHABETIC,
            self::VALUE_FLIP,
        );
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
