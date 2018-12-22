<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HeaderAnswer StructType
 * @subpackage Structs
 */
class HeaderAnswer extends AnswerBase
{
    /**
     * The Texts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfAnswerText
     */
    public $Texts;
    /**
     * Constructor method for HeaderAnswer
     * @uses HeaderAnswer::setTexts()
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts
     */
    public function __construct(\Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts = null)
    {
        $this
            ->setTexts($texts);
    }
    /**
     * Get Texts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfAnswerText|null
     */
    public function getTexts()
    {
        return $this->Texts;
    }
    /**
     * Set Texts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts
     * @return \Confirmit\Authoring\StructType\HeaderAnswer
     */
    public function setTexts(\Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts = null)
    {
        $this->Texts = $texts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\HeaderAnswer
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
