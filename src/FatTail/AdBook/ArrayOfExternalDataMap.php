<?php

namespace FatTail\AdBook;

class ArrayOfExternalDataMap implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ExternalDataMap[] $ExternalDataMap
     */
    protected $ExternalDataMap = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExternalDataMap[]
     */
    public function getExternalDataMap()
    {
      return $this->ExternalDataMap;
    }

    /**
     * @param ExternalDataMap[] $ExternalDataMap
     * @return \FatTail\AdBook\ArrayOfExternalDataMap
     */
    public function setExternalDataMap(array $ExternalDataMap = null)
    {
      $this->ExternalDataMap = $ExternalDataMap;
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
      return isset($this->ExternalDataMap[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ExternalDataMap
     */
    public function offsetGet($offset)
    {
      return $this->ExternalDataMap[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ExternalDataMap $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ExternalDataMap[] = $value;
      } else {
        $this->ExternalDataMap[$offset] = $value;
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
      unset($this->ExternalDataMap[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ExternalDataMap Return the current element
     */
    public function current()
    {
      return current($this->ExternalDataMap);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ExternalDataMap);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ExternalDataMap);
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
      reset($this->ExternalDataMap);
    }

    /**
     * Countable implementation
     *
     * @return ExternalDataMap Return count of elements
     */
    public function count()
    {
      return count($this->ExternalDataMap);
    }

}
