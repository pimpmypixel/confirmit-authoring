<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for HandlingOfOversizedTexts EnumType
 * @subpackage Enumerations
 */
class HandlingOfOversizedTexts
{
    /**
     * Constant for value 'ContinueAndTruncate'
     * @return string 'ContinueAndTruncate'
     */
    const VALUE_CONTINUE_AND_TRUNCATE = 'ContinueAndTruncate';
    /**
     * Constant for value 'Abort'
     * @return string 'Abort'
     */
    const VALUE_ABORT = 'Abort';
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
     * @uses self::VALUE_CONTINUE_AND_TRUNCATE
     * @uses self::VALUE_ABORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONTINUE_AND_TRUNCATE,
            self::VALUE_ABORT,
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
