<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalLookup StructType
 * @subpackage Structs
 */
abstract class ExternalLookup extends AbstractStructBase
{
    /**
     * The Schema
     * Meta informations extracted from the WSDL
     * - use: required
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $Schema;
    /**
     * Constructor method for ExternalLookup
     * @uses ExternalLookup::setSchema()
     * @param string $schema
     */
    public function __construct($schema = null)
    {
        $this
            ->setSchema($schema);
    }
    /**
     * Get Schema value
     * @return string
     */
    public function getSchema()
    {
        return $this->Schema;
    }
    /**
     * Set Schema value
     * @param string $schema
     * @return \Confirmit\Authoring\StructType\ExternalLookup
     */
    public function setSchema($schema = null)
    {
        // validation for constraint: pattern
        if (is_scalar($schema) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $schema)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}", "%s" given', var_export($schema, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($schema) && !is_string($schema)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($schema)), __LINE__);
        }
        $this->Schema = $schema;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\ExternalLookup
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
