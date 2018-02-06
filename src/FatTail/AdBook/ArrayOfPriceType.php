<?php

namespace FatTail\AdBook;

class ArrayOfPriceType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PriceType[] $PriceType
     */
    protected $PriceType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceType[]
     */
    public function getPriceType()
    {
      return $this->PriceType;
    }

    /**
     * @param PriceType[] $PriceType
     * @return \FatTail\AdBook\ArrayOfPriceType
     */
    public function setPriceType(array $PriceType = null)
    {
      $this->PriceType = $PriceType;
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
      return isset($this->PriceType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PriceType
     */
    public function offsetGet($offset)
    {
      return $this->PriceType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PriceType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PriceType[] = $value;
      } else {
        $this->PriceType[$offset] = $value;
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
      unset($this->PriceType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PriceType Return the current element
     */
    public function current()
    {
      return current($this->PriceType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PriceType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PriceType);
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
      reset($this->PriceType);
    }

    /**
     * Countable implementation
     *
     * @return PriceType Return count of elements
     */
    public function count()
    {
      return count($this->PriceType);
    }

}
