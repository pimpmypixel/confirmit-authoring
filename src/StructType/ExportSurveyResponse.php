<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSurveyResponse StructType
 * @subpackage Structs
 */
class ExportSurveyResponse extends AbstractStructBase
{
    /**
     * The ExportSurveyResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExportSurveyResult;
    /**
     * Constructor method for ExportSurveyResponse
     * @uses ExportSurveyResponse::setExportSurveyResult()
     * @param string $exportSurveyResult
     */
    public function __construct($exportSurveyResult = null)
    {
        $this
            ->setExportSurveyResult($exportSurveyResult);
    }
    /**
     * Get ExportSurveyResult value
     * @return string|null
     */
    public function getExportSurveyResult()
    {
        return $this->ExportSurveyResult;
    }
    /**
     * Set ExportSurveyResult value
     * @param string $exportSurveyResult
     * @return \Confirmit\Authoring\StructType\ExportSurveyResponse
     */
    public function setExportSurveyResult($exportSurveyResult = null)
    {
        // validation for constraint: string
        if (!is_null($exportSurveyResult) && !is_string($exportSurveyResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportSurveyResult)), __LINE__);
        }
        $this->ExportSurveyResult = $exportSurveyResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ExportSurveyResponse
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
