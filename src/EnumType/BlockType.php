<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for BlockType EnumType
 * @subpackage Enumerations
 */
class BlockType
{
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'StartBlock'
     * @return string 'StartBlock'
     */
    const VALUE_START_BLOCK = 'StartBlock';
    /**
     * Constant for value 'EndBlock'
     * @return string 'EndBlock'
     */
    const VALUE_END_BLOCK = 'EndBlock';
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
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_START_BLOCK
     * @uses self::VALUE_END_BLOCK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL,
            self::VALUE_START_BLOCK,
            self::VALUE_END_BLOCK,
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
