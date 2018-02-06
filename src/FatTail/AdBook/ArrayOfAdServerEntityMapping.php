<?php

namespace FatTail\AdBook;

class ArrayOfAdServerEntityMapping implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdServerEntityMapping[] $AdServerEntityMapping
     */
    protected $AdServerEntityMapping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdServerEntityMapping[]
     */
    public function getAdServerEntityMapping()
    {
      return $this->AdServerEntityMapping;
    }

    /**
     * @param AdServerEntityMapping[] $AdServerEntityMapping
     * @return \FatTail\AdBook\ArrayOfAdServerEntityMapping
     */
    public function setAdServerEntityMapping(array $AdServerEntityMapping = null)
    {
      $this->AdServerEntityMapping = $AdServerEntityMapping;
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
      return isset($this->AdServerEntityMapping[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdServerEntityMapping
     */
    public function offsetGet($offset)
    {
      return $this->AdServerEntityMapping[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdServerEntityMapping $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdServerEntityMapping[] = $value;
      } else {
        $this->AdServerEntityMapping[$offset] = $value;
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
      unset($this->AdServerEntityMapping[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdServerEntityMapping Return the current element
     */
    public function current()
    {
      return current($this->AdServerEntityMapping);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdServerEntityMapping);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdServerEntityMapping);
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
      reset($this->AdServerEntityMapping);
    }

    /**
     * Countable implementation
     *
     * @return AdServerEntityMapping Return count of elements
     */
    public function count()
    {
      return count($this->AdServerEntityMapping);
    }

}
