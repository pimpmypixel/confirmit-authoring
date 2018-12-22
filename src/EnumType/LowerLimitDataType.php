<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for LowerLimitDataType EnumType
 * @subpackage Enumerations
 */
class LowerLimitDataType
{
    /**
     * Constant for value 'Disabled'
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Greater'
     * @return string 'Greater'
     */
    const VALUE_GREATER = 'Greater';
    /**
     * Constant for value 'GreaterOrEqual'
     * @return string 'GreaterOrEqual'
     */
    const VALUE_GREATER_OR_EQUAL = 'GreaterOrEqual';
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
     * @uses self::VALUE_GREATER
     * @uses self::VALUE_GREATER_OR_EQUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_GREATER,
            self::VALUE_GREATER_OR_EQUAL,
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
