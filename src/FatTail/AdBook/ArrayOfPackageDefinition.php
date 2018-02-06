<?php

namespace FatTail\AdBook;

class ArrayOfPackageDefinition implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PackageDefinition[] $PackageDefinition
     */
    protected $PackageDefinition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageDefinition[]
     */
    public function getPackageDefinition()
    {
      return $this->PackageDefinition;
    }

    /**
     * @param PackageDefinition[] $PackageDefinition
     * @return \FatTail\AdBook\ArrayOfPackageDefinition
     */
    public function setPackageDefinition(array $PackageDefinition = null)
    {
      $this->PackageDefinition = $PackageDefinition;
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
      return isset($this->PackageDefinition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PackageDefinition
     */
    public function offsetGet($offset)
    {
      return $this->PackageDefinition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PackageDefinition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PackageDefinition[] = $value;
      } else {
        $this->PackageDefinition[$offset] = $value;
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
      unset($this->PackageDefinition[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageDefinition Return the current element
     */
    public function current()
    {
      return current($this->PackageDefinition);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageDefinition);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageDefinition);
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
      reset($this->PackageDefinition);
    }

    /**
     * Countable implementation
     *
     * @return PackageDefinition Return count of elements
     */
    public function count()
    {
      return count($this->PackageDefinition);
    }

}
