<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice13 StructType
 * @subpackage Structs
 */
class ArrayOfChoice13 extends AbstractStructBase
{
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
     * The CallBlock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\CallBlock
     */
    public $CallBlock;
    /**
     * The Loop
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Loop
     */
    public $Loop;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Script
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Script
     */
    public $Script;
    /**
     * The Page
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Page
     */
    public $Page;
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
     * The Condition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Condition
     */
    public $Condition;
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
     * The Block
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Block
     */
    public $Block;
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
     * The Folder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Folder
     */
    public $Folder;
    /**
     * The Stop
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Stop
     */
    public $Stop;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Email
     */
    public $Email;
    /**
     * Constructor method for ArrayOfChoice13
     * @uses ArrayOfChoice13::setMulti()
     * @uses ArrayOfChoice13::setOpen()
     * @uses ArrayOfChoice13::setGrid()
     * @uses ArrayOfChoice13::setCallBlock()
     * @uses ArrayOfChoice13::setLoop()
     * @uses ArrayOfChoice13::setTelephone()
     * @uses ArrayOfChoice13::setScript()
     * @uses ArrayOfChoice13::setPage()
     * @uses ArrayOfChoice13::setSingle()
     * @uses ArrayOfChoice13::setCondition()
     * @uses ArrayOfChoice13::setInfo()
     * @uses ArrayOfChoice13::setBlock()
     * @uses ArrayOfChoice13::setGrid3D()
     * @uses ArrayOfChoice13::setFolder()
     * @uses ArrayOfChoice13::setStop()
     * @uses ArrayOfChoice13::setEmail()
     * @param \Confirmit\Authoring\StructType\MultiForm $multi
     * @param \Confirmit\Authoring\StructType\OpenForm $open
     * @param \Confirmit\Authoring\StructType\GridForm $grid
     * @param \Confirmit\Authoring\StructType\CallBlock $callBlock
     * @param \Confirmit\Authoring\StructType\Loop $loop
     * @param \Confirmit\Authoring\StructType\Telephone $telephone
     * @param \Confirmit\Authoring\StructType\Script $script
     * @param \Confirmit\Authoring\StructType\Page $page
     * @param \Confirmit\Authoring\StructType\SingleForm $single
     * @param \Confirmit\Authoring\StructType\Condition $condition
     * @param \Confirmit\Authoring\StructType\InfoForm $info
     * @param \Confirmit\Authoring\StructType\Block $block
     * @param \Confirmit\Authoring\StructType\Grid3DForm $grid3D
     * @param \Confirmit\Authoring\StructType\Folder $folder
     * @param \Confirmit\Authoring\StructType\Stop $stop
     * @param \Confirmit\Authoring\StructType\Email $email
     */
    public function __construct(\Confirmit\Authoring\StructType\MultiForm $multi = null, \Confirmit\Authoring\StructType\OpenForm $open = null, \Confirmit\Authoring\StructType\GridForm $grid = null, \Confirmit\Authoring\StructType\CallBlock $callBlock = null, \Confirmit\Authoring\StructType\Loop $loop = null, \Confirmit\Authoring\StructType\Telephone $telephone = null, \Confirmit\Authoring\StructType\Script $script = null, \Confirmit\Authoring\StructType\Page $page = null, \Confirmit\Authoring\StructType\SingleForm $single = null, \Confirmit\Authoring\StructType\Condition $condition = null, \Confirmit\Authoring\StructType\InfoForm $info = null, \Confirmit\Authoring\StructType\Block $block = null, \Confirmit\Authoring\StructType\Grid3DForm $grid3D = null, \Confirmit\Authoring\StructType\Folder $folder = null, \Confirmit\Authoring\StructType\Stop $stop = null, \Confirmit\Authoring\StructType\Email $email = null)
    {
        $this
            ->setMulti($multi)
            ->setOpen($open)
            ->setGrid($grid)
            ->setCallBlock($callBlock)
            ->setLoop($loop)
            ->setTelephone($telephone)
            ->setScript($script)
            ->setPage($page)
            ->setSingle($single)
            ->setCondition($condition)
            ->setInfo($info)
            ->setBlock($block)
            ->setGrid3D($grid3D)
            ->setFolder($folder)
            ->setStop($stop)
            ->setEmail($email);
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setMulti(\Confirmit\Authoring\StructType\MultiForm $multi = null)
    {
        $this->Multi = $multi;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setGrid(\Confirmit\Authoring\StructType\GridForm $grid = null)
    {
        $this->Grid = $grid;
        return $this;
    }
    /**
     * Get CallBlock value
     * @return \Confirmit\Authoring\StructType\CallBlock
     */
    public function getCallBlock()
    {
        return $this->CallBlock;
    }
    /**
     * Set CallBlock value
     * @param \Confirmit\Authoring\StructType\CallBlock $callBlock
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setCallBlock(\Confirmit\Authoring\StructType\CallBlock $callBlock = null)
    {
        $this->CallBlock = $callBlock;
        return $this;
    }
    /**
     * Get Loop value
     * @return \Confirmit\Authoring\StructType\Loop
     */
    public function getLoop()
    {
        return $this->Loop;
    }
    /**
     * Set Loop value
     * @param \Confirmit\Authoring\StructType\Loop $loop
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setLoop(\Confirmit\Authoring\StructType\Loop $loop = null)
    {
        $this->Loop = $loop;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Confirmit\Authoring\StructType\Telephone
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Confirmit\Authoring\StructType\Telephone $telephone
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setTelephone(\Confirmit\Authoring\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Script value
     * @return \Confirmit\Authoring\StructType\Script
     */
    public function getScript()
    {
        return $this->Script;
    }
    /**
     * Set Script value
     * @param \Confirmit\Authoring\StructType\Script $script
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setScript(\Confirmit\Authoring\StructType\Script $script = null)
    {
        $this->Script = $script;
        return $this;
    }
    /**
     * Get Page value
     * @return \Confirmit\Authoring\StructType\Page
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param \Confirmit\Authoring\StructType\Page $page
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setPage(\Confirmit\Authoring\StructType\Page $page = null)
    {
        $this->Page = $page;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setSingle(\Confirmit\Authoring\StructType\SingleForm $single = null)
    {
        $this->Single = $single;
        return $this;
    }
    /**
     * Get Condition value
     * @return \Confirmit\Authoring\StructType\Condition
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @param \Confirmit\Authoring\StructType\Condition $condition
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setCondition(\Confirmit\Authoring\StructType\Condition $condition = null)
    {
        $this->Condition = $condition;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setInfo(\Confirmit\Authoring\StructType\InfoForm $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Get Block value
     * @return \Confirmit\Authoring\StructType\Block
     */
    public function getBlock()
    {
        return $this->Block;
    }
    /**
     * Set Block value
     * @param \Confirmit\Authoring\StructType\Block $block
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setBlock(\Confirmit\Authoring\StructType\Block $block = null)
    {
        $this->Block = $block;
        return $this;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setGrid3D(\Confirmit\Authoring\StructType\Grid3DForm $grid3D = null)
    {
        $this->Grid3D = $grid3D;
        return $this;
    }
    /**
     * Get Folder value
     * @return \Confirmit\Authoring\StructType\Folder
     */
    public function getFolder()
    {
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @param \Confirmit\Authoring\StructType\Folder $folder
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setFolder(\Confirmit\Authoring\StructType\Folder $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Get Stop value
     * @return \Confirmit\Authoring\StructType\Stop
     */
    public function getStop()
    {
        return $this->Stop;
    }
    /**
     * Set Stop value
     * @param \Confirmit\Authoring\StructType\Stop $stop
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setStop(\Confirmit\Authoring\StructType\Stop $stop = null)
    {
        $this->Stop = $stop;
        return $this;
    }
    /**
     * Get Email value
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Confirmit\Authoring\StructType\Email $email
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
     */
    public function setEmail(\Confirmit\Authoring\StructType\Email $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice13
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
