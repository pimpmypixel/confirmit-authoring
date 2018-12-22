<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for NodeType EnumType
 * @subpackage Enumerations
 */
class NodeType
{
    /**
     * Constant for value 'Single'
     * @return string 'Single'
     */
    const VALUE_SINGLE = 'Single';
    /**
     * Constant for value 'Multi'
     * @return string 'Multi'
     */
    const VALUE_MULTI = 'Multi';
    /**
     * Constant for value 'Grid'
     * @return string 'Grid'
     */
    const VALUE_GRID = 'Grid';
    /**
     * Constant for value 'Grid3D'
     * @return string 'Grid3D'
     */
    const VALUE_GRID_3_D = 'Grid3D';
    /**
     * Constant for value 'Open'
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Info'
     * @return string 'Info'
     */
    const VALUE_INFO = 'Info';
    /**
     * Constant for value 'Loop'
     * @return string 'Loop'
     */
    const VALUE_LOOP = 'Loop';
    /**
     * Constant for value 'Condition'
     * @return string 'Condition'
     */
    const VALUE_CONDITION = 'Condition';
    /**
     * Constant for value 'Directive'
     * @return string 'Directive'
     */
    const VALUE_DIRECTIVE = 'Directive';
    /**
     * Constant for value 'Stop'
     * @return string 'Stop'
     */
    const VALUE_STOP = 'Stop';
    /**
     * Constant for value 'Folder'
     * @return string 'Folder'
     */
    const VALUE_FOLDER = 'Folder';
    /**
     * Constant for value 'Block'
     * @return string 'Block'
     */
    const VALUE_BLOCK = 'Block';
    /**
     * Constant for value 'Page'
     * @return string 'Page'
     */
    const VALUE_PAGE = 'Page';
    /**
     * Constant for value 'Script'
     * @return string 'Script'
     */
    const VALUE_SCRIPT = 'Script';
    /**
     * Constant for value 'Root'
     * @return string 'Root'
     */
    const VALUE_ROOT = 'Root';
    /**
     * Constant for value 'Questionnaire'
     * @return string 'Questionnaire'
     */
    const VALUE_QUESTIONNAIRE = 'Questionnaire';
    /**
     * Constant for value 'Quota'
     * @return string 'Quota'
     */
    const VALUE_QUOTA = 'Quota';
    /**
     * Constant for value 'PredefinedList'
     * @return string 'PredefinedList'
     */
    const VALUE_PREDEFINED_LIST = 'PredefinedList';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Constant for value 'ProjectInfo'
     * @return string 'ProjectInfo'
     */
    const VALUE_PROJECT_INFO = 'ProjectInfo';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'CallBlock'
     * @return string 'CallBlock'
     */
    const VALUE_CALL_BLOCK = 'CallBlock';
    /**
     * Constant for value 'Chart'
     * @return string 'Chart'
     */
    const VALUE_CHART = 'Chart';
    /**
     * Constant for value 'Telephone'
     * @return string 'Telephone'
     */
    const VALUE_TELEPHONE = 'Telephone';
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
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_MULTI
     * @uses self::VALUE_GRID
     * @uses self::VALUE_GRID_3_D
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_INFO
     * @uses self::VALUE_LOOP
     * @uses self::VALUE_CONDITION
     * @uses self::VALUE_DIRECTIVE
     * @uses self::VALUE_STOP
     * @uses self::VALUE_FOLDER
     * @uses self::VALUE_BLOCK
     * @uses self::VALUE_PAGE
     * @uses self::VALUE_SCRIPT
     * @uses self::VALUE_ROOT
     * @uses self::VALUE_QUESTIONNAIRE
     * @uses self::VALUE_QUOTA
     * @uses self::VALUE_PREDEFINED_LIST
     * @uses self::VALUE_DATE
     * @uses self::VALUE_PROJECT_INFO
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_CALL_BLOCK
     * @uses self::VALUE_CHART
     * @uses self::VALUE_TELEPHONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGLE,
            self::VALUE_MULTI,
            self::VALUE_GRID,
            self::VALUE_GRID_3_D,
            self::VALUE_OPEN,
            self::VALUE_INFO,
            self::VALUE_LOOP,
            self::VALUE_CONDITION,
            self::VALUE_DIRECTIVE,
            self::VALUE_STOP,
            self::VALUE_FOLDER,
            self::VALUE_BLOCK,
            self::VALUE_PAGE,
            self::VALUE_SCRIPT,
            self::VALUE_ROOT,
            self::VALUE_QUESTIONNAIRE,
            self::VALUE_QUOTA,
            self::VALUE_PREDEFINED_LIST,
            self::VALUE_DATE,
            self::VALUE_PROJECT_INFO,
            self::VALUE_EMAIL,
            self::VALUE_CALL_BLOCK,
            self::VALUE_CHART,
            self::VALUE_TELEPHONE,
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
