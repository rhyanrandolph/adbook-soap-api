<?php

namespace FatTail\AdBook;

class ArrayOfMediaElementProperty implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MediaElementProperty[] $MediaElementProperty
     */
    protected $MediaElementProperty = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaElementProperty[]
     */
    public function getMediaElementProperty()
    {
      return $this->MediaElementProperty;
    }

    /**
     * @param MediaElementProperty[] $MediaElementProperty
     * @return \FatTail\AdBook\ArrayOfMediaElementProperty
     */
    public function setMediaElementProperty(array $MediaElementProperty = null)
    {
      $this->MediaElementProperty = $MediaElementProperty;
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
      return isset($this->MediaElementProperty[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MediaElementProperty
     */
    public function offsetGet($offset)
    {
      return $this->MediaElementProperty[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MediaElementProperty $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MediaElementProperty[] = $value;
      } else {
        $this->MediaElementProperty[$offset] = $value;
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
      unset($this->MediaElementProperty[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MediaElementProperty Return the current element
     */
    public function current()
    {
      return current($this->MediaElementProperty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MediaElementProperty);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MediaElementProperty);
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
      reset($this->MediaElementProperty);
    }

    /**
     * Countable implementation
     *
     * @return MediaElementProperty Return count of elements
     */
    public function count()
    {
      return count($this->MediaElementProperty);
    }

}
