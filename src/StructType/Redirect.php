<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Redirect StructType
 * @subpackage Structs
 */
class Redirect extends PredefinedScriptBase
{
    /**
     * The NoExit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $NoExit;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * Constructor method for Redirect
     * @uses Redirect::setNoExit()
     * @uses Redirect::setURL()
     * @param bool $noExit
     * @param string $uRL
     */
    public function __construct($noExit = null, $uRL = null)
    {
        $this
            ->setNoExit($noExit)
            ->setURL($uRL);
    }
    /**
     * Get NoExit value
     * @return bool
     */
    public function getNoExit()
    {
        return $this->NoExit;
    }
    /**
     * Set NoExit value
     * @param bool $noExit
     * @return \Confirmit\Authoring\StructType\Redirect
     */
    public function setNoExit($noExit = null)
    {
        // validation for constraint: boolean
        if (!is_null($noExit) && !is_bool($noExit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($noExit)), __LINE__);
        }
        $this->NoExit = $noExit;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Confirmit\Authoring\StructType\Redirect
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\Redirect
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
