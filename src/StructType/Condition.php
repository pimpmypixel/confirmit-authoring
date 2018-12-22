<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Condition StructType
 * @subpackage Structs
 */
class Condition extends QuestionnaireNode
{
    /**
     * The PerformDelete
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $PerformDelete;
    /**
     * The ElseEnabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ElseEnabled;
    /**
     * The ReadOnly
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReadOnly;
    /**
     * The TrueNodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice11
     */
    public $TrueNodes;
    /**
     * The FalseNodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice12
     */
    public $FalseNodes;
    /**
     * The Expression
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expression;
    /**
     * Constructor method for Condition
     * @uses Condition::setPerformDelete()
     * @uses Condition::setElseEnabled()
     * @uses Condition::setReadOnly()
     * @uses Condition::setTrueNodes()
     * @uses Condition::setFalseNodes()
     * @uses Condition::setExpression()
     * @param bool $performDelete
     * @param bool $elseEnabled
     * @param bool $readOnly
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice11 $trueNodes
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice12 $falseNodes
     * @param string $expression
     */
    public function __construct($performDelete = null, $elseEnabled = null, $readOnly = null, \Confirmit\Authoring\StructType\ArrayOfChoice11 $trueNodes = null, \Confirmit\Authoring\StructType\ArrayOfChoice12 $falseNodes = null, $expression = null)
    {
        $this
            ->setPerformDelete($performDelete)
            ->setElseEnabled($elseEnabled)
            ->setReadOnly($readOnly)
            ->setTrueNodes($trueNodes)
            ->setFalseNodes($falseNodes)
            ->setExpression($expression);
    }
    /**
     * Get PerformDelete value
     * @return bool
     */
    public function getPerformDelete()
    {
        return $this->PerformDelete;
    }
    /**
     * Set PerformDelete value
     * @param bool $performDelete
     * @return \Confirmit\Authoring\StructType\Condition
     */
    public function setPerformDelete($performDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($performDelete) && !is_bool($performDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($performDelete)), __LINE__);
        }
        $this->PerformDelete = $performDelete;
        return $this;
    }
    /**
     * Get ElseEnabled value
     * @return bool
     */
    public function getElseEnabled()
    {
        return $this->ElseEnabled;
    }
    /**
     * Set ElseEnabled value
     * @param bool $elseEnabled
     * @return \Confirmit\Authoring\StructType\Condition
     */
    public function setElseEnabled($elseEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($elseEnabled) && !is_bool($elseEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($elseEnabled)), __LINE__);
        }
        $this->ElseEnabled = $elseEnabled;
        return $this;
    }
    /**
     * Get ReadOnly value
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param bool $readOnly
     * @return \Confirmit\Authoring\StructType\Condition
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        return $this;
    }
    /**
     * Get TrueNodes value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice11|null
     */
    public function getTrueNodes()
    {
        return $this->TrueNodes;
    }
    /**
     * Set TrueNodes value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice11 $trueNodes
     * @return \Confirmit\Authoring\StructType\Condition
     */
    public function setTrueNodes(\Confirmit\Authoring\StructType\ArrayOfChoice11 $trueNodes = null)
    {
        $this->TrueNodes = $trueNodes;
        return $this;
    }
    /**
     * Get FalseNodes value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice12|null
     */
    public function getFalseNodes()
    {
        return $this->FalseNodes;
    }
    /**
     * Set FalseNodes value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice12 $falseNodes
     * @return \Confirmit\Authoring\StructType\Condition
     */
    public function setFalseNodes(\Confirmit\Authoring\StructType\ArrayOfChoice12 $falseNodes = null)
    {
        $this->FalseNodes = $falseNodes;
        return $this;
    }
    /**
     * Get Expression value
     * @return string|null
     */
    public function getExpression()
    {
        return $this->Expression;
    }
    /**
     * Set Expression value
     * @param string $expression
     * @return \Confirmit\Authoring\StructType\Condition
     */
    public function setExpression($expression = null)
    {
        // validation for constraint: string
        if (!is_null($expression) && !is_string($expression)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expression)), __LINE__);
        }
        $this->Expression = $expression;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Condition
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
