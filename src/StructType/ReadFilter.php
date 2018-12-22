<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadFilter StructType
 * @subpackage Structs
 */
class ReadFilter extends ReadFilterSimple
{
    /**
     * The IncludeAllForms
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeAllForms;
    /**
     * The IncludeHiddenVariable
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeHiddenVariable;
    /**
     * The IncludeRecodedVariable
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeRecodedVariable;
    /**
     * The IncludeBackgroundVariable
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeBackgroundVariable;
    /**
     * The Forms
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfString1
     */
    public $Forms;
    /**
     * Constructor method for ReadFilter
     * @uses ReadFilter::setIncludeAllForms()
     * @uses ReadFilter::setIncludeHiddenVariable()
     * @uses ReadFilter::setIncludeRecodedVariable()
     * @uses ReadFilter::setIncludeBackgroundVariable()
     * @uses ReadFilter::setForms()
     * @param bool $includeAllForms
     * @param bool $includeHiddenVariable
     * @param bool $includeRecodedVariable
     * @param bool $includeBackgroundVariable
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString1 $forms
     */
    public function __construct($includeAllForms = null, $includeHiddenVariable = null, $includeRecodedVariable = null, $includeBackgroundVariable = null, \Confirmit\Authoring\ArrayType\ArrayOfString1 $forms = null)
    {
        $this
            ->setIncludeAllForms($includeAllForms)
            ->setIncludeHiddenVariable($includeHiddenVariable)
            ->setIncludeRecodedVariable($includeRecodedVariable)
            ->setIncludeBackgroundVariable($includeBackgroundVariable)
            ->setForms($forms);
    }
    /**
     * Get IncludeAllForms value
     * @return bool
     */
    public function getIncludeAllForms()
    {
        return $this->IncludeAllForms;
    }
    /**
     * Set IncludeAllForms value
     * @param bool $includeAllForms
     * @return \Confirmit\Authoring\StructType\ReadFilter
     */
    public function setIncludeAllForms($includeAllForms = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeAllForms) && !is_bool($includeAllForms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeAllForms)), __LINE__);
        }
        $this->IncludeAllForms = $includeAllForms;
        return $this;
    }
    /**
     * Get IncludeHiddenVariable value
     * @return bool
     */
    public function getIncludeHiddenVariable()
    {
        return $this->IncludeHiddenVariable;
    }
    /**
     * Set IncludeHiddenVariable value
     * @param bool $includeHiddenVariable
     * @return \Confirmit\Authoring\StructType\ReadFilter
     */
    public function setIncludeHiddenVariable($includeHiddenVariable = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeHiddenVariable) && !is_bool($includeHiddenVariable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeHiddenVariable)), __LINE__);
        }
        $this->IncludeHiddenVariable = $includeHiddenVariable;
        return $this;
    }
    /**
     * Get IncludeRecodedVariable value
     * @return bool
     */
    public function getIncludeRecodedVariable()
    {
        return $this->IncludeRecodedVariable;
    }
    /**
     * Set IncludeRecodedVariable value
     * @param bool $includeRecodedVariable
     * @return \Confirmit\Authoring\StructType\ReadFilter
     */
    public function setIncludeRecodedVariable($includeRecodedVariable = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeRecodedVariable) && !is_bool($includeRecodedVariable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeRecodedVariable)), __LINE__);
        }
        $this->IncludeRecodedVariable = $includeRecodedVariable;
        return $this;
    }
    /**
     * Get IncludeBackgroundVariable value
     * @return bool
     */
    public function getIncludeBackgroundVariable()
    {
        return $this->IncludeBackgroundVariable;
    }
    /**
     * Set IncludeBackgroundVariable value
     * @param bool $includeBackgroundVariable
     * @return \Confirmit\Authoring\StructType\ReadFilter
     */
    public function setIncludeBackgroundVariable($includeBackgroundVariable = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeBackgroundVariable) && !is_bool($includeBackgroundVariable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeBackgroundVariable)), __LINE__);
        }
        $this->IncludeBackgroundVariable = $includeBackgroundVariable;
        return $this;
    }
    /**
     * Get Forms value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString1|null
     */
    public function getForms()
    {
        return $this->Forms;
    }
    /**
     * Set Forms value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString1 $forms
     * @return \Confirmit\Authoring\StructType\ReadFilter
     */
    public function setForms(\Confirmit\Authoring\ArrayType\ArrayOfString1 $forms = null)
    {
        $this->Forms = $forms;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ReadFilter
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
