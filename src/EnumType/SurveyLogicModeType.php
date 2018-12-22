<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for SurveyLogicModeType EnumType
 * @subpackage Enumerations
 */
class SurveyLogicModeType
{
    /**
     * Constant for value 'ConditionBased'
     * @return string 'ConditionBased'
     */
    const VALUE_CONDITION_BASED = 'ConditionBased';
    /**
     * Constant for value 'SkipBased'
     * @return string 'SkipBased'
     */
    const VALUE_SKIP_BASED = 'SkipBased';
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
     * @uses self::VALUE_CONDITION_BASED
     * @uses self::VALUE_SKIP_BASED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONDITION_BASED,
            self::VALUE_SKIP_BASED,
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
