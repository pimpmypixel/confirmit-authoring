<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Directive StructType
 * @subpackage Structs
 */
class Directive extends QuestionnaireNode
{
    /**
     * The DirectiveType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DirectiveType;
    /**
     * The PageMasterName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PageMasterName;
    /**
     * Constructor method for Directive
     * @uses Directive::setDirectiveType()
     * @uses Directive::setPageMasterName()
     * @param string $directiveType
     * @param string $pageMasterName
     */
    public function __construct($directiveType = null, $pageMasterName = null)
    {
        $this
            ->setDirectiveType($directiveType)
            ->setPageMasterName($pageMasterName);
    }
    /**
     * Get DirectiveType value
     * @return string
     */
    public function getDirectiveType()
    {
        return $this->DirectiveType;
    }
    /**
     * Set DirectiveType value
     * @uses \Confirmit\Authoring\EnumType\DirectiveDataType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\DirectiveDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $directiveType
     * @return \Confirmit\Authoring\StructType\Directive
     */
    public function setDirectiveType($directiveType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\DirectiveDataType::valueIsValid($directiveType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $directiveType, implode(', ', \Confirmit\Authoring\EnumType\DirectiveDataType::getValidValues())), __LINE__);
        }
        $this->DirectiveType = $directiveType;
        return $this;
    }
    /**
     * Get PageMasterName value
     * @return string|null
     */
    public function getPageMasterName()
    {
        return $this->PageMasterName;
    }
    /**
     * Set PageMasterName value
     * @param string $pageMasterName
     * @return \Confirmit\Authoring\StructType\Directive
     */
    public function setPageMasterName($pageMasterName = null)
    {
        // validation for constraint: string
        if (!is_null($pageMasterName) && !is_string($pageMasterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pageMasterName)), __LINE__);
        }
        $this->PageMasterName = $pageMasterName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Directive
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
