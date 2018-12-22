<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetForm StructType
 * @subpackage Structs
 */
class GetForm extends AbstractStructBase
{
    /**
     * The schemaSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $schemaSource;
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $key;
    /**
     * The projectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $projectId;
    /**
     * The form
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\FormBase
     */
    public $form;
    /**
     * The readFilterSimple
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Confirmit\Authoring\StructType\ReadFilterSimple
     */
    public $readFilterSimple;
    /**
     * Constructor method for GetForm
     * @uses GetForm::setSchemaSource()
     * @uses GetForm::setKey()
     * @uses GetForm::setProjectId()
     * @uses GetForm::setForm()
     * @uses GetForm::setReadFilterSimple()
     * @param string $schemaSource
     * @param string $key
     * @param string $projectId
     * @param \Confirmit\Authoring\StructType\FormBase $form
     * @param \Confirmit\Authoring\StructType\ReadFilterSimple $readFilterSimple
     */
    public function __construct($schemaSource = null, $key = null, $projectId = null, \Confirmit\Authoring\StructType\FormBase $form = null, \Confirmit\Authoring\StructType\ReadFilterSimple $readFilterSimple = null)
    {
        $this
            ->setSchemaSource($schemaSource)
            ->setKey($key)
            ->setProjectId($projectId)
            ->setForm($form)
            ->setReadFilterSimple($readFilterSimple);
    }
    /**
     * Get schemaSource value
     * @return string
     */
    public function getSchemaSource()
    {
        return $this->schemaSource;
    }
    /**
     * Set schemaSource value
     * @uses \Confirmit\Authoring\EnumType\SchemaSourceType::valueIsValid()
     * @uses \Confirmit\Authoring\EnumType\SchemaSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $schemaSource
     * @return \Confirmit\Authoring\StructType\GetForm
     */
    public function setSchemaSource($schemaSource = null)
    {
        // validation for constraint: enumeration
        if (!\Confirmit\Authoring\EnumType\SchemaSourceType::valueIsValid($schemaSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $schemaSource, implode(', ', \Confirmit\Authoring\EnumType\SchemaSourceType::getValidValues())), __LINE__);
        }
        $this->schemaSource = $schemaSource;
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Confirmit\Authoring\StructType\GetForm
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get projectId value
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param string $projectId
     * @return \Confirmit\Authoring\StructType\GetForm
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: string
        if (!is_null($projectId) && !is_string($projectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Get form value
     * @return \Confirmit\Authoring\StructType\FormBase|null
     */
    public function getForm()
    {
        return $this->form;
    }
    /**
     * Set form value
     * @param \Confirmit\Authoring\StructType\FormBase $form
     * @return \Confirmit\Authoring\StructType\GetForm
     */
    public function setForm(\Confirmit\Authoring\StructType\FormBase $form = null)
    {
        $this->form = $form;
        return $this;
    }
    /**
     * Get readFilterSimple value
     * @return \Confirmit\Authoring\StructType\ReadFilterSimple|null
     */
    public function getReadFilterSimple()
    {
        return $this->readFilterSimple;
    }
    /**
     * Set readFilterSimple value
     * @param \Confirmit\Authoring\StructType\ReadFilterSimple $readFilterSimple
     * @return \Confirmit\Authoring\StructType\GetForm
     */
    public function setReadFilterSimple(\Confirmit\Authoring\StructType\ReadFilterSimple $readFilterSimple = null)
    {
        $this->readFilterSimple = $readFilterSimple;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\GetForm
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
