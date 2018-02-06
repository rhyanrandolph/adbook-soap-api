<?php

namespace FatTail\AdBook;

class ArrayOfPublisherContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PublisherContact[] $PublisherContact
     */
    protected $PublisherContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PublisherContact[]
     */
    public function getPublisherContact()
    {
      return $this->PublisherContact;
    }

    /**
     * @param PublisherContact[] $PublisherContact
     * @return \FatTail\AdBook\ArrayOfPublisherContact
     */
    public function setPublisherContact(array $PublisherContact = null)
    {
      $this->PublisherContact = $PublisherContact;
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
      return isset($this->PublisherContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PublisherContact
     */
    public function offsetGet($offset)
    {
      return $this->PublisherContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PublisherContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PublisherContact[] = $value;
      } else {
        $this->PublisherContact[$offset] = $value;
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
      unset($this->PublisherContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PublisherContact Return the current element
     */
    public function current()
    {
      return current($this->PublisherContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PublisherContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PublisherContact);
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
      reset($this->PublisherContact);
    }

    /**
     * Countable implementation
     *
     * @return PublisherContact Return count of elements
     */
    public function count()
    {
      return count($this->PublisherContact);
    }

}
