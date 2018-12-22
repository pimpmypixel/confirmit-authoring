<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for AnswerListType EnumType
 * @subpackage Enumerations
 */
class AnswerListType
{
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
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
     * Constant for value 'AutoIncrement'
     * @return string 'AutoIncrement'
     */
    const VALUE_AUTO_INCREMENT = 'AutoIncrement';
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
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_HIERARCHY
     * @uses self::VALUE_TABLE_LOOKUP
     * @uses self::VALUE_AUTO_INCREMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL,
            self::VALUE_HIERARCHY,
            self::VALUE_TABLE_LOOKUP,
            self::VALUE_AUTO_INCREMENT,
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
