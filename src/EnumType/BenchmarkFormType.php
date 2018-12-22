<?php

namespace Confirmit\Authoring\EnumType;

/**
 * This class stands for BenchmarkFormType EnumType
 * @subpackage Enumerations
 */
class BenchmarkFormType
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Measure'
     * @return string 'Measure'
     */
    const VALUE_MEASURE = 'Measure';
    /**
     * Constant for value 'Demography'
     * @return string 'Demography'
     */
    const VALUE_DEMOGRAPHY = 'Demography';
    /**
     * Constant for value 'BenchmarkId'
     * @return string 'BenchmarkId'
     */
    const VALUE_BENCHMARK_ID = 'BenchmarkId';
    /**
     * Constant for value 'MeasureType'
     * @return string 'MeasureType'
     */
    const VALUE_MEASURE_TYPE = 'MeasureType';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_MEASURE
     * @uses self::VALUE_DEMOGRAPHY
     * @uses self::VALUE_BENCHMARK_ID
     * @uses self::VALUE_MEASURE_TYPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_MEASURE,
            self::VALUE_DEMOGRAPHY,
            self::VALUE_BENCHMARK_ID,
            self::VALUE_MEASURE_TYPE,
        );
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
