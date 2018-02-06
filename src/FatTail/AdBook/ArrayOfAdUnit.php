<?php

namespace FatTail\AdBook;

class ArrayOfAdUnit implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdUnit[] $AdUnit
     */
    protected $AdUnit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdUnit[]
     */
    public function getAdUnit()
    {
      return $this->AdUnit;
    }

    /**
     * @param AdUnit[] $AdUnit
     * @return \FatTail\AdBook\ArrayOfAdUnit
     */
    public function setAdUnit(array $AdUnit = null)
    {
      $this->AdUnit = $AdUnit;
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
      return isset($this->AdUnit[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdUnit
     */
    public function offsetGet($offset)
    {
      return $this->AdUnit[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdUnit $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdUnit[] = $value;
      } else {
        $this->AdUnit[$offset] = $value;
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
      unset($this->AdUnit[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdUnit Return the current element
     */
    public function current()
    {
      return current($this->AdUnit);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdUnit);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdUnit);
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
      reset($this->AdUnit);
    }

    /**
     * Countable implementation
     *
     * @return AdUnit Return count of elements
     */
    public function count()
    {
      return count($this->AdUnit);
    }

}
