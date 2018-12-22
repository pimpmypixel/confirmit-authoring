<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice5 StructType
 * @subpackage Structs
 */
class ArrayOfChoice5 extends AbstractStructBase
{
    /**
     * The Scale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Answer
     */
    public $Scale;
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
     * The Predefined
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Predefined
     */
    public $Predefined;
    /**
     * Constructor method for ArrayOfChoice5
     * @uses ArrayOfChoice5::setScale()
     * @uses ArrayOfChoice5::setHeaderAnswer()
     * @uses ArrayOfChoice5::setHeaderAnswerEnd()
     * @uses ArrayOfChoice5::setPredefined()
     * @param \Confirmit\Authoring\StructType\Answer $scale
     * @param \Confirmit\Authoring\StructType\HeaderAnswer $headerAnswer
     * @param \Confirmit\Authoring\StructType\HeaderAnswerEnd $headerAnswerEnd
     * @param \Confirmit\Authoring\StructType\Predefined $predefined
     */
    public function __construct(\Confirmit\Authoring\StructType\Answer $scale = null, \Confirmit\Authoring\StructType\HeaderAnswer $headerAnswer = null, \Confirmit\Authoring\StructType\HeaderAnswerEnd $headerAnswerEnd = null, \Confirmit\Authoring\StructType\Predefined $predefined = null)
    {
        $this
            ->setScale($scale)
            ->setHeaderAnswer($headerAnswer)
            ->setHeaderAnswerEnd($headerAnswerEnd)
            ->setPredefined($predefined);
    }
    /**
     * Get Scale value
     * @return \Confirmit\Authoring\StructType\Answer
     */
    public function getScale()
    {
        return $this->Scale;
    }
    /**
     * Set Scale value
     * @param \Confirmit\Authoring\StructType\Answer $scale
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice5
     */
    public function setScale(\Confirmit\Authoring\StructType\Answer $scale = null)
    {
        $this->Scale = $scale;
        return $this;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice5
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice5
     */
    public function setHeaderAnswerEnd(\Confirmit\Authoring\StructType\HeaderAnswerEnd $headerAnswerEnd = null)
    {
        $this->HeaderAnswerEnd = $headerAnswerEnd;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice5
     */
    public function setPredefined(\Confirmit\Authoring\StructType\Predefined $predefined = null)
    {
        $this->Predefined = $predefined;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice5
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
