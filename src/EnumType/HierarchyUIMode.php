<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for HierarchyUIMode EnumType
 * @subpackage Enumerations
 */
class HierarchyUIMode
{
    /**
     * Constant for value 'Drilldown'
     * @return string 'Drilldown'
     */
    const VALUE_DRILLDOWN = 'Drilldown';
    /**
     * Constant for value 'Dropdown'
     * @return string 'Dropdown'
     */
    const VALUE_DROPDOWN = 'Dropdown';
    /**
     * Constant for value 'Legacy'
     * @return string 'Legacy'
     */
    const VALUE_LEGACY = 'Legacy';
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
     * @uses self::VALUE_DRILLDOWN
     * @uses self::VALUE_DROPDOWN
     * @uses self::VALUE_LEGACY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DRILLDOWN,
            self::VALUE_DROPDOWN,
            self::VALUE_LEGACY,
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
