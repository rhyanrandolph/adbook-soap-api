<?php

namespace FatTail\AdBook;

class ArrayOfAccountManagerGroupAssociationDeleteResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountManagerGroupAssociationDeleteResult[] $AccountManagerGroupAssociationDeleteResult
     */
    protected $AccountManagerGroupAssociationDeleteResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountManagerGroupAssociationDeleteResult[]
     */
    public function getAccountManagerGroupAssociationDeleteResult()
    {
      return $this->AccountManagerGroupAssociationDeleteResult;
    }

    /**
     * @param AccountManagerGroupAssociationDeleteResult[] $AccountManagerGroupAssociationDeleteResult
     * @return \FatTail\AdBook\ArrayOfAccountManagerGroupAssociationDeleteResult
     */
    public function setAccountManagerGroupAssociationDeleteResult(array $AccountManagerGroupAssociationDeleteResult = null)
    {
      $this->AccountManagerGroupAssociationDeleteResult = $AccountManagerGroupAssociationDeleteResult;
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
      return isset($this->AccountManagerGroupAssociationDeleteResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountManagerGroupAssociationDeleteResult
     */
    public function offsetGet($offset)
    {
      return $this->AccountManagerGroupAssociationDeleteResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountManagerGroupAssociationDeleteResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountManagerGroupAssociationDeleteResult[] = $value;
      } else {
        $this->AccountManagerGroupAssociationDeleteResult[$offset] = $value;
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
      unset($this->AccountManagerGroupAssociationDeleteResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountManagerGroupAssociationDeleteResult Return the current element
     */
    public function current()
    {
      return current($this->AccountManagerGroupAssociationDeleteResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountManagerGroupAssociationDeleteResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountManagerGroupAssociationDeleteResult);
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
      reset($this->AccountManagerGroupAssociationDeleteResult);
    }

    /**
     * Countable implementation
     *
     * @return AccountManagerGroupAssociationDeleteResult Return count of elements
     */
    public function count()
    {
      return count($this->AccountManagerGroupAssociationDeleteResult);
    }

}
