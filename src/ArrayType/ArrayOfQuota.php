<?php

namespace Confirmit\Authoring\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuota ArrayType
 * @subpackage Arrays
 */
class ArrayOfQuota extends AbstractStructArrayBase
{
    /**
     * The Quota
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Confirmit\Authoring\StructType\Quota[]
     */
    public $Quota;
    /**
     * Constructor method for ArrayOfQuota
     * @uses ArrayOfQuota::setQuota()
     * @param \Confirmit\Authoring\StructType\Quota[] $quota
     */
    public function __construct(array $quota = array())
    {
        $this
            ->setQuota($quota);
    }
    /**
     * Get Quota value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Confirmit\Authoring\StructType\Quota[]|null
     */
    public function getQuota()
    {
        return isset($this->Quota) ? $this->Quota : null;
    }
    /**
     * Set Quota value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\Quota[] $quota
     * @return \Confirmit\Authoring\ArrayType\ArrayOfQuota
     */
    public function setQuota(array $quota = array())
    {
        foreach ($quota as $arrayOfQuotaQuotaItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuotaQuotaItem instanceof \Confirmit\Authoring\StructType\Quota) {
                throw new \InvalidArgumentException(sprintf('The Quota property can only contain items of \Confirmit\Authoring\StructType\Quota, "%s" given', is_object($arrayOfQuotaQuotaItem) ? get_class($arrayOfQuotaQuotaItem) : gettype($arrayOfQuotaQuotaItem)), __LINE__);
            }
        }
        if (is_null($quota) || (is_array($quota) && empty($quota))) {
            unset($this->Quota);
        } else {
            $this->Quota = $quota;
        }
        return $this;
    }
    /**
     * Add item to Quota value
     * @throws \InvalidArgumentException
     * @param \Confirmit\Authoring\StructType\Quota $item
     * @return \Confirmit\Authoring\ArrayType\ArrayOfQuota
     */
    public function addToQuota(\Confirmit\Authoring\StructType\Quota $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Confirmit\Authoring\StructType\Quota) {
            throw new \InvalidArgumentException(sprintf('The Quota property can only contain items of \Confirmit\Authoring\StructType\Quota, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Quota[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Confirmit\Authoring\StructType\Quota|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Confirmit\Authoring\StructType\Quota|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Confirmit\Authoring\StructType\Quota|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Confirmit\Authoring\StructType\Quota|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Confirmit\Authoring\StructType\Quota|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Quota
     */
    public function getAttributeName()
    {
        return 'Quota';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Authoring\ArrayType\ArrayOfQuota
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
