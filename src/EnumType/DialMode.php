<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for DialMode EnumType
 * @subpackage Enumerations
 */
class DialMode
{
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Preview'
     * @return string 'Preview'
     */
    const VALUE_PREVIEW = 'Preview';
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Predictive'
     * @return string 'Predictive'
     */
    const VALUE_PREDICTIVE = 'Predictive';
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
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_PREVIEW
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_PREDICTIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_MANUAL,
            self::VALUE_PREVIEW,
            self::VALUE_AUTOMATIC,
            self::VALUE_PREDICTIVE,
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
