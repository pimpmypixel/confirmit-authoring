<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignRequestValues StructType
 * @subpackage Structs
 */
class AssignRequestValues extends PredefinedScriptBase
{
    /**
     * The QuestionIDs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QuestionIDs;
    /**
     * Constructor method for AssignRequestValues
     * @uses AssignRequestValues::setQuestionIDs()
     * @param string $questionIDs
     */
    public function __construct($questionIDs = null)
    {
        $this
            ->setQuestionIDs($questionIDs);
    }
    /**
     * Get QuestionIDs value
     * @return string|null
     */
    public function getQuestionIDs()
    {
        return $this->QuestionIDs;
    }
    /**
     * Set QuestionIDs value
     * @param string $questionIDs
     * @return \Confirmit\Authoring\StructType\AssignRequestValues
     */
    public function setQuestionIDs($questionIDs = null)
    {
        // validation for constraint: string
        if (!is_null($questionIDs) && !is_string($questionIDs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionIDs)), __LINE__);
        }
        $this->QuestionIDs = $questionIDs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\AssignRequestValues
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
