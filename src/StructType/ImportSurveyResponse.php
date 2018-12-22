<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportSurveyResponse StructType
 * @subpackage Structs
 */
class ImportSurveyResponse extends AbstractStructBase
{
    /**
     * The ImportSurveyResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImportSurveyResult;
    /**
     * Constructor method for ImportSurveyResponse
     * @uses ImportSurveyResponse::setImportSurveyResult()
     * @param string $importSurveyResult
     */
    public function __construct($importSurveyResult = null)
    {
        $this
            ->setImportSurveyResult($importSurveyResult);
    }
    /**
     * Get ImportSurveyResult value
     * @return string|null
     */
    public function getImportSurveyResult()
    {
        return $this->ImportSurveyResult;
    }
    /**
     * Set ImportSurveyResult value
     * @param string $importSurveyResult
     * @return \Confirmit\Authoring\StructType\ImportSurveyResponse
     */
    public function setImportSurveyResult($importSurveyResult = null)
    {
        // validation for constraint: string
        if (!is_null($importSurveyResult) && !is_string($importSurveyResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importSurveyResult)), __LINE__);
        }
        $this->ImportSurveyResult = $importSurveyResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ImportSurveyResponse
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
