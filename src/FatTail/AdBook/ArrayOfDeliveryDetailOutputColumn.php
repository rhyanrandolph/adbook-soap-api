<?php

namespace FatTail\AdBook;

class ArrayOfDeliveryDetailOutputColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeliveryDetailOutputColumn[] $DeliveryDetailOutputColumn
     */
    protected $DeliveryDetailOutputColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeliveryDetailOutputColumn[]
     */
    public function getDeliveryDetailOutputColumn()
    {
      return $this->DeliveryDetailOutputColumn;
    }

    /**
     * @param DeliveryDetailOutputColumn[] $DeliveryDetailOutputColumn
     * @return \FatTail\AdBook\ArrayOfDeliveryDetailOutputColumn
     */
    public function setDeliveryDetailOutputColumn(array $DeliveryDetailOutputColumn = null)
    {
      $this->DeliveryDetailOutputColumn = $DeliveryDetailOutputColumn;
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
      return isset($this->DeliveryDetailOutputColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeliveryDetailOutputColumn
     */
    public function offsetGet($offset)
    {
      return $this->DeliveryDetailOutputColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeliveryDetailOutputColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DeliveryDetailOutputColumn[] = $value;
      } else {
        $this->DeliveryDetailOutputColumn[$offset] = $value;
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
      unset($this->DeliveryDetailOutputColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeliveryDetailOutputColumn Return the current element
     */
    public function current()
    {
      return current($this->DeliveryDetailOutputColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeliveryDetailOutputColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeliveryDetailOutputColumn);
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
      reset($this->DeliveryDetailOutputColumn);
    }

    /**
     * Countable implementation
     *
     * @return DeliveryDetailOutputColumn Return count of elements
     */
    public function count()
    {
      return count($this->DeliveryDetailOutputColumn);
    }

}
