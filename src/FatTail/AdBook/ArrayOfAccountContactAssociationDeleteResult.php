<?php

namespace FatTail\AdBook;

class ArrayOfAccountContactAssociationDeleteResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountContactAssociationDeleteResult[] $AccountContactAssociationDeleteResult
     */
    protected $AccountContactAssociationDeleteResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountContactAssociationDeleteResult[]
     */
    public function getAccountContactAssociationDeleteResult()
    {
      return $this->AccountContactAssociationDeleteResult;
    }

    /**
     * @param AccountContactAssociationDeleteResult[] $AccountContactAssociationDeleteResult
     * @return \FatTail\AdBook\ArrayOfAccountContactAssociationDeleteResult
     */
    public function setAccountContactAssociationDeleteResult(array $AccountContactAssociationDeleteResult = null)
    {
      $this->AccountContactAssociationDeleteResult = $AccountContactAssociationDeleteResult;
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
      return isset($this->AccountContactAssociationDeleteResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountContactAssociationDeleteResult
     */
    public function offsetGet($offset)
    {
      return $this->AccountContactAssociationDeleteResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountContactAssociationDeleteResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountContactAssociationDeleteResult[] = $value;
      } else {
        $this->AccountContactAssociationDeleteResult[$offset] = $value;
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
      unset($this->AccountContactAssociationDeleteResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountContactAssociationDeleteResult Return the current element
     */
    public function current()
    {
      return current($this->AccountContactAssociationDeleteResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountContactAssociationDeleteResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountContactAssociationDeleteResult);
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
      reset($this->AccountContactAssociationDeleteResult);
    }

    /**
     * Countable implementation
     *
     * @return AccountContactAssociationDeleteResult Return count of elements
     */
    public function count()
    {
      return count($this->AccountContactAssociationDeleteResult);
    }

}
