<?php

namespace FatTail\AdBook;

class ArrayOfFirstPartyDeliveryQuantity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FirstPartyDeliveryQuantity[] $FirstPartyDeliveryQuantity
     */
    protected $FirstPartyDeliveryQuantity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FirstPartyDeliveryQuantity[]
     */
    public function getFirstPartyDeliveryQuantity()
    {
      return $this->FirstPartyDeliveryQuantity;
    }

    /**
     * @param FirstPartyDeliveryQuantity[] $FirstPartyDeliveryQuantity
     * @return \FatTail\AdBook\ArrayOfFirstPartyDeliveryQuantity
     */
    public function setFirstPartyDeliveryQuantity(array $FirstPartyDeliveryQuantity = null)
    {
      $this->FirstPartyDeliveryQuantity = $FirstPartyDeliveryQuantity;
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
      return isset($this->FirstPartyDeliveryQuantity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FirstPartyDeliveryQuantity
     */
    public function offsetGet($offset)
    {
      return $this->FirstPartyDeliveryQuantity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FirstPartyDeliveryQuantity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FirstPartyDeliveryQuantity[] = $value;
      } else {
        $this->FirstPartyDeliveryQuantity[$offset] = $value;
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
      unset($this->FirstPartyDeliveryQuantity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FirstPartyDeliveryQuantity Return the current element
     */
    public function current()
    {
      return current($this->FirstPartyDeliveryQuantity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FirstPartyDeliveryQuantity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FirstPartyDeliveryQuantity);
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
      reset($this->FirstPartyDeliveryQuantity);
    }

    /**
     * Countable implementation
     *
     * @return FirstPartyDeliveryQuantity Return count of elements
     */
    public function count()
    {
      return count($this->FirstPartyDeliveryQuantity);
    }

}
