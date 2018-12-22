<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalColumnAnswer StructType
 * @subpackage Structs
 */
class AdditionalColumnAnswer extends AnswerBase
{
    /**
     * The TableId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TableId;
    /**
     * The ColumnName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ColumnName;
    /**
     * Constructor method for AdditionalColumnAnswer
     * @uses AdditionalColumnAnswer::setTableId()
     * @uses AdditionalColumnAnswer::setColumnName()
     * @param int $tableId
     * @param string $columnName
     */
    public function __construct($tableId = null, $columnName = null)
    {
        $this
            ->setTableId($tableId)
            ->setColumnName($columnName);
    }
    /**
     * Get TableId value
     * @return int
     */
    public function getTableId()
    {
        return $this->TableId;
    }
    /**
     * Set TableId value
     * @param int $tableId
     * @return \Confirmit\Authoring\StructType\AdditionalColumnAnswer
     */
    public function setTableId($tableId = null)
    {
        // validation for constraint: int
        if (!is_null($tableId) && !is_numeric($tableId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tableId)), __LINE__);
        }
        $this->TableId = $tableId;
        return $this;
    }
    /**
     * Get ColumnName value
     * @return string|null
     */
    public function getColumnName()
    {
        return $this->ColumnName;
    }
    /**
     * Set ColumnName value
     * @param string $columnName
     * @return \Confirmit\Authoring\StructType\AdditionalColumnAnswer
     */
    public function setColumnName($columnName = null)
    {
        // validation for constraint: string
        if (!is_null($columnName) && !is_string($columnName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($columnName)), __LINE__);
        }
        $this->ColumnName = $columnName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\AdditionalColumnAnswer
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
