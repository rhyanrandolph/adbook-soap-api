<?php

namespace FatTail\AdBook;

class ArrayOfAccountManagerAssociationDeleteResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountManagerAssociationDeleteResult[] $AccountManagerAssociationDeleteResult
     */
    protected $AccountManagerAssociationDeleteResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountManagerAssociationDeleteResult[]
     */
    public function getAccountManagerAssociationDeleteResult()
    {
      return $this->AccountManagerAssociationDeleteResult;
    }

    /**
     * @param AccountManagerAssociationDeleteResult[] $AccountManagerAssociationDeleteResult
     * @return \FatTail\AdBook\ArrayOfAccountManagerAssociationDeleteResult
     */
    public function setAccountManagerAssociationDeleteResult(array $AccountManagerAssociationDeleteResult = null)
    {
      $this->AccountManagerAssociationDeleteResult = $AccountManagerAssociationDeleteResult;
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
      return isset($this->AccountManagerAssociationDeleteResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountManagerAssociationDeleteResult
     */
    public function offsetGet($offset)
    {
      return $this->AccountManagerAssociationDeleteResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountManagerAssociationDeleteResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountManagerAssociationDeleteResult[] = $value;
      } else {
        $this->AccountManagerAssociationDeleteResult[$offset] = $value;
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
      unset($this->AccountManagerAssociationDeleteResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountManagerAssociationDeleteResult Return the current element
     */
    public function current()
    {
      return current($this->AccountManagerAssociationDeleteResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountManagerAssociationDeleteResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountManagerAssociationDeleteResult);
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
      reset($this->AccountManagerAssociationDeleteResult);
    }

    /**
     * Countable implementation
     *
     * @return AccountManagerAssociationDeleteResult Return count of elements
     */
    public function count()
    {
      return count($this->AccountManagerAssociationDeleteResult);
    }

}
