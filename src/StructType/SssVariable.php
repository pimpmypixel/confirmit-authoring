<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssVariable StructType
 * @subpackage Structs
 */
class SssVariable extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SpecializedTexts
     */
    public $label;
    /**
     * The position
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssPosition
     */
    public $position;
    /**
     * The size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $size;
    /**
     * The spread
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\SssSpread
     */
    public $spread;
    /**
     * The values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice1
     */
    public $values;
    /**
     * The filter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $filter;
    /**
     * The parenttype
     * @var string
     */
    public $parenttype;
    /**
     * The formtype
     * @var string
     */
    public $formtype;
    /**
     * The formlabel
     * @var string
     */
    public $formlabel;
    /**
     * The parentlabel
     * @var string
     */
    public $parentlabel;
    /**
     * The routingid
     * @var string
     */
    public $routingid;
    /**
     * The questioncategory
     * @var string
     */
    public $questioncategory;
    /**
     * The fieldwidth
     * @var string
     */
    public $fieldwidth;
    /**
     * The other
     * @var string
     */
    public $other;
    /**
     * The precode
     * @var string
     */
    public $precode;
    /**
     * The parentname
     * @var string
     */
    public $parentname;
    /**
     * The use
     * @var string
     */
    public $use;
    /**
     * The ident
     * @var string
     */
    public $ident;
    /**
     * The format
     * @var string
     */
    public $format;
    /**
     * The fixtype
     * @var string
     */
    public $fixtype;
    /**
     * The loopiterationid
     * @var string
     */
    public $loopiterationid;
    /**
     * The formname
     * @var string
     */
    public $formname;
    /**
     * The source
     * @var string
     */
    public $source;
    /**
     * The loopid
     * @var string
     */
    public $loopid;
    /**
     * Constructor method for SssVariable
     * @uses SssVariable::setType()
     * @uses SssVariable::setName()
     * @uses SssVariable::setLabel()
     * @uses SssVariable::setPosition()
     * @uses SssVariable::setSize()
     * @uses SssVariable::setSpread()
     * @uses SssVariable::setValues()
     * @uses SssVariable::setFilter()
     * @uses SssVariable::setParenttype()
     * @uses SssVariable::setFormtype()
     * @uses SssVariable::setFormlabel()
     * @uses SssVariable::setParentlabel()
     * @uses SssVariable::setRoutingid()
     * @uses SssVariable::setQuestioncategory()
     * @uses SssVariable::setFieldwidth()
     * @uses SssVariable::setOther()
     * @uses SssVariable::setPrecode()
     * @uses SssVariable::setParentname()
     * @uses SssVariable::setUse()
     * @uses SssVariable::setIdent()
     * @uses SssVariable::setFormat()
     * @uses SssVariable::setFixtype()
     * @uses SssVariable::setLoopiterationid()
     * @uses SssVariable::setFormname()
     * @uses SssVariable::setSource()
     * @uses SssVariable::setLoopid()
     * @param string $type
     * @param string $name
     * @param \Confirmit\Authoring\StructType\SpecializedTexts $label
     * @param \Confirmit\Authoring\StructType\SssPosition $position
     * @param string $size
     * @param \Confirmit\Authoring\StructType\SssSpread $spread
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice1 $values
     * @param string $filter
     * @param string $parenttype
     * @param string $formtype
     * @param string $formlabel
     * @param string $parentlabel
     * @param string $routingid
     * @param string $questioncategory
     * @param string $fieldwidth
     * @param string $other
     * @param string $precode
     * @param string $parentname
     * @param string $use
     * @param string $ident
     * @param string $format
     * @param string $fixtype
     * @param string $loopiterationid
     * @param string $formname
     * @param string $source
     * @param string $loopid
     */
    public function __construct($type = null, $name = null, \Confirmit\Authoring\StructType\SpecializedTexts $label = null, \Confirmit\Authoring\StructType\SssPosition $position = null, $size = null, \Confirmit\Authoring\StructType\SssSpread $spread = null, \Confirmit\Authoring\StructType\ArrayOfChoice1 $values = null, $filter = null, $parenttype = null, $formtype = null, $formlabel = null, $parentlabel = null, $routingid = null, $questioncategory = null, $fieldwidth = null, $other = null, $precode = null, $parentname = null, $use = null, $ident = null, $format = null, $fixtype = null, $loopiterationid = null, $formname = null, $source = null, $loopid = null)
    {
        $this
            ->setType($type)
            ->setName($name)
            ->setLabel($label)
            ->setPosition($position)
            ->setSize($size)
            ->setSpread($spread)
            ->setValues($values)
            ->setFilter($filter)
            ->setParenttype($parenttype)
            ->setFormtype($formtype)
            ->setFormlabel($formlabel)
            ->setParentlabel($parentlabel)
            ->setRoutingid($routingid)
            ->setQuestioncategory($questioncategory)
            ->setFieldwidth($fieldwidth)
            ->setOther($other)
            ->setPrecode($precode)
            ->setParentname($parentname)
            ->setUse($use)
            ->setIdent($ident)
            ->setFormat($format)
            ->setFixtype($fixtype)
            ->setLoopiterationid($loopiterationid)
            ->setFormname($formname)
            ->setSource($source)
            ->setLoopid($loopid);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Confirmit\Authoring\EnumType\SssVariableType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SssVariableType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SssVariableType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Confirmit\Authoring\EnumType\SssVariableType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get label value
     * @return \Confirmit\Authoring\StructType\SpecializedTexts|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param \Confirmit\Authoring\StructType\SpecializedTexts $label
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setLabel(\Confirmit\Authoring\StructType\SpecializedTexts $label = null)
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Get position value
     * @return \Confirmit\Authoring\StructType\SssPosition|null
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param \Confirmit\Authoring\StructType\SssPosition $position
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setPosition(\Confirmit\Authoring\StructType\SssPosition $position = null)
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Get size value
     * @return string|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param string $size
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setSize($size = null)
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($size)), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
    /**
     * Get spread value
     * @return \Confirmit\Authoring\StructType\SssSpread|null
     */
    public function getSpread()
    {
        return $this->spread;
    }
    /**
     * Set spread value
     * @param \Confirmit\Authoring\StructType\SssSpread $spread
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setSpread(\Confirmit\Authoring\StructType\SssSpread $spread = null)
    {
        $this->spread = $spread;
        return $this;
    }
    /**
     * Get values value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice1|null
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * Set values value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice1 $values
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setValues(\Confirmit\Authoring\StructType\ArrayOfChoice1 $values = null)
    {
        $this->values = $values;
        return $this;
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        return $this;
    }
    /**
     * Get parenttype value
     * @return string|null
     */
    public function getParenttype()
    {
        return $this->parenttype;
    }
    /**
     * Set parenttype value
     * @param string $parenttype
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setParenttype($parenttype = null)
    {
        // validation for constraint: string
        if (!is_null($parenttype) && !is_string($parenttype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parenttype)), __LINE__);
        }
        $this->parenttype = $parenttype;
        return $this;
    }
    /**
     * Get formtype value
     * @return string|null
     */
    public function getFormtype()
    {
        return $this->formtype;
    }
    /**
     * Set formtype value
     * @param string $formtype
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setFormtype($formtype = null)
    {
        // validation for constraint: string
        if (!is_null($formtype) && !is_string($formtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formtype)), __LINE__);
        }
        $this->formtype = $formtype;
        return $this;
    }
    /**
     * Get formlabel value
     * @return string|null
     */
    public function getFormlabel()
    {
        return $this->formlabel;
    }
    /**
     * Set formlabel value
     * @param string $formlabel
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setFormlabel($formlabel = null)
    {
        // validation for constraint: string
        if (!is_null($formlabel) && !is_string($formlabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formlabel)), __LINE__);
        }
        $this->formlabel = $formlabel;
        return $this;
    }
    /**
     * Get parentlabel value
     * @return string|null
     */
    public function getParentlabel()
    {
        return $this->parentlabel;
    }
    /**
     * Set parentlabel value
     * @param string $parentlabel
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setParentlabel($parentlabel = null)
    {
        // validation for constraint: string
        if (!is_null($parentlabel) && !is_string($parentlabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentlabel)), __LINE__);
        }
        $this->parentlabel = $parentlabel;
        return $this;
    }
    /**
     * Get routingid value
     * @return string|null
     */
    public function getRoutingid()
    {
        return $this->routingid;
    }
    /**
     * Set routingid value
     * @param string $routingid
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setRoutingid($routingid = null)
    {
        // validation for constraint: string
        if (!is_null($routingid) && !is_string($routingid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingid)), __LINE__);
        }
        $this->routingid = $routingid;
        return $this;
    }
    /**
     * Get questioncategory value
     * @return string|null
     */
    public function getQuestioncategory()
    {
        return $this->questioncategory;
    }
    /**
     * Set questioncategory value
     * @param string $questioncategory
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setQuestioncategory($questioncategory = null)
    {
        // validation for constraint: string
        if (!is_null($questioncategory) && !is_string($questioncategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questioncategory)), __LINE__);
        }
        $this->questioncategory = $questioncategory;
        return $this;
    }
    /**
     * Get fieldwidth value
     * @return string|null
     */
    public function getFieldwidth()
    {
        return $this->fieldwidth;
    }
    /**
     * Set fieldwidth value
     * @param string $fieldwidth
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setFieldwidth($fieldwidth = null)
    {
        // validation for constraint: string
        if (!is_null($fieldwidth) && !is_string($fieldwidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldwidth)), __LINE__);
        }
        $this->fieldwidth = $fieldwidth;
        return $this;
    }
    /**
     * Get other value
     * @return string|null
     */
    public function getOther()
    {
        return $this->other;
    }
    /**
     * Set other value
     * @param string $other
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setOther($other = null)
    {
        // validation for constraint: string
        if (!is_null($other) && !is_string($other)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($other)), __LINE__);
        }
        $this->other = $other;
        return $this;
    }
    /**
     * Get precode value
     * @return string|null
     */
    public function getPrecode()
    {
        return $this->precode;
    }
    /**
     * Set precode value
     * @param string $precode
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setPrecode($precode = null)
    {
        // validation for constraint: string
        if (!is_null($precode) && !is_string($precode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($precode)), __LINE__);
        }
        $this->precode = $precode;
        return $this;
    }
    /**
     * Get parentname value
     * @return string|null
     */
    public function getParentname()
    {
        return $this->parentname;
    }
    /**
     * Set parentname value
     * @param string $parentname
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setParentname($parentname = null)
    {
        // validation for constraint: string
        if (!is_null($parentname) && !is_string($parentname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentname)), __LINE__);
        }
        $this->parentname = $parentname;
        return $this;
    }
    /**
     * Get use value
     * @return string|null
     */
    public function getUse()
    {
        return $this->use;
    }
    /**
     * Set use value
     * @param string $use
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setUse($use = null)
    {
        // validation for constraint: string
        if (!is_null($use) && !is_string($use)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($use)), __LINE__);
        }
        $this->use = $use;
        return $this;
    }
    /**
     * Get ident value
     * @return string|null
     */
    public function getIdent()
    {
        return $this->ident;
    }
    /**
     * Set ident value
     * @param string $ident
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setIdent($ident = null)
    {
        // validation for constraint: string
        if (!is_null($ident) && !is_string($ident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ident)), __LINE__);
        }
        $this->ident = $ident;
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Get fixtype value
     * @return string|null
     */
    public function getFixtype()
    {
        return $this->fixtype;
    }
    /**
     * Set fixtype value
     * @param string $fixtype
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setFixtype($fixtype = null)
    {
        // validation for constraint: string
        if (!is_null($fixtype) && !is_string($fixtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fixtype)), __LINE__);
        }
        $this->fixtype = $fixtype;
        return $this;
    }
    /**
     * Get loopiterationid value
     * @return string|null
     */
    public function getLoopiterationid()
    {
        return $this->loopiterationid;
    }
    /**
     * Set loopiterationid value
     * @param string $loopiterationid
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setLoopiterationid($loopiterationid = null)
    {
        // validation for constraint: string
        if (!is_null($loopiterationid) && !is_string($loopiterationid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loopiterationid)), __LINE__);
        }
        $this->loopiterationid = $loopiterationid;
        return $this;
    }
    /**
     * Get formname value
     * @return string|null
     */
    public function getFormname()
    {
        return $this->formname;
    }
    /**
     * Set formname value
     * @param string $formname
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setFormname($formname = null)
    {
        // validation for constraint: string
        if (!is_null($formname) && !is_string($formname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formname)), __LINE__);
        }
        $this->formname = $formname;
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->source = $source;
        return $this;
    }
    /**
     * Get loopid value
     * @return string|null
     */
    public function getLoopid()
    {
        return $this->loopid;
    }
    /**
     * Set loopid value
     * @param string $loopid
     * @return \Confirmit\Authoring\StructType\SssVariable
     */
    public function setLoopid($loopid = null)
    {
        // validation for constraint: string
        if (!is_null($loopid) && !is_string($loopid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loopid)), __LINE__);
        }
        $this->loopid = $loopid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssVariable
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
