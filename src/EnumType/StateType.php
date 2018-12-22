<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for StateType EnumType
 * @subpackage Enumerations
 */
class StateType
{
    /**
     * Constant for value 'Read'
     * @return string 'Read'
     */
    const VALUE_READ = 'Read';
    /**
     * Constant for value 'ReadOnly'
     * @return string 'ReadOnly'
     */
    const VALUE_READ_ONLY = 'ReadOnly';
    /**
     * Constant for value 'ReadWrite'
     * @return string 'ReadWrite'
     */
    const VALUE_READ_WRITE = 'ReadWrite';
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
     * @uses self::VALUE_READ
     * @uses self::VALUE_READ_ONLY
     * @uses self::VALUE_READ_WRITE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_READ,
            self::VALUE_READ_ONLY,
            self::VALUE_READ_WRITE,
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
