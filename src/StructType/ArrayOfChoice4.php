<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice4 StructType
 * @subpackage Structs
 */
class ArrayOfChoice4 extends AbstractStructBase
{
    /**
     * The HeaderAnswer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\HeaderAnswer
     */
    public $HeaderAnswer;
    /**
     * The HeaderAnswerEnd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\HeaderAnswerEnd
     */
    public $HeaderAnswerEnd;
    /**
     * The LoopLevelReference
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\LoopLevelReference
     */
    public $LoopLevelReference;
    /**
     * The Predefined
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Predefined
     */
    public $Predefined;
    /**
     * The Answer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\GridAnswer
     */
    public $Answer;
    /**
     * Constructor method for ArrayOfChoice4
     * @uses ArrayOfChoice4::setHeaderAnswer()
     * @uses ArrayOfChoice4::setHeaderAnswerEnd()
     * @uses ArrayOfChoice4::setLoopLevelReference()
     * @uses ArrayOfChoice4::setPredefined()
     * @uses ArrayOfChoice4::setAnswer()
     * @param \Confirmit\Authoring\StructType\HeaderAnswer $headerAnswer
     * @param \Confirmit\Authoring\StructType\HeaderAnswerEnd $headerAnswerEnd
     * @param \Confirmit\Authoring\StructType\LoopLevelReference $loopLevelReference
     * @param \Confirmit\Authoring\StructType\Predefined $predefined
     * @param \Confirmit\Authoring\StructType\GridAnswer $answer
     */
    public function __construct(\Confirmit\Authoring\StructType\HeaderAnswer $headerAnswer = null, \Confirmit\Authoring\StructType\HeaderAnswerEnd $headerAnswerEnd = null, \Confirmit\Authoring\StructType\LoopLevelReference $loopLevelReference = null, \Confirmit\Authoring\StructType\Predefined $predefined = null, \Confirmit\Authoring\StructType\GridAnswer $answer = null)
    {
        $this
            ->setHeaderAnswer($headerAnswer)
            ->setHeaderAnswerEnd($headerAnswerEnd)
            ->setLoopLevelReference($loopLevelReference)
            ->setPredefined($predefined)
            ->setAnswer($answer);
    }
    /**
     * Get HeaderAnswer value
     * @return \Confirmit\Authoring\StructType\HeaderAnswer
     */
    public function getHeaderAnswer()
    {
        return $this->HeaderAnswer;
    }
    /**
     * Set HeaderAnswer value
     * @param \Confirmit\Authoring\StructType\HeaderAnswer $headerAnswer
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice4
     */
    public function setHeaderAnswer(\Confirmit\Authoring\StructType\HeaderAnswer $headerAnswer = null)
    {
        $this->HeaderAnswer = $headerAnswer;
        return $this;
    }
    /**
     * Get HeaderAnswerEnd value
     * @return \Confirmit\Authoring\StructType\HeaderAnswerEnd
     */
    public function getHeaderAnswerEnd()
    {
        return $this->HeaderAnswerEnd;
    }
    /**
     * Set HeaderAnswerEnd value
     * @param \Confirmit\Authoring\StructType\HeaderAnswerEnd $headerAnswerEnd
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice4
     */
    public function setHeaderAnswerEnd(\Confirmit\Authoring\StructType\HeaderAnswerEnd $headerAnswerEnd = null)
    {
        $this->HeaderAnswerEnd = $headerAnswerEnd;
        return $this;
    }
    /**
     * Get LoopLevelReference value
     * @return \Confirmit\Authoring\StructType\LoopLevelReference
     */
    public function getLoopLevelReference()
    {
        return $this->LoopLevelReference;
    }
    /**
     * Set LoopLevelReference value
     * @param \Confirmit\Authoring\StructType\LoopLevelReference $loopLevelReference
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice4
     */
    public function setLoopLevelReference(\Confirmit\Authoring\StructType\LoopLevelReference $loopLevelReference = null)
    {
        $this->LoopLevelReference = $loopLevelReference;
        return $this;
    }
    /**
     * Get Predefined value
     * @return \Confirmit\Authoring\StructType\Predefined
     */
    public function getPredefined()
    {
        return $this->Predefined;
    }
    /**
     * Set Predefined value
     * @param \Confirmit\Authoring\StructType\Predefined $predefined
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice4
     */
    public function setPredefined(\Confirmit\Authoring\StructType\Predefined $predefined = null)
    {
        $this->Predefined = $predefined;
        return $this;
    }
    /**
     * Get Answer value
     * @return \Confirmit\Authoring\StructType\GridAnswer
     */
    public function getAnswer()
    {
        return $this->Answer;
    }
    /**
     * Set Answer value
     * @param \Confirmit\Authoring\StructType\GridAnswer $answer
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice4
     */
    public function setAnswer(\Confirmit\Authoring\StructType\GridAnswer $answer = null)
    {
        $this->Answer = $answer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice4
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
