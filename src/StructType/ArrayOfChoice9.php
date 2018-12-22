<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice9 StructType
 * @subpackage Structs
 */
class ArrayOfChoice9 extends AbstractStructBase
{
    /**
     * The Grid3D
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Grid3DForm
     */
    public $Grid3D;
    /**
     * The Open
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\OpenForm
     */
    public $Open;
    /**
     * The Grid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\GridForm
     */
    public $Grid;
    /**
     * The Multi
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\MultiForm
     */
    public $Multi;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\InfoForm
     */
    public $Info;
    /**
     * The Single
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\SingleForm
     */
    public $Single;
    /**
     * Constructor method for ArrayOfChoice9
     * @uses ArrayOfChoice9::setGrid3D()
     * @uses ArrayOfChoice9::setOpen()
     * @uses ArrayOfChoice9::setGrid()
     * @uses ArrayOfChoice9::setMulti()
     * @uses ArrayOfChoice9::setInfo()
     * @uses ArrayOfChoice9::setSingle()
     * @param \Confirmit\Authoring\StructType\Grid3DForm $grid3D
     * @param \Confirmit\Authoring\StructType\OpenForm $open
     * @param \Confirmit\Authoring\StructType\GridForm $grid
     * @param \Confirmit\Authoring\StructType\MultiForm $multi
     * @param \Confirmit\Authoring\StructType\InfoForm $info
     * @param \Confirmit\Authoring\StructType\SingleForm $single
     */
    public function __construct(\Confirmit\Authoring\StructType\Grid3DForm $grid3D = null, \Confirmit\Authoring\StructType\OpenForm $open = null, \Confirmit\Authoring\StructType\GridForm $grid = null, \Confirmit\Authoring\StructType\MultiForm $multi = null, \Confirmit\Authoring\StructType\InfoForm $info = null, \Confirmit\Authoring\StructType\SingleForm $single = null)
    {
        $this
            ->setGrid3D($grid3D)
            ->setOpen($open)
            ->setGrid($grid)
            ->setMulti($multi)
            ->setInfo($info)
            ->setSingle($single);
    }
    /**
     * Get Grid3D value
     * @return \Confirmit\Authoring\StructType\Grid3DForm
     */
    public function getGrid3D()
    {
        return $this->Grid3D;
    }
    /**
     * Set Grid3D value
     * @param \Confirmit\Authoring\StructType\Grid3DForm $grid3D
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice9
     */
    public function setGrid3D(\Confirmit\Authoring\StructType\Grid3DForm $grid3D = null)
    {
        $this->Grid3D = $grid3D;
        return $this;
    }
    /**
     * Get Open value
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function getOpen()
    {
        return $this->Open;
    }
    /**
     * Set Open value
     * @param \Confirmit\Authoring\StructType\OpenForm $open
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice9
     */
    public function setOpen(\Confirmit\Authoring\StructType\OpenForm $open = null)
    {
        $this->Open = $open;
        return $this;
    }
    /**
     * Get Grid value
     * @return \Confirmit\Authoring\StructType\GridForm
     */
    public function getGrid()
    {
        return $this->Grid;
    }
    /**
     * Set Grid value
     * @param \Confirmit\Authoring\StructType\GridForm $grid
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice9
     */
    public function setGrid(\Confirmit\Authoring\StructType\GridForm $grid = null)
    {
        $this->Grid = $grid;
        return $this;
    }
    /**
     * Get Multi value
     * @return \Confirmit\Authoring\StructType\MultiForm
     */
    public function getMulti()
    {
        return $this->Multi;
    }
    /**
     * Set Multi value
     * @param \Confirmit\Authoring\StructType\MultiForm $multi
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice9
     */
    public function setMulti(\Confirmit\Authoring\StructType\MultiForm $multi = null)
    {
        $this->Multi = $multi;
        return $this;
    }
    /**
     * Get Info value
     * @return \Confirmit\Authoring\StructType\InfoForm
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param \Confirmit\Authoring\StructType\InfoForm $info
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice9
     */
    public function setInfo(\Confirmit\Authoring\StructType\InfoForm $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Get Single value
     * @return \Confirmit\Authoring\StructType\SingleForm
     */
    public function getSingle()
    {
        return $this->Single;
    }
    /**
     * Set Single value
     * @param \Confirmit\Authoring\StructType\SingleForm $single
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice9
     */
    public function setSingle(\Confirmit\Authoring\StructType\SingleForm $single = null)
    {
        $this->Single = $single;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice9
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
