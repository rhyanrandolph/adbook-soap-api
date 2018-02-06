<?php

namespace FatTail\AdBook;

class ArrayOfMediaElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MediaElement[] $MediaElement
     */
    protected $MediaElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaElement[]
     */
    public function getMediaElement()
    {
      return $this->MediaElement;
    }

    /**
     * @param MediaElement[] $MediaElement
     * @return \FatTail\AdBook\ArrayOfMediaElement
     */
    public function setMediaElement(array $MediaElement = null)
    {
      $this->MediaElement = $MediaElement;
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
      return isset($this->MediaElement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MediaElement
     */
    public function offsetGet($offset)
    {
      return $this->MediaElement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MediaElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MediaElement[] = $value;
      } else {
        $this->MediaElement[$offset] = $value;
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
      unset($this->MediaElement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MediaElement Return the current element
     */
    public function current()
    {
      return current($this->MediaElement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MediaElement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MediaElement);
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
      reset($this->MediaElement);
    }

    /**
     * Countable implementation
     *
     * @return MediaElement Return count of elements
     */
    public function count()
    {
      return count($this->MediaElement);
    }

}
