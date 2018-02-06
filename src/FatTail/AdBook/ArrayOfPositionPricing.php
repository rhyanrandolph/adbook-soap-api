<?php

namespace FatTail\AdBook;

class ArrayOfPositionPricing implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PositionPricing[] $PositionPricing
     */
    protected $PositionPricing = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PositionPricing[]
     */
    public function getPositionPricing()
    {
      return $this->PositionPricing;
    }

    /**
     * @param PositionPricing[] $PositionPricing
     * @return \FatTail\AdBook\ArrayOfPositionPricing
     */
    public function setPositionPricing(array $PositionPricing = null)
    {
      $this->PositionPricing = $PositionPricing;
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
      return isset($this->PositionPricing[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PositionPricing
     */
    public function offsetGet($offset)
    {
      return $this->PositionPricing[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PositionPricing $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PositionPricing[] = $value;
      } else {
        $this->PositionPricing[$offset] = $value;
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
      unset($this->PositionPricing[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PositionPricing Return the current element
     */
    public function current()
    {
      return current($this->PositionPricing);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PositionPricing);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PositionPricing);
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
      reset($this->PositionPricing);
    }

    /**
     * Countable implementation
     *
     * @return PositionPricing Return count of elements
     */
    public function count()
    {
      return count($this->PositionPricing);
    }

}
