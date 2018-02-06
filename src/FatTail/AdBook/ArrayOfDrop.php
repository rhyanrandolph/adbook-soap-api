<?php

namespace FatTail\AdBook;

class ArrayOfDrop implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Drop[] $Drop
     */
    protected $Drop = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Drop[]
     */
    public function getDrop()
    {
      return $this->Drop;
    }

    /**
     * @param Drop[] $Drop
     * @return \FatTail\AdBook\ArrayOfDrop
     */
    public function setDrop(array $Drop = null)
    {
      $this->Drop = $Drop;
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
      return isset($this->Drop[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Drop
     */
    public function offsetGet($offset)
    {
      return $this->Drop[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Drop $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Drop[] = $value;
      } else {
        $this->Drop[$offset] = $value;
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
      unset($this->Drop[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Drop Return the current element
     */
    public function current()
    {
      return current($this->Drop);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Drop);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Drop);
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
      reset($this->Drop);
    }

    /**
     * Countable implementation
     *
     * @return Drop Return count of elements
     */
    public function count()
    {
      return count($this->Drop);
    }

}
