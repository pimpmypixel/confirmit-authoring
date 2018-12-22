<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSurveyLayoutResponse StructType
 * @subpackage Structs
 */
class ExportSurveyLayoutResponse extends AbstractStructBase
{
    /**
     * The ExportSurveyLayoutResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExportSurveyLayoutResult;
    /**
     * Constructor method for ExportSurveyLayoutResponse
     * @uses ExportSurveyLayoutResponse::setExportSurveyLayoutResult()
     * @param string $exportSurveyLayoutResult
     */
    public function __construct($exportSurveyLayoutResult = null)
    {
        $this
            ->setExportSurveyLayoutResult($exportSurveyLayoutResult);
    }
    /**
     * Get ExportSurveyLayoutResult value
     * @return string|null
     */
    public function getExportSurveyLayoutResult()
    {
        return $this->ExportSurveyLayoutResult;
    }
    /**
     * Set ExportSurveyLayoutResult value
     * @param string $exportSurveyLayoutResult
     * @return \Confirmit\Authoring\StructType\ExportSurveyLayoutResponse
     */
    public function setExportSurveyLayoutResult($exportSurveyLayoutResult = null)
    {
        // validation for constraint: string
        if (!is_null($exportSurveyLayoutResult) && !is_string($exportSurveyLayoutResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportSurveyLayoutResult)), __LINE__);
        }
        $this->ExportSurveyLayoutResult = $exportSurveyLayoutResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ExportSurveyLayoutResponse
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
