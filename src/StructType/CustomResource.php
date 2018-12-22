<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomResource StructType
 * @subpackage Structs
 */
class CustomResource extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The LocalizedString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLangSpecString
     */
    public $LocalizedString;
    /**
     * Constructor method for CustomResource
     * @uses CustomResource::setId()
     * @uses CustomResource::setLocalizedString()
     * @param string $id
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLangSpecString $localizedString
     */
    public function __construct($id = null, \Confirmit\Authoring\ArrayType\ArrayOfLangSpecString $localizedString = null)
    {
        $this
            ->setId($id)
            ->setLocalizedString($localizedString);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Confirmit\Authoring\StructType\CustomResource
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get LocalizedString value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLangSpecString|null
     */
    public function getLocalizedString()
    {
        return $this->LocalizedString;
    }
    /**
     * Set LocalizedString value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLangSpecString $localizedString
     * @return \Confirmit\Authoring\StructType\CustomResource
     */
    public function setLocalizedString(\Confirmit\Authoring\ArrayType\ArrayOfLangSpecString $localizedString = null)
    {
        $this->LocalizedString = $localizedString;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\CustomResource
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
