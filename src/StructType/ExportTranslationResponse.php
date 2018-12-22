<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportTranslationResponse StructType
 * @subpackage Structs
 */
class ExportTranslationResponse extends AbstractStructBase
{
    /**
     * The ExportTranslationResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExportTranslationResult;
    /**
     * Constructor method for ExportTranslationResponse
     * @uses ExportTranslationResponse::setExportTranslationResult()
     * @param string $exportTranslationResult
     */
    public function __construct($exportTranslationResult = null)
    {
        $this
            ->setExportTranslationResult($exportTranslationResult);
    }
    /**
     * Get ExportTranslationResult value
     * @return string|null
     */
    public function getExportTranslationResult()
    {
        return $this->ExportTranslationResult;
    }
    /**
     * Set ExportTranslationResult value
     * @param string $exportTranslationResult
     * @return \Confirmit\Authoring\StructType\ExportTranslationResponse
     */
    public function setExportTranslationResult($exportTranslationResult = null)
    {
        // validation for constraint: string
        if (!is_null($exportTranslationResult) && !is_string($exportTranslationResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportTranslationResult)), __LINE__);
        }
        $this->ExportTranslationResult = $exportTranslationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ExportTranslationResponse
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
