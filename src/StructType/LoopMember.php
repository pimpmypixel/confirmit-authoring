<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoopMember StructType
 * @subpackage Structs
 */
class LoopMember extends AnswerBase
{
    /**
     * The Active
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Active;
    /**
     * The LookupId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $LookupId;
    /**
     * The Texts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfAnswerText
     */
    public $Texts;
    /**
     * The DefaultImageUrl
     * @var string
     */
    public $DefaultImageUrl;
    /**
     * The HoverImageUrl
     * @var string
     */
    public $HoverImageUrl;
    /**
     * The SelectedImageUrl
     * @var string
     */
    public $SelectedImageUrl;
    /**
     * Constructor method for LoopMember
     * @uses LoopMember::setActive()
     * @uses LoopMember::setLookupId()
     * @uses LoopMember::setTexts()
     * @uses LoopMember::setDefaultImageUrl()
     * @uses LoopMember::setHoverImageUrl()
     * @uses LoopMember::setSelectedImageUrl()
     * @param bool $active
     * @param int $lookupId
     * @param \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts
     * @param string $defaultImageUrl
     * @param string $hoverImageUrl
     * @param string $selectedImageUrl
     */
    public function __construct($active = null, $lookupId = null, \Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts = null, $defaultImageUrl = null, $hoverImageUrl = null, $selectedImageUrl = null)
    {
        $this
            ->setActive($active)
            ->setLookupId($lookupId)
            ->setTexts($texts)
            ->setDefaultImageUrl($defaultImageUrl)
            ->setHoverImageUrl($hoverImageUrl)
            ->setSelectedImageUrl($selectedImageUrl);
    }
    /**
     * Get Active value
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \Confirmit\Authoring\StructType\LoopMember
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->Active = $active;
        return $this;
    }
    /**
     * Get LookupId value
     * @return int
     */
    public function getLookupId()
    {
        return $this->LookupId;
    }
    /**
     * Set LookupId value
     * @param int $lookupId
     * @return \Confirmit\Authoring\StructType\LoopMember
     */
    public function setLookupId($lookupId = null)
    {
        // validation for constraint: int
        if (!is_null($lookupId) && !is_numeric($lookupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lookupId)), __LINE__);
        }
        $this->LookupId = $lookupId;
        return $this;
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
     * @return \Confirmit\Authoring\StructType\LoopMember
     */
    public function setTexts(\Confirmit\Authoring\ArrayType\ArrayOfAnswerText $texts = null)
    {
        $this->Texts = $texts;
        return $this;
    }
    /**
     * Get DefaultImageUrl value
     * @return string|null
     */
    public function getDefaultImageUrl()
    {
        return $this->DefaultImageUrl;
    }
    /**
     * Set DefaultImageUrl value
     * @param string $defaultImageUrl
     * @return \Confirmit\Authoring\StructType\LoopMember
     */
    public function setDefaultImageUrl($defaultImageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($defaultImageUrl) && !is_string($defaultImageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultImageUrl)), __LINE__);
        }
        $this->DefaultImageUrl = $defaultImageUrl;
        return $this;
    }
    /**
     * Get HoverImageUrl value
     * @return string|null
     */
    public function getHoverImageUrl()
    {
        return $this->HoverImageUrl;
    }
    /**
     * Set HoverImageUrl value
     * @param string $hoverImageUrl
     * @return \Confirmit\Authoring\StructType\LoopMember
     */
    public function setHoverImageUrl($hoverImageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($hoverImageUrl) && !is_string($hoverImageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hoverImageUrl)), __LINE__);
        }
        $this->HoverImageUrl = $hoverImageUrl;
        return $this;
    }
    /**
     * Get SelectedImageUrl value
     * @return string|null
     */
    public function getSelectedImageUrl()
    {
        return $this->SelectedImageUrl;
    }
    /**
     * Set SelectedImageUrl value
     * @param string $selectedImageUrl
     * @return \Confirmit\Authoring\StructType\LoopMember
     */
    public function setSelectedImageUrl($selectedImageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($selectedImageUrl) && !is_string($selectedImageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($selectedImageUrl)), __LINE__);
        }
        $this->SelectedImageUrl = $selectedImageUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\LoopMember
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
