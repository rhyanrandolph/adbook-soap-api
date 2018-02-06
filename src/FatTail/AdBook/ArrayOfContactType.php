<?php

namespace FatTail\AdBook;

class ArrayOfContactType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContactType[] $ContactType
     */
    protected $ContactType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactType[]
     */
    public function getContactType()
    {
      return $this->ContactType;
    }

    /**
     * @param ContactType[] $ContactType
     * @return \FatTail\AdBook\ArrayOfContactType
     */
    public function setContactType(array $ContactType = null)
    {
      $this->ContactType = $ContactType;
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
      return isset($this->ContactType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContactType
     */
    public function offsetGet($offset)
    {
      return $this->ContactType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContactType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContactType[] = $value;
      } else {
        $this->ContactType[$offset] = $value;
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
      unset($this->ContactType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContactType Return the current element
     */
    public function current()
    {
      return current($this->ContactType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContactType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContactType);
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
      reset($this->ContactType);
    }

    /**
     * Countable implementation
     *
     * @return ContactType Return count of elements
     */
    public function count()
    {
      return count($this->ContactType);
    }

}
