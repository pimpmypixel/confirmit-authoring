<?php

namespace Confirmit\Authoring\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SssQuantum StructType
 * @subpackage Structs
 */
class SssQuantum extends AbstractStructBase
{
    /**
     * The maxcardsize
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $maxcardsize;
    /**
     * The seriallen
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $seriallen;
    /**
     * The cardtypelen
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $cardtypelen;
    /**
     * The exportsingleprecode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $exportsingleprecode;
    /**
     * The exportmultipleprecode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $exportmultipleprecode;
    /**
     * The splitmultiplesovercardsborder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $splitmultiplesovercardsborder;
    /**
     * The splitcharactersovercardsborder
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $splitcharactersovercardsborder;
    /**
     * The quantumoptions
     * @var string
     */
    public $quantumoptions;
    /**
     * Constructor method for SssQuantum
     * @uses SssQuantum::setMaxcardsize()
     * @uses SssQuantum::setSeriallen()
     * @uses SssQuantum::setCardtypelen()
     * @uses SssQuantum::setExportsingleprecode()
     * @uses SssQuantum::setExportmultipleprecode()
     * @uses SssQuantum::setSplitmultiplesovercardsborder()
     * @uses SssQuantum::setSplitcharactersovercardsborder()
     * @uses SssQuantum::setQuantumoptions()
     * @param int $maxcardsize
     * @param int $seriallen
     * @param int $cardtypelen
     * @param bool $exportsingleprecode
     * @param bool $exportmultipleprecode
     * @param bool $splitmultiplesovercardsborder
     * @param bool $splitcharactersovercardsborder
     * @param string $quantumoptions
     */
    public function __construct($maxcardsize = null, $seriallen = null, $cardtypelen = null, $exportsingleprecode = null, $exportmultipleprecode = null, $splitmultiplesovercardsborder = null, $splitcharactersovercardsborder = null, $quantumoptions = null)
    {
        $this
            ->setMaxcardsize($maxcardsize)
            ->setSeriallen($seriallen)
            ->setCardtypelen($cardtypelen)
            ->setExportsingleprecode($exportsingleprecode)
            ->setExportmultipleprecode($exportmultipleprecode)
            ->setSplitmultiplesovercardsborder($splitmultiplesovercardsborder)
            ->setSplitcharactersovercardsborder($splitcharactersovercardsborder)
            ->setQuantumoptions($quantumoptions);
    }
    /**
     * Get maxcardsize value
     * @return int
     */
    public function getMaxcardsize()
    {
        return $this->maxcardsize;
    }
    /**
     * Set maxcardsize value
     * @param int $maxcardsize
     * @return \Confirmit\Authoring\StructType\SssQuantum
     */
    public function setMaxcardsize($maxcardsize = null)
    {
        // validation for constraint: int
        if (!is_null($maxcardsize) && !is_numeric($maxcardsize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxcardsize)), __LINE__);
        }
        $this->maxcardsize = $maxcardsize;
        return $this;
    }
    /**
     * Get seriallen value
     * @return int
     */
    public function getSeriallen()
    {
        return $this->seriallen;
    }
    /**
     * Set seriallen value
     * @param int $seriallen
     * @return \Confirmit\Authoring\StructType\SssQuantum
     */
    public function setSeriallen($seriallen = null)
    {
        // validation for constraint: int
        if (!is_null($seriallen) && !is_numeric($seriallen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seriallen)), __LINE__);
        }
        $this->seriallen = $seriallen;
        return $this;
    }
    /**
     * Get cardtypelen value
     * @return int
     */
    public function getCardtypelen()
    {
        return $this->cardtypelen;
    }
    /**
     * Set cardtypelen value
     * @param int $cardtypelen
     * @return \Confirmit\Authoring\StructType\SssQuantum
     */
    public function setCardtypelen($cardtypelen = null)
    {
        // validation for constraint: int
        if (!is_null($cardtypelen) && !is_numeric($cardtypelen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cardtypelen)), __LINE__);
        }
        $this->cardtypelen = $cardtypelen;
        return $this;
    }
    /**
     * Get exportsingleprecode value
     * @return bool
     */
    public function getExportsingleprecode()
    {
        return $this->exportsingleprecode;
    }
    /**
     * Set exportsingleprecode value
     * @param bool $exportsingleprecode
     * @return \Confirmit\Authoring\StructType\SssQuantum
     */
    public function setExportsingleprecode($exportsingleprecode = null)
    {
        // validation for constraint: boolean
        if (!is_null($exportsingleprecode) && !is_bool($exportsingleprecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exportsingleprecode)), __LINE__);
        }
        $this->exportsingleprecode = $exportsingleprecode;
        return $this;
    }
    /**
     * Get exportmultipleprecode value
     * @return bool
     */
    public function getExportmultipleprecode()
    {
        return $this->exportmultipleprecode;
    }
    /**
     * Set exportmultipleprecode value
     * @param bool $exportmultipleprecode
     * @return \Confirmit\Authoring\StructType\SssQuantum
     */
    public function setExportmultipleprecode($exportmultipleprecode = null)
    {
        // validation for constraint: boolean
        if (!is_null($exportmultipleprecode) && !is_bool($exportmultipleprecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exportmultipleprecode)), __LINE__);
        }
        $this->exportmultipleprecode = $exportmultipleprecode;
        return $this;
    }
    /**
     * Get splitmultiplesovercardsborder value
     * @return bool
     */
    public function getSplitmultiplesovercardsborder()
    {
        return $this->splitmultiplesovercardsborder;
    }
    /**
     * Set splitmultiplesovercardsborder value
     * @param bool $splitmultiplesovercardsborder
     * @return \Confirmit\Authoring\StructType\SssQuantum
     */
    public function setSplitmultiplesovercardsborder($splitmultiplesovercardsborder = null)
    {
        // validation for constraint: boolean
        if (!is_null($splitmultiplesovercardsborder) && !is_bool($splitmultiplesovercardsborder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($splitmultiplesovercardsborder)), __LINE__);
        }
        $this->splitmultiplesovercardsborder = $splitmultiplesovercardsborder;
        return $this;
    }
    /**
     * Get splitcharactersovercardsborder value
     * @return bool
     */
    public function getSplitcharactersovercardsborder()
    {
        return $this->splitcharactersovercardsborder;
    }
    /**
     * Set splitcharactersovercardsborder value
     * @param bool $splitcharactersovercardsborder
     * @return \Confirmit\Authoring\StructType\SssQuantum
     */
    public function setSplitcharactersovercardsborder($splitcharactersovercardsborder = null)
    {
        // validation for constraint: boolean
        if (!is_null($splitcharactersovercardsborder) && !is_bool($splitcharactersovercardsborder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($splitcharactersovercardsborder)), __LINE__);
        }
        $this->splitcharactersovercardsborder = $splitcharactersovercardsborder;
        return $this;
    }
    /**
     * Get quantumoptions value
     * @return string|null
     */
    public function getQuantumoptions()
    {
        return $this->quantumoptions;
    }
    /**
     * Set quantumoptions value
     * @param string $quantumoptions
     * @return \Confirmit\Authoring\StructType\SssQuantum
     */
    public function setQuantumoptions($quantumoptions = null)
    {
        // validation for constraint: string
        if (!is_null($quantumoptions) && !is_string($quantumoptions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantumoptions)), __LINE__);
        }
        $this->quantumoptions = $quantumoptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\StructType\SssQuantum
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
