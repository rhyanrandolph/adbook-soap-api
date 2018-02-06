<?php

namespace FatTail\AdBook;

class ArrayOfUpdateDropBillingStatusResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UpdateDropBillingStatusResult[] $UpdateDropBillingStatusResult
     */
    protected $UpdateDropBillingStatusResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateDropBillingStatusResult[]
     */
    public function getUpdateDropBillingStatusResult()
    {
      return $this->UpdateDropBillingStatusResult;
    }

    /**
     * @param UpdateDropBillingStatusResult[] $UpdateDropBillingStatusResult
     * @return \FatTail\AdBook\ArrayOfUpdateDropBillingStatusResult
     */
    public function setUpdateDropBillingStatusResult(array $UpdateDropBillingStatusResult = null)
    {
      $this->UpdateDropBillingStatusResult = $UpdateDropBillingStatusResult;
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
      return isset($this->UpdateDropBillingStatusResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UpdateDropBillingStatusResult
     */
    public function offsetGet($offset)
    {
      return $this->UpdateDropBillingStatusResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UpdateDropBillingStatusResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UpdateDropBillingStatusResult[] = $value;
      } else {
        $this->UpdateDropBillingStatusResult[$offset] = $value;
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
      unset($this->UpdateDropBillingStatusResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UpdateDropBillingStatusResult Return the current element
     */
    public function current()
    {
      return current($this->UpdateDropBillingStatusResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UpdateDropBillingStatusResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UpdateDropBillingStatusResult);
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
      reset($this->UpdateDropBillingStatusResult);
    }

    /**
     * Countable implementation
     *
     * @return UpdateDropBillingStatusResult Return count of elements
     */
    public function count()
    {
      return count($this->UpdateDropBillingStatusResult);
    }

}
