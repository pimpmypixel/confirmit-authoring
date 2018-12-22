<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for ConfirmitProjectSourceType EnumType
 * @subpackage Enumerations
 */
class ConfirmitProjectSourceType
{
    /**
     * Constant for value 'Authoring'
     * @return string 'Authoring'
     */
    const VALUE_AUTHORING = 'Authoring';
    /**
     * Constant for value 'DataProcessing'
     * @return string 'DataProcessing'
     */
    const VALUE_DATA_PROCESSING = 'DataProcessing';
    /**
     * Constant for value 'Express'
     * @return string 'Express'
     */
    const VALUE_EXPRESS = 'Express';
    /**
     * Constant for value 'Poll'
     * @return string 'Poll'
     */
    const VALUE_POLL = 'Poll';
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
     * @uses self::VALUE_AUTHORING
     * @uses self::VALUE_DATA_PROCESSING
     * @uses self::VALUE_EXPRESS
     * @uses self::VALUE_POLL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTHORING,
            self::VALUE_DATA_PROCESSING,
            self::VALUE_EXPRESS,
            self::VALUE_POLL,
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
