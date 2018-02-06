<?php

namespace FatTail\AdBook;

class ArrayOfNewsletterAvailability implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var NewsletterAvailability[] $NewsletterAvailability
     */
    protected $NewsletterAvailability = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NewsletterAvailability[]
     */
    public function getNewsletterAvailability()
    {
      return $this->NewsletterAvailability;
    }

    /**
     * @param NewsletterAvailability[] $NewsletterAvailability
     * @return \FatTail\AdBook\ArrayOfNewsletterAvailability
     */
    public function setNewsletterAvailability(array $NewsletterAvailability = null)
    {
      $this->NewsletterAvailability = $NewsletterAvailability;
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
      return isset($this->NewsletterAvailability[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return NewsletterAvailability
     */
    public function offsetGet($offset)
    {
      return $this->NewsletterAvailability[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param NewsletterAvailability $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->NewsletterAvailability[] = $value;
      } else {
        $this->NewsletterAvailability[$offset] = $value;
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
      unset($this->NewsletterAvailability[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return NewsletterAvailability Return the current element
     */
    public function current()
    {
      return current($this->NewsletterAvailability);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->NewsletterAvailability);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->NewsletterAvailability);
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
      reset($this->NewsletterAvailability);
    }

    /**
     * Countable implementation
     *
     * @return NewsletterAvailability Return count of elements
     */
    public function count()
    {
      return count($this->NewsletterAvailability);
    }

}
