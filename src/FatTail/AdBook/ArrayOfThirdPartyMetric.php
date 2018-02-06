<?php

namespace FatTail\AdBook;

class ArrayOfThirdPartyMetric implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ThirdPartyMetric[] $ThirdPartyMetric
     */
    protected $ThirdPartyMetric = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ThirdPartyMetric[]
     */
    public function getThirdPartyMetric()
    {
      return $this->ThirdPartyMetric;
    }

    /**
     * @param ThirdPartyMetric[] $ThirdPartyMetric
     * @return \FatTail\AdBook\ArrayOfThirdPartyMetric
     */
    public function setThirdPartyMetric(array $ThirdPartyMetric = null)
    {
      $this->ThirdPartyMetric = $ThirdPartyMetric;
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
      return isset($this->ThirdPartyMetric[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ThirdPartyMetric
     */
    public function offsetGet($offset)
    {
      return $this->ThirdPartyMetric[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ThirdPartyMetric $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ThirdPartyMetric[] = $value;
      } else {
        $this->ThirdPartyMetric[$offset] = $value;
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
      unset($this->ThirdPartyMetric[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ThirdPartyMetric Return the current element
     */
    public function current()
    {
      return current($this->ThirdPartyMetric);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ThirdPartyMetric);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ThirdPartyMetric);
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
      reset($this->ThirdPartyMetric);
    }

    /**
     * Countable implementation
     *
     * @return ThirdPartyMetric Return count of elements
     */
    public function count()
    {
      return count($this->ThirdPartyMetric);
    }

}
