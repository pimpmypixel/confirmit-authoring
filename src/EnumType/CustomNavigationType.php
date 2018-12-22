<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for CustomNavigationType EnumType
 * @subpackage Enumerations
 */
class CustomNavigationType
{
    /**
     * Constant for value 'Button'
     * @return string 'Button'
     */
    const VALUE_BUTTON = 'Button';
    /**
     * Constant for value 'Image'
     * @return string 'Image'
     */
    const VALUE_IMAGE = 'Image';
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
     * @uses self::VALUE_BUTTON
     * @uses self::VALUE_IMAGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUTTON,
            self::VALUE_IMAGE,
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
