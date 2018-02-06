<?php

namespace FatTail\AdBook;

class ArrayOfRateCardName implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RateCardName[] $RateCardName
     */
    protected $RateCardName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RateCardName[]
     */
    public function getRateCardName()
    {
      return $this->RateCardName;
    }

    /**
     * @param RateCardName[] $RateCardName
     * @return \FatTail\AdBook\ArrayOfRateCardName
     */
    public function setRateCardName(array $RateCardName = null)
    {
      $this->RateCardName = $RateCardName;
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
      return isset($this->RateCardName[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RateCardName
     */
    public function offsetGet($offset)
    {
      return $this->RateCardName[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RateCardName $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RateCardName[] = $value;
      } else {
        $this->RateCardName[$offset] = $value;
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
      unset($this->RateCardName[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RateCardName Return the current element
     */
    public function current()
    {
      return current($this->RateCardName);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RateCardName);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RateCardName);
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
      reset($this->RateCardName);
    }

    /**
     * Countable implementation
     *
     * @return RateCardName Return count of elements
     */
    public function count()
    {
      return count($this->RateCardName);
    }

}
