<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for SkipType EnumType
 * @subpackage Enumerations
 */
class SkipType
{
    /**
     * Constant for value 'NoSkipping'
     * @return string 'NoSkipping'
     */
    const VALUE_NO_SKIPPING = 'NoSkipping';
    /**
     * Constant for value 'Skip2PageName'
     * @return string 'Skip2PageName'
     */
    const VALUE_SKIP_2_PAGE_NAME = 'Skip2PageName';
    /**
     * Constant for value 'Skip2End'
     * @return string 'Skip2End'
     */
    const VALUE_SKIP_2_END = 'Skip2End';
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
     * @uses self::VALUE_NO_SKIPPING
     * @uses self::VALUE_SKIP_2_PAGE_NAME
     * @uses self::VALUE_SKIP_2_END
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_SKIPPING,
            self::VALUE_SKIP_2_PAGE_NAME,
            self::VALUE_SKIP_2_END,
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
