<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RandomCategorySelection StructType
 * @subpackage Structs
 */
class RandomCategorySelection extends PredefinedScriptBase
{
    /**
     * The NumberOfItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NumberOfItems;
    /**
     * The QuestionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QuestionID;
    /**
     * Constructor method for RandomCategorySelection
     * @uses RandomCategorySelection::setNumberOfItems()
     * @uses RandomCategorySelection::setQuestionID()
     * @param int $numberOfItems
     * @param string $questionID
     */
    public function __construct($numberOfItems = null, $questionID = null)
    {
        $this
            ->setNumberOfItems($numberOfItems)
            ->setQuestionID($questionID);
    }
    /**
     * Get NumberOfItems value
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->NumberOfItems;
    }
    /**
     * Set NumberOfItems value
     * @param int $numberOfItems
     * @return \Confirmit\Authoring\StructType\RandomCategorySelection
     */
    public function setNumberOfItems($numberOfItems = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfItems) && !is_numeric($numberOfItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfItems)), __LINE__);
        }
        $this->NumberOfItems = $numberOfItems;
        return $this;
    }
    /**
     * Get QuestionID value
     * @return string|null
     */
    public function getQuestionID()
    {
        return $this->QuestionID;
    }
    /**
     * Set QuestionID value
     * @param string $questionID
     * @return \Confirmit\Authoring\StructType\RandomCategorySelection
     */
    public function setQuestionID($questionID = null)
    {
        // validation for constraint: string
        if (!is_null($questionID) && !is_string($questionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionID)), __LINE__);
        }
        $this->QuestionID = $questionID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\RandomCategorySelection
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
