<?php

namespace FatTail\AdBook;

class ArrayOfParentClientRelationship implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ParentClientRelationship[] $ParentClientRelationship
     */
    protected $ParentClientRelationship = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ParentClientRelationship[]
     */
    public function getParentClientRelationship()
    {
      return $this->ParentClientRelationship;
    }

    /**
     * @param ParentClientRelationship[] $ParentClientRelationship
     * @return \FatTail\AdBook\ArrayOfParentClientRelationship
     */
    public function setParentClientRelationship(array $ParentClientRelationship = null)
    {
      $this->ParentClientRelationship = $ParentClientRelationship;
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
      return isset($this->ParentClientRelationship[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ParentClientRelationship
     */
    public function offsetGet($offset)
    {
      return $this->ParentClientRelationship[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ParentClientRelationship $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ParentClientRelationship[] = $value;
      } else {
        $this->ParentClientRelationship[$offset] = $value;
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
      unset($this->ParentClientRelationship[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ParentClientRelationship Return the current element
     */
    public function current()
    {
      return current($this->ParentClientRelationship);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ParentClientRelationship);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ParentClientRelationship);
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
      reset($this->ParentClientRelationship);
    }

    /**
     * Countable implementation
     *
     * @return ParentClientRelationship Return count of elements
     */
    public function count()
    {
      return count($this->ParentClientRelationship);
    }

}
