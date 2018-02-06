<?php

namespace FatTail\AdBook;

class ArrayOfAccountManagerGroupAssociation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountManagerGroupAssociation[] $AccountManagerGroupAssociation
     */
    protected $AccountManagerGroupAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountManagerGroupAssociation[]
     */
    public function getAccountManagerGroupAssociation()
    {
      return $this->AccountManagerGroupAssociation;
    }

    /**
     * @param AccountManagerGroupAssociation[] $AccountManagerGroupAssociation
     * @return \FatTail\AdBook\ArrayOfAccountManagerGroupAssociation
     */
    public function setAccountManagerGroupAssociation(array $AccountManagerGroupAssociation = null)
    {
      $this->AccountManagerGroupAssociation = $AccountManagerGroupAssociation;
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
      return isset($this->AccountManagerGroupAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountManagerGroupAssociation
     */
    public function offsetGet($offset)
    {
      return $this->AccountManagerGroupAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountManagerGroupAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountManagerGroupAssociation[] = $value;
      } else {
        $this->AccountManagerGroupAssociation[$offset] = $value;
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
      unset($this->AccountManagerGroupAssociation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountManagerGroupAssociation Return the current element
     */
    public function current()
    {
      return current($this->AccountManagerGroupAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountManagerGroupAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountManagerGroupAssociation);
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
      reset($this->AccountManagerGroupAssociation);
    }

    /**
     * Countable implementation
     *
     * @return AccountManagerGroupAssociation Return count of elements
     */
    public function count()
    {
      return count($this->AccountManagerGroupAssociation);
    }

}
