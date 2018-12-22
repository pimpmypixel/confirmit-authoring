<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSurveyWithHTMLRemovedResponse StructType
 * @subpackage Structs
 */
class ExportSurveyWithHTMLRemovedResponse extends AbstractStructBase
{
    /**
     * The ExportSurveyWithHTMLRemovedResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExportSurveyWithHTMLRemovedResult;
    /**
     * Constructor method for ExportSurveyWithHTMLRemovedResponse
     * @uses ExportSurveyWithHTMLRemovedResponse::setExportSurveyWithHTMLRemovedResult()
     * @param string $exportSurveyWithHTMLRemovedResult
     */
    public function __construct($exportSurveyWithHTMLRemovedResult = null)
    {
        $this
            ->setExportSurveyWithHTMLRemovedResult($exportSurveyWithHTMLRemovedResult);
    }
    /**
     * Get ExportSurveyWithHTMLRemovedResult value
     * @return string|null
     */
    public function getExportSurveyWithHTMLRemovedResult()
    {
        return $this->ExportSurveyWithHTMLRemovedResult;
    }
    /**
     * Set ExportSurveyWithHTMLRemovedResult value
     * @param string $exportSurveyWithHTMLRemovedResult
     * @return \Confirmit\Authoring\StructType\ExportSurveyWithHTMLRemovedResponse
     */
    public function setExportSurveyWithHTMLRemovedResult($exportSurveyWithHTMLRemovedResult = null)
    {
        // validation for constraint: string
        if (!is_null($exportSurveyWithHTMLRemovedResult) && !is_string($exportSurveyWithHTMLRemovedResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportSurveyWithHTMLRemovedResult)), __LINE__);
        }
        $this->ExportSurveyWithHTMLRemovedResult = $exportSurveyWithHTMLRemovedResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ExportSurveyWithHTMLRemovedResponse
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
