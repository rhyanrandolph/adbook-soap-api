<?php

namespace FatTail\AdBook;

class ArrayOfPackageComponentDropDeleteResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PackageComponentDropDeleteResult[] $PackageComponentDropDeleteResult
     */
    protected $PackageComponentDropDeleteResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageComponentDropDeleteResult[]
     */
    public function getPackageComponentDropDeleteResult()
    {
      return $this->PackageComponentDropDeleteResult;
    }

    /**
     * @param PackageComponentDropDeleteResult[] $PackageComponentDropDeleteResult
     * @return \FatTail\AdBook\ArrayOfPackageComponentDropDeleteResult
     */
    public function setPackageComponentDropDeleteResult(array $PackageComponentDropDeleteResult = null)
    {
      $this->PackageComponentDropDeleteResult = $PackageComponentDropDeleteResult;
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
      return isset($this->PackageComponentDropDeleteResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PackageComponentDropDeleteResult
     */
    public function offsetGet($offset)
    {
      return $this->PackageComponentDropDeleteResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PackageComponentDropDeleteResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PackageComponentDropDeleteResult[] = $value;
      } else {
        $this->PackageComponentDropDeleteResult[$offset] = $value;
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
      unset($this->PackageComponentDropDeleteResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageComponentDropDeleteResult Return the current element
     */
    public function current()
    {
      return current($this->PackageComponentDropDeleteResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageComponentDropDeleteResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageComponentDropDeleteResult);
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
      reset($this->PackageComponentDropDeleteResult);
    }

    /**
     * Countable implementation
     *
     * @return PackageComponentDropDeleteResult Return count of elements
     */
    public function count()
    {
      return count($this->PackageComponentDropDeleteResult);
    }

}
