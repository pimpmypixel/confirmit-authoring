<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for ProjectType EnumType
 * @subpackage Enumerations
 */
class ProjectType
{
    /**
     * Constant for value 'ProjectOnly'
     * @return string 'ProjectOnly'
     */
    const VALUE_PROJECT_ONLY = 'ProjectOnly';
    /**
     * Constant for value 'PanelOnly'
     * @return string 'PanelOnly'
     */
    const VALUE_PANEL_ONLY = 'PanelOnly';
    /**
     * Constant for value 'ProjectAndPanel'
     * @return string 'ProjectAndPanel'
     */
    const VALUE_PROJECT_AND_PANEL = 'ProjectAndPanel';
    /**
     * Constant for value 'EnterprisePanelOnly'
     * @return string 'EnterprisePanelOnly'
     */
    const VALUE_ENTERPRISE_PANEL_ONLY = 'EnterprisePanelOnly';
    /**
     * Constant for value 'PollOnly'
     * @return string 'PollOnly'
     */
    const VALUE_POLL_ONLY = 'PollOnly';
    /**
     * Constant for value 'ProjectAndPoll'
     * @return string 'ProjectAndPoll'
     */
    const VALUE_PROJECT_AND_POLL = 'ProjectAndPoll';
    /**
     * Constant for value 'StandardPanelOnly'
     * @return string 'StandardPanelOnly'
     */
    const VALUE_STANDARD_PANEL_ONLY = 'StandardPanelOnly';
    /**
     * Constant for value 'StandardAndProfessionalPanels'
     * @return string 'StandardAndProfessionalPanels'
     */
    const VALUE_STANDARD_AND_PROFESSIONAL_PANELS = 'StandardAndProfessionalPanels';
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
     * @uses self::VALUE_PROJECT_ONLY
     * @uses self::VALUE_PANEL_ONLY
     * @uses self::VALUE_PROJECT_AND_PANEL
     * @uses self::VALUE_ENTERPRISE_PANEL_ONLY
     * @uses self::VALUE_POLL_ONLY
     * @uses self::VALUE_PROJECT_AND_POLL
     * @uses self::VALUE_STANDARD_PANEL_ONLY
     * @uses self::VALUE_STANDARD_AND_PROFESSIONAL_PANELS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PROJECT_ONLY,
            self::VALUE_PANEL_ONLY,
            self::VALUE_PROJECT_AND_PANEL,
            self::VALUE_ENTERPRISE_PANEL_ONLY,
            self::VALUE_POLL_ONLY,
            self::VALUE_PROJECT_AND_POLL,
            self::VALUE_STANDARD_PANEL_ONLY,
            self::VALUE_STANDARD_AND_PROFESSIONAL_PANELS,
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
