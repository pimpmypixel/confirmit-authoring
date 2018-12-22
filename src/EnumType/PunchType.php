<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for PunchType EnumType
 * @subpackage Enumerations
 */
class PunchType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Single'
     * @return string 'Single'
     */
    const VALUE_SINGLE = 'Single';
    /**
     * Constant for value 'Multi'
     * @return string 'Multi'
     */
    const VALUE_MULTI = 'Multi';
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
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_MULTI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_SINGLE,
            self::VALUE_MULTI,
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
