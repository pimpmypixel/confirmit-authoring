<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for DirectiveDataType EnumType
 * @subpackage Enumerations
 */
class DirectiveDataType
{
    /**
     * Constant for value 'Multiple'
     * @return string 'Multiple'
     */
    const VALUE_MULTIPLE = 'Multiple';
    /**
     * Constant for value 'Single'
     * @return string 'Single'
     */
    const VALUE_SINGLE = 'Single';
    /**
     * Constant for value 'ProgressbarBegin'
     * @return string 'ProgressbarBegin'
     */
    const VALUE_PROGRESSBAR_BEGIN = 'ProgressbarBegin';
    /**
     * Constant for value 'ProgressbarEnd'
     * @return string 'ProgressbarEnd'
     */
    const VALUE_PROGRESSBAR_END = 'ProgressbarEnd';
    /**
     * Constant for value 'NoBackButton'
     * @return string 'NoBackButton'
     */
    const VALUE_NO_BACK_BUTTON = 'NoBackButton';
    /**
     * Constant for value 'AllowBackButton'
     * @return string 'AllowBackButton'
     */
    const VALUE_ALLOW_BACK_BUTTON = 'AllowBackButton';
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
     * @uses self::VALUE_MULTIPLE
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_PROGRESSBAR_BEGIN
     * @uses self::VALUE_PROGRESSBAR_END
     * @uses self::VALUE_NO_BACK_BUTTON
     * @uses self::VALUE_ALLOW_BACK_BUTTON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MULTIPLE,
            self::VALUE_SINGLE,
            self::VALUE_PROGRESSBAR_BEGIN,
            self::VALUE_PROGRESSBAR_END,
            self::VALUE_NO_BACK_BUTTON,
            self::VALUE_ALLOW_BACK_BUTTON,
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
