<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuestionFormBase StructType
 * @subpackage Structs
 */
abstract class QuestionFormBase extends FormBase
{
    /**
     * The StartPosition
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $StartPosition;
    /**
     * The NotPerformDataCleaningOnMasking
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $NotPerformDataCleaningOnMasking;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Level;
    /**
     * The JscriptExpression
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $JscriptExpression;
    /**
     * The BenchmarkType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BenchmarkType;
    /**
     * The Seed
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Seed;
    /**
     * The ValidationCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ValidationCode;
    /**
     * The ParentGrid3DFormName
     * @var string
     */
    public $ParentGrid3DFormName;
    /**
     * Constructor method for QuestionFormBase
     * @uses QuestionFormBase::setStartPosition()
     * @uses QuestionFormBase::setNotPerformDataCleaningOnMasking()
     * @uses QuestionFormBase::setLevel()
     * @uses QuestionFormBase::setJscriptExpression()
     * @uses QuestionFormBase::setBenchmarkType()
     * @uses QuestionFormBase::setSeed()
     * @uses QuestionFormBase::setValidationCode()
     * @uses QuestionFormBase::setParentGrid3DFormName()
     * @param int $startPosition
     * @param bool $notPerformDataCleaningOnMasking
     * @param int $level
     * @param bool $jscriptExpression
     * @param string $benchmarkType
     * @param int $seed
     * @param string $validationCode
     * @param string $parentGrid3DFormName
     */
    public function __construct($startPosition = null, $notPerformDataCleaningOnMasking = null, $level = null, $jscriptExpression = null, $benchmarkType = null, $seed = null, $validationCode = null, $parentGrid3DFormName = null)
    {
        $this
            ->setStartPosition($startPosition)
            ->setNotPerformDataCleaningOnMasking($notPerformDataCleaningOnMasking)
            ->setLevel($level)
            ->setJscriptExpression($jscriptExpression)
            ->setBenchmarkType($benchmarkType)
            ->setSeed($seed)
            ->setValidationCode($validationCode)
            ->setParentGrid3DFormName($parentGrid3DFormName);
    }
    /**
     * Get StartPosition value
     * @return int
     */
    public function getStartPosition()
    {
        return $this->StartPosition;
    }
    /**
     * Set StartPosition value
     * @param int $startPosition
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
     */
    public function setStartPosition($startPosition = null)
    {
        // validation for constraint: int
        if (!is_null($startPosition) && !is_numeric($startPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($startPosition)), __LINE__);
        }
        $this->StartPosition = $startPosition;
        return $this;
    }
    /**
     * Get NotPerformDataCleaningOnMasking value
     * @return bool
     */
    public function getNotPerformDataCleaningOnMasking()
    {
        return $this->NotPerformDataCleaningOnMasking;
    }
    /**
     * Set NotPerformDataCleaningOnMasking value
     * @param bool $notPerformDataCleaningOnMasking
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
     */
    public function setNotPerformDataCleaningOnMasking($notPerformDataCleaningOnMasking = null)
    {
        // validation for constraint: boolean
        if (!is_null($notPerformDataCleaningOnMasking) && !is_bool($notPerformDataCleaningOnMasking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($notPerformDataCleaningOnMasking)), __LINE__);
        }
        $this->NotPerformDataCleaningOnMasking = $notPerformDataCleaningOnMasking;
        return $this;
    }
    /**
     * Get Level value
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param int $level
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
     */
    public function setLevel($level = null)
    {
        // validation for constraint: int
        if (!is_null($level) && !is_numeric($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($level)), __LINE__);
        }
        $this->Level = $level;
        return $this;
    }
    /**
     * Get JscriptExpression value
     * @return bool
     */
    public function getJscriptExpression()
    {
        return $this->JscriptExpression;
    }
    /**
     * Set JscriptExpression value
     * @param bool $jscriptExpression
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
     */
    public function setJscriptExpression($jscriptExpression = null)
    {
        // validation for constraint: boolean
        if (!is_null($jscriptExpression) && !is_bool($jscriptExpression)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($jscriptExpression)), __LINE__);
        }
        $this->JscriptExpression = $jscriptExpression;
        return $this;
    }
    /**
     * Get BenchmarkType value
     * @return string
     */
    public function getBenchmarkType()
    {
        return $this->BenchmarkType;
    }
    /**
     * Set BenchmarkType value
     * @uses \Confirmit\Authoring\EnumType\BenchmarkFormType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\BenchmarkFormType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $benchmarkType
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
     */
    public function setBenchmarkType($benchmarkType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\BenchmarkFormType::valueIsValid($benchmarkType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $benchmarkType, implode(', ', \Confirmit\Authoring\EnumType\BenchmarkFormType::getValidValues())), __LINE__);
        }
        $this->BenchmarkType = $benchmarkType;
        return $this;
    }
    /**
     * Get Seed value
     * @return int
     */
    public function getSeed()
    {
        return $this->Seed;
    }
    /**
     * Set Seed value
     * @param int $seed
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
     */
    public function setSeed($seed = null)
    {
        // validation for constraint: int
        if (!is_null($seed) && !is_numeric($seed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seed)), __LINE__);
        }
        $this->Seed = $seed;
        return $this;
    }
    /**
     * Get ValidationCode value
     * @return string|null
     */
    public function getValidationCode()
    {
        return $this->ValidationCode;
    }
    /**
     * Set ValidationCode value
     * @param string $validationCode
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
     */
    public function setValidationCode($validationCode = null)
    {
        // validation for constraint: string
        if (!is_null($validationCode) && !is_string($validationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validationCode)), __LINE__);
        }
        $this->ValidationCode = $validationCode;
        return $this;
    }
    /**
     * Get ParentGrid3DFormName value
     * @return string|null
     */
    public function getParentGrid3DFormName()
    {
        return $this->ParentGrid3DFormName;
    }
    /**
     * Set ParentGrid3DFormName value
     * @param string $parentGrid3DFormName
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
     */
    public function setParentGrid3DFormName($parentGrid3DFormName = null)
    {
        // validation for constraint: string
        if (!is_null($parentGrid3DFormName) && !is_string($parentGrid3DFormName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentGrid3DFormName)), __LINE__);
        }
        $this->ParentGrid3DFormName = $parentGrid3DFormName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\QuestionFormBase
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
