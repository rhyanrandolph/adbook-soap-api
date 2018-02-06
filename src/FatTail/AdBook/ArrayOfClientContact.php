<?php

namespace FatTail\AdBook;

class ArrayOfClientContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientContact[] $ClientContact
     */
    protected $ClientContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientContact[]
     */
    public function getClientContact()
    {
      return $this->ClientContact;
    }

    /**
     * @param ClientContact[] $ClientContact
     * @return \FatTail\AdBook\ArrayOfClientContact
     */
    public function setClientContact(array $ClientContact = null)
    {
      $this->ClientContact = $ClientContact;
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
      return isset($this->ClientContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientContact
     */
    public function offsetGet($offset)
    {
      return $this->ClientContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientContact[] = $value;
      } else {
        $this->ClientContact[$offset] = $value;
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
      unset($this->ClientContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientContact Return the current element
     */
    public function current()
    {
      return current($this->ClientContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientContact);
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
      reset($this->ClientContact);
    }

    /**
     * Countable implementation
     *
     * @return ClientContact Return count of elements
     */
    public function count()
    {
      return count($this->ClientContact);
    }

}
