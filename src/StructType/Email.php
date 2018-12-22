<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email StructType
 * @subpackage Structs
 */
class Email extends QuestionnaireNode
{
    /**
     * The DefaultLanguage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DefaultLanguage;
    /**
     * The SendAsHtml
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SendAsHtml;
    /**
     * The SendAsPlainText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SendAsPlainText;
    /**
     * The OverrideRecipientEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $OverrideRecipientEmail;
    /**
     * The SendEmailForward
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SendEmailForward;
    /**
     * The SendConfirmationEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SendConfirmationEmail;
    /**
     * The IncludeLink
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IncludeLink;
    /**
     * The ActivateLogging
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ActivateLogging;
    /**
     * The SecureLink
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SecureLink;
    /**
     * The ReadOnly
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ReadOnly;
    /**
     * The DisableNoOfEmailsSent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DisableNoOfEmailsSent;
    /**
     * The RoutingPart
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $RoutingPart;
    /**
     * The DisableSendOnBackward
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DisableSendOnBackward;
    /**
     * The Languages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfInt
     */
    public $Languages;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Descriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2
     */
    public $Descriptions;
    /**
     * The Subjects
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString3
     */
    public $Subjects;
    /**
     * The BodyHtmls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString4
     */
    public $BodyHtmls;
    /**
     * The BodyPlaintexts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString5
     */
    public $BodyPlaintexts;
    /**
     * The CustomLinkTexts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfLanguageString6
     */
    public $CustomLinkTexts;
    /**
     * The To
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $To;
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $From;
    /**
     * The Cc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Cc;
    /**
     * The Bcc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Bcc;
    /**
     * The ReplyTo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReplyTo;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The ReplyDisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReplyDisplayName;
    /**
     * The OverrideRecipientEmailField
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OverrideRecipientEmailField;
    /**
     * The SendEmailForwardField
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SendEmailForwardField;
    /**
     * The ConfirmationEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ConfirmationEmailAddress;
    /**
     * The AdditionalLinkParameters
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalLinkParameters;
    /**
     * The CustomHeaders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomHeaders;
    /**
     * The TranslationStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus
     */
    public $TranslationStatuses;
    /**
     * Constructor method for Email
     * @uses Email::setDefaultLanguage()
     * @uses Email::setSendAsHtml()
     * @uses Email::setSendAsPlainText()
     * @uses Email::setOverrideRecipientEmail()
     * @uses Email::setSendEmailForward()
     * @uses Email::setSendConfirmationEmail()
     * @uses Email::setIncludeLink()
     * @uses Email::setActivateLogging()
     * @uses Email::setSecureLink()
     * @uses Email::setReadOnly()
     * @uses Email::setDisableNoOfEmailsSent()
     * @uses Email::setRoutingPart()
     * @uses Email::setDisableSendOnBackward()
     * @uses Email::setLanguages()
     * @uses Email::setName()
     * @uses Email::setDescriptions()
     * @uses Email::setSubjects()
     * @uses Email::setBodyHtmls()
     * @uses Email::setBodyPlaintexts()
     * @uses Email::setCustomLinkTexts()
     * @uses Email::setTo()
     * @uses Email::setFrom()
     * @uses Email::setCc()
     * @uses Email::setBcc()
     * @uses Email::setReplyTo()
     * @uses Email::setDisplayName()
     * @uses Email::setReplyDisplayName()
     * @uses Email::setOverrideRecipientEmailField()
     * @uses Email::setSendEmailForwardField()
     * @uses Email::setConfirmationEmailAddress()
     * @uses Email::setAdditionalLinkParameters()
     * @uses Email::setCustomHeaders()
     * @uses Email::setTranslationStatuses()
     * @param int $defaultLanguage
     * @param bool $sendAsHtml
     * @param bool $sendAsPlainText
     * @param bool $overrideRecipientEmail
     * @param bool $sendEmailForward
     * @param bool $sendConfirmationEmail
     * @param bool $includeLink
     * @param bool $activateLogging
     * @param bool $secureLink
     * @param bool $readOnly
     * @param bool $disableNoOfEmailsSent
     * @param bool $routingPart
     * @param bool $disableSendOnBackward
     * @param \Confirmit\Authoring\ArrayType\ArrayOfInt $languages
     * @param string $name
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString3 $subjects
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString4 $bodyHtmls
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString5 $bodyPlaintexts
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString6 $customLinkTexts
     * @param string $to
     * @param string $from
     * @param string $cc
     * @param string $bcc
     * @param string $replyTo
     * @param string $displayName
     * @param string $replyDisplayName
     * @param string $overrideRecipientEmailField
     * @param string $sendEmailForwardField
     * @param string $confirmationEmailAddress
     * @param string $additionalLinkParameters
     * @param string $customHeaders
     * @param \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses
     */
    public function __construct($defaultLanguage = null, $sendAsHtml = null, $sendAsPlainText = null, $overrideRecipientEmail = null, $sendEmailForward = null, $sendConfirmationEmail = null, $includeLink = null, $activateLogging = null, $secureLink = null, $readOnly = null, $disableNoOfEmailsSent = null, $routingPart = null, $disableSendOnBackward = null, \Confirmit\Authoring\ArrayType\ArrayOfInt $languages = null, $name = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString3 $subjects = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString4 $bodyHtmls = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString5 $bodyPlaintexts = null, \Confirmit\Authoring\ArrayType\ArrayOfLanguageString6 $customLinkTexts = null, $to = null, $from = null, $cc = null, $bcc = null, $replyTo = null, $displayName = null, $replyDisplayName = null, $overrideRecipientEmailField = null, $sendEmailForwardField = null, $confirmationEmailAddress = null, $additionalLinkParameters = null, $customHeaders = null, \Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this
            ->setDefaultLanguage($defaultLanguage)
            ->setSendAsHtml($sendAsHtml)
            ->setSendAsPlainText($sendAsPlainText)
            ->setOverrideRecipientEmail($overrideRecipientEmail)
            ->setSendEmailForward($sendEmailForward)
            ->setSendConfirmationEmail($sendConfirmationEmail)
            ->setIncludeLink($includeLink)
            ->setActivateLogging($activateLogging)
            ->setSecureLink($secureLink)
            ->setReadOnly($readOnly)
            ->setDisableNoOfEmailsSent($disableNoOfEmailsSent)
            ->setRoutingPart($routingPart)
            ->setDisableSendOnBackward($disableSendOnBackward)
            ->setLanguages($languages)
            ->setName($name)
            ->setDescriptions($descriptions)
            ->setSubjects($subjects)
            ->setBodyHtmls($bodyHtmls)
            ->setBodyPlaintexts($bodyPlaintexts)
            ->setCustomLinkTexts($customLinkTexts)
            ->setTo($to)
            ->setFrom($from)
            ->setCc($cc)
            ->setBcc($bcc)
            ->setReplyTo($replyTo)
            ->setDisplayName($displayName)
            ->setReplyDisplayName($replyDisplayName)
            ->setOverrideRecipientEmailField($overrideRecipientEmailField)
            ->setSendEmailForwardField($sendEmailForwardField)
            ->setConfirmationEmailAddress($confirmationEmailAddress)
            ->setAdditionalLinkParameters($additionalLinkParameters)
            ->setCustomHeaders($customHeaders)
            ->setTranslationStatuses($translationStatuses);
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
     * @return \Confirmit\Authoring\StructType\Email
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
     * Get SendAsHtml value
     * @return bool
     */
    public function getSendAsHtml()
    {
        return $this->SendAsHtml;
    }
    /**
     * Set SendAsHtml value
     * @param bool $sendAsHtml
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setSendAsHtml($sendAsHtml = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendAsHtml) && !is_bool($sendAsHtml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendAsHtml)), __LINE__);
        }
        $this->SendAsHtml = $sendAsHtml;
        return $this;
    }
    /**
     * Get SendAsPlainText value
     * @return bool
     */
    public function getSendAsPlainText()
    {
        return $this->SendAsPlainText;
    }
    /**
     * Set SendAsPlainText value
     * @param bool $sendAsPlainText
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setSendAsPlainText($sendAsPlainText = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendAsPlainText) && !is_bool($sendAsPlainText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendAsPlainText)), __LINE__);
        }
        $this->SendAsPlainText = $sendAsPlainText;
        return $this;
    }
    /**
     * Get OverrideRecipientEmail value
     * @return bool
     */
    public function getOverrideRecipientEmail()
    {
        return $this->OverrideRecipientEmail;
    }
    /**
     * Set OverrideRecipientEmail value
     * @param bool $overrideRecipientEmail
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setOverrideRecipientEmail($overrideRecipientEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideRecipientEmail) && !is_bool($overrideRecipientEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideRecipientEmail)), __LINE__);
        }
        $this->OverrideRecipientEmail = $overrideRecipientEmail;
        return $this;
    }
    /**
     * Get SendEmailForward value
     * @return bool
     */
    public function getSendEmailForward()
    {
        return $this->SendEmailForward;
    }
    /**
     * Set SendEmailForward value
     * @param bool $sendEmailForward
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setSendEmailForward($sendEmailForward = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendEmailForward) && !is_bool($sendEmailForward)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendEmailForward)), __LINE__);
        }
        $this->SendEmailForward = $sendEmailForward;
        return $this;
    }
    /**
     * Get SendConfirmationEmail value
     * @return bool
     */
    public function getSendConfirmationEmail()
    {
        return $this->SendConfirmationEmail;
    }
    /**
     * Set SendConfirmationEmail value
     * @param bool $sendConfirmationEmail
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setSendConfirmationEmail($sendConfirmationEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendConfirmationEmail) && !is_bool($sendConfirmationEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendConfirmationEmail)), __LINE__);
        }
        $this->SendConfirmationEmail = $sendConfirmationEmail;
        return $this;
    }
    /**
     * Get IncludeLink value
     * @return bool
     */
    public function getIncludeLink()
    {
        return $this->IncludeLink;
    }
    /**
     * Set IncludeLink value
     * @param bool $includeLink
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setIncludeLink($includeLink = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeLink) && !is_bool($includeLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeLink)), __LINE__);
        }
        $this->IncludeLink = $includeLink;
        return $this;
    }
    /**
     * Get ActivateLogging value
     * @return bool
     */
    public function getActivateLogging()
    {
        return $this->ActivateLogging;
    }
    /**
     * Set ActivateLogging value
     * @param bool $activateLogging
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setActivateLogging($activateLogging = null)
    {
        // validation for constraint: boolean
        if (!is_null($activateLogging) && !is_bool($activateLogging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($activateLogging)), __LINE__);
        }
        $this->ActivateLogging = $activateLogging;
        return $this;
    }
    /**
     * Get SecureLink value
     * @return bool
     */
    public function getSecureLink()
    {
        return $this->SecureLink;
    }
    /**
     * Set SecureLink value
     * @param bool $secureLink
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setSecureLink($secureLink = null)
    {
        // validation for constraint: boolean
        if (!is_null($secureLink) && !is_bool($secureLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($secureLink)), __LINE__);
        }
        $this->SecureLink = $secureLink;
        return $this;
    }
    /**
     * Get ReadOnly value
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param bool $readOnly
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        return $this;
    }
    /**
     * Get DisableNoOfEmailsSent value
     * @return bool
     */
    public function getDisableNoOfEmailsSent()
    {
        return $this->DisableNoOfEmailsSent;
    }
    /**
     * Set DisableNoOfEmailsSent value
     * @param bool $disableNoOfEmailsSent
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setDisableNoOfEmailsSent($disableNoOfEmailsSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($disableNoOfEmailsSent) && !is_bool($disableNoOfEmailsSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disableNoOfEmailsSent)), __LINE__);
        }
        $this->DisableNoOfEmailsSent = $disableNoOfEmailsSent;
        return $this;
    }
    /**
     * Get RoutingPart value
     * @return bool
     */
    public function getRoutingPart()
    {
        return $this->RoutingPart;
    }
    /**
     * Set RoutingPart value
     * @param bool $routingPart
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setRoutingPart($routingPart = null)
    {
        // validation for constraint: boolean
        if (!is_null($routingPart) && !is_bool($routingPart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($routingPart)), __LINE__);
        }
        $this->RoutingPart = $routingPart;
        return $this;
    }
    /**
     * Get DisableSendOnBackward value
     * @return bool
     */
    public function getDisableSendOnBackward()
    {
        return $this->DisableSendOnBackward;
    }
    /**
     * Set DisableSendOnBackward value
     * @param bool $disableSendOnBackward
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setDisableSendOnBackward($disableSendOnBackward = null)
    {
        // validation for constraint: boolean
        if (!is_null($disableSendOnBackward) && !is_bool($disableSendOnBackward)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disableSendOnBackward)), __LINE__);
        }
        $this->DisableSendOnBackward = $disableSendOnBackward;
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
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setLanguages(\Confirmit\Authoring\ArrayType\ArrayOfInt $languages = null)
    {
        $this->Languages = $languages;
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
     * @return \Confirmit\Authoring\StructType\Email
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
     * Get Descriptions value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2|null
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }
    /**
     * Set Descriptions value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setDescriptions(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString2 $descriptions = null)
    {
        $this->Descriptions = $descriptions;
        return $this;
    }
    /**
     * Get Subjects value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString3|null
     */
    public function getSubjects()
    {
        return $this->Subjects;
    }
    /**
     * Set Subjects value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString3 $subjects
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setSubjects(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString3 $subjects = null)
    {
        $this->Subjects = $subjects;
        return $this;
    }
    /**
     * Get BodyHtmls value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString4|null
     */
    public function getBodyHtmls()
    {
        return $this->BodyHtmls;
    }
    /**
     * Set BodyHtmls value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString4 $bodyHtmls
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setBodyHtmls(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString4 $bodyHtmls = null)
    {
        $this->BodyHtmls = $bodyHtmls;
        return $this;
    }
    /**
     * Get BodyPlaintexts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString5|null
     */
    public function getBodyPlaintexts()
    {
        return $this->BodyPlaintexts;
    }
    /**
     * Set BodyPlaintexts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString5 $bodyPlaintexts
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setBodyPlaintexts(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString5 $bodyPlaintexts = null)
    {
        $this->BodyPlaintexts = $bodyPlaintexts;
        return $this;
    }
    /**
     * Get CustomLinkTexts value
     * @return \Confirmit\Authoring\ArrayType\ArrayOfLanguageString6|null
     */
    public function getCustomLinkTexts()
    {
        return $this->CustomLinkTexts;
    }
    /**
     * Set CustomLinkTexts value
     * @param \Confirmit\Authoring\ArrayType\ArrayOfLanguageString6 $customLinkTexts
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setCustomLinkTexts(\Confirmit\Authoring\ArrayType\ArrayOfLanguageString6 $customLinkTexts = null)
    {
        $this->CustomLinkTexts = $customLinkTexts;
        return $this;
    }
    /**
     * Get To value
     * @return string|null
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param string $to
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setTo($to = null)
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to)), __LINE__);
        }
        $this->To = $to;
        return $this;
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from)), __LINE__);
        }
        $this->From = $from;
        return $this;
    }
    /**
     * Get Cc value
     * @return string|null
     */
    public function getCc()
    {
        return $this->Cc;
    }
    /**
     * Set Cc value
     * @param string $cc
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setCc($cc = null)
    {
        // validation for constraint: string
        if (!is_null($cc) && !is_string($cc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cc)), __LINE__);
        }
        $this->Cc = $cc;
        return $this;
    }
    /**
     * Get Bcc value
     * @return string|null
     */
    public function getBcc()
    {
        return $this->Bcc;
    }
    /**
     * Set Bcc value
     * @param string $bcc
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setBcc($bcc = null)
    {
        // validation for constraint: string
        if (!is_null($bcc) && !is_string($bcc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bcc)), __LINE__);
        }
        $this->Bcc = $bcc;
        return $this;
    }
    /**
     * Get ReplyTo value
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->ReplyTo;
    }
    /**
     * Set ReplyTo value
     * @param string $replyTo
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setReplyTo($replyTo = null)
    {
        // validation for constraint: string
        if (!is_null($replyTo) && !is_string($replyTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($replyTo)), __LINE__);
        }
        $this->ReplyTo = $replyTo;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get ReplyDisplayName value
     * @return string|null
     */
    public function getReplyDisplayName()
    {
        return $this->ReplyDisplayName;
    }
    /**
     * Set ReplyDisplayName value
     * @param string $replyDisplayName
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setReplyDisplayName($replyDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($replyDisplayName) && !is_string($replyDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($replyDisplayName)), __LINE__);
        }
        $this->ReplyDisplayName = $replyDisplayName;
        return $this;
    }
    /**
     * Get OverrideRecipientEmailField value
     * @return string|null
     */
    public function getOverrideRecipientEmailField()
    {
        return $this->OverrideRecipientEmailField;
    }
    /**
     * Set OverrideRecipientEmailField value
     * @param string $overrideRecipientEmailField
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setOverrideRecipientEmailField($overrideRecipientEmailField = null)
    {
        // validation for constraint: string
        if (!is_null($overrideRecipientEmailField) && !is_string($overrideRecipientEmailField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($overrideRecipientEmailField)), __LINE__);
        }
        $this->OverrideRecipientEmailField = $overrideRecipientEmailField;
        return $this;
    }
    /**
     * Get SendEmailForwardField value
     * @return string|null
     */
    public function getSendEmailForwardField()
    {
        return $this->SendEmailForwardField;
    }
    /**
     * Set SendEmailForwardField value
     * @param string $sendEmailForwardField
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setSendEmailForwardField($sendEmailForwardField = null)
    {
        // validation for constraint: string
        if (!is_null($sendEmailForwardField) && !is_string($sendEmailForwardField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sendEmailForwardField)), __LINE__);
        }
        $this->SendEmailForwardField = $sendEmailForwardField;
        return $this;
    }
    /**
     * Get ConfirmationEmailAddress value
     * @return string|null
     */
    public function getConfirmationEmailAddress()
    {
        return $this->ConfirmationEmailAddress;
    }
    /**
     * Set ConfirmationEmailAddress value
     * @param string $confirmationEmailAddress
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setConfirmationEmailAddress($confirmationEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationEmailAddress) && !is_string($confirmationEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationEmailAddress)), __LINE__);
        }
        $this->ConfirmationEmailAddress = $confirmationEmailAddress;
        return $this;
    }
    /**
     * Get AdditionalLinkParameters value
     * @return string|null
     */
    public function getAdditionalLinkParameters()
    {
        return $this->AdditionalLinkParameters;
    }
    /**
     * Set AdditionalLinkParameters value
     * @param string $additionalLinkParameters
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setAdditionalLinkParameters($additionalLinkParameters = null)
    {
        // validation for constraint: string
        if (!is_null($additionalLinkParameters) && !is_string($additionalLinkParameters)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalLinkParameters)), __LINE__);
        }
        $this->AdditionalLinkParameters = $additionalLinkParameters;
        return $this;
    }
    /**
     * Get CustomHeaders value
     * @return string|null
     */
    public function getCustomHeaders()
    {
        return $this->CustomHeaders;
    }
    /**
     * Set CustomHeaders value
     * @param string $customHeaders
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setCustomHeaders($customHeaders = null)
    {
        // validation for constraint: string
        if (!is_null($customHeaders) && !is_string($customHeaders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customHeaders)), __LINE__);
        }
        $this->CustomHeaders = $customHeaders;
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
     * @return \Confirmit\Authoring\StructType\Email
     */
    public function setTranslationStatuses(\Confirmit\Authoring\ArrayType\ArrayOfTranslationStatus $translationStatuses = null)
    {
        $this->TranslationStatuses = $translationStatuses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Email
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
