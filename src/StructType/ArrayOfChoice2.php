<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice2 StructType
 * @subpackage Structs
 */
class ArrayOfChoice2 extends AbstractStructBase
{
    /**
     * The LoopMember
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\LoopMember
     */
    public $LoopMember;
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
     * Constructor method for ArrayOfChoice2
     * @uses ArrayOfChoice2::setLoopMember()
     * @uses ArrayOfChoice2::setPredefined()
     * @param \Confirmit\Authoring\StructType\LoopMember $loopMember
     * @param \Confirmit\Authoring\StructType\Predefined $predefined
     */
    public function __construct(\Confirmit\Authoring\StructType\LoopMember $loopMember = null, \Confirmit\Authoring\StructType\Predefined $predefined = null)
    {
        $this
            ->setLoopMember($loopMember)
            ->setPredefined($predefined);
    }
    /**
     * Get LoopMember value
     * @return \Confirmit\Authoring\StructType\LoopMember
     */
    public function getLoopMember()
    {
        return $this->LoopMember;
    }
    /**
     * Set LoopMember value
     * @param \Confirmit\Authoring\StructType\LoopMember $loopMember
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice2
     */
    public function setLoopMember(\Confirmit\Authoring\StructType\LoopMember $loopMember = null)
    {
        $this->LoopMember = $loopMember;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice2
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice2
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
