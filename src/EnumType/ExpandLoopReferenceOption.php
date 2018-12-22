<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for ExpandLoopReferenceOption EnumType
 * @subpackage Enumerations
 */
class ExpandLoopReferenceOption
{
    /**
     * Constant for value 'ExpandAll'
     * @return string 'ExpandAll'
     */
    const VALUE_EXPAND_ALL = 'ExpandAll';
    /**
     * Constant for value 'ExpandIfNotMoreThen'
     * @return string 'ExpandIfNotMoreThen'
     */
    const VALUE_EXPAND_IF_NOT_MORE_THEN = 'ExpandIfNotMoreThen';
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
     * @uses self::VALUE_EXPAND_ALL
     * @uses self::VALUE_EXPAND_IF_NOT_MORE_THEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXPAND_ALL,
            self::VALUE_EXPAND_IF_NOT_MORE_THEN,
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
