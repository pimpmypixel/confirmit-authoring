<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Questionnaire StructType
 * @subpackage Structs
 */
class Questionnaire extends Node
{
    /**
     * The ProjectInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ProjectInfo
     */
    public $ProjectInfo;
    /**
     * The PredefinedLists
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfPredefinedList
     */
    public $PredefinedLists;
    /**
     * The Emails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfEmail
     */
    public $Emails;
    /**
     * The Routing
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ArrayOfChoice16
     */
    public $Routing;
    /**
     * The Blocks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfBlock
     */
    public $Blocks;
    /**
     * The Quotas
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfQuota
     */
    public $Quotas;
    /**
     * Constructor method for Questionnaire
     * @uses Questionnaire::setProjectInfo()
     * @uses Questionnaire::setPredefinedLists()
     * @uses Questionnaire::setEmails()
     * @uses Questionnaire::setRouting()
     * @uses Questionnaire::setBlocks()
     * @uses Questionnaire::setQuotas()
     * @param \Confirmit\Authoring\StructType\ProjectInfo $projectInfo
     * @param \Confirmit\Authoring\ArrayType\ArrayOfPredefinedList $predefinedLists
     * @param \Confirmit\Authoring\ArrayType\ArrayOfEmail $emails
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice16 $routing
     * @param \Confirmit\Authoring\ArrayType\ArrayOfBlock $blocks
     * @param \Confirmit\Authoring\ArrayType\ArrayOfQuota $quotas
     */
    public function __construct(\Confirmit\Authoring\StructType\ProjectInfo $projectInfo = null, \Confirmit\Authoring\ArrayType\ArrayOfPredefinedList $predefinedLists = null, \Confirmit\Authoring\ArrayType\ArrayOfEmail $emails = null, \Confirmit\Authoring\StructType\ArrayOfChoice16 $routing = null, \Confirmit\Authoring\ArrayType\ArrayOfBlock $blocks = null, \Confirmit\Authoring\ArrayType\ArrayOfQuota $quotas = null)
    {
        $this
            ->setProjectInfo($projectInfo)
            ->setPredefinedLists($predefinedLists)
            ->setEmails($emails)
            ->setRouting($routing)
            ->setBlocks($blocks)
            ->setQuotas($quotas);
    }
    /**
     * Get ProjectInfo value
     * @return \Confirmit\Authoring\StructType\ProjectInfo|null
     */
    public function getProjectInfo()
    {
        return $this->ProjectInfo;
    }
    /**
     * Set ProjectInfo value
     * @param \Confirmit\Authoring\StructType\ProjectInfo $projectInfo
     * @return \Confirmit\Authoring\StructType\Questionnaire
     */
    public function setProjectInfo(\Confirmit\Authoring\StructType\ProjectInfo $projectInfo = null)
    {
        $this->ProjectInfo = $projectInfo;
        return $this;
    }
    /**
     * Get PredefinedLists value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfPredefinedList|null
     */
    public function getPredefinedLists()
    {
        return $this->PredefinedLists;
    }
    /**
     * Set PredefinedLists value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfPredefinedList $predefinedLists
     * @return \Confirmit\Authoring\StructType\Questionnaire
     */
    public function setPredefinedLists(\Confirmit\Authoring\ArrayType\ArrayOfPredefinedList $predefinedLists = null)
    {
        $this->PredefinedLists = $predefinedLists;
        return $this;
    }
    /**
     * Get Emails value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfEmail|null
     */
    public function getEmails()
    {
        return $this->Emails;
    }
    /**
     * Set Emails value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfEmail $emails
     * @return \Confirmit\Authoring\StructType\Questionnaire
     */
    public function setEmails(\Confirmit\Authoring\ArrayType\ArrayOfEmail $emails = null)
    {
        $this->Emails = $emails;
        return $this;
    }
    /**
     * Get Routing value
     * @return \Confirmit\Authoring\StructType\ArrayOfChoice16|null
     */
    public function getRouting()
    {
        return $this->Routing;
    }
    /**
     * Set Routing value
     * @param \Confirmit\Authoring\StructType\ArrayOfChoice16 $routing
     * @return \Confirmit\Authoring\StructType\Questionnaire
     */
    public function setRouting(\Confirmit\Authoring\StructType\ArrayOfChoice16 $routing = null)
    {
        $this->Routing = $routing;
        return $this;
    }
    /**
     * Get Blocks value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfBlock|null
     */
    public function getBlocks()
    {
        return $this->Blocks;
    }
    /**
     * Set Blocks value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfBlock $blocks
     * @return \Confirmit\Authoring\StructType\Questionnaire
     */
    public function setBlocks(\Confirmit\Authoring\ArrayType\ArrayOfBlock $blocks = null)
    {
        $this->Blocks = $blocks;
        return $this;
    }
    /**
     * Get Quotas value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfQuota|null
     */
    public function getQuotas()
    {
        return $this->Quotas;
    }
    /**
     * Set Quotas value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfQuota $quotas
     * @return \Confirmit\Authoring\StructType\Questionnaire
     */
    public function setQuotas(\Confirmit\Authoring\ArrayType\ArrayOfQuota $quotas = null)
    {
        $this->Quotas = $quotas;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Questionnaire
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
