<?php

namespace FatTail\AdBook;

class ArrayOfNewsletterAvailabilityRequest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var NewsletterAvailabilityRequest[] $NewsletterAvailabilityRequest
     */
    protected $NewsletterAvailabilityRequest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NewsletterAvailabilityRequest[]
     */
    public function getNewsletterAvailabilityRequest()
    {
      return $this->NewsletterAvailabilityRequest;
    }

    /**
     * @param NewsletterAvailabilityRequest[] $NewsletterAvailabilityRequest
     * @return \FatTail\AdBook\ArrayOfNewsletterAvailabilityRequest
     */
    public function setNewsletterAvailabilityRequest(array $NewsletterAvailabilityRequest = null)
    {
      $this->NewsletterAvailabilityRequest = $NewsletterAvailabilityRequest;
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
      return isset($this->NewsletterAvailabilityRequest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return NewsletterAvailabilityRequest
     */
    public function offsetGet($offset)
    {
      return $this->NewsletterAvailabilityRequest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param NewsletterAvailabilityRequest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->NewsletterAvailabilityRequest[] = $value;
      } else {
        $this->NewsletterAvailabilityRequest[$offset] = $value;
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
      unset($this->NewsletterAvailabilityRequest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return NewsletterAvailabilityRequest Return the current element
     */
    public function current()
    {
      return current($this->NewsletterAvailabilityRequest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->NewsletterAvailabilityRequest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->NewsletterAvailabilityRequest);
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
      reset($this->NewsletterAvailabilityRequest);
    }

    /**
     * Countable implementation
     *
     * @return NewsletterAvailabilityRequest Return count of elements
     */
    public function count()
    {
      return count($this->NewsletterAvailabilityRequest);
    }

}
