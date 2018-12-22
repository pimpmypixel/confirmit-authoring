<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for AnswerRequiredType EnumType
 * @subpackage Enumerations
 */
class AnswerRequiredType
{
    /**
     * Constant for value 'Blank'
     * @return string 'Blank'
     */
    const VALUE_BLANK = 'Blank';
    /**
     * Constant for value 'Required'
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'NotRequired'
     * @return string 'NotRequired'
     */
    const VALUE_NOT_REQUIRED = 'NotRequired';
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
     * @uses self::VALUE_BLANK
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_NOT_REQUIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BLANK,
            self::VALUE_REQUIRED,
            self::VALUE_NOT_REQUIRED,
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
