<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for AnswerButtonsMode EnumType
 * @subpackage Enumerations
 */
class AnswerButtonsMode
{
    /**
     * Constant for value 'Inherit'
     * @return string 'Inherit'
     */
    const VALUE_INHERIT = 'Inherit';
    /**
     * Constant for value 'On'
     * @return string 'On'
     */
    const VALUE_ON = 'On';
    /**
     * Constant for value 'Off'
     * @return string 'Off'
     */
    const VALUE_OFF = 'Off';
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
     * @uses self::VALUE_INHERIT
     * @uses self::VALUE_ON
     * @uses self::VALUE_OFF
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INHERIT,
            self::VALUE_ON,
            self::VALUE_OFF,
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
