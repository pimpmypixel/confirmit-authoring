<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for ExternalLookupType EnumType
 * @subpackage Enumerations
 */
class ExternalLookupType
{
    /**
     * Constant for value 'Hierarchy'
     * @return string 'Hierarchy'
     */
    const VALUE_HIERARCHY = 'Hierarchy';
    /**
     * Constant for value 'TableLookup'
     * @return string 'TableLookup'
     */
    const VALUE_TABLE_LOOKUP = 'TableLookup';
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
     * @uses self::VALUE_HIERARCHY
     * @uses self::VALUE_TABLE_LOOKUP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HIERARCHY,
            self::VALUE_TABLE_LOOKUP,
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
