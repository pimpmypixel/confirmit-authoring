<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for DatabaseType EnumType
 * @subpackage Enumerations
 */
class DatabaseType
{
    /**
     * Constant for value 'Production'
     * @return string 'Production'
     */
    const VALUE_PRODUCTION = 'Production';
    /**
     * Constant for value 'Test'
     * @return string 'Test'
     */
    const VALUE_TEST = 'Test';
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
     * @uses self::VALUE_TEST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCTION,
            self::VALUE_TEST,
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
