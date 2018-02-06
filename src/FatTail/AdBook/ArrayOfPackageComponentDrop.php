<?php

namespace FatTail\AdBook;

class ArrayOfPackageComponentDrop implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PackageComponentDrop[] $PackageComponentDrop
     */
    protected $PackageComponentDrop = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageComponentDrop[]
     */
    public function getPackageComponentDrop()
    {
      return $this->PackageComponentDrop;
    }

    /**
     * @param PackageComponentDrop[] $PackageComponentDrop
     * @return \FatTail\AdBook\ArrayOfPackageComponentDrop
     */
    public function setPackageComponentDrop(array $PackageComponentDrop = null)
    {
      $this->PackageComponentDrop = $PackageComponentDrop;
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
      return isset($this->PackageComponentDrop[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PackageComponentDrop
     */
    public function offsetGet($offset)
    {
      return $this->PackageComponentDrop[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PackageComponentDrop $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PackageComponentDrop[] = $value;
      } else {
        $this->PackageComponentDrop[$offset] = $value;
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
      unset($this->PackageComponentDrop[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageComponentDrop Return the current element
     */
    public function current()
    {
      return current($this->PackageComponentDrop);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageComponentDrop);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageComponentDrop);
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
      reset($this->PackageComponentDrop);
    }

    /**
     * Countable implementation
     *
     * @return PackageComponentDrop Return count of elements
     */
    public function count()
    {
      return count($this->PackageComponentDrop);
    }

}
