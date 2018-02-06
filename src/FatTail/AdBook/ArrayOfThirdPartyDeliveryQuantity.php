<?php

namespace FatTail\AdBook;

class ArrayOfThirdPartyDeliveryQuantity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ThirdPartyDeliveryQuantity[] $ThirdPartyDeliveryQuantity
     */
    protected $ThirdPartyDeliveryQuantity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ThirdPartyDeliveryQuantity[]
     */
    public function getThirdPartyDeliveryQuantity()
    {
      return $this->ThirdPartyDeliveryQuantity;
    }

    /**
     * @param ThirdPartyDeliveryQuantity[] $ThirdPartyDeliveryQuantity
     * @return \FatTail\AdBook\ArrayOfThirdPartyDeliveryQuantity
     */
    public function setThirdPartyDeliveryQuantity(array $ThirdPartyDeliveryQuantity = null)
    {
      $this->ThirdPartyDeliveryQuantity = $ThirdPartyDeliveryQuantity;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ThirdPartyDeliveryQuantity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ThirdPartyDeliveryQuantity
     */
    public function offsetGet($offset)
    {
      return $this->ThirdPartyDeliveryQuantity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ThirdPartyDeliveryQuantity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ThirdPartyDeliveryQuantity[] = $value;
      } else {
        $this->ThirdPartyDeliveryQuantity[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ThirdPartyDeliveryQuantity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ThirdPartyDeliveryQuantity Return the current element
     */
    public function current()
    {
      return current($this->ThirdPartyDeliveryQuantity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ThirdPartyDeliveryQuantity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ThirdPartyDeliveryQuantity);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ThirdPartyDeliveryQuantity);
    }

    /**
     * Countable implementation
     *
     * @return ThirdPartyDeliveryQuantity Return count of elements
     */
    public function count()
    {
      return count($this->ThirdPartyDeliveryQuantity);
    }

}
