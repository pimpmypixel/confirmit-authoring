<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for SurveyApprovalState EnumType
 * @subpackage Enumerations
 */
class SurveyApprovalState
{
    /**
     * Constant for value 'NotNecessary'
     * @return string 'NotNecessary'
     */
    const VALUE_NOT_NECESSARY = 'NotNecessary';
    /**
     * Constant for value 'Approved'
     * @return string 'Approved'
     */
    const VALUE_APPROVED = 'Approved';
    /**
     * Constant for value 'NeedsApproval'
     * @return string 'NeedsApproval'
     */
    const VALUE_NEEDS_APPROVAL = 'NeedsApproval';
    /**
     * Constant for value 'PendingApproval'
     * @return string 'PendingApproval'
     */
    const VALUE_PENDING_APPROVAL = 'PendingApproval';
    /**
     * Constant for value 'ApprovalDenied'
     * @return string 'ApprovalDenied'
     */
    const VALUE_APPROVAL_DENIED = 'ApprovalDenied';
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
     * @uses self::VALUE_NOT_NECESSARY
     * @uses self::VALUE_APPROVED
     * @uses self::VALUE_NEEDS_APPROVAL
     * @uses self::VALUE_PENDING_APPROVAL
     * @uses self::VALUE_APPROVAL_DENIED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_NECESSARY,
            self::VALUE_APPROVED,
            self::VALUE_NEEDS_APPROVAL,
            self::VALUE_PENDING_APPROVAL,
            self::VALUE_APPROVAL_DENIED,
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
