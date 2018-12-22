<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for SurveyStatusType EnumType
 * @subpackage Enumerations
 */
class SurveyStatusType
{
    /**
     * Constant for value 'Production'
     * @return string 'Production'
     */
    const VALUE_PRODUCTION = 'Production';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'NotYetStarted'
     * @return string 'NotYetStarted'
     */
    const VALUE_NOT_YET_STARTED = 'NotYetStarted';
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
     * @uses self::VALUE_PRODUCTION
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_NOT_YET_STARTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCTION,
            self::VALUE_CLOSED,
            self::VALUE_NOT_YET_STARTED,
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
