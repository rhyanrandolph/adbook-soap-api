<?php

namespace FatTail\AdBook;

class ArrayOfParentClientRelationshipResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ParentClientRelationshipResult[] $ParentClientRelationshipResult
     */
    protected $ParentClientRelationshipResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ParentClientRelationshipResult[]
     */
    public function getParentClientRelationshipResult()
    {
      return $this->ParentClientRelationshipResult;
    }

    /**
     * @param ParentClientRelationshipResult[] $ParentClientRelationshipResult
     * @return \FatTail\AdBook\ArrayOfParentClientRelationshipResult
     */
    public function setParentClientRelationshipResult(array $ParentClientRelationshipResult = null)
    {
      $this->ParentClientRelationshipResult = $ParentClientRelationshipResult;
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
      return isset($this->ParentClientRelationshipResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ParentClientRelationshipResult
     */
    public function offsetGet($offset)
    {
      return $this->ParentClientRelationshipResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ParentClientRelationshipResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ParentClientRelationshipResult[] = $value;
      } else {
        $this->ParentClientRelationshipResult[$offset] = $value;
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
      unset($this->ParentClientRelationshipResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ParentClientRelationshipResult Return the current element
     */
    public function current()
    {
      return current($this->ParentClientRelationshipResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ParentClientRelationshipResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ParentClientRelationshipResult);
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
      reset($this->ParentClientRelationshipResult);
    }

    /**
     * Countable implementation
     *
     * @return ParentClientRelationshipResult Return count of elements
     */
    public function count()
    {
      return count($this->ParentClientRelationshipResult);
    }

}
