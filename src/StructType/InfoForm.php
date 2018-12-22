<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoForm StructType
 * @subpackage Structs
 */
class InfoForm extends FormBase
{
    /**
     * The ChartAPI
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ChartAPI;
    /**
     * The ChartType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ChartType;
    /**
     * The ChartCopySourceTexts
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ChartCopySourceTexts;
    /**
     * The ChartFor
     * @var string
     */
    public $ChartFor;
    /**
     * Constructor method for InfoForm
     * @uses InfoForm::setChartAPI()
     * @uses InfoForm::setChartType()
     * @uses InfoForm::setChartCopySourceTexts()
     * @uses InfoForm::setChartFor()
     * @param int $chartAPI
     * @param int $chartType
     * @param bool $chartCopySourceTexts
     * @param string $chartFor
     */
    public function __construct($chartAPI = null, $chartType = null, $chartCopySourceTexts = null, $chartFor = null)
    {
        $this
            ->setChartAPI($chartAPI)
            ->setChartType($chartType)
            ->setChartCopySourceTexts($chartCopySourceTexts)
            ->setChartFor($chartFor);
    }
    /**
     * Get ChartAPI value
     * @return int
     */
    public function getChartAPI()
    {
        return $this->ChartAPI;
    }
    /**
     * Set ChartAPI value
     * @param int $chartAPI
     * @return \Confirmit\Authoring\StructType\InfoForm
     */
    public function setChartAPI($chartAPI = null)
    {
        // validation for constraint: int
        if (!is_null($chartAPI) && !is_numeric($chartAPI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($chartAPI)), __LINE__);
        }
        $this->ChartAPI = $chartAPI;
        return $this;
    }
    /**
     * Get ChartType value
     * @return int
     */
    public function getChartType()
    {
        return $this->ChartType;
    }
    /**
     * Set ChartType value
     * @param int $chartType
     * @return \Confirmit\Authoring\StructType\InfoForm
     */
    public function setChartType($chartType = null)
    {
        // validation for constraint: int
        if (!is_null($chartType) && !is_numeric($chartType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($chartType)), __LINE__);
        }
        $this->ChartType = $chartType;
        return $this;
    }
    /**
     * Get ChartCopySourceTexts value
     * @return bool
     */
    public function getChartCopySourceTexts()
    {
        return $this->ChartCopySourceTexts;
    }
    /**
     * Set ChartCopySourceTexts value
     * @param bool $chartCopySourceTexts
     * @return \Confirmit\Authoring\StructType\InfoForm
     */
    public function setChartCopySourceTexts($chartCopySourceTexts = null)
    {
        // validation for constraint: boolean
        if (!is_null($chartCopySourceTexts) && !is_bool($chartCopySourceTexts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($chartCopySourceTexts)), __LINE__);
        }
        $this->ChartCopySourceTexts = $chartCopySourceTexts;
        return $this;
    }
    /**
     * Get ChartFor value
     * @return string|null
     */
    public function getChartFor()
    {
        return $this->ChartFor;
    }
    /**
     * Set ChartFor value
     * @param string $chartFor
     * @return \Confirmit\Authoring\StructType\InfoForm
     */
    public function setChartFor($chartFor = null)
    {
        // validation for constraint: string
        if (!is_null($chartFor) && !is_string($chartFor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chartFor)), __LINE__);
        }
        $this->ChartFor = $chartFor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\InfoForm
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
