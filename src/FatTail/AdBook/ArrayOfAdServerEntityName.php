<?php

namespace FatTail\AdBook;

class ArrayOfAdServerEntityName implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdServerEntityName[] $AdServerEntityName
     */
    protected $AdServerEntityName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdServerEntityName[]
     */
    public function getAdServerEntityName()
    {
      return $this->AdServerEntityName;
    }

    /**
     * @param AdServerEntityName[] $AdServerEntityName
     * @return \FatTail\AdBook\ArrayOfAdServerEntityName
     */
    public function setAdServerEntityName(array $AdServerEntityName = null)
    {
      $this->AdServerEntityName = $AdServerEntityName;
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
      return isset($this->AdServerEntityName[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdServerEntityName
     */
    public function offsetGet($offset)
    {
      return $this->AdServerEntityName[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdServerEntityName $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdServerEntityName[] = $value;
      } else {
        $this->AdServerEntityName[$offset] = $value;
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
      unset($this->AdServerEntityName[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdServerEntityName Return the current element
     */
    public function current()
    {
      return current($this->AdServerEntityName);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdServerEntityName);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdServerEntityName);
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
      reset($this->AdServerEntityName);
    }

    /**
     * Countable implementation
     *
     * @return AdServerEntityName Return count of elements
     */
    public function count()
    {
      return count($this->AdServerEntityName);
    }

}
