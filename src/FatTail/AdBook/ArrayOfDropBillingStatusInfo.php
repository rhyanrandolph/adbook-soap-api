<?php

namespace FatTail\AdBook;

class ArrayOfDropBillingStatusInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropBillingStatusInfo[] $DropBillingStatusInfo
     */
    protected $DropBillingStatusInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropBillingStatusInfo[]
     */
    public function getDropBillingStatusInfo()
    {
      return $this->DropBillingStatusInfo;
    }

    /**
     * @param DropBillingStatusInfo[] $DropBillingStatusInfo
     * @return \FatTail\AdBook\ArrayOfDropBillingStatusInfo
     */
    public function setDropBillingStatusInfo(array $DropBillingStatusInfo = null)
    {
      $this->DropBillingStatusInfo = $DropBillingStatusInfo;
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
      return isset($this->DropBillingStatusInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropBillingStatusInfo
     */
    public function offsetGet($offset)
    {
      return $this->DropBillingStatusInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropBillingStatusInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropBillingStatusInfo[] = $value;
      } else {
        $this->DropBillingStatusInfo[$offset] = $value;
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
      unset($this->DropBillingStatusInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropBillingStatusInfo Return the current element
     */
    public function current()
    {
      return current($this->DropBillingStatusInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropBillingStatusInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropBillingStatusInfo);
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
      reset($this->DropBillingStatusInfo);
    }

    /**
     * Countable implementation
     *
     * @return DropBillingStatusInfo Return count of elements
     */
    public function count()
    {
      return count($this->DropBillingStatusInfo);
    }

}
