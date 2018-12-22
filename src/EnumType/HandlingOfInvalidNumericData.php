<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for HandlingOfInvalidNumericData EnumType
 * @subpackage Enumerations
 */
class HandlingOfInvalidNumericData
{
    /**
     * Constant for value 'Abort'
     * @return string 'Abort'
     */
    const VALUE_ABORT = 'Abort';
    /**
     * Constant for value 'ContinueWithoutStoring'
     * @return string 'ContinueWithoutStoring'
     */
    const VALUE_CONTINUE_WITHOUT_STORING = 'ContinueWithoutStoring';
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
     * @uses self::VALUE_ABORT
     * @uses self::VALUE_CONTINUE_WITHOUT_STORING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ABORT,
            self::VALUE_CONTINUE_WITHOUT_STORING,
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
