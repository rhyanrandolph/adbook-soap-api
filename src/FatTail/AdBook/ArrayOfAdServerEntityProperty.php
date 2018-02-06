<?php

namespace FatTail\AdBook;

class ArrayOfAdServerEntityProperty implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdServerEntityProperty[] $AdServerEntityProperty
     */
    protected $AdServerEntityProperty = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdServerEntityProperty[]
     */
    public function getAdServerEntityProperty()
    {
      return $this->AdServerEntityProperty;
    }

    /**
     * @param AdServerEntityProperty[] $AdServerEntityProperty
     * @return \FatTail\AdBook\ArrayOfAdServerEntityProperty
     */
    public function setAdServerEntityProperty(array $AdServerEntityProperty = null)
    {
      $this->AdServerEntityProperty = $AdServerEntityProperty;
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
      return isset($this->AdServerEntityProperty[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdServerEntityProperty
     */
    public function offsetGet($offset)
    {
      return $this->AdServerEntityProperty[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdServerEntityProperty $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdServerEntityProperty[] = $value;
      } else {
        $this->AdServerEntityProperty[$offset] = $value;
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
      unset($this->AdServerEntityProperty[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdServerEntityProperty Return the current element
     */
    public function current()
    {
      return current($this->AdServerEntityProperty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdServerEntityProperty);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdServerEntityProperty);
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
      reset($this->AdServerEntityProperty);
    }

    /**
     * Countable implementation
     *
     * @return AdServerEntityProperty Return count of elements
     */
    public function count()
    {
      return count($this->AdServerEntityProperty);
    }

}
