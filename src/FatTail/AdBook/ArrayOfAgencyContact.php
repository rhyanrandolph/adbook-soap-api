<?php

namespace FatTail\AdBook;

class ArrayOfAgencyContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AgencyContact[] $AgencyContact
     */
    protected $AgencyContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AgencyContact[]
     */
    public function getAgencyContact()
    {
      return $this->AgencyContact;
    }

    /**
     * @param AgencyContact[] $AgencyContact
     * @return \FatTail\AdBook\ArrayOfAgencyContact
     */
    public function setAgencyContact(array $AgencyContact = null)
    {
      $this->AgencyContact = $AgencyContact;
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
      return isset($this->AgencyContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AgencyContact
     */
    public function offsetGet($offset)
    {
      return $this->AgencyContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AgencyContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AgencyContact[] = $value;
      } else {
        $this->AgencyContact[$offset] = $value;
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
      unset($this->AgencyContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AgencyContact Return the current element
     */
    public function current()
    {
      return current($this->AgencyContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AgencyContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AgencyContact);
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
      reset($this->AgencyContact);
    }

    /**
     * Countable implementation
     *
     * @return AgencyContact Return count of elements
     */
    public function count()
    {
      return count($this->AgencyContact);
    }

}
