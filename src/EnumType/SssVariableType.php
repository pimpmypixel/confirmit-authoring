<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for SssVariableType EnumType
 * @subpackage Enumerations
 */
class SssVariableType
{
    /**
     * Constant for value 'single'
     * @return string 'single'
     */
    const VALUE_SINGLE = 'single';
    /**
     * Constant for value 'multiple'
     * @return string 'multiple'
     */
    const VALUE_MULTIPLE = 'multiple';
    /**
     * Constant for value 'quantity'
     * @return string 'quantity'
     */
    const VALUE_QUANTITY = 'quantity';
    /**
     * Constant for value 'character'
     * @return string 'character'
     */
    const VALUE_CHARACTER = 'character';
    /**
     * Constant for value 'logical'
     * @return string 'logical'
     */
    const VALUE_LOGICAL = 'logical';
    /**
     * Constant for value 'date'
     * @return string 'date'
     */
    const VALUE_DATE = 'date';
    /**
     * Constant for value 'time'
     * @return string 'time'
     */
    const VALUE_TIME = 'time';
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
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_MULTIPLE
     * @uses self::VALUE_QUANTITY
     * @uses self::VALUE_CHARACTER
     * @uses self::VALUE_LOGICAL
     * @uses self::VALUE_DATE
     * @uses self::VALUE_TIME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGLE,
            self::VALUE_MULTIPLE,
            self::VALUE_QUANTITY,
            self::VALUE_CHARACTER,
            self::VALUE_LOGICAL,
            self::VALUE_DATE,
            self::VALUE_TIME,
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
