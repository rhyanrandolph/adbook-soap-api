<?php

namespace FatTail\AdBook;

class ArrayOfPackageComponentDropCreateResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PackageComponentDropCreateResult[] $PackageComponentDropCreateResult
     */
    protected $PackageComponentDropCreateResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageComponentDropCreateResult[]
     */
    public function getPackageComponentDropCreateResult()
    {
      return $this->PackageComponentDropCreateResult;
    }

    /**
     * @param PackageComponentDropCreateResult[] $PackageComponentDropCreateResult
     * @return \FatTail\AdBook\ArrayOfPackageComponentDropCreateResult
     */
    public function setPackageComponentDropCreateResult(array $PackageComponentDropCreateResult = null)
    {
      $this->PackageComponentDropCreateResult = $PackageComponentDropCreateResult;
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
      return isset($this->PackageComponentDropCreateResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PackageComponentDropCreateResult
     */
    public function offsetGet($offset)
    {
      return $this->PackageComponentDropCreateResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PackageComponentDropCreateResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PackageComponentDropCreateResult[] = $value;
      } else {
        $this->PackageComponentDropCreateResult[$offset] = $value;
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
      unset($this->PackageComponentDropCreateResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageComponentDropCreateResult Return the current element
     */
    public function current()
    {
      return current($this->PackageComponentDropCreateResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageComponentDropCreateResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageComponentDropCreateResult);
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
      reset($this->PackageComponentDropCreateResult);
    }

    /**
     * Countable implementation
     *
     * @return PackageComponentDropCreateResult Return count of elements
     */
    public function count()
    {
      return count($this->PackageComponentDropCreateResult);
    }

}
