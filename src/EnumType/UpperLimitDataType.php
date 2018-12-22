<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for UpperLimitDataType EnumType
 * @subpackage Enumerations
 */
class UpperLimitDataType
{
    /**
     * Constant for value 'Disabled'
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Smaller'
     * @return string 'Smaller'
     */
    const VALUE_SMALLER = 'Smaller';
    /**
     * Constant for value 'SmallerOrEqual'
     * @return string 'SmallerOrEqual'
     */
    const VALUE_SMALLER_OR_EQUAL = 'SmallerOrEqual';
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
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_SMALLER
     * @uses self::VALUE_SMALLER_OR_EQUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_SMALLER,
            self::VALUE_SMALLER_OR_EQUAL,
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
