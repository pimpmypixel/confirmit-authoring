<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GridAnswer StructType
 * @subpackage Structs
 */
class GridAnswer extends AnswerBase
{
    /**
     * The FieldId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $FieldId;
    /**
     * The RdgSingleProportion
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $RdgSingleProportion;
    /**
     * The Texts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText
     */
    public $Texts;
    /**
     * The TextsRight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText
     */
    public $TextsRight;
    /**
     * Constructor method for GridAnswer
     * @uses GridAnswer::setFieldId()
     * @uses GridAnswer::setRdgSingleProportion()
     * @uses GridAnswer::setTexts()
     * @uses GridAnswer::setTextsRight()
     * @param int $fieldId
     * @param int $rdgSingleProportion
     * @param \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText $texts
     * @param \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText $textsRight
     */
    public function __construct($fieldId = null, $rdgSingleProportion = null, \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText $texts = null, \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText $textsRight = null)
    {
        $this
            ->setFieldId($fieldId)
            ->setRdgSingleProportion($rdgSingleProportion)
            ->setTexts($texts)
            ->setTextsRight($textsRight);
    }
    /**
     * Get FieldId value
     * @return int
     */
    public function getFieldId()
    {
        return $this->FieldId;
    }
    /**
     * Set FieldId value
     * @param int $fieldId
     * @return \Confirmit\Authoring\StructType\GridAnswer
     */
    public function setFieldId($fieldId = null)
    {
        // validation for constraint: int
        if (!is_null($fieldId) && !is_numeric($fieldId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fieldId)), __LINE__);
        }
        $this->FieldId = $fieldId;
        return $this;
    }
    /**
     * Get RdgSingleProportion value
     * @return int
     */
    public function getRdgSingleProportion()
    {
        return $this->RdgSingleProportion;
    }
    /**
     * Set RdgSingleProportion value
     * @param int $rdgSingleProportion
     * @return \Confirmit\Authoring\StructType\GridAnswer
     */
    public function setRdgSingleProportion($rdgSingleProportion = null)
    {
        // validation for constraint: int
        if (!is_null($rdgSingleProportion) && !is_numeric($rdgSingleProportion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rdgSingleProportion)), __LINE__);
        }
        $this->RdgSingleProportion = $rdgSingleProportion;
        return $this;
    }
    /**
     * Get Texts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText|null
     */
    public function getTexts()
    {
        return $this->Texts;
    }
    /**
     * Set Texts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText $texts
     * @return \Confirmit\Authoring\StructType\GridAnswer
     */
    public function setTexts(\Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText $texts = null)
    {
        $this->Texts = $texts;
        return $this;
    }
    /**
     * Get TextsRight value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText|null
     */
    public function getTextsRight()
    {
        return $this->TextsRight;
    }
    /**
     * Set TextsRight value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText $textsRight
     * @return \Confirmit\Authoring\StructType\GridAnswer
     */
    public function setTextsRight(\Confirmit\Authoring\ArrayType\ArrayOfGridAnswerText $textsRight = null)
    {
        $this->TextsRight = $textsRight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GridAnswer
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
