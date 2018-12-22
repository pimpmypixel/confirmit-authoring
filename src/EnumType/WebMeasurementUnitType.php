<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for WebMeasurementUnitType EnumType
 * @subpackage Enumerations
 */
class WebMeasurementUnitType
{
    /**
     * Constant for value 'Pixels'
     * @return string 'Pixels'
     */
    const VALUE_PIXELS = 'Pixels';
    /**
     * Constant for value 'Em'
     * @return string 'Em'
     */
    const VALUE_EM = 'Em';
    /**
     * Constant for value 'Percent'
     * @return string 'Percent'
     */
    const VALUE_PERCENT = 'Percent';
    /**
     * Constant for value 'Points'
     * @return string 'Points'
     */
    const VALUE_POINTS = 'Points';
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
     * @uses self::VALUE_PIXELS
     * @uses self::VALUE_EM
     * @uses self::VALUE_PERCENT
     * @uses self::VALUE_POINTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PIXELS,
            self::VALUE_EM,
            self::VALUE_PERCENT,
            self::VALUE_POINTS,
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
