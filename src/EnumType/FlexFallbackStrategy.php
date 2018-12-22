<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for FlexFallbackStrategy EnumType
 * @subpackage Enumerations
 */
class FlexFallbackStrategy
{
    /**
     * Constant for value 'RenderNormalQuestion'
     * @return string 'RenderNormalQuestion'
     */
    const VALUE_RENDER_NORMAL_QUESTION = 'RenderNormalQuestion';
    /**
     * Constant for value 'Fail'
     * @return string 'Fail'
     */
    const VALUE_FAIL = 'Fail';
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
     * @uses self::VALUE_RENDER_NORMAL_QUESTION
     * @uses self::VALUE_FAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RENDER_NORMAL_QUESTION,
            self::VALUE_FAIL,
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
