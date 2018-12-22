<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for StatusType EnumType
 * @subpackage Enumerations
 */
class StatusType
{
    /**
     * Constant for value 'Untouched'
     * @return string 'Untouched'
     */
    const VALUE_UNTOUCHED = 'Untouched';
    /**
     * Constant for value 'Touched'
     * @return string 'Touched'
     */
    const VALUE_TOUCHED = 'Touched';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_UNTOUCHED
     * @uses self::VALUE_TOUCHED
     * @uses self::VALUE_COMPLETE
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNTOUCHED,
            self::VALUE_TOUCHED,
            self::VALUE_COMPLETE,
            self::VALUE_NONE,
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
