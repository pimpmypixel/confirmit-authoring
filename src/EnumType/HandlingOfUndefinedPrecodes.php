<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for HandlingOfUndefinedPrecodes EnumType
 * @subpackage Enumerations
 */
class HandlingOfUndefinedPrecodes
{
    /**
     * Constant for value 'ContinueWithoutStoring'
     * @return string 'ContinueWithoutStoring'
     */
    const VALUE_CONTINUE_WITHOUT_STORING = 'ContinueWithoutStoring';
    /**
     * Constant for value 'ContinueAndStoreIfPossibleOrAbort'
     * @return string 'ContinueAndStoreIfPossibleOrAbort'
     */
    const VALUE_CONTINUE_AND_STORE_IF_POSSIBLE_OR_ABORT = 'ContinueAndStoreIfPossibleOrAbort';
    /**
     * Constant for value 'Abort'
     * @return string 'Abort'
     */
    const VALUE_ABORT = 'Abort';
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
     * @uses self::VALUE_CONTINUE_WITHOUT_STORING
     * @uses self::VALUE_CONTINUE_AND_STORE_IF_POSSIBLE_OR_ABORT
     * @uses self::VALUE_ABORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONTINUE_WITHOUT_STORING,
            self::VALUE_CONTINUE_AND_STORE_IF_POSSIBLE_OR_ABORT,
            self::VALUE_ABORT,
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
