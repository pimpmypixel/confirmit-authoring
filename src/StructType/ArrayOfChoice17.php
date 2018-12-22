<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfChoice17 StructType
 * @subpackage Structs
 */
class ArrayOfChoice17 extends AbstractStructBase
{
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
     * The PredefinedList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\PredefinedList
     */
    public $PredefinedList;
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
     * The Quota
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Quota
     */
    public $Quota;
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
     * The Grid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\GridForm
     */
    public $Grid;
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
     * The ProjectInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\ProjectInfo
     */
    public $ProjectInfo;
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
     * The Questionnaire
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Questionnaire
     */
    public $Questionnaire;
    /**
     * The Directive
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Directive
     */
    public $Directive;
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
     * The Single
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\SingleForm
     */
    public $Single;
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
     * The Block
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Block
     */
    public $Block;
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
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Telephone
     */
    public $Telephone;
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
     * The Folder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Folder
     */
    public $Folder;
    /**
     * Constructor method for ArrayOfChoice17
     * @uses ArrayOfChoice17::setScript()
     * @uses ArrayOfChoice17::setPredefinedList()
     * @uses ArrayOfChoice17::setInfo()
     * @uses ArrayOfChoice17::setQuota()
     * @uses ArrayOfChoice17::setCondition()
     * @uses ArrayOfChoice17::setGrid()
     * @uses ArrayOfChoice17::setEmail()
     * @uses ArrayOfChoice17::setProjectInfo()
     * @uses ArrayOfChoice17::setGrid3D()
     * @uses ArrayOfChoice17::setQuestionnaire()
     * @uses ArrayOfChoice17::setDirective()
     * @uses ArrayOfChoice17::setStop()
     * @uses ArrayOfChoice17::setSingle()
     * @uses ArrayOfChoice17::setCallBlock()
     * @uses ArrayOfChoice17::setBlock()
     * @uses ArrayOfChoice17::setPage()
     * @uses ArrayOfChoice17::setMulti()
     * @uses ArrayOfChoice17::setOpen()
     * @uses ArrayOfChoice17::setTelephone()
     * @uses ArrayOfChoice17::setLoop()
     * @uses ArrayOfChoice17::setFolder()
     * @param \Confirmit\Authoring\StructType\Script $script
     * @param \Confirmit\Authoring\StructType\PredefinedList $predefinedList
     * @param \Confirmit\Authoring\StructType\InfoForm $info
     * @param \Confirmit\Authoring\StructType\Quota $quota
     * @param \Confirmit\Authoring\StructType\Condition $condition
     * @param \Confirmit\Authoring\StructType\GridForm $grid
     * @param \Confirmit\Authoring\StructType\Email $email
     * @param \Confirmit\Authoring\StructType\ProjectInfo $projectInfo
     * @param \Confirmit\Authoring\StructType\Grid3DForm $grid3D
     * @param \Confirmit\Authoring\StructType\Questionnaire $questionnaire
     * @param \Confirmit\Authoring\StructType\Directive $directive
     * @param \Confirmit\Authoring\StructType\Stop $stop
     * @param \Confirmit\Authoring\StructType\SingleForm $single
     * @param \Confirmit\Authoring\StructType\CallBlock $callBlock
     * @param \Confirmit\Authoring\StructType\Block $block
     * @param \Confirmit\Authoring\StructType\Page $page
     * @param \Confirmit\Authoring\StructType\MultiForm $multi
     * @param \Confirmit\Authoring\StructType\OpenForm $open
     * @param \Confirmit\Authoring\StructType\Telephone $telephone
     * @param \Confirmit\Authoring\StructType\Loop $loop
     * @param \Confirmit\Authoring\StructType\Folder $folder
     */
    public function __construct(\Confirmit\Authoring\StructType\Script $script = null, \Confirmit\Authoring\StructType\PredefinedList $predefinedList = null, \Confirmit\Authoring\StructType\InfoForm $info = null, \Confirmit\Authoring\StructType\Quota $quota = null, \Confirmit\Authoring\StructType\Condition $condition = null, \Confirmit\Authoring\StructType\GridForm $grid = null, \Confirmit\Authoring\StructType\Email $email = null, \Confirmit\Authoring\StructType\ProjectInfo $projectInfo = null, \Confirmit\Authoring\StructType\Grid3DForm $grid3D = null, \Confirmit\Authoring\StructType\Questionnaire $questionnaire = null, \Confirmit\Authoring\StructType\Directive $directive = null, \Confirmit\Authoring\StructType\Stop $stop = null, \Confirmit\Authoring\StructType\SingleForm $single = null, \Confirmit\Authoring\StructType\CallBlock $callBlock = null, \Confirmit\Authoring\StructType\Block $block = null, \Confirmit\Authoring\StructType\Page $page = null, \Confirmit\Authoring\StructType\MultiForm $multi = null, \Confirmit\Authoring\StructType\OpenForm $open = null, \Confirmit\Authoring\StructType\Telephone $telephone = null, \Confirmit\Authoring\StructType\Loop $loop = null, \Confirmit\Authoring\StructType\Folder $folder = null)
    {
        $this
            ->setScript($script)
            ->setPredefinedList($predefinedList)
            ->setInfo($info)
            ->setQuota($quota)
            ->setCondition($condition)
            ->setGrid($grid)
            ->setEmail($email)
            ->setProjectInfo($projectInfo)
            ->setGrid3D($grid3D)
            ->setQuestionnaire($questionnaire)
            ->setDirective($directive)
            ->setStop($stop)
            ->setSingle($single)
            ->setCallBlock($callBlock)
            ->setBlock($block)
            ->setPage($page)
            ->setMulti($multi)
            ->setOpen($open)
            ->setTelephone($telephone)
            ->setLoop($loop)
            ->setFolder($folder);
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setScript(\Confirmit\Authoring\StructType\Script $script = null)
    {
        $this->Script = $script;
        return $this;
    }
    /**
     * Get PredefinedList value
     * @return \Confirmit\Authoring\StructType\PredefinedList
     */
    public function getPredefinedList()
    {
        return $this->PredefinedList;
    }
    /**
     * Set PredefinedList value
     * @param \Confirmit\Authoring\StructType\PredefinedList $predefinedList
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setPredefinedList(\Confirmit\Authoring\StructType\PredefinedList $predefinedList = null)
    {
        $this->PredefinedList = $predefinedList;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setInfo(\Confirmit\Authoring\StructType\InfoForm $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Get Quota value
     * @return \Confirmit\Authoring\StructType\Quota
     */
    public function getQuota()
    {
        return $this->Quota;
    }
    /**
     * Set Quota value
     * @param \Confirmit\Authoring\StructType\Quota $quota
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setQuota(\Confirmit\Authoring\StructType\Quota $quota = null)
    {
        $this->Quota = $quota;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setCondition(\Confirmit\Authoring\StructType\Condition $condition = null)
    {
        $this->Condition = $condition;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setGrid(\Confirmit\Authoring\StructType\GridForm $grid = null)
    {
        $this->Grid = $grid;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setEmail(\Confirmit\Authoring\StructType\Email $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get ProjectInfo value
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function getProjectInfo()
    {
        return $this->ProjectInfo;
    }
    /**
     * Set ProjectInfo value
     * @param \Confirmit\Authoring\StructType\ProjectInfo $projectInfo
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setProjectInfo(\Confirmit\Authoring\StructType\ProjectInfo $projectInfo = null)
    {
        $this->ProjectInfo = $projectInfo;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setGrid3D(\Confirmit\Authoring\StructType\Grid3DForm $grid3D = null)
    {
        $this->Grid3D = $grid3D;
        return $this;
    }
    /**
     * Get Questionnaire value
     * @return \Confirmit\Authoring\StructType\Questionnaire
     */
    public function getQuestionnaire()
    {
        return $this->Questionnaire;
    }
    /**
     * Set Questionnaire value
     * @param \Confirmit\Authoring\StructType\Questionnaire $questionnaire
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setQuestionnaire(\Confirmit\Authoring\StructType\Questionnaire $questionnaire = null)
    {
        $this->Questionnaire = $questionnaire;
        return $this;
    }
    /**
     * Get Directive value
     * @return \Confirmit\Authoring\StructType\Directive
     */
    public function getDirective()
    {
        return $this->Directive;
    }
    /**
     * Set Directive value
     * @param \Confirmit\Authoring\StructType\Directive $directive
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setDirective(\Confirmit\Authoring\StructType\Directive $directive = null)
    {
        $this->Directive = $directive;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setStop(\Confirmit\Authoring\StructType\Stop $stop = null)
    {
        $this->Stop = $stop;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setSingle(\Confirmit\Authoring\StructType\SingleForm $single = null)
    {
        $this->Single = $single;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setCallBlock(\Confirmit\Authoring\StructType\CallBlock $callBlock = null)
    {
        $this->CallBlock = $callBlock;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setBlock(\Confirmit\Authoring\StructType\Block $block = null)
    {
        $this->Block = $block;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setPage(\Confirmit\Authoring\StructType\Page $page = null)
    {
        $this->Page = $page;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setOpen(\Confirmit\Authoring\StructType\OpenForm $open = null)
    {
        $this->Open = $open;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setTelephone(\Confirmit\Authoring\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setLoop(\Confirmit\Authoring\StructType\Loop $loop = null)
    {
        $this->Loop = $loop;
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
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
     */
    public function setFolder(\Confirmit\Authoring\StructType\Folder $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice17
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
