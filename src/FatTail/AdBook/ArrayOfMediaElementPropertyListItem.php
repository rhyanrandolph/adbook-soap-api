<?php

namespace FatTail\AdBook;

class ArrayOfMediaElementPropertyListItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MediaElementPropertyListItem[] $MediaElementPropertyListItem
     */
    protected $MediaElementPropertyListItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaElementPropertyListItem[]
     */
    public function getMediaElementPropertyListItem()
    {
      return $this->MediaElementPropertyListItem;
    }

    /**
     * @param MediaElementPropertyListItem[] $MediaElementPropertyListItem
     * @return \FatTail\AdBook\ArrayOfMediaElementPropertyListItem
     */
    public function setMediaElementPropertyListItem(array $MediaElementPropertyListItem = null)
    {
      $this->MediaElementPropertyListItem = $MediaElementPropertyListItem;
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
      return isset($this->MediaElementPropertyListItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MediaElementPropertyListItem
     */
    public function offsetGet($offset)
    {
      return $this->MediaElementPropertyListItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MediaElementPropertyListItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MediaElementPropertyListItem[] = $value;
      } else {
        $this->MediaElementPropertyListItem[$offset] = $value;
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
      unset($this->MediaElementPropertyListItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MediaElementPropertyListItem Return the current element
     */
    public function current()
    {
      return current($this->MediaElementPropertyListItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MediaElementPropertyListItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MediaElementPropertyListItem);
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
      reset($this->MediaElementPropertyListItem);
    }

    /**
     * Countable implementation
     *
     * @return MediaElementPropertyListItem Return count of elements
     */
    public function count()
    {
      return count($this->MediaElementPropertyListItem);
    }

}
