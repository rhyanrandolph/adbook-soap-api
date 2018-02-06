<?php

namespace FatTail\AdBook;

class ArrayOfServedBy implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServedBy[] $ServedBy
     */
    protected $ServedBy = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServedBy[]
     */
    public function getServedBy()
    {
      return $this->ServedBy;
    }

    /**
     * @param ServedBy[] $ServedBy
     * @return \FatTail\AdBook\ArrayOfServedBy
     */
    public function setServedBy(array $ServedBy = null)
    {
      $this->ServedBy = $ServedBy;
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
      return isset($this->ServedBy[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServedBy
     */
    public function offsetGet($offset)
    {
      return $this->ServedBy[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServedBy $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServedBy[] = $value;
      } else {
        $this->ServedBy[$offset] = $value;
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
      unset($this->ServedBy[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServedBy Return the current element
     */
    public function current()
    {
      return current($this->ServedBy);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServedBy);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServedBy);
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
      reset($this->ServedBy);
    }

    /**
     * Countable implementation
     *
     * @return ServedBy Return count of elements
     */
    public function count()
    {
      return count($this->ServedBy);
    }

}
