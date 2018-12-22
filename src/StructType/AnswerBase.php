<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnswerBase StructType
 * @subpackage Structs
 */
abstract class AnswerBase extends AbstractStructBase
{
    /**
     * The Other
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Other;
    /**
     * The KeepPosition
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $KeepPosition;
    /**
     * The _Objid_Xml
     * @var string
     */
    public $_Objid_Xml;
    /**
     * The Precode
     * @var string
     */
    public $Precode;
    /**
     * The ListSource
     * @var string
     */
    public $ListSource;
    /**
     * The ChartColor
     * @var string
     */
    public $ChartColor;
    /**
     * The AnswerStyle
     * @var string
     */
    public $AnswerStyle;
    /**
     * The StyleName
     * @var string
     */
    public $StyleName;
    /**
     * Constructor method for AnswerBase
     * @uses AnswerBase::setOther()
     * @uses AnswerBase::setKeepPosition()
     * @uses AnswerBase::set_Objid_Xml()
     * @uses AnswerBase::setPrecode()
     * @uses AnswerBase::setListSource()
     * @uses AnswerBase::setChartColor()
     * @uses AnswerBase::setAnswerStyle()
     * @uses AnswerBase::setStyleName()
     * @param bool $other
     * @param bool $keepPosition
     * @param string $_Objid_Xml
     * @param string $precode
     * @param string $listSource
     * @param string $chartColor
     * @param string $answerStyle
     * @param string $styleName
     */
    public function __construct($other = null, $keepPosition = null, $_Objid_Xml = null, $precode = null, $listSource = null, $chartColor = null, $answerStyle = null, $styleName = null)
    {
        $this
            ->setOther($other)
            ->setKeepPosition($keepPosition)
            ->set_Objid_Xml($_Objid_Xml)
            ->setPrecode($precode)
            ->setListSource($listSource)
            ->setChartColor($chartColor)
            ->setAnswerStyle($answerStyle)
            ->setStyleName($styleName);
    }
    /**
     * Get Other value
     * @return bool
     */
    public function getOther()
    {
        return $this->Other;
    }
    /**
     * Set Other value
     * @param bool $other
     * @return \Confirmit\Authoring\StructType\AnswerBase
     */
    public function setOther($other = null)
    {
        // validation for constraint: boolean
        if (!is_null($other) && !is_bool($other)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($other)), __LINE__);
        }
        $this->Other = $other;
        return $this;
    }
    /**
     * Get KeepPosition value
     * @return bool
     */
    public function getKeepPosition()
    {
        return $this->KeepPosition;
    }
    /**
     * Set KeepPosition value
     * @param bool $keepPosition
     * @return \Confirmit\Authoring\StructType\AnswerBase
     */
    public function setKeepPosition($keepPosition = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepPosition) && !is_bool($keepPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($keepPosition)), __LINE__);
        }
        $this->KeepPosition = $keepPosition;
        return $this;
    }
    /**
     * Get _Objid_Xml value
     * @return string|null
     */
    public function get_Objid_Xml()
    {
        return $this->_Objid_Xml;
    }
    /**
     * Set _Objid_Xml value
     * @param string $_Objid_Xml
     * @return \Confirmit\Authoring\StructType\AnswerBase
     */
    public function set_Objid_Xml($_Objid_Xml = null)
    {
        // validation for constraint: string
        if (!is_null($_Objid_Xml) && !is_string($_Objid_Xml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_Objid_Xml)), __LINE__);
        }
        $this->_Objid_Xml = $_Objid_Xml;
        return $this;
    }
    /**
     * Get Precode value
     * @return string|null
     */
    public function getPrecode()
    {
        return $this->Precode;
    }
    /**
     * Set Precode value
     * @param string $precode
     * @return \Confirmit\Authoring\StructType\AnswerBase
     */
    public function setPrecode($precode = null)
    {
        // validation for constraint: string
        if (!is_null($precode) && !is_string($precode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($precode)), __LINE__);
        }
        $this->Precode = $precode;
        return $this;
    }
    /**
     * Get ListSource value
     * @return string|null
     */
    public function getListSource()
    {
        return $this->ListSource;
    }
    /**
     * Set ListSource value
     * @param string $listSource
     * @return \Confirmit\Authoring\StructType\AnswerBase
     */
    public function setListSource($listSource = null)
    {
        // validation for constraint: string
        if (!is_null($listSource) && !is_string($listSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listSource)), __LINE__);
        }
        $this->ListSource = $listSource;
        return $this;
    }
    /**
     * Get ChartColor value
     * @return string|null
     */
    public function getChartColor()
    {
        return $this->ChartColor;
    }
    /**
     * Set ChartColor value
     * @param string $chartColor
     * @return \Confirmit\Authoring\StructType\AnswerBase
     */
    public function setChartColor($chartColor = null)
    {
        // validation for constraint: string
        if (!is_null($chartColor) && !is_string($chartColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chartColor)), __LINE__);
        }
        $this->ChartColor = $chartColor;
        return $this;
    }
    /**
     * Get AnswerStyle value
     * @return string|null
     */
    public function getAnswerStyle()
    {
        return $this->AnswerStyle;
    }
    /**
     * Set AnswerStyle value
     * @param string $answerStyle
     * @return \Confirmit\Authoring\StructType\AnswerBase
     */
    public function setAnswerStyle($answerStyle = null)
    {
        // validation for constraint: string
        if (!is_null($answerStyle) && !is_string($answerStyle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($answerStyle)), __LINE__);
        }
        $this->AnswerStyle = $answerStyle;
        return $this;
    }
    /**
     * Get StyleName value
     * @return string|null
     */
    public function getStyleName()
    {
        return $this->StyleName;
    }
    /**
     * Set StyleName value
     * @param string $styleName
     * @return \Confirmit\Authoring\StructType\AnswerBase
     */
    public function setStyleName($styleName = null)
    {
        // validation for constraint: string
        if (!is_null($styleName) && !is_string($styleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($styleName)), __LINE__);
        }
        $this->StyleName = $styleName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\AnswerBase
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
