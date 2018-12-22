<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenForm StructType
 * @subpackage Structs
 */
class OpenForm extends QuestionFormBase
{
    /**
     * The Indexed
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Indexed;
    /**
     * The IsBitstreamVariable
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsBitstreamVariable;
    /**
     * The Characteristic
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Characteristic;
    /**
     * The IsDate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsDate;
    /**
     * The IsGeolocation
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IsGeolocation;
    /**
     * The AcceptLeadingZeros
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $AcceptLeadingZeros;
    /**
     * The Unique
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Unique;
    /**
     * The ReplicateDataForMultimode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReplicateDataForMultimode;
    /**
     * The Columns
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Columns;
    /**
     * The Precision
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Precision;
    /**
     * The Scale
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Scale;
    /**
     * The LowerLimit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $LowerLimit;
    /**
     * The UpperLimit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $UpperLimit;
    /**
     * The Rows
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Rows;
    /**
     * The Numeric
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Numeric;
    /**
     * The ReadOnly
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $ReadOnly;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Password;
    /**
     * The LowerLimitType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $LowerLimitType;
    /**
     * The UpperLimitType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $UpperLimitType;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Custom;
    /**
     * The ResizableMode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ResizableMode;
    /**
     * The FormattingAssistance
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $FormattingAssistance;
    /**
     * The Slider
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Slider;
    /**
     * The VerticalSlider
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $VerticalSlider;
    /**
     * The SliderSize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $SliderSize;
    /**
     * The MinDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MinDate;
    /**
     * The MaxDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MaxDate;
    /**
     * The Expression
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expression;
    /**
     * Constructor method for OpenForm
     * @uses OpenForm::setIndexed()
     * @uses OpenForm::setIsBitstreamVariable()
     * @uses OpenForm::setCharacteristic()
     * @uses OpenForm::setIsDate()
     * @uses OpenForm::setIsGeolocation()
     * @uses OpenForm::setAcceptLeadingZeros()
     * @uses OpenForm::setUnique()
     * @uses OpenForm::setReplicateDataForMultimode()
     * @uses OpenForm::setColumns()
     * @uses OpenForm::setPrecision()
     * @uses OpenForm::setScale()
     * @uses OpenForm::setLowerLimit()
     * @uses OpenForm::setUpperLimit()
     * @uses OpenForm::setRows()
     * @uses OpenForm::setNumeric()
     * @uses OpenForm::setReadOnly()
     * @uses OpenForm::setPassword()
     * @uses OpenForm::setLowerLimitType()
     * @uses OpenForm::setUpperLimitType()
     * @uses OpenForm::setCustom()
     * @uses OpenForm::setResizableMode()
     * @uses OpenForm::setFormattingAssistance()
     * @uses OpenForm::setSlider()
     * @uses OpenForm::setVerticalSlider()
     * @uses OpenForm::setSliderSize()
     * @uses OpenForm::setMinDate()
     * @uses OpenForm::setMaxDate()
     * @uses OpenForm::setExpression()
     * @param bool $indexed
     * @param bool $isBitstreamVariable
     * @param int $characteristic
     * @param bool $isDate
     * @param bool $isGeolocation
     * @param bool $acceptLeadingZeros
     * @param bool $unique
     * @param bool $replicateDataForMultimode
     * @param int $columns
     * @param int $precision
     * @param int $scale
     * @param float $lowerLimit
     * @param float $upperLimit
     * @param int $rows
     * @param bool $numeric
     * @param bool $readOnly
     * @param bool $password
     * @param string $lowerLimitType
     * @param string $upperLimitType
     * @param bool $custom
     * @param int $resizableMode
     * @param bool $formattingAssistance
     * @param bool $slider
     * @param bool $verticalSlider
     * @param int $sliderSize
     * @param string $minDate
     * @param string $maxDate
     * @param string $expression
     */
    public function __construct($indexed = null, $isBitstreamVariable = null, $characteristic = null, $isDate = null, $isGeolocation = null, $acceptLeadingZeros = null, $unique = null, $replicateDataForMultimode = null, $columns = null, $precision = null, $scale = null, $lowerLimit = null, $upperLimit = null, $rows = null, $numeric = null, $readOnly = null, $password = null, $lowerLimitType = null, $upperLimitType = null, $custom = null, $resizableMode = null, $formattingAssistance = null, $slider = null, $verticalSlider = null, $sliderSize = null, $minDate = null, $maxDate = null, $expression = null)
    {
        $this
            ->setIndexed($indexed)
            ->setIsBitstreamVariable($isBitstreamVariable)
            ->setCharacteristic($characteristic)
            ->setIsDate($isDate)
            ->setIsGeolocation($isGeolocation)
            ->setAcceptLeadingZeros($acceptLeadingZeros)
            ->setUnique($unique)
            ->setReplicateDataForMultimode($replicateDataForMultimode)
            ->setColumns($columns)
            ->setPrecision($precision)
            ->setScale($scale)
            ->setLowerLimit($lowerLimit)
            ->setUpperLimit($upperLimit)
            ->setRows($rows)
            ->setNumeric($numeric)
            ->setReadOnly($readOnly)
            ->setPassword($password)
            ->setLowerLimitType($lowerLimitType)
            ->setUpperLimitType($upperLimitType)
            ->setCustom($custom)
            ->setResizableMode($resizableMode)
            ->setFormattingAssistance($formattingAssistance)
            ->setSlider($slider)
            ->setVerticalSlider($verticalSlider)
            ->setSliderSize($sliderSize)
            ->setMinDate($minDate)
            ->setMaxDate($maxDate)
            ->setExpression($expression);
    }
    /**
     * Get Indexed value
     * @return bool
     */
    public function getIndexed()
    {
        return $this->Indexed;
    }
    /**
     * Set Indexed value
     * @param bool $indexed
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setIndexed($indexed = null)
    {
        // validation for constraint: boolean
        if (!is_null($indexed) && !is_bool($indexed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indexed)), __LINE__);
        }
        $this->Indexed = $indexed;
        return $this;
    }
    /**
     * Get IsBitstreamVariable value
     * @return bool
     */
    public function getIsBitstreamVariable()
    {
        return $this->IsBitstreamVariable;
    }
    /**
     * Set IsBitstreamVariable value
     * @param bool $isBitstreamVariable
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setIsBitstreamVariable($isBitstreamVariable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBitstreamVariable) && !is_bool($isBitstreamVariable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBitstreamVariable)), __LINE__);
        }
        $this->IsBitstreamVariable = $isBitstreamVariable;
        return $this;
    }
    /**
     * Get Characteristic value
     * @return int
     */
    public function getCharacteristic()
    {
        return $this->Characteristic;
    }
    /**
     * Set Characteristic value
     * @param int $characteristic
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setCharacteristic($characteristic = null)
    {
        // validation for constraint: int
        if (!is_null($characteristic) && !is_numeric($characteristic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($characteristic)), __LINE__);
        }
        $this->Characteristic = $characteristic;
        return $this;
    }
    /**
     * Get IsDate value
     * @return bool
     */
    public function getIsDate()
    {
        return $this->IsDate;
    }
    /**
     * Set IsDate value
     * @param bool $isDate
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setIsDate($isDate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDate) && !is_bool($isDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDate)), __LINE__);
        }
        $this->IsDate = $isDate;
        return $this;
    }
    /**
     * Get IsGeolocation value
     * @return bool
     */
    public function getIsGeolocation()
    {
        return $this->IsGeolocation;
    }
    /**
     * Set IsGeolocation value
     * @param bool $isGeolocation
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setIsGeolocation($isGeolocation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGeolocation) && !is_bool($isGeolocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGeolocation)), __LINE__);
        }
        $this->IsGeolocation = $isGeolocation;
        return $this;
    }
    /**
     * Get AcceptLeadingZeros value
     * @return bool
     */
    public function getAcceptLeadingZeros()
    {
        return $this->AcceptLeadingZeros;
    }
    /**
     * Set AcceptLeadingZeros value
     * @param bool $acceptLeadingZeros
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setAcceptLeadingZeros($acceptLeadingZeros = null)
    {
        // validation for constraint: boolean
        if (!is_null($acceptLeadingZeros) && !is_bool($acceptLeadingZeros)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($acceptLeadingZeros)), __LINE__);
        }
        $this->AcceptLeadingZeros = $acceptLeadingZeros;
        return $this;
    }
    /**
     * Get Unique value
     * @return bool
     */
    public function getUnique()
    {
        return $this->Unique;
    }
    /**
     * Set Unique value
     * @param bool $unique
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setUnique($unique = null)
    {
        // validation for constraint: boolean
        if (!is_null($unique) && !is_bool($unique)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($unique)), __LINE__);
        }
        $this->Unique = $unique;
        return $this;
    }
    /**
     * Get ReplicateDataForMultimode value
     * @return bool
     */
    public function getReplicateDataForMultimode()
    {
        return $this->ReplicateDataForMultimode;
    }
    /**
     * Set ReplicateDataForMultimode value
     * @param bool $replicateDataForMultimode
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setReplicateDataForMultimode($replicateDataForMultimode = null)
    {
        // validation for constraint: boolean
        if (!is_null($replicateDataForMultimode) && !is_bool($replicateDataForMultimode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($replicateDataForMultimode)), __LINE__);
        }
        $this->ReplicateDataForMultimode = $replicateDataForMultimode;
        return $this;
    }
    /**
     * Get Columns value
     * @return int
     */
    public function getColumns()
    {
        return $this->Columns;
    }
    /**
     * Set Columns value
     * @param int $columns
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setColumns($columns = null)
    {
        // validation for constraint: int
        if (!is_null($columns) && !is_numeric($columns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($columns)), __LINE__);
        }
        $this->Columns = $columns;
        return $this;
    }
    /**
     * Get Precision value
     * @return int
     */
    public function getPrecision()
    {
        return $this->Precision;
    }
    /**
     * Set Precision value
     * @param int $precision
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setPrecision($precision = null)
    {
        // validation for constraint: int
        if (!is_null($precision) && !is_numeric($precision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($precision)), __LINE__);
        }
        $this->Precision = $precision;
        return $this;
    }
    /**
     * Get Scale value
     * @return int
     */
    public function getScale()
    {
        return $this->Scale;
    }
    /**
     * Set Scale value
     * @param int $scale
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setScale($scale = null)
    {
        // validation for constraint: int
        if (!is_null($scale) && !is_numeric($scale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scale)), __LINE__);
        }
        $this->Scale = $scale;
        return $this;
    }
    /**
     * Get LowerLimit value
     * @return float
     */
    public function getLowerLimit()
    {
        return $this->LowerLimit;
    }
    /**
     * Set LowerLimit value
     * @param float $lowerLimit
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setLowerLimit($lowerLimit = null)
    {
        $this->LowerLimit = $lowerLimit;
        return $this;
    }
    /**
     * Get UpperLimit value
     * @return float
     */
    public function getUpperLimit()
    {
        return $this->UpperLimit;
    }
    /**
     * Set UpperLimit value
     * @param float $upperLimit
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setUpperLimit($upperLimit = null)
    {
        $this->UpperLimit = $upperLimit;
        return $this;
    }
    /**
     * Get Rows value
     * @return int
     */
    public function getRows()
    {
        return $this->Rows;
    }
    /**
     * Set Rows value
     * @param int $rows
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setRows($rows = null)
    {
        // validation for constraint: int
        if (!is_null($rows) && !is_numeric($rows)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rows)), __LINE__);
        }
        $this->Rows = $rows;
        return $this;
    }
    /**
     * Get Numeric value
     * @return bool
     */
    public function getNumeric()
    {
        return $this->Numeric;
    }
    /**
     * Set Numeric value
     * @param bool $numeric
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setNumeric($numeric = null)
    {
        // validation for constraint: boolean
        if (!is_null($numeric) && !is_bool($numeric)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($numeric)), __LINE__);
        }
        $this->Numeric = $numeric;
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
     * @return \Confirmit\Authoring\StructType\OpenForm
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
     * Get Password value
     * @return bool
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param bool $password
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setPassword($password = null)
    {
        // validation for constraint: boolean
        if (!is_null($password) && !is_bool($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get LowerLimitType value
     * @return string
     */
    public function getLowerLimitType()
    {
        return $this->LowerLimitType;
    }
    /**
     * Set LowerLimitType value
     * @uses \Confirmit\Authoring\EnumType\LowerLimitDataType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\LowerLimitDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $lowerLimitType
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setLowerLimitType($lowerLimitType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\LowerLimitDataType::valueIsValid($lowerLimitType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $lowerLimitType, implode(', ', \Confirmit\Authoring\EnumType\LowerLimitDataType::getValidValues())), __LINE__);
        }
        $this->LowerLimitType = $lowerLimitType;
        return $this;
    }
    /**
     * Get UpperLimitType value
     * @return string
     */
    public function getUpperLimitType()
    {
        return $this->UpperLimitType;
    }
    /**
     * Set UpperLimitType value
     * @uses \Confirmit\Authoring\EnumType\UpperLimitDataType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\UpperLimitDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $upperLimitType
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setUpperLimitType($upperLimitType = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\UpperLimitDataType::valueIsValid($upperLimitType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $upperLimitType, implode(', ', \Confirmit\Authoring\EnumType\UpperLimitDataType::getValidValues())), __LINE__);
        }
        $this->UpperLimitType = $upperLimitType;
        return $this;
    }
    /**
     * Get Custom value
     * @return bool
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param bool $custom
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: boolean
        if (!is_null($custom) && !is_bool($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Get ResizableMode value
     * @return int
     */
    public function getResizableMode()
    {
        return $this->ResizableMode;
    }
    /**
     * Set ResizableMode value
     * @param int $resizableMode
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setResizableMode($resizableMode = null)
    {
        // validation for constraint: int
        if (!is_null($resizableMode) && !is_numeric($resizableMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resizableMode)), __LINE__);
        }
        $this->ResizableMode = $resizableMode;
        return $this;
    }
    /**
     * Get FormattingAssistance value
     * @return bool
     */
    public function getFormattingAssistance()
    {
        return $this->FormattingAssistance;
    }
    /**
     * Set FormattingAssistance value
     * @param bool $formattingAssistance
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setFormattingAssistance($formattingAssistance = null)
    {
        // validation for constraint: boolean
        if (!is_null($formattingAssistance) && !is_bool($formattingAssistance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($formattingAssistance)), __LINE__);
        }
        $this->FormattingAssistance = $formattingAssistance;
        return $this;
    }
    /**
     * Get Slider value
     * @return bool
     */
    public function getSlider()
    {
        return $this->Slider;
    }
    /**
     * Set Slider value
     * @param bool $slider
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setSlider($slider = null)
    {
        // validation for constraint: boolean
        if (!is_null($slider) && !is_bool($slider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($slider)), __LINE__);
        }
        $this->Slider = $slider;
        return $this;
    }
    /**
     * Get VerticalSlider value
     * @return bool
     */
    public function getVerticalSlider()
    {
        return $this->VerticalSlider;
    }
    /**
     * Set VerticalSlider value
     * @param bool $verticalSlider
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setVerticalSlider($verticalSlider = null)
    {
        // validation for constraint: boolean
        if (!is_null($verticalSlider) && !is_bool($verticalSlider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($verticalSlider)), __LINE__);
        }
        $this->VerticalSlider = $verticalSlider;
        return $this;
    }
    /**
     * Get SliderSize value
     * @return int
     */
    public function getSliderSize()
    {
        return $this->SliderSize;
    }
    /**
     * Set SliderSize value
     * @param int $sliderSize
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setSliderSize($sliderSize = null)
    {
        // validation for constraint: int
        if (!is_null($sliderSize) && !is_numeric($sliderSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sliderSize)), __LINE__);
        }
        $this->SliderSize = $sliderSize;
        return $this;
    }
    /**
     * Get MinDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMinDate()
    {
        return isset($this->MinDate) ? $this->MinDate : null;
    }
    /**
     * Set MinDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $minDate
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setMinDate($minDate = null)
    {
        // validation for constraint: string
        if (!is_null($minDate) && !is_string($minDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minDate)), __LINE__);
        }
        if (is_null($minDate) || (is_array($minDate) && empty($minDate))) {
            unset($this->MinDate);
        } else {
            $this->MinDate = $minDate;
        }
        return $this;
    }
    /**
     * Get MaxDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMaxDate()
    {
        return isset($this->MaxDate) ? $this->MaxDate : null;
    }
    /**
     * Set MaxDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $maxDate
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setMaxDate($maxDate = null)
    {
        // validation for constraint: string
        if (!is_null($maxDate) && !is_string($maxDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxDate)), __LINE__);
        }
        if (is_null($maxDate) || (is_array($maxDate) && empty($maxDate))) {
            unset($this->MaxDate);
        } else {
            $this->MaxDate = $maxDate;
        }
        return $this;
    }
    /**
     * Get Expression value
     * @return string|null
     */
    public function getExpression()
    {
        return $this->Expression;
    }
    /**
     * Set Expression value
     * @param string $expression
     * @return \Confirmit\Authoring\StructType\OpenForm
     */
    public function setExpression($expression = null)
    {
        // validation for constraint: string
        if (!is_null($expression) && !is_string($expression)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expression)), __LINE__);
        }
        $this->Expression = $expression;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\OpenForm
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
