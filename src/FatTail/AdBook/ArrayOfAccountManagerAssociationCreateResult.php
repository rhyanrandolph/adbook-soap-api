<?php

namespace FatTail\AdBook;

class ArrayOfAccountManagerAssociationCreateResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountManagerAssociationCreateResult[] $AccountManagerAssociationCreateResult
     */
    protected $AccountManagerAssociationCreateResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountManagerAssociationCreateResult[]
     */
    public function getAccountManagerAssociationCreateResult()
    {
      return $this->AccountManagerAssociationCreateResult;
    }

    /**
     * @param AccountManagerAssociationCreateResult[] $AccountManagerAssociationCreateResult
     * @return \FatTail\AdBook\ArrayOfAccountManagerAssociationCreateResult
     */
    public function setAccountManagerAssociationCreateResult(array $AccountManagerAssociationCreateResult = null)
    {
      $this->AccountManagerAssociationCreateResult = $AccountManagerAssociationCreateResult;
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
      return isset($this->AccountManagerAssociationCreateResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountManagerAssociationCreateResult
     */
    public function offsetGet($offset)
    {
      return $this->AccountManagerAssociationCreateResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountManagerAssociationCreateResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountManagerAssociationCreateResult[] = $value;
      } else {
        $this->AccountManagerAssociationCreateResult[$offset] = $value;
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
      unset($this->AccountManagerAssociationCreateResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountManagerAssociationCreateResult Return the current element
     */
    public function current()
    {
      return current($this->AccountManagerAssociationCreateResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountManagerAssociationCreateResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountManagerAssociationCreateResult);
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
      reset($this->AccountManagerAssociationCreateResult);
    }

    /**
     * Countable implementation
     *
     * @return AccountManagerAssociationCreateResult Return count of elements
     */
    public function count()
    {
      return count($this->AccountManagerAssociationCreateResult);
    }

}
