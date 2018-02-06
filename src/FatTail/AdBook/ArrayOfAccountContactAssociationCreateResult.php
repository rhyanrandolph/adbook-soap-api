<?php

namespace FatTail\AdBook;

class ArrayOfAccountContactAssociationCreateResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountContactAssociationCreateResult[] $AccountContactAssociationCreateResult
     */
    protected $AccountContactAssociationCreateResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountContactAssociationCreateResult[]
     */
    public function getAccountContactAssociationCreateResult()
    {
      return $this->AccountContactAssociationCreateResult;
    }

    /**
     * @param AccountContactAssociationCreateResult[] $AccountContactAssociationCreateResult
     * @return \FatTail\AdBook\ArrayOfAccountContactAssociationCreateResult
     */
    public function setAccountContactAssociationCreateResult(array $AccountContactAssociationCreateResult = null)
    {
      $this->AccountContactAssociationCreateResult = $AccountContactAssociationCreateResult;
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
      return isset($this->AccountContactAssociationCreateResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountContactAssociationCreateResult
     */
    public function offsetGet($offset)
    {
      return $this->AccountContactAssociationCreateResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountContactAssociationCreateResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountContactAssociationCreateResult[] = $value;
      } else {
        $this->AccountContactAssociationCreateResult[$offset] = $value;
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
      unset($this->AccountContactAssociationCreateResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountContactAssociationCreateResult Return the current element
     */
    public function current()
    {
      return current($this->AccountContactAssociationCreateResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountContactAssociationCreateResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountContactAssociationCreateResult);
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
      reset($this->AccountContactAssociationCreateResult);
    }

    /**
     * Countable implementation
     *
     * @return AccountContactAssociationCreateResult Return count of elements
     */
    public function count()
    {
      return count($this->AccountContactAssociationCreateResult);
    }

}
