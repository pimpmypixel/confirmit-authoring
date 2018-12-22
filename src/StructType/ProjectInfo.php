<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProjectInfo StructType
 * @subpackage Structs
 */
class ProjectInfo extends Node
{
    /**
     * The ProjectStartDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProjectStartDate;
    /**
     * The ProjectEndDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProjectEndDate;
    /**
     * The CompanyId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CompanyId;
    /**
     * The CreatedDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CreatedDate;
    /**
     * The TimeStamp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TimeStamp;
    /**
     * The ProjectSourceType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProjectSourceType;
    /**
     * The QuestionnaireReviewerDisplayAnswersScales
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $QuestionnaireReviewerDisplayAnswersScales;
    /**
     * The AnswerImageHeightCheckBox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AnswerImageHeightCheckBox;
    /**
     * The AnswerImageWidthCheckBox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AnswerImageWidthCheckBox;
    /**
     * The AnswerImageHeightRadioButton
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AnswerImageHeightRadioButton;
    /**
     * The AnswerImageWidthRadioButton
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AnswerImageWidthRadioButton;
    /**
     * The TranslationBaseLang
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TranslationBaseLang;
    /**
     * The Template
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Template;
    /**
     * The PanelTemplate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PanelTemplate;
    /**
     * The CurrentQuestionnaireVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CurrentQuestionnaireVersion;
    /**
     * The QuestionnaireVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $QuestionnaireVersion;
    /**
     * The InvalidDataHandlingSettingsSpecified
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $InvalidDataHandlingSettingsSpecified;
    /**
     * The HandlingOfUndefinedPrecodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HandlingOfUndefinedPrecodes;
    /**
     * The HandlingOfInvalidNumericData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HandlingOfInvalidNumericData;
    /**
     * The HandlingOfOversizedTexts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HandlingOfOversizedTexts;
    /**
     * The SqlServerId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SqlServerId;
    /**
     * The HasUploadedRespondents
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HasUploadedRespondents;
    /**
     * The Confirmit125_DBFormat_Support
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Confirmit125_DBFormat_Support;
    /**
     * The ReusableDB_Support
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReusableDB_Support;
    /**
     * The HasExternalData
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HasExternalData;
    /**
     * The EnforceVersion
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnforceVersion;
    /**
     * The EnforceUnicodeEncoding
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnforceUnicodeEncoding;
    /**
     * The ExternalTestEnabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ExternalTestEnabled;
    /**
     * The SurveyLogicMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SurveyLogicMode;
    /**
     * The ApprovalState
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ApprovalState;
    /**
     * The ApprovalState_Int
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ApprovalState_Int;
    /**
     * The ProjectSourceType_Int
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ProjectSourceType_Int;
    /**
     * The ProjectType_Int
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ProjectType_Int;
    /**
     * The IsStandardPanel
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsStandardPanel;
    /**
     * The Use81WIGeneration
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Use81WIGeneration;
    /**
     * The TestMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $TestMode;
    /**
     * The InlineSurveyEnabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $InlineSurveyEnabled;
    /**
     * The InlineSurveyUseOverlay
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $InlineSurveyUseOverlay;
    /**
     * The InlineSurveyFrequency
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $InlineSurveyFrequency;
    /**
     * The HideBackgroundVariablesInTestMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HideBackgroundVariablesInTestMode;
    /**
     * The HidePanelVariablesInTestMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HidePanelVariablesInTestMode;
    /**
     * The HideHiddenVariablesInTestMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HideHiddenVariablesInTestMode;
    /**
     * The ExternalRespondents
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ExternalRespondents;
    /**
     * The InlineSurveyCookie
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $InlineSurveyCookie;
    /**
     * The InlineSurveyCookie_Int
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $InlineSurveyCookie_Int;
    /**
     * The InlineSurveyCookieExpiration
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $InlineSurveyCookieExpiration;
    /**
     * The NewLayoutEnabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $NewLayoutEnabled;
    /**
     * The SurveyLayoutIsEasyLayout
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SurveyLayoutIsEasyLayout;
    /**
     * The DisplayPrecodesInCAPI
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $DisplayPrecodesInCAPI;
    /**
     * The DisplayPrecodesInCATI
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $DisplayPrecodesInCATI;
    /**
     * The DefaultLanguage
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $DefaultLanguage;
    /**
     * The CustomNavigationType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $CustomNavigationType;
    /**
     * The ReservedErrorArea
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReservedErrorArea;
    /**
     * The SetFirstControlFocus
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SetFirstControlFocus;
    /**
     * The BackButton
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $BackButton;
    /**
     * The CapiBackButton
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $CapiBackButton;
    /**
     * The ContinueLink
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ContinueLink;
    /**
     * The AllowModify
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AllowModify;
    /**
     * The AllowModifyComplete
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AllowModifyComplete;
    /**
     * The FrameBreaker
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FrameBreaker;
    /**
     * The AnswerImageEnabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AnswerImageEnabled;
    /**
     * The Popup
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Popup;
    /**
     * The DoNotCreateDatabaseRowOnInitialRequest
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $DoNotCreateDatabaseRowOnInitialRequest;
    /**
     * The SingleSignOn
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SingleSignOn;
    /**
     * The SingleSignOnFallback
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SingleSignOnFallback;
    /**
     * The OnlyUserId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $OnlyUserId;
    /**
     * The SurveyLinkExpiryEnabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SurveyLinkExpiryEnabled;
    /**
     * The EnableShortUrls
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnableShortUrls;
    /**
     * The QuotaVersion
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $QuotaVersion;
    /**
     * The DisablePrecodeCheck
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $DisablePrecodeCheck;
    /**
     * The Accessibility508
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Accessibility508;
    /**
     * The ErrorPrefix
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ErrorPrefix;
    /**
     * The OtherLabel
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $OtherLabel;
    /**
     * The ShowDeleted
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ShowDeleted;
    /**
     * The AnswerRequired
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AnswerRequired;
    /**
     * The Exclusivity
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Exclusivity;
    /**
     * The OtherSpecify
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $OtherSpecify;
    /**
     * The RankOrder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RankOrder;
    /**
     * The LimitedSurvey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $LimitedSurvey;
    /**
     * The CapiLimitedSurvey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $CapiLimitedSurvey;
    /**
     * The LoginPage
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $LoginPage;
    /**
     * The IsOffline
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsOffline;
    /**
     * The IsCapiBasedSurvey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsCapiBasedSurvey;
    /**
     * The IsCatiBasedSurvey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsCatiBasedSurvey;
    /**
     * The IsTouchPhoneSurvey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsTouchPhoneSurvey;
    /**
     * The IsGenericPhoneSurvey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsGenericPhoneSurvey;
    /**
     * The EnableOpenedReviewRecording
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnableOpenedReviewRecording;
    /**
     * The SupportTelephoneBlacklist
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $SupportTelephoneBlacklist;
    /**
     * The EnableInterviewRecording
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnableInterviewRecording;
    /**
     * The EnableInterviewScreenRecording
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnableInterviewScreenRecording;
    /**
     * The IsSurveyIntegratedToFusion
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsSurveyIntegratedToFusion;
    /**
     * The IsSurveyPoll
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsSurveyPoll;
    /**
     * The DialMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DialMode;
    /**
     * The EnableSchedulingForWebInterviewing
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnableSchedulingForWebInterviewing;
    /**
     * The HtmlEncodePipingExpressions
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HtmlEncodePipingExpressions;
    /**
     * The RequireXssSafeInput
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RequireXssSafeInput;
    /**
     * The EnforceHttps
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnforceHttps;
    /**
     * The EnableCAS
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnableCAS;
    /**
     * The EncryptSystemRequestParameters
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EncryptSystemRequestParameters;
    /**
     * The DisableQIDRequestParameter
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $DisableQIDRequestParameter;
    /**
     * The PanelistRegistrationSurvey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $PanelistRegistrationSurvey;
    /**
     * The IsWebBasedSurvey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsWebBasedSurvey;
    /**
     * The CustomNavigationEnabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $CustomNavigationEnabled;
    /**
     * The AnswerButtons
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AnswerButtons;
    /**
     * The LabelClick
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $LabelClick;
    /**
     * The RadioButtons
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $RadioButtons;
    /**
     * The AutoNext
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AutoNext;
    /**
     * The TabOnEnterKey
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $TabOnEnterKey;
    /**
     * The GridErrorHighlight
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $GridErrorHighlight;
    /**
     * The EnableDragDropOnTouch
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnableDragDropOnTouch;
    /**
     * The OverrideBrowserBack
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $OverrideBrowserBack;
    /**
     * The ProgressBar
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ProgressBar;
    /**
     * The OneQuestionPerPage
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $OneQuestionPerPage;
    /**
     * The EnablePerQuestionAnswersRandomization
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $EnablePerQuestionAnswersRandomization;
    /**
     * The AllowPostRequestsForRespondentLinks
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AllowPostRequestsForRespondentLinks;
    /**
     * The UseDbEncryption
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UseDbEncryption;
    /**
     * The OptimisticQuotaTimeout
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $OptimisticQuotaTimeout;
    /**
     * The OverrideOptimisticQuotaTimeout
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $OverrideOptimisticQuotaTimeout;
    /**
     * The UseChangeTracking
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UseChangeTracking;
    /**
     * The HiddenInParticipation
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $HiddenInParticipation;
    /**
     * The Build
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Build;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The LogoFile
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LogoFile;
    /**
     * The WI_Url
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WI_Url;
    /**
     * The Company
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ProjectID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProjectID;
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Created;
    /**
     * The Creator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Creator;
    /**
     * The ApprovalStateDateChanged_Str
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ApprovalStateDateChanged_Str;
    /**
     * The MasterProject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MasterProject;
    /**
     * The ErrorRecipient
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorRecipient;
    /**
     * The LostPasswordSender
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LostPasswordSender;
    /**
     * The CustomNavigationStyle
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomNavigationStyle;
    /**
     * The AnswerImageDefaultRadioButton
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageDefaultRadioButton;
    /**
     * The AnswerImageOverRadioButton
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageOverRadioButton;
    /**
     * The AnswerImageSelectedRadioButton
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageSelectedRadioButton;
    /**
     * The AnswerImageDefaultCheckBox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageDefaultCheckBox;
    /**
     * The AnswerImageOverCheckBox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageOverCheckBox;
    /**
     * The AnswerImageSelectedCheckBox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AnswerImageSelectedCheckBox;
    /**
     * The Languages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfInt
     */
    public $Languages;
    /**
     * The KeyWords
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfString
     */
    public $KeyWords;
    /**
     * The Titles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7
     */
    public $Titles;
    /**
     * The HelpLinkTexts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString8
     */
    public $HelpLinkTexts;
    /**
     * The HelpLinkUrls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString9
     */
    public $HelpLinkUrls;
    /**
     * The EndLinkTexts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString10
     */
    public $EndLinkTexts;
    /**
     * The EndLinkUrls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString11
     */
    public $EndLinkUrls;
    /**
     * The CustomNavigationOK
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString12
     */
    public $CustomNavigationOK;
    /**
     * The CustomNavigationBack
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString13
     */
    public $CustomNavigationBack;
    /**
     * The CustomNavigationNext
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString14
     */
    public $CustomNavigationNext;
    /**
     * The TranslationStatusRecipient
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TranslationStatusRecipient;
    /**
     * The QuestionnaireReviewerStatusRecipient
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QuestionnaireReviewerStatusRecipient;
    /**
     * The TranslationStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public $TranslationStatuses;
    /**
     * The CustomResources
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfCustomResource
     */
    public $CustomResources;
    /**
     * The ExternalQuickTestKey
     * @var string
     */
    public $ExternalQuickTestKey;
    /**
     * The SurveyParametersForTestInterView
     * @var string
     */
    public $SurveyParametersForTestInterView;
    /**
     * The ExternalTestKey
     * @var string
     */
    public $ExternalTestKey;
    /**
     * The WI_LaunchDate
     * @var string
     */
    public $WI_LaunchDate;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The InlineSurveyOverlayOpacity
     * @var string
     */
    public $InlineSurveyOverlayOpacity;
    /**
     * The InlineSurveyWidth
     * @var string
     */
    public $InlineSurveyWidth;
    /**
     * The InlineSurveyCookieName
     * @var string
     */
    public $InlineSurveyCookieName;
    /**
     * The SurveyLayoutName
     * @var string
     */
    public $SurveyLayoutName;
    /**
     * The SurveyLayoutId
     * @var string
     */
    public $SurveyLayoutId;
    /**
     * The BitStreamIndexes
     * @var string
     */
    public $BitStreamIndexes;
    /**
     * The EnterprisePanelId
     * @var string
     */
    public $EnterprisePanelId;
    /**
     * Constructor method for ProjectInfo
     * @uses ProjectInfo::setProjectStartDate()
     * @uses ProjectInfo::setProjectEndDate()
     * @uses ProjectInfo::setCompanyId()
     * @uses ProjectInfo::setCreatedDate()
     * @uses ProjectInfo::setTimeStamp()
     * @uses ProjectInfo::setProjectSourceType()
     * @uses ProjectInfo::setQuestionnaireReviewerDisplayAnswersScales()
     * @uses ProjectInfo::setAnswerImageHeightCheckBox()
     * @uses ProjectInfo::setAnswerImageWidthCheckBox()
     * @uses ProjectInfo::setAnswerImageHeightRadioButton()
     * @uses ProjectInfo::setAnswerImageWidthRadioButton()
     * @uses ProjectInfo::setTranslationBaseLang()
     * @uses ProjectInfo::setTemplate()
     * @uses ProjectInfo::setPanelTemplate()
     * @uses ProjectInfo::setCurrentQuestionnaireVersion()
     * @uses ProjectInfo::setQuestionnaireVersion()
     * @uses ProjectInfo::setInvalidDataHandlingSettingsSpecified()
     * @uses ProjectInfo::setHandlingOfUndefinedPrecodes()
     * @uses ProjectInfo::setHandlingOfInvalidNumericData()
     * @uses ProjectInfo::setHandlingOfOversizedTexts()
     * @uses ProjectInfo::setSqlServerId()
     * @uses ProjectInfo::setHasUploadedRespondents()
     * @uses ProjectInfo::setConfirmit125_DBFormat_Support()
     * @uses ProjectInfo::setReusableDB_Support()
     * @uses ProjectInfo::setHasExternalData()
     * @uses ProjectInfo::setEnforceVersion()
     * @uses ProjectInfo::setEnforceUnicodeEncoding()
     * @uses ProjectInfo::setExternalTestEnabled()
     * @uses ProjectInfo::setSurveyLogicMode()
     * @uses ProjectInfo::setApprovalState()
     * @uses ProjectInfo::setApprovalState_Int()
     * @uses ProjectInfo::setProjectSourceType_Int()
     * @uses ProjectInfo::setProjectType_Int()
     * @uses ProjectInfo::setIsStandardPanel()
     * @uses ProjectInfo::setUse81WIGeneration()
     * @uses ProjectInfo::setTestMode()
     * @uses ProjectInfo::setInlineSurveyEnabled()
     * @uses ProjectInfo::setInlineSurveyUseOverlay()
     * @uses ProjectInfo::setInlineSurveyFrequency()
     * @uses ProjectInfo::setHideBackgroundVariablesInTestMode()
     * @uses ProjectInfo::setHidePanelVariablesInTestMode()
     * @uses ProjectInfo::setHideHiddenVariablesInTestMode()
     * @uses ProjectInfo::setExternalRespondents()
     * @uses ProjectInfo::setInlineSurveyCookie()
     * @uses ProjectInfo::setInlineSurveyCookie_Int()
     * @uses ProjectInfo::setInlineSurveyCookieExpiration()
     * @uses ProjectInfo::setNewLayoutEnabled()
     * @uses ProjectInfo::setSurveyLayoutIsEasyLayout()
     * @uses ProjectInfo::setDisplayPrecodesInCAPI()
     * @uses ProjectInfo::setDisplayPrecodesInCATI()
     * @uses ProjectInfo::setDefaultLanguage()
     * @uses ProjectInfo::setCustomNavigationType()
     * @uses ProjectInfo::setReservedErrorArea()
     * @uses ProjectInfo::setSetFirstControlFocus()
     * @uses ProjectInfo::setBackButton()
     * @uses ProjectInfo::setCapiBackButton()
     * @uses ProjectInfo::setContinueLink()
     * @uses ProjectInfo::setAllowModify()
     * @uses ProjectInfo::setAllowModifyComplete()
     * @uses ProjectInfo::setFrameBreaker()
     * @uses ProjectInfo::setAnswerImageEnabled()
     * @uses ProjectInfo::setPopup()
     * @uses ProjectInfo::setDoNotCreateDatabaseRowOnInitialRequest()
     * @uses ProjectInfo::setSingleSignOn()
     * @uses ProjectInfo::setSingleSignOnFallback()
     * @uses ProjectInfo::setOnlyUserId()
     * @uses ProjectInfo::setSurveyLinkExpiryEnabled()
     * @uses ProjectInfo::setEnableShortUrls()
     * @uses ProjectInfo::setQuotaVersion()
     * @uses ProjectInfo::setDisablePrecodeCheck()
     * @uses ProjectInfo::setAccessibility508()
     * @uses ProjectInfo::setErrorPrefix()
     * @uses ProjectInfo::setOtherLabel()
     * @uses ProjectInfo::setShowDeleted()
     * @uses ProjectInfo::setAnswerRequired()
     * @uses ProjectInfo::setExclusivity()
     * @uses ProjectInfo::setOtherSpecify()
     * @uses ProjectInfo::setRankOrder()
     * @uses ProjectInfo::setLimitedSurvey()
     * @uses ProjectInfo::setCapiLimitedSurvey()
     * @uses ProjectInfo::setLoginPage()
     * @uses ProjectInfo::setIsOffline()
     * @uses ProjectInfo::setIsCapiBasedSurvey()
     * @uses ProjectInfo::setIsCatiBasedSurvey()
     * @uses ProjectInfo::setIsTouchPhoneSurvey()
     * @uses ProjectInfo::setIsGenericPhoneSurvey()
     * @uses ProjectInfo::setEnableOpenedReviewRecording()
     * @uses ProjectInfo::setSupportTelephoneBlacklist()
     * @uses ProjectInfo::setEnableInterviewRecording()
     * @uses ProjectInfo::setEnableInterviewScreenRecording()
     * @uses ProjectInfo::setIsSurveyIntegratedToFusion()
     * @uses ProjectInfo::setIsSurveyPoll()
     * @uses ProjectInfo::setDialMode()
     * @uses ProjectInfo::setEnableSchedulingForWebInterviewing()
     * @uses ProjectInfo::setHtmlEncodePipingExpressions()
     * @uses ProjectInfo::setRequireXssSafeInput()
     * @uses ProjectInfo::setEnforceHttps()
     * @uses ProjectInfo::setEnableCAS()
     * @uses ProjectInfo::setEncryptSystemRequestParameters()
     * @uses ProjectInfo::setDisableQIDRequestParameter()
     * @uses ProjectInfo::setPanelistRegistrationSurvey()
     * @uses ProjectInfo::setIsWebBasedSurvey()
     * @uses ProjectInfo::setCustomNavigationEnabled()
     * @uses ProjectInfo::setAnswerButtons()
     * @uses ProjectInfo::setLabelClick()
     * @uses ProjectInfo::setRadioButtons()
     * @uses ProjectInfo::setAutoNext()
     * @uses ProjectInfo::setTabOnEnterKey()
     * @uses ProjectInfo::setGridErrorHighlight()
     * @uses ProjectInfo::setEnableDragDropOnTouch()
     * @uses ProjectInfo::setOverrideBrowserBack()
     * @uses ProjectInfo::setProgressBar()
     * @uses ProjectInfo::setOneQuestionPerPage()
     * @uses ProjectInfo::setEnablePerQuestionAnswersRandomization()
     * @uses ProjectInfo::setAllowPostRequestsForRespondentLinks()
     * @uses ProjectInfo::setUseDbEncryption()
     * @uses ProjectInfo::setOptimisticQuotaTimeout()
     * @uses ProjectInfo::setOverrideOptimisticQuotaTimeout()
     * @uses ProjectInfo::setUseChangeTracking()
     * @uses ProjectInfo::setHiddenInParticipation()
     * @uses ProjectInfo::setBuild()
     * @uses ProjectInfo::setDescription()
     * @uses ProjectInfo::setLogoFile()
     * @uses ProjectInfo::setWI_Url()
     * @uses ProjectInfo::setCompany()
     * @uses ProjectInfo::setName()
     * @uses ProjectInfo::setProjectID()
     * @uses ProjectInfo::setCreated()
     * @uses ProjectInfo::setCreator()
     * @uses ProjectInfo::setApprovalStateDateChanged_Str()
     * @uses ProjectInfo::setMasterProject()
     * @uses ProjectInfo::setErrorRecipient()
     * @uses ProjectInfo::setLostPasswordSender()
     * @uses ProjectInfo::setCustomNavigationStyle()
     * @uses ProjectInfo::setAnswerImageDefaultRadioButton()
     * @uses ProjectInfo::setAnswerImageOverRadioButton()
     * @uses ProjectInfo::setAnswerImageSelectedRadioButton()
     * @uses ProjectInfo::setAnswerImageDefaultCheckBox()
     * @uses ProjectInfo::setAnswerImageOverCheckBox()
     * @uses ProjectInfo::setAnswerImageSelectedCheckBox()
     * @uses ProjectInfo::setLanguages()
     * @uses ProjectInfo::setKeyWords()
     * @uses ProjectInfo::setTitles()
     * @uses ProjectInfo::setHelpLinkTexts()
     * @uses ProjectInfo::setHelpLinkUrls()
     * @uses ProjectInfo::setEndLinkTexts()
     * @uses ProjectInfo::setEndLinkUrls()
     * @uses ProjectInfo::setCustomNavigationOK()
     * @uses ProjectInfo::setCustomNavigationBack()
     * @uses ProjectInfo::setCustomNavigationNext()
     * @uses ProjectInfo::setTranslationStatusRecipient()
     * @uses ProjectInfo::setQuestionnaireReviewerStatusRecipient()
     * @uses ProjectInfo::setTranslationStatuses()
     * @uses ProjectInfo::setCustomResources()
     * @uses ProjectInfo::setExternalQuickTestKey()
     * @uses ProjectInfo::setSurveyParametersForTestInterView()
     * @uses ProjectInfo::setExternalTestKey()
     * @uses ProjectInfo::setWI_LaunchDate()
     * @uses ProjectInfo::setStatus()
     * @uses ProjectInfo::setInlineSurveyOverlayOpacity()
     * @uses ProjectInfo::setInlineSurveyWidth()
     * @uses ProjectInfo::setInlineSurveyCookieName()
     * @uses ProjectInfo::setSurveyLayoutName()
     * @uses ProjectInfo::setSurveyLayoutId()
     * @uses ProjectInfo::setBitStreamIndexes()
     * @uses ProjectInfo::setEnterprisePanelId()
     * @param string $projectStartDate
     * @param string $projectEndDate
     * @param int $companyId
     * @param string $createdDate
     * @param string $timeStamp
     * @param string $projectSourceType
     * @param bool $questionnaireReviewerDisplayAnswersScales
     * @param int $answerImageHeightCheckBox
     * @param int $answerImageWidthCheckBox
     * @param int $answerImageHeightRadioButton
     * @param int $answerImageWidthRadioButton
     * @param int $translationBaseLang
     * @param int $template
     * @param int $panelTemplate
     * @param int $currentQuestionnaireVersion
     * @param int $questionnaireVersion
     * @param bool $invalidDataHandlingSettingsSpecified
     * @param string $handlingOfUndefinedPrecodes
     * @param string $handlingOfInvalidNumericData
     * @param string $handlingOfOversizedTexts
     * @param int $sqlServerId
     * @param bool $hasUploadedRespondents
     * @param bool $confirmit125_DBFormat_Support
     * @param bool $reusableDB_Support
     * @param bool $hasExternalData
     * @param bool $enforceVersion
     * @param bool $enforceUnicodeEncoding
     * @param bool $externalTestEnabled
     * @param string $surveyLogicMode
     * @param string $approvalState
     * @param int $approvalState_Int
     * @param int $projectSourceType_Int
     * @param int $projectType_Int
     * @param bool $isStandardPanel
     * @param bool $use81WIGeneration
     * @param bool $testMode
     * @param bool $inlineSurveyEnabled
     * @param bool $inlineSurveyUseOverlay
     * @param int $inlineSurveyFrequency
     * @param bool $hideBackgroundVariablesInTestMode
     * @param bool $hidePanelVariablesInTestMode
     * @param bool $hideHiddenVariablesInTestMode
     * @param bool $externalRespondents
     * @param string $inlineSurveyCookie
     * @param int $inlineSurveyCookie_Int
     * @param int $inlineSurveyCookieExpiration
     * @param bool $newLayoutEnabled
     * @param bool $surveyLayoutIsEasyLayout
     * @param bool $displayPrecodesInCAPI
     * @param bool $displayPrecodesInCATI
     * @param int $defaultLanguage
     * @param string $customNavigationType
     * @param bool $reservedErrorArea
     * @param bool $setFirstControlFocus
     * @param bool $backButton
     * @param bool $capiBackButton
     * @param bool $continueLink
     * @param bool $allowModify
     * @param bool $allowModifyComplete
     * @param bool $frameBreaker
     * @param bool $answerImageEnabled
     * @param bool $popup
     * @param bool $doNotCreateDatabaseRowOnInitialRequest
     * @param bool $singleSignOn
     * @param bool $singleSignOnFallback
     * @param bool $onlyUserId
     * @param bool $surveyLinkExpiryEnabled
     * @param bool $enableShortUrls
     * @param int $quotaVersion
     * @param bool $disablePrecodeCheck
     * @param bool $accessibility508
     * @param bool $errorPrefix
     * @param bool $otherLabel
     * @param bool $showDeleted
     * @param bool $answerRequired
     * @param bool $exclusivity
     * @param bool $otherSpecify
     * @param bool $rankOrder
     * @param bool $limitedSurvey
     * @param bool $capiLimitedSurvey
     * @param bool $loginPage
     * @param bool $isOffline
     * @param bool $isCapiBasedSurvey
     * @param bool $isCatiBasedSurvey
     * @param bool $isTouchPhoneSurvey
     * @param bool $isGenericPhoneSurvey
     * @param bool $enableOpenedReviewRecording
     * @param bool $supportTelephoneBlacklist
     * @param bool $enableInterviewRecording
     * @param bool $enableInterviewScreenRecording
     * @param bool $isSurveyIntegratedToFusion
     * @param bool $isSurveyPoll
     * @param string $dialMode
     * @param bool $enableSchedulingForWebInterviewing
     * @param bool $htmlEncodePipingExpressions
     * @param bool $requireXssSafeInput
     * @param bool $enforceHttps
     * @param bool $enableCAS
     * @param bool $encryptSystemRequestParameters
     * @param bool $disableQIDRequestParameter
     * @param bool $panelistRegistrationSurvey
     * @param bool $isWebBasedSurvey
     * @param bool $customNavigationEnabled
     * @param bool $answerButtons
     * @param bool $labelClick
     * @param bool $radioButtons
     * @param bool $autoNext
     * @param bool $tabOnEnterKey
     * @param bool $gridErrorHighlight
     * @param bool $enableDragDropOnTouch
     * @param bool $overrideBrowserBack
     * @param bool $progressBar
     * @param bool $oneQuestionPerPage
     * @param bool $enablePerQuestionAnswersRandomization
     * @param bool $allowPostRequestsForRespondentLinks
     * @param bool $useDbEncryption
     * @param int $optimisticQuotaTimeout
     * @param bool $overrideOptimisticQuotaTimeout
     * @param bool $useChangeTracking
     * @param bool $hiddenInParticipation
     * @param string $build
     * @param string $description
     * @param string $logoFile
     * @param string $wI_Url
     * @param string $company
     * @param string $name
     * @param string $projectID
     * @param string $created
     * @param string $creator
     * @param string $approvalStateDateChanged_Str
     * @param string $masterProject
     * @param string $errorRecipient
     * @param string $lostPasswordSender
     * @param string $customNavigationStyle
     * @param string $answerImageDefaultRadioButton
     * @param string $answerImageOverRadioButton
     * @param string $answerImageSelectedRadioButton
     * @param string $answerImageDefaultCheckBox
     * @param string $answerImageOverCheckBox
     * @param string $answerImageSelectedCheckBox
     * @param \Confirmit\Authoring\ArrayType\ArrayOfInt $languages
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString $keyWords
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString8 $helpLinkTexts
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString9 $helpLinkUrls
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString10 $endLinkTexts
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString11 $endLinkUrls
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString12 $customNavigationOK
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString13 $customNavigationBack
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString14 $customNavigationNext
     * @param string $translationStatusRecipient
     * @param string $questionnaireReviewerStatusRecipient
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     * @param \Confirmit\Authoring\ArrayType\ArrayOfCustomResource $customResources
     * @param string $externalQuickTestKey
     * @param string $surveyParametersForTestInterView
     * @param string $externalTestKey
     * @param string $wI_LaunchDate
     * @param string $status
     * @param string $inlineSurveyOverlayOpacity
     * @param string $inlineSurveyWidth
     * @param string $inlineSurveyCookieName
     * @param string $surveyLayoutName
     * @param string $surveyLayoutId
     * @param string $bitStreamIndexes
     * @param string $enterprisePanelId
     */
    public function __construct($projectStartDate = null, $projectEndDate = null, $companyId = null, $createdDate = null, $timeStamp = null, $projectSourceType = null, $questionnaireReviewerDisplayAnswersScales = null, $answerImageHeightCheckBox = null, $answerImageWidthCheckBox = null, $answerImageHeightRadioButton = null, $answerImageWidthRadioButton = null, $translationBaseLang = null, $template = null, $panelTemplate = null, $currentQuestionnaireVersion = null, $questionnaireVersion = null, $invalidDataHandlingSettingsSpecified = null, $handlingOfUndefinedPrecodes = null, $handlingOfInvalidNumericData = null, $handlingOfOversizedTexts = null, $sqlServerId = null, $hasUploadedRespondents = null, $confirmit125_DBFormat_Support = null, $reusableDB_Support = null, $hasExternalData = null, $enforceVersion = null, $enforceUnicodeEncoding = null, $externalTestEnabled = null, $surveyLogicMode = null, $approvalState = null, $approvalState_Int = null, $projectSourceType_Int = null, $projectType_Int = null, $isStandardPanel = null, $use81WIGeneration = null, $testMode = null, $inlineSurveyEnabled = null, $inlineSurveyUseOverlay = null, $inlineSurveyFrequency = null, $hideBackgroundVariablesInTestMode = null, $hidePanelVariablesInTestMode = null, $hideHiddenVariablesInTestMode = null, $externalRespondents = null, $inlineSurveyCookie = null, $inlineSurveyCookie_Int = null, $inlineSurveyCookieExpiration = null, $newLayoutEnabled = null, $surveyLayoutIsEasyLayout = null, $displayPrecodesInCAPI = null, $displayPrecodesInCATI = null, $defaultLanguage = null, $customNavigationType = null, $reservedErrorArea = null, $setFirstControlFocus = null, $backButton = null, $capiBackButton = null, $continueLink = null, $allowModify = null, $allowModifyComplete = null, $frameBreaker = null, $answerImageEnabled = null, $popup = null, $doNotCreateDatabaseRowOnInitialRequest = null, $singleSignOn = null, $singleSignOnFallback = null, $onlyUserId = null, $surveyLinkExpiryEnabled = null, $enableShortUrls = null, $quotaVersion = null, $disablePrecodeCheck = null, $accessibility508 = null, $errorPrefix = null, $otherLabel = null, $showDeleted = null, $answerRequired = null, $exclusivity = null, $otherSpecify = null, $rankOrder = null, $limitedSurvey = null, $capiLimitedSurvey = null, $loginPage = null, $isOffline = null, $isCapiBasedSurvey = null, $isCatiBasedSurvey = null, $isTouchPhoneSurvey = null, $isGenericPhoneSurvey = null, $enableOpenedReviewRecording = null, $supportTelephoneBlacklist = null, $enableInterviewRecording = null, $enableInterviewScreenRecording = null, $isSurveyIntegratedToFusion = null, $isSurveyPoll = null, $dialMode = null, $enableSchedulingForWebInterviewing = null, $htmlEncodePipingExpressions = null, $requireXssSafeInput = null, $enforceHttps = null, $enableCAS = null, $encryptSystemRequestParameters = null, $disableQIDRequestParameter = null, $panelistRegistrationSurvey = null, $isWebBasedSurvey = null, $customNavigationEnabled = null, $answerButtons = null, $labelClick = null, $radioButtons = null, $autoNext = null, $tabOnEnterKey = null, $gridErrorHighlight = null, $enableDragDropOnTouch = null, $overrideBrowserBack = null, $progressBar = null, $oneQuestionPerPage = null, $enablePerQuestionAnswersRandomization = null, $allowPostRequestsForRespondentLinks = null, $useDbEncryption = null, $optimisticQuotaTimeout = null, $overrideOptimisticQuotaTimeout = null, $useChangeTracking = null, $hiddenInParticipation = null, $build = null, $description = null, $logoFile = null, $wI_Url = null, $company = null, $name = null, $projectID = null, $created = null, $creator = null, $approvalStateDateChanged_Str = null, $masterProject = null, $errorRecipient = null, $lostPasswordSender = null, $customNavigationStyle = null, $answerImageDefaultRadioButton = null, $answerImageOverRadioButton = null, $answerImageSelectedRadioButton = null, $answerImageDefaultCheckBox = null, $answerImageOverCheckBox = null, $answerImageSelectedCheckBox = null, \Confirmit\Authoring\ArrayType\ArrayOfInt $languages = null, \Confirmit\Authoring\ArrayType\ArrayOfString $keyWords = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString8 $helpLinkTexts = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString9 $helpLinkUrls = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString10 $endLinkTexts = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString11 $endLinkUrls = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString12 $customNavigationOK = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString13 $customNavigationBack = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString14 $customNavigationNext = null, $translationStatusRecipient = null, $questionnaireReviewerStatusRecipient = null, \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null, \Confirmit\Authoring\ArrayType\ArrayOfCustomResource $customResources = null, $externalQuickTestKey = null, $surveyParametersForTestInterView = null, $externalTestKey = null, $wI_LaunchDate = null, $status = null, $inlineSurveyOverlayOpacity = null, $inlineSurveyWidth = null, $inlineSurveyCookieName = null, $surveyLayoutName = null, $surveyLayoutId = null, $bitStreamIndexes = null, $enterprisePanelId = null)
    {
        $this
            ->setProjectStartDate($projectStartDate)
            ->setProjectEndDate($projectEndDate)
            ->setCompanyId($companyId)
            ->setCreatedDate($createdDate)
            ->setTimeStamp($timeStamp)
            ->setProjectSourceType($projectSourceType)
            ->setQuestionnaireReviewerDisplayAnswersScales($questionnaireReviewerDisplayAnswersScales)
            ->setAnswerImageHeightCheckBox($answerImageHeightCheckBox)
            ->setAnswerImageWidthCheckBox($answerImageWidthCheckBox)
            ->setAnswerImageHeightRadioButton($answerImageHeightRadioButton)
            ->setAnswerImageWidthRadioButton($answerImageWidthRadioButton)
            ->setTranslationBaseLang($translationBaseLang)
            ->setTemplate($template)
            ->setPanelTemplate($panelTemplate)
            ->setCurrentQuestionnaireVersion($currentQuestionnaireVersion)
            ->setQuestionnaireVersion($questionnaireVersion)
            ->setInvalidDataHandlingSettingsSpecified($invalidDataHandlingSettingsSpecified)
            ->setHandlingOfUndefinedPrecodes($handlingOfUndefinedPrecodes)
            ->setHandlingOfInvalidNumericData($handlingOfInvalidNumericData)
            ->setHandlingOfOversizedTexts($handlingOfOversizedTexts)
            ->setSqlServerId($sqlServerId)
            ->setHasUploadedRespondents($hasUploadedRespondents)
            ->setConfirmit125_DBFormat_Support($confirmit125_DBFormat_Support)
            ->setReusableDB_Support($reusableDB_Support)
            ->setHasExternalData($hasExternalData)
            ->setEnforceVersion($enforceVersion)
            ->setEnforceUnicodeEncoding($enforceUnicodeEncoding)
            ->setExternalTestEnabled($externalTestEnabled)
            ->setSurveyLogicMode($surveyLogicMode)
            ->setApprovalState($approvalState)
            ->setApprovalState_Int($approvalState_Int)
            ->setProjectSourceType_Int($projectSourceType_Int)
            ->setProjectType_Int($projectType_Int)
            ->setIsStandardPanel($isStandardPanel)
            ->setUse81WIGeneration($use81WIGeneration)
            ->setTestMode($testMode)
            ->setInlineSurveyEnabled($inlineSurveyEnabled)
            ->setInlineSurveyUseOverlay($inlineSurveyUseOverlay)
            ->setInlineSurveyFrequency($inlineSurveyFrequency)
            ->setHideBackgroundVariablesInTestMode($hideBackgroundVariablesInTestMode)
            ->setHidePanelVariablesInTestMode($hidePanelVariablesInTestMode)
            ->setHideHiddenVariablesInTestMode($hideHiddenVariablesInTestMode)
            ->setExternalRespondents($externalRespondents)
            ->setInlineSurveyCookie($inlineSurveyCookie)
            ->setInlineSurveyCookie_Int($inlineSurveyCookie_Int)
            ->setInlineSurveyCookieExpiration($inlineSurveyCookieExpiration)
            ->setNewLayoutEnabled($newLayoutEnabled)
            ->setSurveyLayoutIsEasyLayout($surveyLayoutIsEasyLayout)
            ->setDisplayPrecodesInCAPI($displayPrecodesInCAPI)
            ->setDisplayPrecodesInCATI($displayPrecodesInCATI)
            ->setDefaultLanguage($defaultLanguage)
            ->setCustomNavigationType($customNavigationType)
            ->setReservedErrorArea($reservedErrorArea)
            ->setSetFirstControlFocus($setFirstControlFocus)
            ->setBackButton($backButton)
            ->setCapiBackButton($capiBackButton)
            ->setContinueLink($continueLink)
            ->setAllowModify($allowModify)
            ->setAllowModifyComplete($allowModifyComplete)
            ->setFrameBreaker($frameBreaker)
            ->setAnswerImageEnabled($answerImageEnabled)
            ->setPopup($popup)
            ->setDoNotCreateDatabaseRowOnInitialRequest($doNotCreateDatabaseRowOnInitialRequest)
            ->setSingleSignOn($singleSignOn)
            ->setSingleSignOnFallback($singleSignOnFallback)
            ->setOnlyUserId($onlyUserId)
            ->setSurveyLinkExpiryEnabled($surveyLinkExpiryEnabled)
            ->setEnableShortUrls($enableShortUrls)
            ->setQuotaVersion($quotaVersion)
            ->setDisablePrecodeCheck($disablePrecodeCheck)
            ->setAccessibility508($accessibility508)
            ->setErrorPrefix($errorPrefix)
            ->setOtherLabel($otherLabel)
            ->setShowDeleted($showDeleted)
            ->setAnswerRequired($answerRequired)
            ->setExclusivity($exclusivity)
            ->setOtherSpecify($otherSpecify)
            ->setRankOrder($rankOrder)
            ->setLimitedSurvey($limitedSurvey)
            ->setCapiLimitedSurvey($capiLimitedSurvey)
            ->setLoginPage($loginPage)
            ->setIsOffline($isOffline)
            ->setIsCapiBasedSurvey($isCapiBasedSurvey)
            ->setIsCatiBasedSurvey($isCatiBasedSurvey)
            ->setIsTouchPhoneSurvey($isTouchPhoneSurvey)
            ->setIsGenericPhoneSurvey($isGenericPhoneSurvey)
            ->setEnableOpenedReviewRecording($enableOpenedReviewRecording)
            ->setSupportTelephoneBlacklist($supportTelephoneBlacklist)
            ->setEnableInterviewRecording($enableInterviewRecording)
            ->setEnableInterviewScreenRecording($enableInterviewScreenRecording)
            ->setIsSurveyIntegratedToFusion($isSurveyIntegratedToFusion)
            ->setIsSurveyPoll($isSurveyPoll)
            ->setDialMode($dialMode)
            ->setEnableSchedulingForWebInterviewing($enableSchedulingForWebInterviewing)
            ->setHtmlEncodePipingExpressions($htmlEncodePipingExpressions)
            ->setRequireXssSafeInput($requireXssSafeInput)
            ->setEnforceHttps($enforceHttps)
            ->setEnableCAS($enableCAS)
            ->setEncryptSystemRequestParameters($encryptSystemRequestParameters)
            ->setDisableQIDRequestParameter($disableQIDRequestParameter)
            ->setPanelistRegistrationSurvey($panelistRegistrationSurvey)
            ->setIsWebBasedSurvey($isWebBasedSurvey)
            ->setCustomNavigationEnabled($customNavigationEnabled)
            ->setAnswerButtons($answerButtons)
            ->setLabelClick($labelClick)
            ->setRadioButtons($radioButtons)
            ->setAutoNext($autoNext)
            ->setTabOnEnterKey($tabOnEnterKey)
            ->setGridErrorHighlight($gridErrorHighlight)
            ->setEnableDragDropOnTouch($enableDragDropOnTouch)
            ->setOverrideBrowserBack($overrideBrowserBack)
            ->setProgressBar($progressBar)
            ->setOneQuestionPerPage($oneQuestionPerPage)
            ->setEnablePerQuestionAnswersRandomization($enablePerQuestionAnswersRandomization)
            ->setAllowPostRequestsForRespondentLinks($allowPostRequestsForRespondentLinks)
            ->setUseDbEncryption($useDbEncryption)
            ->setOptimisticQuotaTimeout($optimisticQuotaTimeout)
            ->setOverrideOptimisticQuotaTimeout($overrideOptimisticQuotaTimeout)
            ->setUseChangeTracking($useChangeTracking)
            ->setHiddenInParticipation($hiddenInParticipation)
            ->setBuild($build)
            ->setDescription($description)
            ->setLogoFile($logoFile)
            ->setWI_Url($wI_Url)
            ->setCompany($company)
            ->setName($name)
            ->setProjectID($projectID)
            ->setCreated($created)
            ->setCreator($creator)
            ->setApprovalStateDateChanged_Str($approvalStateDateChanged_Str)
            ->setMasterProject($masterProject)
            ->setErrorRecipient($errorRecipient)
            ->setLostPasswordSender($lostPasswordSender)
            ->setCustomNavigationStyle($customNavigationStyle)
            ->setAnswerImageDefaultRadioButton($answerImageDefaultRadioButton)
            ->setAnswerImageOverRadioButton($answerImageOverRadioButton)
            ->setAnswerImageSelectedRadioButton($answerImageSelectedRadioButton)
            ->setAnswerImageDefaultCheckBox($answerImageDefaultCheckBox)
            ->setAnswerImageOverCheckBox($answerImageOverCheckBox)
            ->setAnswerImageSelectedCheckBox($answerImageSelectedCheckBox)
            ->setLanguages($languages)
            ->setKeyWords($keyWords)
            ->setTitles($titles)
            ->setHelpLinkTexts($helpLinkTexts)
            ->setHelpLinkUrls($helpLinkUrls)
            ->setEndLinkTexts($endLinkTexts)
            ->setEndLinkUrls($endLinkUrls)
            ->setCustomNavigationOK($customNavigationOK)
            ->setCustomNavigationBack($customNavigationBack)
            ->setCustomNavigationNext($customNavigationNext)
            ->setTranslationStatusRecipient($translationStatusRecipient)
            ->setQuestionnaireReviewerStatusRecipient($questionnaireReviewerStatusRecipient)
            ->setTranslationStatuses($translationStatuses)
            ->setCustomResources($customResources)
            ->setExternalQuickTestKey($externalQuickTestKey)
            ->setSurveyParametersForTestInterView($surveyParametersForTestInterView)
            ->setExternalTestKey($externalTestKey)
            ->setWI_LaunchDate($wI_LaunchDate)
            ->setStatus($status)
            ->setInlineSurveyOverlayOpacity($inlineSurveyOverlayOpacity)
            ->setInlineSurveyWidth($inlineSurveyWidth)
            ->setInlineSurveyCookieName($inlineSurveyCookieName)
            ->setSurveyLayoutName($surveyLayoutName)
            ->setSurveyLayoutId($surveyLayoutId)
            ->setBitStreamIndexes($bitStreamIndexes)
            ->setEnterprisePanelId($enterprisePanelId);
    }
    /**
     * Get ProjectStartDate value
     * @return string
     */
    public function getProjectStartDate()
    {
        return $this->ProjectStartDate;
    }
    /**
     * Set ProjectStartDate value
     * @param string $projectStartDate
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setProjectStartDate($projectStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($projectStartDate) && !is_string($projectStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projectStartDate)), __LINE__);
        }
        $this->ProjectStartDate = $projectStartDate;
        return $this;
    }
    /**
     * Get ProjectEndDate value
     * @return string
     */
    public function getProjectEndDate()
    {
        return $this->ProjectEndDate;
    }
    /**
     * Set ProjectEndDate value
     * @param string $projectEndDate
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setProjectEndDate($projectEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($projectEndDate) && !is_string($projectEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projectEndDate)), __LINE__);
        }
        $this->ProjectEndDate = $projectEndDate;
        return $this;
    }
    /**
     * Get CompanyId value
     * @return int
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }
    /**
     * Set CompanyId value
     * @param int $companyId
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCompanyId($companyId = null)
    {
        // validation for constraint: int
        if (!is_null($companyId) && !is_numeric($companyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($companyId)), __LINE__);
        }
        $this->CompanyId = $companyId;
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCreatedDate($createdDate = null)
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;
        return $this;
    }
    /**
     * Get TimeStamp value
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get ProjectSourceType value
     * @return string
     */
    public function getProjectSourceType()
    {
        return $this->ProjectSourceType;
    }
    /**
     * Set ProjectSourceType value
     * @uses \Confirmit\Authoring\EnumType\ConfirmitProjectSourceType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\ConfirmitProjectSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $projectSourceType
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setProjectSourceType($projectSourceType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\ConfirmitProjectSourceType::valueIsValid($projectSourceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $projectSourceType, implode(', ', \Confirmit\Authoring\EnumType\ConfirmitProjectSourceType::getValidValues())), __LINE__);
        }
        $this->ProjectSourceType = $projectSourceType;
        return $this;
    }
    /**
     * Get QuestionnaireReviewerDisplayAnswersScales value
     * @return bool
     */
    public function getQuestionnaireReviewerDisplayAnswersScales()
    {
        return $this->QuestionnaireReviewerDisplayAnswersScales;
    }
    /**
     * Set QuestionnaireReviewerDisplayAnswersScales value
     * @param bool $questionnaireReviewerDisplayAnswersScales
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setQuestionnaireReviewerDisplayAnswersScales($questionnaireReviewerDisplayAnswersScales = null)
    {
        // validation for constraint: boolean
        if (!is_null($questionnaireReviewerDisplayAnswersScales) && !is_bool($questionnaireReviewerDisplayAnswersScales)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($questionnaireReviewerDisplayAnswersScales)), __LINE__);
        }
        $this->QuestionnaireReviewerDisplayAnswersScales = $questionnaireReviewerDisplayAnswersScales;
        return $this;
    }
    /**
     * Get AnswerImageHeightCheckBox value
     * @return int
     */
    public function getAnswerImageHeightCheckBox()
    {
        return $this->AnswerImageHeightCheckBox;
    }
    /**
     * Set AnswerImageHeightCheckBox value
     * @param int $answerImageHeightCheckBox
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageHeightCheckBox($answerImageHeightCheckBox = null)
    {
        // validation for constraint: int
        if (!is_null($answerImageHeightCheckBox) && !is_numeric($answerImageHeightCheckBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($answerImageHeightCheckBox)), __LINE__);
        }
        $this->AnswerImageHeightCheckBox = $answerImageHeightCheckBox;
        return $this;
    }
    /**
     * Get AnswerImageWidthCheckBox value
     * @return int
     */
    public function getAnswerImageWidthCheckBox()
    {
        return $this->AnswerImageWidthCheckBox;
    }
    /**
     * Set AnswerImageWidthCheckBox value
     * @param int $answerImageWidthCheckBox
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageWidthCheckBox($answerImageWidthCheckBox = null)
    {
        // validation for constraint: int
        if (!is_null($answerImageWidthCheckBox) && !is_numeric($answerImageWidthCheckBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($answerImageWidthCheckBox)), __LINE__);
        }
        $this->AnswerImageWidthCheckBox = $answerImageWidthCheckBox;
        return $this;
    }
    /**
     * Get AnswerImageHeightRadioButton value
     * @return int
     */
    public function getAnswerImageHeightRadioButton()
    {
        return $this->AnswerImageHeightRadioButton;
    }
    /**
     * Set AnswerImageHeightRadioButton value
     * @param int $answerImageHeightRadioButton
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageHeightRadioButton($answerImageHeightRadioButton = null)
    {
        // validation for constraint: int
        if (!is_null($answerImageHeightRadioButton) && !is_numeric($answerImageHeightRadioButton)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($answerImageHeightRadioButton)), __LINE__);
        }
        $this->AnswerImageHeightRadioButton = $answerImageHeightRadioButton;
        return $this;
    }
    /**
     * Get AnswerImageWidthRadioButton value
     * @return int
     */
    public function getAnswerImageWidthRadioButton()
    {
        return $this->AnswerImageWidthRadioButton;
    }
    /**
     * Set AnswerImageWidthRadioButton value
     * @param int $answerImageWidthRadioButton
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageWidthRadioButton($answerImageWidthRadioButton = null)
    {
        // validation for constraint: int
        if (!is_null($answerImageWidthRadioButton) && !is_numeric($answerImageWidthRadioButton)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($answerImageWidthRadioButton)), __LINE__);
        }
        $this->AnswerImageWidthRadioButton = $answerImageWidthRadioButton;
        return $this;
    }
    /**
     * Get TranslationBaseLang value
     * @return int
     */
    public function getTranslationBaseLang()
    {
        return $this->TranslationBaseLang;
    }
    /**
     * Set TranslationBaseLang value
     * @param int $translationBaseLang
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setTranslationBaseLang($translationBaseLang = null)
    {
        // validation for constraint: int
        if (!is_null($translationBaseLang) && !is_numeric($translationBaseLang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($translationBaseLang)), __LINE__);
        }
        $this->TranslationBaseLang = $translationBaseLang;
        return $this;
    }
    /**
     * Get Template value
     * @return int
     */
    public function getTemplate()
    {
        return $this->Template;
    }
    /**
     * Set Template value
     * @param int $template
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setTemplate($template = null)
    {
        // validation for constraint: int
        if (!is_null($template) && !is_numeric($template)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($template)), __LINE__);
        }
        $this->Template = $template;
        return $this;
    }
    /**
     * Get PanelTemplate value
     * @return int
     */
    public function getPanelTemplate()
    {
        return $this->PanelTemplate;
    }
    /**
     * Set PanelTemplate value
     * @param int $panelTemplate
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setPanelTemplate($panelTemplate = null)
    {
        // validation for constraint: int
        if (!is_null($panelTemplate) && !is_numeric($panelTemplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($panelTemplate)), __LINE__);
        }
        $this->PanelTemplate = $panelTemplate;
        return $this;
    }
    /**
     * Get CurrentQuestionnaireVersion value
     * @return int
     */
    public function getCurrentQuestionnaireVersion()
    {
        return $this->CurrentQuestionnaireVersion;
    }
    /**
     * Set CurrentQuestionnaireVersion value
     * @param int $currentQuestionnaireVersion
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCurrentQuestionnaireVersion($currentQuestionnaireVersion = null)
    {
        // validation for constraint: int
        if (!is_null($currentQuestionnaireVersion) && !is_numeric($currentQuestionnaireVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($currentQuestionnaireVersion)), __LINE__);
        }
        $this->CurrentQuestionnaireVersion = $currentQuestionnaireVersion;
        return $this;
    }
    /**
     * Get QuestionnaireVersion value
     * @return int
     */
    public function getQuestionnaireVersion()
    {
        return $this->QuestionnaireVersion;
    }
    /**
     * Set QuestionnaireVersion value
     * @param int $questionnaireVersion
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setQuestionnaireVersion($questionnaireVersion = null)
    {
        // validation for constraint: int
        if (!is_null($questionnaireVersion) && !is_numeric($questionnaireVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($questionnaireVersion)), __LINE__);
        }
        $this->QuestionnaireVersion = $questionnaireVersion;
        return $this;
    }
    /**
     * Get InvalidDataHandlingSettingsSpecified value
     * @return bool
     */
    public function getInvalidDataHandlingSettingsSpecified()
    {
        return $this->InvalidDataHandlingSettingsSpecified;
    }
    /**
     * Set InvalidDataHandlingSettingsSpecified value
     * @param bool $invalidDataHandlingSettingsSpecified
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInvalidDataHandlingSettingsSpecified($invalidDataHandlingSettingsSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($invalidDataHandlingSettingsSpecified) && !is_bool($invalidDataHandlingSettingsSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($invalidDataHandlingSettingsSpecified)), __LINE__);
        }
        $this->InvalidDataHandlingSettingsSpecified = $invalidDataHandlingSettingsSpecified;
        return $this;
    }
    /**
     * Get HandlingOfUndefinedPrecodes value
     * @return string
     */
    public function getHandlingOfUndefinedPrecodes()
    {
        return $this->HandlingOfUndefinedPrecodes;
    }
    /**
     * Set HandlingOfUndefinedPrecodes value
     * @uses \Confirmit\Authoring\EnumType\HandlingOfUndefinedPrecodes::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\HandlingOfUndefinedPrecodes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $handlingOfUndefinedPrecodes
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHandlingOfUndefinedPrecodes($handlingOfUndefinedPrecodes = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\HandlingOfUndefinedPrecodes::valueIsValid($handlingOfUndefinedPrecodes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $handlingOfUndefinedPrecodes, implode(', ', \Confirmit\Authoring\EnumType\HandlingOfUndefinedPrecodes::getValidValues())), __LINE__);
        }
        $this->HandlingOfUndefinedPrecodes = $handlingOfUndefinedPrecodes;
        return $this;
    }
    /**
     * Get HandlingOfInvalidNumericData value
     * @return string
     */
    public function getHandlingOfInvalidNumericData()
    {
        return $this->HandlingOfInvalidNumericData;
    }
    /**
     * Set HandlingOfInvalidNumericData value
     * @uses \Confirmit\Authoring\EnumType\HandlingOfInvalidNumericData::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\HandlingOfInvalidNumericData::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $handlingOfInvalidNumericData
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHandlingOfInvalidNumericData($handlingOfInvalidNumericData = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\HandlingOfInvalidNumericData::valueIsValid($handlingOfInvalidNumericData)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $handlingOfInvalidNumericData, implode(', ', \Confirmit\Authoring\EnumType\HandlingOfInvalidNumericData::getValidValues())), __LINE__);
        }
        $this->HandlingOfInvalidNumericData = $handlingOfInvalidNumericData;
        return $this;
    }
    /**
     * Get HandlingOfOversizedTexts value
     * @return string
     */
    public function getHandlingOfOversizedTexts()
    {
        return $this->HandlingOfOversizedTexts;
    }
    /**
     * Set HandlingOfOversizedTexts value
     * @uses \Confirmit\Authoring\EnumType\HandlingOfOversizedTexts::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\HandlingOfOversizedTexts::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $handlingOfOversizedTexts
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHandlingOfOversizedTexts($handlingOfOversizedTexts = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\HandlingOfOversizedTexts::valueIsValid($handlingOfOversizedTexts)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $handlingOfOversizedTexts, implode(', ', \Confirmit\Authoring\EnumType\HandlingOfOversizedTexts::getValidValues())), __LINE__);
        }
        $this->HandlingOfOversizedTexts = $handlingOfOversizedTexts;
        return $this;
    }
    /**
     * Get SqlServerId value
     * @return int
     */
    public function getSqlServerId()
    {
        return $this->SqlServerId;
    }
    /**
     * Set SqlServerId value
     * @param int $sqlServerId
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSqlServerId($sqlServerId = null)
    {
        // validation for constraint: int
        if (!is_null($sqlServerId) && !is_numeric($sqlServerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sqlServerId)), __LINE__);
        }
        $this->SqlServerId = $sqlServerId;
        return $this;
    }
    /**
     * Get HasUploadedRespondents value
     * @return bool
     */
    public function getHasUploadedRespondents()
    {
        return $this->HasUploadedRespondents;
    }
    /**
     * Set HasUploadedRespondents value
     * @param bool $hasUploadedRespondents
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHasUploadedRespondents($hasUploadedRespondents = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasUploadedRespondents) && !is_bool($hasUploadedRespondents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasUploadedRespondents)), __LINE__);
        }
        $this->HasUploadedRespondents = $hasUploadedRespondents;
        return $this;
    }
    /**
     * Get Confirmit125_DBFormat_Support value
     * @return bool
     */
    public function getConfirmit125_DBFormat_Support()
    {
        return $this->Confirmit125_DBFormat_Support;
    }
    /**
     * Set Confirmit125_DBFormat_Support value
     * @param bool $confirmit125_DBFormat_Support
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setConfirmit125_DBFormat_Support($confirmit125_DBFormat_Support = null)
    {
        // validation for constraint: boolean
        if (!is_null($confirmit125_DBFormat_Support) && !is_bool($confirmit125_DBFormat_Support)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($confirmit125_DBFormat_Support)), __LINE__);
        }
        $this->Confirmit125_DBFormat_Support = $confirmit125_DBFormat_Support;
        return $this;
    }
    /**
     * Get ReusableDB_Support value
     * @return bool
     */
    public function getReusableDB_Support()
    {
        return $this->ReusableDB_Support;
    }
    /**
     * Set ReusableDB_Support value
     * @param bool $reusableDB_Support
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setReusableDB_Support($reusableDB_Support = null)
    {
        // validation for constraint: boolean
        if (!is_null($reusableDB_Support) && !is_bool($reusableDB_Support)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reusableDB_Support)), __LINE__);
        }
        $this->ReusableDB_Support = $reusableDB_Support;
        return $this;
    }
    /**
     * Get HasExternalData value
     * @return bool
     */
    public function getHasExternalData()
    {
        return $this->HasExternalData;
    }
    /**
     * Set HasExternalData value
     * @param bool $hasExternalData
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHasExternalData($hasExternalData = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasExternalData) && !is_bool($hasExternalData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasExternalData)), __LINE__);
        }
        $this->HasExternalData = $hasExternalData;
        return $this;
    }
    /**
     * Get EnforceVersion value
     * @return bool
     */
    public function getEnforceVersion()
    {
        return $this->EnforceVersion;
    }
    /**
     * Set EnforceVersion value
     * @param bool $enforceVersion
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnforceVersion($enforceVersion = null)
    {
        // validation for constraint: boolean
        if (!is_null($enforceVersion) && !is_bool($enforceVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enforceVersion)), __LINE__);
        }
        $this->EnforceVersion = $enforceVersion;
        return $this;
    }
    /**
     * Get EnforceUnicodeEncoding value
     * @return bool
     */
    public function getEnforceUnicodeEncoding()
    {
        return $this->EnforceUnicodeEncoding;
    }
    /**
     * Set EnforceUnicodeEncoding value
     * @param bool $enforceUnicodeEncoding
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnforceUnicodeEncoding($enforceUnicodeEncoding = null)
    {
        // validation for constraint: boolean
        if (!is_null($enforceUnicodeEncoding) && !is_bool($enforceUnicodeEncoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enforceUnicodeEncoding)), __LINE__);
        }
        $this->EnforceUnicodeEncoding = $enforceUnicodeEncoding;
        return $this;
    }
    /**
     * Get ExternalTestEnabled value
     * @return bool
     */
    public function getExternalTestEnabled()
    {
        return $this->ExternalTestEnabled;
    }
    /**
     * Set ExternalTestEnabled value
     * @param bool $externalTestEnabled
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setExternalTestEnabled($externalTestEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($externalTestEnabled) && !is_bool($externalTestEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($externalTestEnabled)), __LINE__);
        }
        $this->ExternalTestEnabled = $externalTestEnabled;
        return $this;
    }
    /**
     * Get SurveyLogicMode value
     * @return string
     */
    public function getSurveyLogicMode()
    {
        return $this->SurveyLogicMode;
    }
    /**
     * Set SurveyLogicMode value
     * @uses \Confirmit\Authoring\EnumType\SurveyLogicModeType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SurveyLogicModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $surveyLogicMode
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSurveyLogicMode($surveyLogicMode = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SurveyLogicModeType::valueIsValid($surveyLogicMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $surveyLogicMode, implode(', ', \Confirmit\Authoring\EnumType\SurveyLogicModeType::getValidValues())), __LINE__);
        }
        $this->SurveyLogicMode = $surveyLogicMode;
        return $this;
    }
    /**
     * Get ApprovalState value
     * @return string
     */
    public function getApprovalState()
    {
        return $this->ApprovalState;
    }
    /**
     * Set ApprovalState value
     * @uses \Confirmit\Authoring\EnumType\SurveyApprovalState::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SurveyApprovalState::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $approvalState
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setApprovalState($approvalState = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SurveyApprovalState::valueIsValid($approvalState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $approvalState, implode(', ', \Confirmit\Authoring\EnumType\SurveyApprovalState::getValidValues())), __LINE__);
        }
        $this->ApprovalState = $approvalState;
        return $this;
    }
    /**
     * Get ApprovalState_Int value
     * @return int
     */
    public function getApprovalState_Int()
    {
        return $this->ApprovalState_Int;
    }
    /**
     * Set ApprovalState_Int value
     * @param int $approvalState_Int
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setApprovalState_Int($approvalState_Int = null)
    {
        // validation for constraint: int
        if (!is_null($approvalState_Int) && !is_numeric($approvalState_Int)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($approvalState_Int)), __LINE__);
        }
        $this->ApprovalState_Int = $approvalState_Int;
        return $this;
    }
    /**
     * Get ProjectSourceType_Int value
     * @return int
     */
    public function getProjectSourceType_Int()
    {
        return $this->ProjectSourceType_Int;
    }
    /**
     * Set ProjectSourceType_Int value
     * @param int $projectSourceType_Int
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setProjectSourceType_Int($projectSourceType_Int = null)
    {
        // validation for constraint: int
        if (!is_null($projectSourceType_Int) && !is_numeric($projectSourceType_Int)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($projectSourceType_Int)), __LINE__);
        }
        $this->ProjectSourceType_Int = $projectSourceType_Int;
        return $this;
    }
    /**
     * Get ProjectType_Int value
     * @return int
     */
    public function getProjectType_Int()
    {
        return $this->ProjectType_Int;
    }
    /**
     * Set ProjectType_Int value
     * @param int $projectType_Int
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setProjectType_Int($projectType_Int = null)
    {
        // validation for constraint: int
        if (!is_null($projectType_Int) && !is_numeric($projectType_Int)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($projectType_Int)), __LINE__);
        }
        $this->ProjectType_Int = $projectType_Int;
        return $this;
    }
    /**
     * Get IsStandardPanel value
     * @return bool
     */
    public function getIsStandardPanel()
    {
        return $this->IsStandardPanel;
    }
    /**
     * Set IsStandardPanel value
     * @param bool $isStandardPanel
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsStandardPanel($isStandardPanel = null)
    {
        // validation for constraint: boolean
        if (!is_null($isStandardPanel) && !is_bool($isStandardPanel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isStandardPanel)), __LINE__);
        }
        $this->IsStandardPanel = $isStandardPanel;
        return $this;
    }
    /**
     * Get Use81WIGeneration value
     * @return bool
     */
    public function getUse81WIGeneration()
    {
        return $this->Use81WIGeneration;
    }
    /**
     * Set Use81WIGeneration value
     * @param bool $use81WIGeneration
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setUse81WIGeneration($use81WIGeneration = null)
    {
        // validation for constraint: boolean
        if (!is_null($use81WIGeneration) && !is_bool($use81WIGeneration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($use81WIGeneration)), __LINE__);
        }
        $this->Use81WIGeneration = $use81WIGeneration;
        return $this;
    }
    /**
     * Get TestMode value
     * @return bool
     */
    public function getTestMode()
    {
        return $this->TestMode;
    }
    /**
     * Set TestMode value
     * @param bool $testMode
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setTestMode($testMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($testMode) && !is_bool($testMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($testMode)), __LINE__);
        }
        $this->TestMode = $testMode;
        return $this;
    }
    /**
     * Get InlineSurveyEnabled value
     * @return bool
     */
    public function getInlineSurveyEnabled()
    {
        return $this->InlineSurveyEnabled;
    }
    /**
     * Set InlineSurveyEnabled value
     * @param bool $inlineSurveyEnabled
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyEnabled($inlineSurveyEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($inlineSurveyEnabled) && !is_bool($inlineSurveyEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($inlineSurveyEnabled)), __LINE__);
        }
        $this->InlineSurveyEnabled = $inlineSurveyEnabled;
        return $this;
    }
    /**
     * Get InlineSurveyUseOverlay value
     * @return bool
     */
    public function getInlineSurveyUseOverlay()
    {
        return $this->InlineSurveyUseOverlay;
    }
    /**
     * Set InlineSurveyUseOverlay value
     * @param bool $inlineSurveyUseOverlay
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyUseOverlay($inlineSurveyUseOverlay = null)
    {
        // validation for constraint: boolean
        if (!is_null($inlineSurveyUseOverlay) && !is_bool($inlineSurveyUseOverlay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($inlineSurveyUseOverlay)), __LINE__);
        }
        $this->InlineSurveyUseOverlay = $inlineSurveyUseOverlay;
        return $this;
    }
    /**
     * Get InlineSurveyFrequency value
     * @return int
     */
    public function getInlineSurveyFrequency()
    {
        return $this->InlineSurveyFrequency;
    }
    /**
     * Set InlineSurveyFrequency value
     * @param int $inlineSurveyFrequency
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyFrequency($inlineSurveyFrequency = null)
    {
        // validation for constraint: int
        if (!is_null($inlineSurveyFrequency) && !is_numeric($inlineSurveyFrequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($inlineSurveyFrequency)), __LINE__);
        }
        $this->InlineSurveyFrequency = $inlineSurveyFrequency;
        return $this;
    }
    /**
     * Get HideBackgroundVariablesInTestMode value
     * @return bool
     */
    public function getHideBackgroundVariablesInTestMode()
    {
        return $this->HideBackgroundVariablesInTestMode;
    }
    /**
     * Set HideBackgroundVariablesInTestMode value
     * @param bool $hideBackgroundVariablesInTestMode
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHideBackgroundVariablesInTestMode($hideBackgroundVariablesInTestMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideBackgroundVariablesInTestMode) && !is_bool($hideBackgroundVariablesInTestMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hideBackgroundVariablesInTestMode)), __LINE__);
        }
        $this->HideBackgroundVariablesInTestMode = $hideBackgroundVariablesInTestMode;
        return $this;
    }
    /**
     * Get HidePanelVariablesInTestMode value
     * @return bool
     */
    public function getHidePanelVariablesInTestMode()
    {
        return $this->HidePanelVariablesInTestMode;
    }
    /**
     * Set HidePanelVariablesInTestMode value
     * @param bool $hidePanelVariablesInTestMode
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHidePanelVariablesInTestMode($hidePanelVariablesInTestMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($hidePanelVariablesInTestMode) && !is_bool($hidePanelVariablesInTestMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hidePanelVariablesInTestMode)), __LINE__);
        }
        $this->HidePanelVariablesInTestMode = $hidePanelVariablesInTestMode;
        return $this;
    }
    /**
     * Get HideHiddenVariablesInTestMode value
     * @return bool
     */
    public function getHideHiddenVariablesInTestMode()
    {
        return $this->HideHiddenVariablesInTestMode;
    }
    /**
     * Set HideHiddenVariablesInTestMode value
     * @param bool $hideHiddenVariablesInTestMode
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHideHiddenVariablesInTestMode($hideHiddenVariablesInTestMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideHiddenVariablesInTestMode) && !is_bool($hideHiddenVariablesInTestMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hideHiddenVariablesInTestMode)), __LINE__);
        }
        $this->HideHiddenVariablesInTestMode = $hideHiddenVariablesInTestMode;
        return $this;
    }
    /**
     * Get ExternalRespondents value
     * @return bool
     */
    public function getExternalRespondents()
    {
        return $this->ExternalRespondents;
    }
    /**
     * Set ExternalRespondents value
     * @param bool $externalRespondents
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setExternalRespondents($externalRespondents = null)
    {
        // validation for constraint: boolean
        if (!is_null($externalRespondents) && !is_bool($externalRespondents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($externalRespondents)), __LINE__);
        }
        $this->ExternalRespondents = $externalRespondents;
        return $this;
    }
    /**
     * Get InlineSurveyCookie value
     * @return string
     */
    public function getInlineSurveyCookie()
    {
        return $this->InlineSurveyCookie;
    }
    /**
     * Set InlineSurveyCookie value
     * @uses \Confirmit\Authoring\EnumType\InlineSurveyCookieType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\InlineSurveyCookieType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inlineSurveyCookie
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyCookie($inlineSurveyCookie = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\InlineSurveyCookieType::valueIsValid($inlineSurveyCookie)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $inlineSurveyCookie, implode(', ', \Confirmit\Authoring\EnumType\InlineSurveyCookieType::getValidValues())), __LINE__);
        }
        $this->InlineSurveyCookie = $inlineSurveyCookie;
        return $this;
    }
    /**
     * Get InlineSurveyCookie_Int value
     * @return int
     */
    public function getInlineSurveyCookie_Int()
    {
        return $this->InlineSurveyCookie_Int;
    }
    /**
     * Set InlineSurveyCookie_Int value
     * @param int $inlineSurveyCookie_Int
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyCookie_Int($inlineSurveyCookie_Int = null)
    {
        // validation for constraint: int
        if (!is_null($inlineSurveyCookie_Int) && !is_numeric($inlineSurveyCookie_Int)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($inlineSurveyCookie_Int)), __LINE__);
        }
        $this->InlineSurveyCookie_Int = $inlineSurveyCookie_Int;
        return $this;
    }
    /**
     * Get InlineSurveyCookieExpiration value
     * @return int
     */
    public function getInlineSurveyCookieExpiration()
    {
        return $this->InlineSurveyCookieExpiration;
    }
    /**
     * Set InlineSurveyCookieExpiration value
     * @param int $inlineSurveyCookieExpiration
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyCookieExpiration($inlineSurveyCookieExpiration = null)
    {
        // validation for constraint: int
        if (!is_null($inlineSurveyCookieExpiration) && !is_numeric($inlineSurveyCookieExpiration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($inlineSurveyCookieExpiration)), __LINE__);
        }
        $this->InlineSurveyCookieExpiration = $inlineSurveyCookieExpiration;
        return $this;
    }
    /**
     * Get NewLayoutEnabled value
     * @return bool
     */
    public function getNewLayoutEnabled()
    {
        return $this->NewLayoutEnabled;
    }
    /**
     * Set NewLayoutEnabled value
     * @param bool $newLayoutEnabled
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setNewLayoutEnabled($newLayoutEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($newLayoutEnabled) && !is_bool($newLayoutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($newLayoutEnabled)), __LINE__);
        }
        $this->NewLayoutEnabled = $newLayoutEnabled;
        return $this;
    }
    /**
     * Get SurveyLayoutIsEasyLayout value
     * @return bool
     */
    public function getSurveyLayoutIsEasyLayout()
    {
        return $this->SurveyLayoutIsEasyLayout;
    }
    /**
     * Set SurveyLayoutIsEasyLayout value
     * @param bool $surveyLayoutIsEasyLayout
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSurveyLayoutIsEasyLayout($surveyLayoutIsEasyLayout = null)
    {
        // validation for constraint: boolean
        if (!is_null($surveyLayoutIsEasyLayout) && !is_bool($surveyLayoutIsEasyLayout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($surveyLayoutIsEasyLayout)), __LINE__);
        }
        $this->SurveyLayoutIsEasyLayout = $surveyLayoutIsEasyLayout;
        return $this;
    }
    /**
     * Get DisplayPrecodesInCAPI value
     * @return bool
     */
    public function getDisplayPrecodesInCAPI()
    {
        return $this->DisplayPrecodesInCAPI;
    }
    /**
     * Set DisplayPrecodesInCAPI value
     * @param bool $displayPrecodesInCAPI
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setDisplayPrecodesInCAPI($displayPrecodesInCAPI = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayPrecodesInCAPI) && !is_bool($displayPrecodesInCAPI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayPrecodesInCAPI)), __LINE__);
        }
        $this->DisplayPrecodesInCAPI = $displayPrecodesInCAPI;
        return $this;
    }
    /**
     * Get DisplayPrecodesInCATI value
     * @return bool
     */
    public function getDisplayPrecodesInCATI()
    {
        return $this->DisplayPrecodesInCATI;
    }
    /**
     * Set DisplayPrecodesInCATI value
     * @param bool $displayPrecodesInCATI
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setDisplayPrecodesInCATI($displayPrecodesInCATI = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayPrecodesInCATI) && !is_bool($displayPrecodesInCATI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayPrecodesInCATI)), __LINE__);
        }
        $this->DisplayPrecodesInCATI = $displayPrecodesInCATI;
        return $this;
    }
    /**
     * Get DefaultLanguage value
     * @return int
     */
    public function getDefaultLanguage()
    {
        return $this->DefaultLanguage;
    }
    /**
     * Set DefaultLanguage value
     * @param int $defaultLanguage
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setDefaultLanguage($defaultLanguage = null)
    {
        // validation for constraint: int
        if (!is_null($defaultLanguage) && !is_numeric($defaultLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultLanguage)), __LINE__);
        }
        $this->DefaultLanguage = $defaultLanguage;
        return $this;
    }
    /**
     * Get CustomNavigationType value
     * @return string
     */
    public function getCustomNavigationType()
    {
        return $this->CustomNavigationType;
    }
    /**
     * Set CustomNavigationType value
     * @uses \Confirmit\Authoring\EnumType\CustomNavigationType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\CustomNavigationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customNavigationType
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCustomNavigationType($customNavigationType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\CustomNavigationType::valueIsValid($customNavigationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customNavigationType, implode(', ', \Confirmit\Authoring\EnumType\CustomNavigationType::getValidValues())), __LINE__);
        }
        $this->CustomNavigationType = $customNavigationType;
        return $this;
    }
    /**
     * Get ReservedErrorArea value
     * @return bool
     */
    public function getReservedErrorArea()
    {
        return $this->ReservedErrorArea;
    }
    /**
     * Set ReservedErrorArea value
     * @param bool $reservedErrorArea
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setReservedErrorArea($reservedErrorArea = null)
    {
        // validation for constraint: boolean
        if (!is_null($reservedErrorArea) && !is_bool($reservedErrorArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reservedErrorArea)), __LINE__);
        }
        $this->ReservedErrorArea = $reservedErrorArea;
        return $this;
    }
    /**
     * Get SetFirstControlFocus value
     * @return bool
     */
    public function getSetFirstControlFocus()
    {
        return $this->SetFirstControlFocus;
    }
    /**
     * Set SetFirstControlFocus value
     * @param bool $setFirstControlFocus
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSetFirstControlFocus($setFirstControlFocus = null)
    {
        // validation for constraint: boolean
        if (!is_null($setFirstControlFocus) && !is_bool($setFirstControlFocus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($setFirstControlFocus)), __LINE__);
        }
        $this->SetFirstControlFocus = $setFirstControlFocus;
        return $this;
    }
    /**
     * Get BackButton value
     * @return bool
     */
    public function getBackButton()
    {
        return $this->BackButton;
    }
    /**
     * Set BackButton value
     * @param bool $backButton
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setBackButton($backButton = null)
    {
        // validation for constraint: boolean
        if (!is_null($backButton) && !is_bool($backButton)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($backButton)), __LINE__);
        }
        $this->BackButton = $backButton;
        return $this;
    }
    /**
     * Get CapiBackButton value
     * @return bool
     */
    public function getCapiBackButton()
    {
        return $this->CapiBackButton;
    }
    /**
     * Set CapiBackButton value
     * @param bool $capiBackButton
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCapiBackButton($capiBackButton = null)
    {
        // validation for constraint: boolean
        if (!is_null($capiBackButton) && !is_bool($capiBackButton)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($capiBackButton)), __LINE__);
        }
        $this->CapiBackButton = $capiBackButton;
        return $this;
    }
    /**
     * Get ContinueLink value
     * @return bool
     */
    public function getContinueLink()
    {
        return $this->ContinueLink;
    }
    /**
     * Set ContinueLink value
     * @param bool $continueLink
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setContinueLink($continueLink = null)
    {
        // validation for constraint: boolean
        if (!is_null($continueLink) && !is_bool($continueLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($continueLink)), __LINE__);
        }
        $this->ContinueLink = $continueLink;
        return $this;
    }
    /**
     * Get AllowModify value
     * @return bool
     */
    public function getAllowModify()
    {
        return $this->AllowModify;
    }
    /**
     * Set AllowModify value
     * @param bool $allowModify
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAllowModify($allowModify = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowModify) && !is_bool($allowModify)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowModify)), __LINE__);
        }
        $this->AllowModify = $allowModify;
        return $this;
    }
    /**
     * Get AllowModifyComplete value
     * @return bool
     */
    public function getAllowModifyComplete()
    {
        return $this->AllowModifyComplete;
    }
    /**
     * Set AllowModifyComplete value
     * @param bool $allowModifyComplete
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAllowModifyComplete($allowModifyComplete = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowModifyComplete) && !is_bool($allowModifyComplete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowModifyComplete)), __LINE__);
        }
        $this->AllowModifyComplete = $allowModifyComplete;
        return $this;
    }
    /**
     * Get FrameBreaker value
     * @return bool
     */
    public function getFrameBreaker()
    {
        return $this->FrameBreaker;
    }
    /**
     * Set FrameBreaker value
     * @param bool $frameBreaker
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setFrameBreaker($frameBreaker = null)
    {
        // validation for constraint: boolean
        if (!is_null($frameBreaker) && !is_bool($frameBreaker)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($frameBreaker)), __LINE__);
        }
        $this->FrameBreaker = $frameBreaker;
        return $this;
    }
    /**
     * Get AnswerImageEnabled value
     * @return bool
     */
    public function getAnswerImageEnabled()
    {
        return $this->AnswerImageEnabled;
    }
    /**
     * Set AnswerImageEnabled value
     * @param bool $answerImageEnabled
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageEnabled($answerImageEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($answerImageEnabled) && !is_bool($answerImageEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($answerImageEnabled)), __LINE__);
        }
        $this->AnswerImageEnabled = $answerImageEnabled;
        return $this;
    }
    /**
     * Get Popup value
     * @return bool
     */
    public function getPopup()
    {
        return $this->Popup;
    }
    /**
     * Set Popup value
     * @param bool $popup
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setPopup($popup = null)
    {
        // validation for constraint: boolean
        if (!is_null($popup) && !is_bool($popup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($popup)), __LINE__);
        }
        $this->Popup = $popup;
        return $this;
    }
    /**
     * Get DoNotCreateDatabaseRowOnInitialRequest value
     * @return bool
     */
    public function getDoNotCreateDatabaseRowOnInitialRequest()
    {
        return $this->DoNotCreateDatabaseRowOnInitialRequest;
    }
    /**
     * Set DoNotCreateDatabaseRowOnInitialRequest value
     * @param bool $doNotCreateDatabaseRowOnInitialRequest
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setDoNotCreateDatabaseRowOnInitialRequest($doNotCreateDatabaseRowOnInitialRequest = null)
    {
        // validation for constraint: boolean
        if (!is_null($doNotCreateDatabaseRowOnInitialRequest) && !is_bool($doNotCreateDatabaseRowOnInitialRequest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($doNotCreateDatabaseRowOnInitialRequest)), __LINE__);
        }
        $this->DoNotCreateDatabaseRowOnInitialRequest = $doNotCreateDatabaseRowOnInitialRequest;
        return $this;
    }
    /**
     * Get SingleSignOn value
     * @return bool
     */
    public function getSingleSignOn()
    {
        return $this->SingleSignOn;
    }
    /**
     * Set SingleSignOn value
     * @param bool $singleSignOn
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSingleSignOn($singleSignOn = null)
    {
        // validation for constraint: boolean
        if (!is_null($singleSignOn) && !is_bool($singleSignOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($singleSignOn)), __LINE__);
        }
        $this->SingleSignOn = $singleSignOn;
        return $this;
    }
    /**
     * Get SingleSignOnFallback value
     * @return bool
     */
    public function getSingleSignOnFallback()
    {
        return $this->SingleSignOnFallback;
    }
    /**
     * Set SingleSignOnFallback value
     * @param bool $singleSignOnFallback
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSingleSignOnFallback($singleSignOnFallback = null)
    {
        // validation for constraint: boolean
        if (!is_null($singleSignOnFallback) && !is_bool($singleSignOnFallback)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($singleSignOnFallback)), __LINE__);
        }
        $this->SingleSignOnFallback = $singleSignOnFallback;
        return $this;
    }
    /**
     * Get OnlyUserId value
     * @return bool
     */
    public function getOnlyUserId()
    {
        return $this->OnlyUserId;
    }
    /**
     * Set OnlyUserId value
     * @param bool $onlyUserId
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setOnlyUserId($onlyUserId = null)
    {
        // validation for constraint: boolean
        if (!is_null($onlyUserId) && !is_bool($onlyUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($onlyUserId)), __LINE__);
        }
        $this->OnlyUserId = $onlyUserId;
        return $this;
    }
    /**
     * Get SurveyLinkExpiryEnabled value
     * @return bool
     */
    public function getSurveyLinkExpiryEnabled()
    {
        return $this->SurveyLinkExpiryEnabled;
    }
    /**
     * Set SurveyLinkExpiryEnabled value
     * @param bool $surveyLinkExpiryEnabled
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSurveyLinkExpiryEnabled($surveyLinkExpiryEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($surveyLinkExpiryEnabled) && !is_bool($surveyLinkExpiryEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($surveyLinkExpiryEnabled)), __LINE__);
        }
        $this->SurveyLinkExpiryEnabled = $surveyLinkExpiryEnabled;
        return $this;
    }
    /**
     * Get EnableShortUrls value
     * @return bool
     */
    public function getEnableShortUrls()
    {
        return $this->EnableShortUrls;
    }
    /**
     * Set EnableShortUrls value
     * @param bool $enableShortUrls
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnableShortUrls($enableShortUrls = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableShortUrls) && !is_bool($enableShortUrls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableShortUrls)), __LINE__);
        }
        $this->EnableShortUrls = $enableShortUrls;
        return $this;
    }
    /**
     * Get QuotaVersion value
     * @return int
     */
    public function getQuotaVersion()
    {
        return $this->QuotaVersion;
    }
    /**
     * Set QuotaVersion value
     * @param int $quotaVersion
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setQuotaVersion($quotaVersion = null)
    {
        // validation for constraint: int
        if (!is_null($quotaVersion) && !is_numeric($quotaVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quotaVersion)), __LINE__);
        }
        $this->QuotaVersion = $quotaVersion;
        return $this;
    }
    /**
     * Get DisablePrecodeCheck value
     * @return bool
     */
    public function getDisablePrecodeCheck()
    {
        return $this->DisablePrecodeCheck;
    }
    /**
     * Set DisablePrecodeCheck value
     * @param bool $disablePrecodeCheck
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setDisablePrecodeCheck($disablePrecodeCheck = null)
    {
        // validation for constraint: boolean
        if (!is_null($disablePrecodeCheck) && !is_bool($disablePrecodeCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disablePrecodeCheck)), __LINE__);
        }
        $this->DisablePrecodeCheck = $disablePrecodeCheck;
        return $this;
    }
    /**
     * Get Accessibility508 value
     * @return bool
     */
    public function getAccessibility508()
    {
        return $this->Accessibility508;
    }
    /**
     * Set Accessibility508 value
     * @param bool $accessibility508
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAccessibility508($accessibility508 = null)
    {
        // validation for constraint: boolean
        if (!is_null($accessibility508) && !is_bool($accessibility508)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($accessibility508)), __LINE__);
        }
        $this->Accessibility508 = $accessibility508;
        return $this;
    }
    /**
     * Get ErrorPrefix value
     * @return bool
     */
    public function getErrorPrefix()
    {
        return $this->ErrorPrefix;
    }
    /**
     * Set ErrorPrefix value
     * @param bool $errorPrefix
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setErrorPrefix($errorPrefix = null)
    {
        // validation for constraint: boolean
        if (!is_null($errorPrefix) && !is_bool($errorPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($errorPrefix)), __LINE__);
        }
        $this->ErrorPrefix = $errorPrefix;
        return $this;
    }
    /**
     * Get OtherLabel value
     * @return bool
     */
    public function getOtherLabel()
    {
        return $this->OtherLabel;
    }
    /**
     * Set OtherLabel value
     * @param bool $otherLabel
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setOtherLabel($otherLabel = null)
    {
        // validation for constraint: boolean
        if (!is_null($otherLabel) && !is_bool($otherLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($otherLabel)), __LINE__);
        }
        $this->OtherLabel = $otherLabel;
        return $this;
    }
    /**
     * Get ShowDeleted value
     * @return bool
     */
    public function getShowDeleted()
    {
        return $this->ShowDeleted;
    }
    /**
     * Set ShowDeleted value
     * @param bool $showDeleted
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setShowDeleted($showDeleted = null)
    {
        // validation for constraint: boolean
        if (!is_null($showDeleted) && !is_bool($showDeleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showDeleted)), __LINE__);
        }
        $this->ShowDeleted = $showDeleted;
        return $this;
    }
    /**
     * Get AnswerRequired value
     * @return bool
     */
    public function getAnswerRequired()
    {
        return $this->AnswerRequired;
    }
    /**
     * Set AnswerRequired value
     * @param bool $answerRequired
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerRequired($answerRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($answerRequired) && !is_bool($answerRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($answerRequired)), __LINE__);
        }
        $this->AnswerRequired = $answerRequired;
        return $this;
    }
    /**
     * Get Exclusivity value
     * @return bool
     */
    public function getExclusivity()
    {
        return $this->Exclusivity;
    }
    /**
     * Set Exclusivity value
     * @param bool $exclusivity
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setExclusivity($exclusivity = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclusivity) && !is_bool($exclusivity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exclusivity)), __LINE__);
        }
        $this->Exclusivity = $exclusivity;
        return $this;
    }
    /**
     * Get OtherSpecify value
     * @return bool
     */
    public function getOtherSpecify()
    {
        return $this->OtherSpecify;
    }
    /**
     * Set OtherSpecify value
     * @param bool $otherSpecify
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setOtherSpecify($otherSpecify = null)
    {
        // validation for constraint: boolean
        if (!is_null($otherSpecify) && !is_bool($otherSpecify)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($otherSpecify)), __LINE__);
        }
        $this->OtherSpecify = $otherSpecify;
        return $this;
    }
    /**
     * Get RankOrder value
     * @return bool
     */
    public function getRankOrder()
    {
        return $this->RankOrder;
    }
    /**
     * Set RankOrder value
     * @param bool $rankOrder
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setRankOrder($rankOrder = null)
    {
        // validation for constraint: boolean
        if (!is_null($rankOrder) && !is_bool($rankOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rankOrder)), __LINE__);
        }
        $this->RankOrder = $rankOrder;
        return $this;
    }
    /**
     * Get LimitedSurvey value
     * @return bool
     */
    public function getLimitedSurvey()
    {
        return $this->LimitedSurvey;
    }
    /**
     * Set LimitedSurvey value
     * @param bool $limitedSurvey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setLimitedSurvey($limitedSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($limitedSurvey) && !is_bool($limitedSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($limitedSurvey)), __LINE__);
        }
        $this->LimitedSurvey = $limitedSurvey;
        return $this;
    }
    /**
     * Get CapiLimitedSurvey value
     * @return bool
     */
    public function getCapiLimitedSurvey()
    {
        return $this->CapiLimitedSurvey;
    }
    /**
     * Set CapiLimitedSurvey value
     * @param bool $capiLimitedSurvey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCapiLimitedSurvey($capiLimitedSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($capiLimitedSurvey) && !is_bool($capiLimitedSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($capiLimitedSurvey)), __LINE__);
        }
        $this->CapiLimitedSurvey = $capiLimitedSurvey;
        return $this;
    }
    /**
     * Get LoginPage value
     * @return bool
     */
    public function getLoginPage()
    {
        return $this->LoginPage;
    }
    /**
     * Set LoginPage value
     * @param bool $loginPage
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setLoginPage($loginPage = null)
    {
        // validation for constraint: boolean
        if (!is_null($loginPage) && !is_bool($loginPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($loginPage)), __LINE__);
        }
        $this->LoginPage = $loginPage;
        return $this;
    }
    /**
     * Get IsOffline value
     * @return bool
     */
    public function getIsOffline()
    {
        return $this->IsOffline;
    }
    /**
     * Set IsOffline value
     * @param bool $isOffline
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsOffline($isOffline = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOffline) && !is_bool($isOffline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOffline)), __LINE__);
        }
        $this->IsOffline = $isOffline;
        return $this;
    }
    /**
     * Get IsCapiBasedSurvey value
     * @return bool
     */
    public function getIsCapiBasedSurvey()
    {
        return $this->IsCapiBasedSurvey;
    }
    /**
     * Set IsCapiBasedSurvey value
     * @param bool $isCapiBasedSurvey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsCapiBasedSurvey($isCapiBasedSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCapiBasedSurvey) && !is_bool($isCapiBasedSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCapiBasedSurvey)), __LINE__);
        }
        $this->IsCapiBasedSurvey = $isCapiBasedSurvey;
        return $this;
    }
    /**
     * Get IsCatiBasedSurvey value
     * @return bool
     */
    public function getIsCatiBasedSurvey()
    {
        return $this->IsCatiBasedSurvey;
    }
    /**
     * Set IsCatiBasedSurvey value
     * @param bool $isCatiBasedSurvey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsCatiBasedSurvey($isCatiBasedSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCatiBasedSurvey) && !is_bool($isCatiBasedSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCatiBasedSurvey)), __LINE__);
        }
        $this->IsCatiBasedSurvey = $isCatiBasedSurvey;
        return $this;
    }
    /**
     * Get IsTouchPhoneSurvey value
     * @return bool
     */
    public function getIsTouchPhoneSurvey()
    {
        return $this->IsTouchPhoneSurvey;
    }
    /**
     * Set IsTouchPhoneSurvey value
     * @param bool $isTouchPhoneSurvey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsTouchPhoneSurvey($isTouchPhoneSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTouchPhoneSurvey) && !is_bool($isTouchPhoneSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTouchPhoneSurvey)), __LINE__);
        }
        $this->IsTouchPhoneSurvey = $isTouchPhoneSurvey;
        return $this;
    }
    /**
     * Get IsGenericPhoneSurvey value
     * @return bool
     */
    public function getIsGenericPhoneSurvey()
    {
        return $this->IsGenericPhoneSurvey;
    }
    /**
     * Set IsGenericPhoneSurvey value
     * @param bool $isGenericPhoneSurvey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsGenericPhoneSurvey($isGenericPhoneSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGenericPhoneSurvey) && !is_bool($isGenericPhoneSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGenericPhoneSurvey)), __LINE__);
        }
        $this->IsGenericPhoneSurvey = $isGenericPhoneSurvey;
        return $this;
    }
    /**
     * Get EnableOpenedReviewRecording value
     * @return bool
     */
    public function getEnableOpenedReviewRecording()
    {
        return $this->EnableOpenedReviewRecording;
    }
    /**
     * Set EnableOpenedReviewRecording value
     * @param bool $enableOpenedReviewRecording
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnableOpenedReviewRecording($enableOpenedReviewRecording = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableOpenedReviewRecording) && !is_bool($enableOpenedReviewRecording)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableOpenedReviewRecording)), __LINE__);
        }
        $this->EnableOpenedReviewRecording = $enableOpenedReviewRecording;
        return $this;
    }
    /**
     * Get SupportTelephoneBlacklist value
     * @return bool
     */
    public function getSupportTelephoneBlacklist()
    {
        return $this->SupportTelephoneBlacklist;
    }
    /**
     * Set SupportTelephoneBlacklist value
     * @param bool $supportTelephoneBlacklist
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSupportTelephoneBlacklist($supportTelephoneBlacklist = null)
    {
        // validation for constraint: boolean
        if (!is_null($supportTelephoneBlacklist) && !is_bool($supportTelephoneBlacklist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($supportTelephoneBlacklist)), __LINE__);
        }
        $this->SupportTelephoneBlacklist = $supportTelephoneBlacklist;
        return $this;
    }
    /**
     * Get EnableInterviewRecording value
     * @return bool
     */
    public function getEnableInterviewRecording()
    {
        return $this->EnableInterviewRecording;
    }
    /**
     * Set EnableInterviewRecording value
     * @param bool $enableInterviewRecording
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnableInterviewRecording($enableInterviewRecording = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableInterviewRecording) && !is_bool($enableInterviewRecording)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableInterviewRecording)), __LINE__);
        }
        $this->EnableInterviewRecording = $enableInterviewRecording;
        return $this;
    }
    /**
     * Get EnableInterviewScreenRecording value
     * @return bool
     */
    public function getEnableInterviewScreenRecording()
    {
        return $this->EnableInterviewScreenRecording;
    }
    /**
     * Set EnableInterviewScreenRecording value
     * @param bool $enableInterviewScreenRecording
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnableInterviewScreenRecording($enableInterviewScreenRecording = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableInterviewScreenRecording) && !is_bool($enableInterviewScreenRecording)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableInterviewScreenRecording)), __LINE__);
        }
        $this->EnableInterviewScreenRecording = $enableInterviewScreenRecording;
        return $this;
    }
    /**
     * Get IsSurveyIntegratedToFusion value
     * @return bool
     */
    public function getIsSurveyIntegratedToFusion()
    {
        return $this->IsSurveyIntegratedToFusion;
    }
    /**
     * Set IsSurveyIntegratedToFusion value
     * @param bool $isSurveyIntegratedToFusion
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsSurveyIntegratedToFusion($isSurveyIntegratedToFusion = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSurveyIntegratedToFusion) && !is_bool($isSurveyIntegratedToFusion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSurveyIntegratedToFusion)), __LINE__);
        }
        $this->IsSurveyIntegratedToFusion = $isSurveyIntegratedToFusion;
        return $this;
    }
    /**
     * Get IsSurveyPoll value
     * @return bool
     */
    public function getIsSurveyPoll()
    {
        return $this->IsSurveyPoll;
    }
    /**
     * Set IsSurveyPoll value
     * @param bool $isSurveyPoll
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsSurveyPoll($isSurveyPoll = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSurveyPoll) && !is_bool($isSurveyPoll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSurveyPoll)), __LINE__);
        }
        $this->IsSurveyPoll = $isSurveyPoll;
        return $this;
    }
    /**
     * Get DialMode value
     * @return string
     */
    public function getDialMode()
    {
        return $this->DialMode;
    }
    /**
     * Set DialMode value
     * @uses \Confirmit\Authoring\EnumType\DialMode::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\DialMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dialMode
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setDialMode($dialMode = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\DialMode::valueIsValid($dialMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dialMode, implode(', ', \Confirmit\Authoring\EnumType\DialMode::getValidValues())), __LINE__);
        }
        $this->DialMode = $dialMode;
        return $this;
    }
    /**
     * Get EnableSchedulingForWebInterviewing value
     * @return bool
     */
    public function getEnableSchedulingForWebInterviewing()
    {
        return $this->EnableSchedulingForWebInterviewing;
    }
    /**
     * Set EnableSchedulingForWebInterviewing value
     * @param bool $enableSchedulingForWebInterviewing
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnableSchedulingForWebInterviewing($enableSchedulingForWebInterviewing = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableSchedulingForWebInterviewing) && !is_bool($enableSchedulingForWebInterviewing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableSchedulingForWebInterviewing)), __LINE__);
        }
        $this->EnableSchedulingForWebInterviewing = $enableSchedulingForWebInterviewing;
        return $this;
    }
    /**
     * Get HtmlEncodePipingExpressions value
     * @return bool
     */
    public function getHtmlEncodePipingExpressions()
    {
        return $this->HtmlEncodePipingExpressions;
    }
    /**
     * Set HtmlEncodePipingExpressions value
     * @param bool $htmlEncodePipingExpressions
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHtmlEncodePipingExpressions($htmlEncodePipingExpressions = null)
    {
        // validation for constraint: boolean
        if (!is_null($htmlEncodePipingExpressions) && !is_bool($htmlEncodePipingExpressions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($htmlEncodePipingExpressions)), __LINE__);
        }
        $this->HtmlEncodePipingExpressions = $htmlEncodePipingExpressions;
        return $this;
    }
    /**
     * Get RequireXssSafeInput value
     * @return bool
     */
    public function getRequireXssSafeInput()
    {
        return $this->RequireXssSafeInput;
    }
    /**
     * Set RequireXssSafeInput value
     * @param bool $requireXssSafeInput
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setRequireXssSafeInput($requireXssSafeInput = null)
    {
        // validation for constraint: boolean
        if (!is_null($requireXssSafeInput) && !is_bool($requireXssSafeInput)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($requireXssSafeInput)), __LINE__);
        }
        $this->RequireXssSafeInput = $requireXssSafeInput;
        return $this;
    }
    /**
     * Get EnforceHttps value
     * @return bool
     */
    public function getEnforceHttps()
    {
        return $this->EnforceHttps;
    }
    /**
     * Set EnforceHttps value
     * @param bool $enforceHttps
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnforceHttps($enforceHttps = null)
    {
        // validation for constraint: boolean
        if (!is_null($enforceHttps) && !is_bool($enforceHttps)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enforceHttps)), __LINE__);
        }
        $this->EnforceHttps = $enforceHttps;
        return $this;
    }
    /**
     * Get EnableCAS value
     * @return bool
     */
    public function getEnableCAS()
    {
        return $this->EnableCAS;
    }
    /**
     * Set EnableCAS value
     * @param bool $enableCAS
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnableCAS($enableCAS = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableCAS) && !is_bool($enableCAS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableCAS)), __LINE__);
        }
        $this->EnableCAS = $enableCAS;
        return $this;
    }
    /**
     * Get EncryptSystemRequestParameters value
     * @return bool
     */
    public function getEncryptSystemRequestParameters()
    {
        return $this->EncryptSystemRequestParameters;
    }
    /**
     * Set EncryptSystemRequestParameters value
     * @param bool $encryptSystemRequestParameters
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEncryptSystemRequestParameters($encryptSystemRequestParameters = null)
    {
        // validation for constraint: boolean
        if (!is_null($encryptSystemRequestParameters) && !is_bool($encryptSystemRequestParameters)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($encryptSystemRequestParameters)), __LINE__);
        }
        $this->EncryptSystemRequestParameters = $encryptSystemRequestParameters;
        return $this;
    }
    /**
     * Get DisableQIDRequestParameter value
     * @return bool
     */
    public function getDisableQIDRequestParameter()
    {
        return $this->DisableQIDRequestParameter;
    }
    /**
     * Set DisableQIDRequestParameter value
     * @param bool $disableQIDRequestParameter
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setDisableQIDRequestParameter($disableQIDRequestParameter = null)
    {
        // validation for constraint: boolean
        if (!is_null($disableQIDRequestParameter) && !is_bool($disableQIDRequestParameter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disableQIDRequestParameter)), __LINE__);
        }
        $this->DisableQIDRequestParameter = $disableQIDRequestParameter;
        return $this;
    }
    /**
     * Get PanelistRegistrationSurvey value
     * @return bool
     */
    public function getPanelistRegistrationSurvey()
    {
        return $this->PanelistRegistrationSurvey;
    }
    /**
     * Set PanelistRegistrationSurvey value
     * @param bool $panelistRegistrationSurvey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setPanelistRegistrationSurvey($panelistRegistrationSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($panelistRegistrationSurvey) && !is_bool($panelistRegistrationSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($panelistRegistrationSurvey)), __LINE__);
        }
        $this->PanelistRegistrationSurvey = $panelistRegistrationSurvey;
        return $this;
    }
    /**
     * Get IsWebBasedSurvey value
     * @return bool
     */
    public function getIsWebBasedSurvey()
    {
        return $this->IsWebBasedSurvey;
    }
    /**
     * Set IsWebBasedSurvey value
     * @param bool $isWebBasedSurvey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setIsWebBasedSurvey($isWebBasedSurvey = null)
    {
        // validation for constraint: boolean
        if (!is_null($isWebBasedSurvey) && !is_bool($isWebBasedSurvey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isWebBasedSurvey)), __LINE__);
        }
        $this->IsWebBasedSurvey = $isWebBasedSurvey;
        return $this;
    }
    /**
     * Get CustomNavigationEnabled value
     * @return bool
     */
    public function getCustomNavigationEnabled()
    {
        return $this->CustomNavigationEnabled;
    }
    /**
     * Set CustomNavigationEnabled value
     * @param bool $customNavigationEnabled
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCustomNavigationEnabled($customNavigationEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($customNavigationEnabled) && !is_bool($customNavigationEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($customNavigationEnabled)), __LINE__);
        }
        $this->CustomNavigationEnabled = $customNavigationEnabled;
        return $this;
    }
    /**
     * Get AnswerButtons value
     * @return bool
     */
    public function getAnswerButtons()
    {
        return $this->AnswerButtons;
    }
    /**
     * Set AnswerButtons value
     * @param bool $answerButtons
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerButtons($answerButtons = null)
    {
        // validation for constraint: boolean
        if (!is_null($answerButtons) && !is_bool($answerButtons)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($answerButtons)), __LINE__);
        }
        $this->AnswerButtons = $answerButtons;
        return $this;
    }
    /**
     * Get LabelClick value
     * @return bool
     */
    public function getLabelClick()
    {
        return $this->LabelClick;
    }
    /**
     * Set LabelClick value
     * @param bool $labelClick
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setLabelClick($labelClick = null)
    {
        // validation for constraint: boolean
        if (!is_null($labelClick) && !is_bool($labelClick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($labelClick)), __LINE__);
        }
        $this->LabelClick = $labelClick;
        return $this;
    }
    /**
     * Get RadioButtons value
     * @return bool
     */
    public function getRadioButtons()
    {
        return $this->RadioButtons;
    }
    /**
     * Set RadioButtons value
     * @param bool $radioButtons
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setRadioButtons($radioButtons = null)
    {
        // validation for constraint: boolean
        if (!is_null($radioButtons) && !is_bool($radioButtons)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($radioButtons)), __LINE__);
        }
        $this->RadioButtons = $radioButtons;
        return $this;
    }
    /**
     * Get AutoNext value
     * @return bool
     */
    public function getAutoNext()
    {
        return $this->AutoNext;
    }
    /**
     * Set AutoNext value
     * @param bool $autoNext
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAutoNext($autoNext = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoNext) && !is_bool($autoNext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoNext)), __LINE__);
        }
        $this->AutoNext = $autoNext;
        return $this;
    }
    /**
     * Get TabOnEnterKey value
     * @return bool
     */
    public function getTabOnEnterKey()
    {
        return $this->TabOnEnterKey;
    }
    /**
     * Set TabOnEnterKey value
     * @param bool $tabOnEnterKey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setTabOnEnterKey($tabOnEnterKey = null)
    {
        // validation for constraint: boolean
        if (!is_null($tabOnEnterKey) && !is_bool($tabOnEnterKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tabOnEnterKey)), __LINE__);
        }
        $this->TabOnEnterKey = $tabOnEnterKey;
        return $this;
    }
    /**
     * Get GridErrorHighlight value
     * @return bool
     */
    public function getGridErrorHighlight()
    {
        return $this->GridErrorHighlight;
    }
    /**
     * Set GridErrorHighlight value
     * @param bool $gridErrorHighlight
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setGridErrorHighlight($gridErrorHighlight = null)
    {
        // validation for constraint: boolean
        if (!is_null($gridErrorHighlight) && !is_bool($gridErrorHighlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gridErrorHighlight)), __LINE__);
        }
        $this->GridErrorHighlight = $gridErrorHighlight;
        return $this;
    }
    /**
     * Get EnableDragDropOnTouch value
     * @return bool
     */
    public function getEnableDragDropOnTouch()
    {
        return $this->EnableDragDropOnTouch;
    }
    /**
     * Set EnableDragDropOnTouch value
     * @param bool $enableDragDropOnTouch
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnableDragDropOnTouch($enableDragDropOnTouch = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableDragDropOnTouch) && !is_bool($enableDragDropOnTouch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableDragDropOnTouch)), __LINE__);
        }
        $this->EnableDragDropOnTouch = $enableDragDropOnTouch;
        return $this;
    }
    /**
     * Get OverrideBrowserBack value
     * @return bool
     */
    public function getOverrideBrowserBack()
    {
        return $this->OverrideBrowserBack;
    }
    /**
     * Set OverrideBrowserBack value
     * @param bool $overrideBrowserBack
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setOverrideBrowserBack($overrideBrowserBack = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideBrowserBack) && !is_bool($overrideBrowserBack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideBrowserBack)), __LINE__);
        }
        $this->OverrideBrowserBack = $overrideBrowserBack;
        return $this;
    }
    /**
     * Get ProgressBar value
     * @return bool
     */
    public function getProgressBar()
    {
        return $this->ProgressBar;
    }
    /**
     * Set ProgressBar value
     * @param bool $progressBar
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setProgressBar($progressBar = null)
    {
        // validation for constraint: boolean
        if (!is_null($progressBar) && !is_bool($progressBar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($progressBar)), __LINE__);
        }
        $this->ProgressBar = $progressBar;
        return $this;
    }
    /**
     * Get OneQuestionPerPage value
     * @return bool
     */
    public function getOneQuestionPerPage()
    {
        return $this->OneQuestionPerPage;
    }
    /**
     * Set OneQuestionPerPage value
     * @param bool $oneQuestionPerPage
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setOneQuestionPerPage($oneQuestionPerPage = null)
    {
        // validation for constraint: boolean
        if (!is_null($oneQuestionPerPage) && !is_bool($oneQuestionPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($oneQuestionPerPage)), __LINE__);
        }
        $this->OneQuestionPerPage = $oneQuestionPerPage;
        return $this;
    }
    /**
     * Get EnablePerQuestionAnswersRandomization value
     * @return bool
     */
    public function getEnablePerQuestionAnswersRandomization()
    {
        return $this->EnablePerQuestionAnswersRandomization;
    }
    /**
     * Set EnablePerQuestionAnswersRandomization value
     * @param bool $enablePerQuestionAnswersRandomization
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnablePerQuestionAnswersRandomization($enablePerQuestionAnswersRandomization = null)
    {
        // validation for constraint: boolean
        if (!is_null($enablePerQuestionAnswersRandomization) && !is_bool($enablePerQuestionAnswersRandomization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enablePerQuestionAnswersRandomization)), __LINE__);
        }
        $this->EnablePerQuestionAnswersRandomization = $enablePerQuestionAnswersRandomization;
        return $this;
    }
    /**
     * Get AllowPostRequestsForRespondentLinks value
     * @return bool
     */
    public function getAllowPostRequestsForRespondentLinks()
    {
        return $this->AllowPostRequestsForRespondentLinks;
    }
    /**
     * Set AllowPostRequestsForRespondentLinks value
     * @param bool $allowPostRequestsForRespondentLinks
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAllowPostRequestsForRespondentLinks($allowPostRequestsForRespondentLinks = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowPostRequestsForRespondentLinks) && !is_bool($allowPostRequestsForRespondentLinks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowPostRequestsForRespondentLinks)), __LINE__);
        }
        $this->AllowPostRequestsForRespondentLinks = $allowPostRequestsForRespondentLinks;
        return $this;
    }
    /**
     * Get UseDbEncryption value
     * @return bool
     */
    public function getUseDbEncryption()
    {
        return $this->UseDbEncryption;
    }
    /**
     * Set UseDbEncryption value
     * @param bool $useDbEncryption
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setUseDbEncryption($useDbEncryption = null)
    {
        // validation for constraint: boolean
        if (!is_null($useDbEncryption) && !is_bool($useDbEncryption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useDbEncryption)), __LINE__);
        }
        $this->UseDbEncryption = $useDbEncryption;
        return $this;
    }
    /**
     * Get OptimisticQuotaTimeout value
     * @return int
     */
    public function getOptimisticQuotaTimeout()
    {
        return $this->OptimisticQuotaTimeout;
    }
    /**
     * Set OptimisticQuotaTimeout value
     * @param int $optimisticQuotaTimeout
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setOptimisticQuotaTimeout($optimisticQuotaTimeout = null)
    {
        // validation for constraint: int
        if (!is_null($optimisticQuotaTimeout) && !is_numeric($optimisticQuotaTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($optimisticQuotaTimeout)), __LINE__);
        }
        $this->OptimisticQuotaTimeout = $optimisticQuotaTimeout;
        return $this;
    }
    /**
     * Get OverrideOptimisticQuotaTimeout value
     * @return bool
     */
    public function getOverrideOptimisticQuotaTimeout()
    {
        return $this->OverrideOptimisticQuotaTimeout;
    }
    /**
     * Set OverrideOptimisticQuotaTimeout value
     * @param bool $overrideOptimisticQuotaTimeout
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setOverrideOptimisticQuotaTimeout($overrideOptimisticQuotaTimeout = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideOptimisticQuotaTimeout) && !is_bool($overrideOptimisticQuotaTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideOptimisticQuotaTimeout)), __LINE__);
        }
        $this->OverrideOptimisticQuotaTimeout = $overrideOptimisticQuotaTimeout;
        return $this;
    }
    /**
     * Get UseChangeTracking value
     * @return bool
     */
    public function getUseChangeTracking()
    {
        return $this->UseChangeTracking;
    }
    /**
     * Set UseChangeTracking value
     * @param bool $useChangeTracking
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setUseChangeTracking($useChangeTracking = null)
    {
        // validation for constraint: boolean
        if (!is_null($useChangeTracking) && !is_bool($useChangeTracking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useChangeTracking)), __LINE__);
        }
        $this->UseChangeTracking = $useChangeTracking;
        return $this;
    }
    /**
     * Get HiddenInParticipation value
     * @return bool
     */
    public function getHiddenInParticipation()
    {
        return $this->HiddenInParticipation;
    }
    /**
     * Set HiddenInParticipation value
     * @param bool $hiddenInParticipation
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHiddenInParticipation($hiddenInParticipation = null)
    {
        // validation for constraint: boolean
        if (!is_null($hiddenInParticipation) && !is_bool($hiddenInParticipation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hiddenInParticipation)), __LINE__);
        }
        $this->HiddenInParticipation = $hiddenInParticipation;
        return $this;
    }
    /**
     * Get Build value
     * @return string|null
     */
    public function getBuild()
    {
        return $this->Build;
    }
    /**
     * Set Build value
     * @param string $build
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setBuild($build = null)
    {
        // validation for constraint: string
        if (!is_null($build) && !is_string($build)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($build)), __LINE__);
        }
        $this->Build = $build;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get LogoFile value
     * @return string|null
     */
    public function getLogoFile()
    {
        return $this->LogoFile;
    }
    /**
     * Set LogoFile value
     * @param string $logoFile
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setLogoFile($logoFile = null)
    {
        // validation for constraint: string
        if (!is_null($logoFile) && !is_string($logoFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logoFile)), __LINE__);
        }
        $this->LogoFile = $logoFile;
        return $this;
    }
    /**
     * Get WI_Url value
     * @return string|null
     */
    public function getWI_Url()
    {
        return $this->WI_Url;
    }
    /**
     * Set WI_Url value
     * @param string $wI_Url
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setWI_Url($wI_Url = null)
    {
        // validation for constraint: string
        if (!is_null($wI_Url) && !is_string($wI_Url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wI_Url)), __LINE__);
        }
        $this->WI_Url = $wI_Url;
        return $this;
    }
    /**
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->Company = $company;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ProjectID value
     * @return string|null
     */
    public function getProjectID()
    {
        return $this->ProjectID;
    }
    /**
     * Set ProjectID value
     * @param string $projectID
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setProjectID($projectID = null)
    {
        // validation for constraint: string
        if (!is_null($projectID) && !is_string($projectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projectID)), __LINE__);
        }
        $this->ProjectID = $projectID;
        return $this;
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($created)), __LINE__);
        }
        $this->Created = $created;
        return $this;
    }
    /**
     * Get Creator value
     * @return string|null
     */
    public function getCreator()
    {
        return $this->Creator;
    }
    /**
     * Set Creator value
     * @param string $creator
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCreator($creator = null)
    {
        // validation for constraint: string
        if (!is_null($creator) && !is_string($creator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creator)), __LINE__);
        }
        $this->Creator = $creator;
        return $this;
    }
    /**
     * Get ApprovalStateDateChanged_Str value
     * @return string|null
     */
    public function getApprovalStateDateChanged_Str()
    {
        return $this->ApprovalStateDateChanged_Str;
    }
    /**
     * Set ApprovalStateDateChanged_Str value
     * @param string $approvalStateDateChanged_Str
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setApprovalStateDateChanged_Str($approvalStateDateChanged_Str = null)
    {
        // validation for constraint: string
        if (!is_null($approvalStateDateChanged_Str) && !is_string($approvalStateDateChanged_Str)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approvalStateDateChanged_Str)), __LINE__);
        }
        $this->ApprovalStateDateChanged_Str = $approvalStateDateChanged_Str;
        return $this;
    }
    /**
     * Get MasterProject value
     * @return string|null
     */
    public function getMasterProject()
    {
        return $this->MasterProject;
    }
    /**
     * Set MasterProject value
     * @param string $masterProject
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setMasterProject($masterProject = null)
    {
        // validation for constraint: string
        if (!is_null($masterProject) && !is_string($masterProject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masterProject)), __LINE__);
        }
        $this->MasterProject = $masterProject;
        return $this;
    }
    /**
     * Get ErrorRecipient value
     * @return string|null
     */
    public function getErrorRecipient()
    {
        return $this->ErrorRecipient;
    }
    /**
     * Set ErrorRecipient value
     * @param string $errorRecipient
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setErrorRecipient($errorRecipient = null)
    {
        // validation for constraint: string
        if (!is_null($errorRecipient) && !is_string($errorRecipient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorRecipient)), __LINE__);
        }
        $this->ErrorRecipient = $errorRecipient;
        return $this;
    }
    /**
     * Get LostPasswordSender value
     * @return string|null
     */
    public function getLostPasswordSender()
    {
        return $this->LostPasswordSender;
    }
    /**
     * Set LostPasswordSender value
     * @param string $lostPasswordSender
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setLostPasswordSender($lostPasswordSender = null)
    {
        // validation for constraint: string
        if (!is_null($lostPasswordSender) && !is_string($lostPasswordSender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lostPasswordSender)), __LINE__);
        }
        $this->LostPasswordSender = $lostPasswordSender;
        return $this;
    }
    /**
     * Get CustomNavigationStyle value
     * @return string|null
     */
    public function getCustomNavigationStyle()
    {
        return $this->CustomNavigationStyle;
    }
    /**
     * Set CustomNavigationStyle value
     * @param string $customNavigationStyle
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCustomNavigationStyle($customNavigationStyle = null)
    {
        // validation for constraint: string
        if (!is_null($customNavigationStyle) && !is_string($customNavigationStyle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customNavigationStyle)), __LINE__);
        }
        $this->CustomNavigationStyle = $customNavigationStyle;
        return $this;
    }
    /**
     * Get AnswerImageDefaultRadioButton value
     * @return string|null
     */
    public function getAnswerImageDefaultRadioButton()
    {
        return $this->AnswerImageDefaultRadioButton;
    }
    /**
     * Set AnswerImageDefaultRadioButton value
     * @param string $answerImageDefaultRadioButton
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageDefaultRadioButton($answerImageDefaultRadioButton = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageDefaultRadioButton) && !is_string($answerImageDefaultRadioButton)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageDefaultRadioButton)), __LINE__);
        }
        $this->AnswerImageDefaultRadioButton = $answerImageDefaultRadioButton;
        return $this;
    }
    /**
     * Get AnswerImageOverRadioButton value
     * @return string|null
     */
    public function getAnswerImageOverRadioButton()
    {
        return $this->AnswerImageOverRadioButton;
    }
    /**
     * Set AnswerImageOverRadioButton value
     * @param string $answerImageOverRadioButton
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageOverRadioButton($answerImageOverRadioButton = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageOverRadioButton) && !is_string($answerImageOverRadioButton)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageOverRadioButton)), __LINE__);
        }
        $this->AnswerImageOverRadioButton = $answerImageOverRadioButton;
        return $this;
    }
    /**
     * Get AnswerImageSelectedRadioButton value
     * @return string|null
     */
    public function getAnswerImageSelectedRadioButton()
    {
        return $this->AnswerImageSelectedRadioButton;
    }
    /**
     * Set AnswerImageSelectedRadioButton value
     * @param string $answerImageSelectedRadioButton
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageSelectedRadioButton($answerImageSelectedRadioButton = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageSelectedRadioButton) && !is_string($answerImageSelectedRadioButton)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageSelectedRadioButton)), __LINE__);
        }
        $this->AnswerImageSelectedRadioButton = $answerImageSelectedRadioButton;
        return $this;
    }
    /**
     * Get AnswerImageDefaultCheckBox value
     * @return string|null
     */
    public function getAnswerImageDefaultCheckBox()
    {
        return $this->AnswerImageDefaultCheckBox;
    }
    /**
     * Set AnswerImageDefaultCheckBox value
     * @param string $answerImageDefaultCheckBox
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageDefaultCheckBox($answerImageDefaultCheckBox = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageDefaultCheckBox) && !is_string($answerImageDefaultCheckBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageDefaultCheckBox)), __LINE__);
        }
        $this->AnswerImageDefaultCheckBox = $answerImageDefaultCheckBox;
        return $this;
    }
    /**
     * Get AnswerImageOverCheckBox value
     * @return string|null
     */
    public function getAnswerImageOverCheckBox()
    {
        return $this->AnswerImageOverCheckBox;
    }
    /**
     * Set AnswerImageOverCheckBox value
     * @param string $answerImageOverCheckBox
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageOverCheckBox($answerImageOverCheckBox = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageOverCheckBox) && !is_string($answerImageOverCheckBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageOverCheckBox)), __LINE__);
        }
        $this->AnswerImageOverCheckBox = $answerImageOverCheckBox;
        return $this;
    }
    /**
     * Get AnswerImageSelectedCheckBox value
     * @return string|null
     */
    public function getAnswerImageSelectedCheckBox()
    {
        return $this->AnswerImageSelectedCheckBox;
    }
    /**
     * Set AnswerImageSelectedCheckBox value
     * @param string $answerImageSelectedCheckBox
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setAnswerImageSelectedCheckBox($answerImageSelectedCheckBox = null)
    {
        // validation for constraint: string
        if (!is_null($answerImageSelectedCheckBox) && !is_string($answerImageSelectedCheckBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerImageSelectedCheckBox)), __LINE__);
        }
        $this->AnswerImageSelectedCheckBox = $answerImageSelectedCheckBox;
        return $this;
    }
    /**
     * Get Languages value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfInt|null
     */
    public function getLanguages()
    {
        return $this->Languages;
    }
    /**
     * Set Languages value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfInt $languages
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setLanguages(\Confirmit\Authoring\ArrayType\ArrayOfInt $languages = null)
    {
        $this->Languages = $languages;
        return $this;
    }
    /**
     * Get KeyWords value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfString|null
     */
    public function getKeyWords()
    {
        return $this->KeyWords;
    }
    /**
     * Set KeyWords value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfString $keyWords
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setKeyWords(\Confirmit\Authoring\ArrayType\ArrayOfString $keyWords = null)
    {
        $this->KeyWords = $keyWords;
        return $this;
    }
    /**
     * Get Titles value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7|null
     */
    public function getTitles()
    {
        return $this->Titles;
    }
    /**
     * Set Titles value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setTitles(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString7 $titles = null)
    {
        $this->Titles = $titles;
        return $this;
    }
    /**
     * Get HelpLinkTexts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString8|null
     */
    public function getHelpLinkTexts()
    {
        return $this->HelpLinkTexts;
    }
    /**
     * Set HelpLinkTexts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString8 $helpLinkTexts
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHelpLinkTexts(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString8 $helpLinkTexts = null)
    {
        $this->HelpLinkTexts = $helpLinkTexts;
        return $this;
    }
    /**
     * Get HelpLinkUrls value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString9|null
     */
    public function getHelpLinkUrls()
    {
        return $this->HelpLinkUrls;
    }
    /**
     * Set HelpLinkUrls value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString9 $helpLinkUrls
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setHelpLinkUrls(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString9 $helpLinkUrls = null)
    {
        $this->HelpLinkUrls = $helpLinkUrls;
        return $this;
    }
    /**
     * Get EndLinkTexts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString10|null
     */
    public function getEndLinkTexts()
    {
        return $this->EndLinkTexts;
    }
    /**
     * Set EndLinkTexts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString10 $endLinkTexts
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEndLinkTexts(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString10 $endLinkTexts = null)
    {
        $this->EndLinkTexts = $endLinkTexts;
        return $this;
    }
    /**
     * Get EndLinkUrls value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString11|null
     */
    public function getEndLinkUrls()
    {
        return $this->EndLinkUrls;
    }
    /**
     * Set EndLinkUrls value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString11 $endLinkUrls
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEndLinkUrls(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString11 $endLinkUrls = null)
    {
        $this->EndLinkUrls = $endLinkUrls;
        return $this;
    }
    /**
     * Get CustomNavigationOK value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString12|null
     */
    public function getCustomNavigationOK()
    {
        return $this->CustomNavigationOK;
    }
    /**
     * Set CustomNavigationOK value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString12 $customNavigationOK
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCustomNavigationOK(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString12 $customNavigationOK = null)
    {
        $this->CustomNavigationOK = $customNavigationOK;
        return $this;
    }
    /**
     * Get CustomNavigationBack value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString13|null
     */
    public function getCustomNavigationBack()
    {
        return $this->CustomNavigationBack;
    }
    /**
     * Set CustomNavigationBack value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString13 $customNavigationBack
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCustomNavigationBack(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString13 $customNavigationBack = null)
    {
        $this->CustomNavigationBack = $customNavigationBack;
        return $this;
    }
    /**
     * Get CustomNavigationNext value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString14|null
     */
    public function getCustomNavigationNext()
    {
        return $this->CustomNavigationNext;
    }
    /**
     * Set CustomNavigationNext value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString14 $customNavigationNext
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCustomNavigationNext(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString14 $customNavigationNext = null)
    {
        $this->CustomNavigationNext = $customNavigationNext;
        return $this;
    }
    /**
     * Get TranslationStatusRecipient value
     * @return string|null
     */
    public function getTranslationStatusRecipient()
    {
        return $this->TranslationStatusRecipient;
    }
    /**
     * Set TranslationStatusRecipient value
     * @param string $translationStatusRecipient
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setTranslationStatusRecipient($translationStatusRecipient = null)
    {
        // validation for constraint: string
        if (!is_null($translationStatusRecipient) && !is_string($translationStatusRecipient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($translationStatusRecipient)), __LINE__);
        }
        $this->TranslationStatusRecipient = $translationStatusRecipient;
        return $this;
    }
    /**
     * Get QuestionnaireReviewerStatusRecipient value
     * @return string|null
     */
    public function getQuestionnaireReviewerStatusRecipient()
    {
        return $this->QuestionnaireReviewerStatusRecipient;
    }
    /**
     * Set QuestionnaireReviewerStatusRecipient value
     * @param string $questionnaireReviewerStatusRecipient
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setQuestionnaireReviewerStatusRecipient($questionnaireReviewerStatusRecipient = null)
    {
        // validation for constraint: string
        if (!is_null($questionnaireReviewerStatusRecipient) && !is_string($questionnaireReviewerStatusRecipient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($questionnaireReviewerStatusRecipient)), __LINE__);
        }
        $this->QuestionnaireReviewerStatusRecipient = $questionnaireReviewerStatusRecipient;
        return $this;
    }
    /**
     * Get TranslationStatuses value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus|null
     */
    public function getTranslationStatuses()
    {
        return $this->TranslationStatuses;
    }
    /**
     * Set TranslationStatuses value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setTranslationStatuses(\Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this->TranslationStatuses = $translationStatuses;
        return $this;
    }
    /**
     * Get CustomResources value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfCustomResource|null
     */
    public function getCustomResources()
    {
        return $this->CustomResources;
    }
    /**
     * Set CustomResources value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfCustomResource $customResources
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setCustomResources(\Confirmit\Authoring\ArrayType\ArrayOfCustomResource $customResources = null)
    {
        $this->CustomResources = $customResources;
        return $this;
    }
    /**
     * Get ExternalQuickTestKey value
     * @return string|null
     */
    public function getExternalQuickTestKey()
    {
        return $this->ExternalQuickTestKey;
    }
    /**
     * Set ExternalQuickTestKey value
     * @param string $externalQuickTestKey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setExternalQuickTestKey($externalQuickTestKey = null)
    {
        // validation for constraint: string
        if (!is_null($externalQuickTestKey) && !is_string($externalQuickTestKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalQuickTestKey)), __LINE__);
        }
        $this->ExternalQuickTestKey = $externalQuickTestKey;
        return $this;
    }
    /**
     * Get SurveyParametersForTestInterView value
     * @return string|null
     */
    public function getSurveyParametersForTestInterView()
    {
        return $this->SurveyParametersForTestInterView;
    }
    /**
     * Set SurveyParametersForTestInterView value
     * @param string $surveyParametersForTestInterView
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSurveyParametersForTestInterView($surveyParametersForTestInterView = null)
    {
        // validation for constraint: string
        if (!is_null($surveyParametersForTestInterView) && !is_string($surveyParametersForTestInterView)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyParametersForTestInterView)), __LINE__);
        }
        $this->SurveyParametersForTestInterView = $surveyParametersForTestInterView;
        return $this;
    }
    /**
     * Get ExternalTestKey value
     * @return string|null
     */
    public function getExternalTestKey()
    {
        return $this->ExternalTestKey;
    }
    /**
     * Set ExternalTestKey value
     * @param string $externalTestKey
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setExternalTestKey($externalTestKey = null)
    {
        // validation for constraint: string
        if (!is_null($externalTestKey) && !is_string($externalTestKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalTestKey)), __LINE__);
        }
        $this->ExternalTestKey = $externalTestKey;
        return $this;
    }
    /**
     * Get WI_LaunchDate value
     * @return string|null
     */
    public function getWI_LaunchDate()
    {
        return $this->WI_LaunchDate;
    }
    /**
     * Set WI_LaunchDate value
     * @param string $wI_LaunchDate
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setWI_LaunchDate($wI_LaunchDate = null)
    {
        // validation for constraint: string
        if (!is_null($wI_LaunchDate) && !is_string($wI_LaunchDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wI_LaunchDate)), __LINE__);
        }
        $this->WI_LaunchDate = $wI_LaunchDate;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get InlineSurveyOverlayOpacity value
     * @return string|null
     */
    public function getInlineSurveyOverlayOpacity()
    {
        return $this->InlineSurveyOverlayOpacity;
    }
    /**
     * Set InlineSurveyOverlayOpacity value
     * @param string $inlineSurveyOverlayOpacity
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyOverlayOpacity($inlineSurveyOverlayOpacity = null)
    {
        // validation for constraint: string
        if (!is_null($inlineSurveyOverlayOpacity) && !is_string($inlineSurveyOverlayOpacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inlineSurveyOverlayOpacity)), __LINE__);
        }
        $this->InlineSurveyOverlayOpacity = $inlineSurveyOverlayOpacity;
        return $this;
    }
    /**
     * Get InlineSurveyWidth value
     * @return string|null
     */
    public function getInlineSurveyWidth()
    {
        return $this->InlineSurveyWidth;
    }
    /**
     * Set InlineSurveyWidth value
     * @param string $inlineSurveyWidth
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyWidth($inlineSurveyWidth = null)
    {
        // validation for constraint: string
        if (!is_null($inlineSurveyWidth) && !is_string($inlineSurveyWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inlineSurveyWidth)), __LINE__);
        }
        $this->InlineSurveyWidth = $inlineSurveyWidth;
        return $this;
    }
    /**
     * Get InlineSurveyCookieName value
     * @return string|null
     */
    public function getInlineSurveyCookieName()
    {
        return $this->InlineSurveyCookieName;
    }
    /**
     * Set InlineSurveyCookieName value
     * @param string $inlineSurveyCookieName
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setInlineSurveyCookieName($inlineSurveyCookieName = null)
    {
        // validation for constraint: string
        if (!is_null($inlineSurveyCookieName) && !is_string($inlineSurveyCookieName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inlineSurveyCookieName)), __LINE__);
        }
        $this->InlineSurveyCookieName = $inlineSurveyCookieName;
        return $this;
    }
    /**
     * Get SurveyLayoutName value
     * @return string|null
     */
    public function getSurveyLayoutName()
    {
        return $this->SurveyLayoutName;
    }
    /**
     * Set SurveyLayoutName value
     * @param string $surveyLayoutName
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSurveyLayoutName($surveyLayoutName = null)
    {
        // validation for constraint: string
        if (!is_null($surveyLayoutName) && !is_string($surveyLayoutName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyLayoutName)), __LINE__);
        }
        $this->SurveyLayoutName = $surveyLayoutName;
        return $this;
    }
    /**
     * Get SurveyLayoutId value
     * @return string|null
     */
    public function getSurveyLayoutId()
    {
        return $this->SurveyLayoutId;
    }
    /**
     * Set SurveyLayoutId value
     * @param string $surveyLayoutId
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setSurveyLayoutId($surveyLayoutId = null)
    {
        // validation for constraint: string
        if (!is_null($surveyLayoutId) && !is_string($surveyLayoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyLayoutId)), __LINE__);
        }
        $this->SurveyLayoutId = $surveyLayoutId;
        return $this;
    }
    /**
     * Get BitStreamIndexes value
     * @return string|null
     */
    public function getBitStreamIndexes()
    {
        return $this->BitStreamIndexes;
    }
    /**
     * Set BitStreamIndexes value
     * @param string $bitStreamIndexes
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setBitStreamIndexes($bitStreamIndexes = null)
    {
        // validation for constraint: string
        if (!is_null($bitStreamIndexes) && !is_string($bitStreamIndexes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bitStreamIndexes)), __LINE__);
        }
        $this->BitStreamIndexes = $bitStreamIndexes;
        return $this;
    }
    /**
     * Get EnterprisePanelId value
     * @return string|null
     */
    public function getEnterprisePanelId()
    {
        return $this->EnterprisePanelId;
    }
    /**
     * Set EnterprisePanelId value
     * @param string $enterprisePanelId
     * @return \Confirmit\Authoring\StructType\ProjectInfo
     */
    public function setEnterprisePanelId($enterprisePanelId = null)
    {
        // validation for constraint: string
        if (!is_null($enterprisePanelId) && !is_string($enterprisePanelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($enterprisePanelId)), __LINE__);
        }
        $this->EnterprisePanelId = $enterprisePanelId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ProjectInfo
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
