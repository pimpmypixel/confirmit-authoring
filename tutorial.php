<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Confirmit\Authoring\ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \Confirmit\Authoring\ServiceType\Get($options);
/**
 * Sample call for GetDatabaseLastCompiled operation/method
 */
if ($get->GetDatabaseLastCompiled(new \Confirmit\Authoring\StructType\GetDatabaseLastCompiled()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectList operation/method
 */
if ($get->GetProjectList(new \Confirmit\Authoring\StructType\GetProjectList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectListByProjectName operation/method
 */
if ($get->GetProjectListByProjectName(new \Confirmit\Authoring\StructType\GetProjectListByProjectName()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectListByCreator operation/method
 */
if ($get->GetProjectListByCreator(new \Confirmit\Authoring\StructType\GetProjectListByCreator()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectListByKeywords operation/method
 */
if ($get->GetProjectListByKeywords(new \Confirmit\Authoring\StructType\GetProjectListByKeywords()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectListByCreatedDate operation/method
 */
if ($get->GetProjectListByCreatedDate(new \Confirmit\Authoring\StructType\GetProjectListByCreatedDate()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomProjectInfoField operation/method
 */
if ($get->GetCustomProjectInfoField(new \Confirmit\Authoring\StructType\GetCustomProjectInfoField()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectInfo operation/method
 */
if ($get->GetProjectInfo(new \Confirmit\Authoring\StructType\GetProjectInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetQuestionnaire operation/method
 */
if ($get->GetQuestionnaire(new \Confirmit\Authoring\StructType\GetQuestionnaire()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFilteredQuestionnaire operation/method
 */
if ($get->GetFilteredQuestionnaire(new \Confirmit\Authoring\StructType\GetFilteredQuestionnaire()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPredefinedLists operation/method
 */
if ($get->GetPredefinedLists(new \Confirmit\Authoring\StructType\GetPredefinedLists()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPredefinedList operation/method
 */
if ($get->GetPredefinedList(new \Confirmit\Authoring\StructType\GetPredefinedList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetQuotas operation/method
 */
if ($get->GetQuotas(new \Confirmit\Authoring\StructType\GetQuotas()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetQuota operation/method
 */
if ($get->GetQuota(new \Confirmit\Authoring\StructType\GetQuota()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFormByName operation/method
 */
if ($get->GetFormByName(new \Confirmit\Authoring\StructType\GetFormByName()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetForm operation/method
 */
if ($get->GetForm(new \Confirmit\Authoring\StructType\GetForm()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNode operation/method
 */
if ($get->GetNode(new \Confirmit\Authoring\StructType\GetNode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNodes operation/method
 */
if ($get->GetNodes(new \Confirmit\Authoring\StructType\GetNodes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFormsInLoop operation/method
 */
if ($get->GetFormsInLoop(new \Confirmit\Authoring\StructType\GetFormsInLoop()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLoopStructure operation/method
 */
if ($get->GetLoopStructure(new \Confirmit\Authoring\StructType\GetLoopStructure()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConditionBranch operation/method
 */
if ($get->GetConditionBranch(new \Confirmit\Authoring\StructType\GetConditionBranch()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRouting operation/method
 */
if ($get->GetRouting(new \Confirmit\Authoring\StructType\GetRouting()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSurveyStatus operation/method
 */
if ($get->GetSurveyStatus(new \Confirmit\Authoring\StructType\GetSurveyStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetExternalAnswers operation/method
 */
if ($get->GetExternalAnswers(new \Confirmit\Authoring\StructType\GetExternalAnswers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBenchmarkProjectIds operation/method
 */
if ($get->GetBenchmarkProjectIds(new \Confirmit\Authoring\StructType\GetBenchmarkProjectIds()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectEmailObjects operation/method
 */
if ($get->GetProjectEmailObjects(new \Confirmit\Authoring\StructType\GetProjectEmailObjects()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \Confirmit\Authoring\ServiceType\Add($options);
/**
 * Sample call for AddProjectFromTripleS operation/method
 */
if ($add->AddProjectFromTripleS(new \Confirmit\Authoring\StructType\AddProjectFromTripleS()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddProject operation/method
 */
if ($add->AddProject(new \Confirmit\Authoring\StructType\AddProject()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Confirmit\Authoring\ServiceType\Delete($options);
/**
 * Sample call for DeleteProject operation/method
 */
if ($delete->DeleteProject(new \Confirmit\Authoring\StructType\DeleteProject()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteRouting operation/method
 */
if ($delete->DeleteRouting(new \Confirmit\Authoring\StructType\DeleteRouting()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteQuestionnaire operation/method
 */
if ($delete->DeleteQuestionnaire(new \Confirmit\Authoring\StructType\DeleteQuestionnaire()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Duplicate ServiceType
 */
$duplicate = new \Confirmit\Authoring\ServiceType\Duplicate($options);
/**
 * Sample call for DuplicateProject operation/method
 */
if ($duplicate->DuplicateProject(new \Confirmit\Authoring\StructType\DuplicateProject()) !== false) {
    print_r($duplicate->getResult());
} else {
    print_r($duplicate->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Confirmit\Authoring\ServiceType\Set($options);
/**
 * Sample call for SetCustomProjectInfoField operation/method
 */
if ($set->SetCustomProjectInfoField(new \Confirmit\Authoring\StructType\SetCustomProjectInfoField()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetSurveyStatus operation/method
 */
if ($set->SetSurveyStatus(new \Confirmit\Authoring\StructType\SetSurveyStatus()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Export ServiceType
 */
$export = new \Confirmit\Authoring\ServiceType\Export($options);
/**
 * Sample call for ExportSurvey operation/method
 */
if ($export->ExportSurvey(new \Confirmit\Authoring\StructType\ExportSurvey()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for ExportSurveyLayout operation/method
 */
if ($export->ExportSurveyLayout(new \Confirmit\Authoring\StructType\ExportSurveyLayout()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for ExportSurveyWithHTMLRemoved operation/method
 */
if ($export->ExportSurveyWithHTMLRemoved(new \Confirmit\Authoring\StructType\ExportSurveyWithHTMLRemoved()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for ExportTranslation operation/method
 */
if ($export->ExportTranslation(new \Confirmit\Authoring\StructType\ExportTranslation()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Samples for Import ServiceType
 */
$import = new \Confirmit\Authoring\ServiceType\Import($options);
/**
 * Sample call for ImportSurvey operation/method
 */
if ($import->ImportSurvey(new \Confirmit\Authoring\StructType\ImportSurvey()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for ImportTranslation operation/method
 */
if ($import->ImportTranslation(new \Confirmit\Authoring\StructType\ImportTranslation()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Confirmit\Authoring\ServiceType\Update($options);
/**
 * Sample call for Update operation/method
 */
if ($update->Update(new \Confirmit\Authoring\StructType\Update()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Project ServiceType
 */
$project = new \Confirmit\Authoring\ServiceType\Project($options);
/**
 * Sample call for ProjectExists operation/method
 */
if ($project->ProjectExists(new \Confirmit\Authoring\StructType\ProjectExists()) !== false) {
    print_r($project->getResult());
} else {
    print_r($project->getLastError());
}
