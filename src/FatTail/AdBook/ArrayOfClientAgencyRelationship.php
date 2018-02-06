<?php

namespace FatTail\AdBook;

class ArrayOfClientAgencyRelationship implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientAgencyRelationship[] $ClientAgencyRelationship
     */
    protected $ClientAgencyRelationship = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientAgencyRelationship[]
     */
    public function getClientAgencyRelationship()
    {
      return $this->ClientAgencyRelationship;
    }

    /**
     * @param ClientAgencyRelationship[] $ClientAgencyRelationship
     * @return \FatTail\AdBook\ArrayOfClientAgencyRelationship
     */
    public function setClientAgencyRelationship(array $ClientAgencyRelationship = null)
    {
      $this->ClientAgencyRelationship = $ClientAgencyRelationship;
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
      return isset($this->ClientAgencyRelationship[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientAgencyRelationship
     */
    public function offsetGet($offset)
    {
      return $this->ClientAgencyRelationship[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientAgencyRelationship $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientAgencyRelationship[] = $value;
      } else {
        $this->ClientAgencyRelationship[$offset] = $value;
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
      unset($this->ClientAgencyRelationship[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientAgencyRelationship Return the current element
     */
    public function current()
    {
      return current($this->ClientAgencyRelationship);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientAgencyRelationship);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientAgencyRelationship);
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
      reset($this->ClientAgencyRelationship);
    }

    /**
     * Countable implementation
     *
     * @return ClientAgencyRelationship Return count of elements
     */
    public function count()
    {
      return count($this->ClientAgencyRelationship);
    }

}
