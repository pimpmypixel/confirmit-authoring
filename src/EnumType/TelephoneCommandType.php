<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for TelephoneCommandType EnumType
 * @subpackage Enumerations
 */
class TelephoneCommandType
{
    /**
     * Constant for value 'Dial'
     * @return string 'Dial'
     */
    const VALUE_DIAL = 'Dial';
    /**
     * Constant for value 'Hangup'
     * @return string 'Hangup'
     */
    const VALUE_HANGUP = 'Hangup';
    /**
     * Constant for value 'AllowIgnoreDialing'
     * @return string 'AllowIgnoreDialing'
     */
    const VALUE_ALLOW_IGNORE_DIALING = 'AllowIgnoreDialing';
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
     * @uses self::VALUE_DIAL
     * @uses self::VALUE_HANGUP
     * @uses self::VALUE_ALLOW_IGNORE_DIALING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DIAL,
            self::VALUE_HANGUP,
            self::VALUE_ALLOW_IGNORE_DIALING,
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
