<?php

namespace Confirmit\Authoring\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetDatabaseLastCompiled
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetDatabaseLastCompiled $parameters
     * @return \Confirmit\Authoring\StructType\GetDatabaseLastCompiledResponse|bool
     */
    public function GetDatabaseLastCompiled(\Confirmit\Authoring\StructType\GetDatabaseLastCompiled $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDatabaseLastCompiled($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetProjectList $parameters
     * @return \Confirmit\Authoring\StructType\GetProjectListResponse|bool
     */
    public function GetProjectList(\Confirmit\Authoring\StructType\GetProjectList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProjectList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectListByProjectName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetProjectListByProjectName $parameters
     * @return \Confirmit\Authoring\StructType\GetProjectListByProjectNameResponse|bool
     */
    public function GetProjectListByProjectName(\Confirmit\Authoring\StructType\GetProjectListByProjectName $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProjectListByProjectName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectListByCreator
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetProjectListByCreator $parameters
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatorResponse|bool
     */
    public function GetProjectListByCreator(\Confirmit\Authoring\StructType\GetProjectListByCreator $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProjectListByCreator($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectListByKeywords
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetProjectListByKeywords $parameters
     * @return \Confirmit\Authoring\StructType\GetProjectListByKeywordsResponse|bool
     */
    public function GetProjectListByKeywords(\Confirmit\Authoring\StructType\GetProjectListByKeywords $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProjectListByKeywords($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectListByCreatedDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetProjectListByCreatedDate $parameters
     * @return \Confirmit\Authoring\StructType\GetProjectListByCreatedDateResponse|bool
     */
    public function GetProjectListByCreatedDate(\Confirmit\Authoring\StructType\GetProjectListByCreatedDate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProjectListByCreatedDate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCustomProjectInfoField
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetCustomProjectInfoField $parameters
     * @return \Confirmit\Authoring\StructType\GetCustomProjectInfoFieldResponse|bool
     */
    public function GetCustomProjectInfoField(\Confirmit\Authoring\StructType\GetCustomProjectInfoField $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCustomProjectInfoField($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetProjectInfo $parameters
     * @return \Confirmit\Authoring\StructType\GetProjectInfoResponse|bool
     */
    public function GetProjectInfo(\Confirmit\Authoring\StructType\GetProjectInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProjectInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetQuestionnaire
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetQuestionnaire $parameters
     * @return \Confirmit\Authoring\StructType\GetQuestionnaireResponse|bool
     */
    public function GetQuestionnaire(\Confirmit\Authoring\StructType\GetQuestionnaire $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetQuestionnaire($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFilteredQuestionnaire
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetFilteredQuestionnaire $parameters
     * @return \Confirmit\Authoring\StructType\GetFilteredQuestionnaireResponse|bool
     */
    public function GetFilteredQuestionnaire(\Confirmit\Authoring\StructType\GetFilteredQuestionnaire $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetFilteredQuestionnaire($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPredefinedLists
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetPredefinedLists $parameters
     * @return \Confirmit\Authoring\StructType\GetPredefinedListsResponse|bool
     */
    public function GetPredefinedLists(\Confirmit\Authoring\StructType\GetPredefinedLists $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPredefinedLists($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPredefinedList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetPredefinedList $parameters
     * @return \Confirmit\Authoring\StructType\GetPredefinedListResponse|bool
     */
    public function GetPredefinedList(\Confirmit\Authoring\StructType\GetPredefinedList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPredefinedList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetQuotas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetQuotas $parameters
     * @return \Confirmit\Authoring\StructType\GetQuotasResponse|bool
     */
    public function GetQuotas(\Confirmit\Authoring\StructType\GetQuotas $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetQuotas($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetQuota
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetQuota $parameters
     * @return \Confirmit\Authoring\StructType\GetQuotaResponse|bool
     */
    public function GetQuota(\Confirmit\Authoring\StructType\GetQuota $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetQuota($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFormByName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetFormByName $parameters
     * @return \Confirmit\Authoring\StructType\GetFormByNameResponse|bool
     */
    public function GetFormByName(\Confirmit\Authoring\StructType\GetFormByName $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetFormByName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetForm
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetForm $parameters
     * @return \Confirmit\Authoring\StructType\GetFormResponse|bool
     */
    public function GetForm(\Confirmit\Authoring\StructType\GetForm $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetForm($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetNode $parameters
     * @return \Confirmit\Authoring\StructType\GetNodeResponse|bool
     */
    public function GetNode(\Confirmit\Authoring\StructType\GetNode $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetNode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetNodes $parameters
     * @return \Confirmit\Authoring\StructType\GetNodesResponse|bool
     */
    public function GetNodes(\Confirmit\Authoring\StructType\GetNodes $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetNodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFormsInLoop
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetFormsInLoop $parameters
     * @return \Confirmit\Authoring\StructType\GetFormsInLoopResponse|bool
     */
    public function GetFormsInLoop(\Confirmit\Authoring\StructType\GetFormsInLoop $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetFormsInLoop($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLoopStructure
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetLoopStructure $parameters
     * @return \Confirmit\Authoring\StructType\GetLoopStructureResponse|bool
     */
    public function GetLoopStructure(\Confirmit\Authoring\StructType\GetLoopStructure $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetLoopStructure($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetConditionBranch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetConditionBranch $parameters
     * @return \Confirmit\Authoring\StructType\GetConditionBranchResponse|bool
     */
    public function GetConditionBranch(\Confirmit\Authoring\StructType\GetConditionBranch $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetConditionBranch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRouting
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetRouting $parameters
     * @return \Confirmit\Authoring\StructType\GetRoutingResponse|bool
     */
    public function GetRouting(\Confirmit\Authoring\StructType\GetRouting $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetRouting($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSurveyStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetSurveyStatus $parameters
     * @return \Confirmit\Authoring\StructType\GetSurveyStatusResponse|bool
     */
    public function GetSurveyStatus(\Confirmit\Authoring\StructType\GetSurveyStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSurveyStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetExternalAnswers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetExternalAnswers $parameters
     * @return \Confirmit\Authoring\StructType\GetExternalAnswersResponse|bool
     */
    public function GetExternalAnswers(\Confirmit\Authoring\StructType\GetExternalAnswers $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetExternalAnswers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBenchmarkProjectIds
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetBenchmarkProjectIds $parameters
     * @return \Confirmit\Authoring\StructType\GetBenchmarkProjectIdsResponse|bool
     */
    public function GetBenchmarkProjectIds(\Confirmit\Authoring\StructType\GetBenchmarkProjectIds $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetBenchmarkProjectIds($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectEmailObjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Confirmit\Authoring\StructType\GetProjectEmailObjects $parameters
     * @return \Confirmit\Authoring\StructType\GetProjectEmailObjectsResponse|bool
     */
    public function GetProjectEmailObjects(\Confirmit\Authoring\StructType\GetProjectEmailObjects $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProjectEmailObjects($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Confirmit\Authoring\StructType\GetBenchmarkProjectIdsResponse|\Confirmit\Authoring\StructType\GetConditionBranchResponse|\Confirmit\Authoring\StructType\GetCustomProjectInfoFieldResponse|\Confirmit\Authoring\StructType\GetDatabaseLastCompiledResponse|\Confirmit\Authoring\StructType\GetExternalAnswersResponse|\Confirmit\Authoring\StructType\GetFilteredQuestionnaireResponse|\Confirmit\Authoring\StructType\GetFormByNameResponse|\Confirmit\Authoring\StructType\GetFormResponse|\Confirmit\Authoring\StructType\GetFormsInLoopResponse|\Confirmit\Authoring\StructType\GetLoopStructureResponse|\Confirmit\Authoring\StructType\GetNodeResponse|\Confirmit\Authoring\StructType\GetNodesResponse|\Confirmit\Authoring\StructType\GetPredefinedListResponse|\Confirmit\Authoring\StructType\GetPredefinedListsResponse|\Confirmit\Authoring\StructType\GetProjectEmailObjectsResponse|\Confirmit\Authoring\StructType\GetProjectInfoResponse|\Confirmit\Authoring\StructType\GetProjectListByCreatedDateResponse|\Confirmit\Authoring\StructType\GetProjectListByCreatorResponse|\Confirmit\Authoring\StructType\GetProjectListByKeywordsResponse|\Confirmit\Authoring\StructType\GetProjectListByProjectNameResponse|\Confirmit\Authoring\StructType\GetProjectListResponse|\Confirmit\Authoring\StructType\GetQuestionnaireResponse|\Confirmit\Authoring\StructType\GetQuotaResponse|\Confirmit\Authoring\StructType\GetQuotasResponse|\Confirmit\Authoring\StructType\GetRoutingResponse|\Confirmit\Authoring\StructType\GetSurveyStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
