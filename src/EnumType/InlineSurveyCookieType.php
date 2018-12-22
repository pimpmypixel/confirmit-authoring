<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for InlineSurveyCookieType EnumType
 * @subpackage Enumerations
 */
class InlineSurveyCookieType
{
    /**
     * Constant for value 'NoCookie'
     * @return string 'NoCookie'
     */
    const VALUE_NO_COOKIE = 'NoCookie';
    /**
     * Constant for value 'BlockRepeatRespondent'
     * @return string 'BlockRepeatRespondent'
     */
    const VALUE_BLOCK_REPEAT_RESPONDENT = 'BlockRepeatRespondent';
    /**
     * Constant for value 'RememberRespondent'
     * @return string 'RememberRespondent'
     */
    const VALUE_REMEMBER_RESPONDENT = 'RememberRespondent';
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
     * @uses self::VALUE_NO_COOKIE
     * @uses self::VALUE_BLOCK_REPEAT_RESPONDENT
     * @uses self::VALUE_REMEMBER_RESPONDENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_COOKIE,
            self::VALUE_BLOCK_REPEAT_RESPONDENT,
            self::VALUE_REMEMBER_RESPONDENT,
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
