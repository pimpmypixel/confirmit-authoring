<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for VariableDataType EnumType
 * @subpackage Enumerations
 */
class VariableDataType
{
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Hidden'
     * @return string 'Hidden'
     */
    const VALUE_HIDDEN = 'Hidden';
    /**
     * Constant for value 'Background'
     * @return string 'Background'
     */
    const VALUE_BACKGROUND = 'Background';
    /**
     * Constant for value 'Recoded'
     * @return string 'Recoded'
     */
    const VALUE_RECODED = 'Recoded';
    /**
     * Constant for value 'Panel'
     * @return string 'Panel'
     */
    const VALUE_PANEL = 'Panel';
    /**
     * Constant for value 'Recoding'
     * @return string 'Recoding'
     */
    const VALUE_RECODING = 'Recoding';
    /**
     * Constant for value 'PanelVisible'
     * @return string 'PanelVisible'
     */
    const VALUE_PANEL_VISIBLE = 'PanelVisible';
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
     * @uses self::VALUE_HIDDEN
     * @uses self::VALUE_BACKGROUND
     * @uses self::VALUE_RECODED
     * @uses self::VALUE_PANEL
     * @uses self::VALUE_RECODING
     * @uses self::VALUE_PANEL_VISIBLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL,
            self::VALUE_HIDDEN,
            self::VALUE_BACKGROUND,
            self::VALUE_RECODED,
            self::VALUE_PANEL,
            self::VALUE_RECODING,
            self::VALUE_PANEL_VISIBLE,
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
