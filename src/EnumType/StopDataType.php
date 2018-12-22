<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for StopDataType EnumType
 * @subpackage Enumerations
 */
class StopDataType
{
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Constant for value 'Screened'
     * @return string 'Screened'
     */
    const VALUE_SCREENED = 'Screened';
    /**
     * Constant for value 'QuotaFull'
     * @return string 'QuotaFull'
     */
    const VALUE_QUOTA_FULL = 'QuotaFull';
    /**
     * Constant for value 'NoChange'
     * @return string 'NoChange'
     */
    const VALUE_NO_CHANGE = 'NoChange';
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
     * @uses self::VALUE_COMPLETE
     * @uses self::VALUE_SCREENED
     * @uses self::VALUE_QUOTA_FULL
     * @uses self::VALUE_NO_CHANGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMPLETE,
            self::VALUE_SCREENED,
            self::VALUE_QUOTA_FULL,
            self::VALUE_NO_CHANGE,
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
