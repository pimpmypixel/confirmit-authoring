<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for SchemaSourceType EnumType
 * @subpackage Enumerations
 */
class SchemaSourceType
{
    /**
     * Constant for value 'Design'
     * @return string 'Design'
     */
    const VALUE_DESIGN = 'Design';
    /**
     * Constant for value 'RuntimeTest'
     * @return string 'RuntimeTest'
     */
    const VALUE_RUNTIME_TEST = 'RuntimeTest';
    /**
     * Constant for value 'RuntimeProduction'
     * @return string 'RuntimeProduction'
     */
    const VALUE_RUNTIME_PRODUCTION = 'RuntimeProduction';
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
     * @uses self::VALUE_DESIGN
     * @uses self::VALUE_RUNTIME_TEST
     * @uses self::VALUE_RUNTIME_PRODUCTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DESIGN,
            self::VALUE_RUNTIME_TEST,
            self::VALUE_RUNTIME_PRODUCTION,
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
