<?php

namespace FatTail\AdBook;

class ArrayOfOrderConfiguration implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderConfiguration[] $OrderConfiguration
     */
    protected $OrderConfiguration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderConfiguration[]
     */
    public function getOrderConfiguration()
    {
      return $this->OrderConfiguration;
    }

    /**
     * @param OrderConfiguration[] $OrderConfiguration
     * @return \FatTail\AdBook\ArrayOfOrderConfiguration
     */
    public function setOrderConfiguration(array $OrderConfiguration = null)
    {
      $this->OrderConfiguration = $OrderConfiguration;
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
      return isset($this->OrderConfiguration[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderConfiguration
     */
    public function offsetGet($offset)
    {
      return $this->OrderConfiguration[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderConfiguration $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderConfiguration[] = $value;
      } else {
        $this->OrderConfiguration[$offset] = $value;
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
      unset($this->OrderConfiguration[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderConfiguration Return the current element
     */
    public function current()
    {
      return current($this->OrderConfiguration);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderConfiguration);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderConfiguration);
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
      reset($this->OrderConfiguration);
    }

    /**
     * Countable implementation
     *
     * @return OrderConfiguration Return count of elements
     */
    public function count()
    {
      return count($this->OrderConfiguration);
    }

}
