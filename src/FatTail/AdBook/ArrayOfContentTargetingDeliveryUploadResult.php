<?php

namespace FatTail\AdBook;

class ArrayOfContentTargetingDeliveryUploadResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContentTargetingDeliveryUploadResult[] $ContentTargetingDeliveryUploadResult
     */
    protected $ContentTargetingDeliveryUploadResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContentTargetingDeliveryUploadResult[]
     */
    public function getContentTargetingDeliveryUploadResult()
    {
      return $this->ContentTargetingDeliveryUploadResult;
    }

    /**
     * @param ContentTargetingDeliveryUploadResult[] $ContentTargetingDeliveryUploadResult
     * @return \FatTail\AdBook\ArrayOfContentTargetingDeliveryUploadResult
     */
    public function setContentTargetingDeliveryUploadResult(array $ContentTargetingDeliveryUploadResult = null)
    {
      $this->ContentTargetingDeliveryUploadResult = $ContentTargetingDeliveryUploadResult;
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
      return isset($this->ContentTargetingDeliveryUploadResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContentTargetingDeliveryUploadResult
     */
    public function offsetGet($offset)
    {
      return $this->ContentTargetingDeliveryUploadResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContentTargetingDeliveryUploadResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContentTargetingDeliveryUploadResult[] = $value;
      } else {
        $this->ContentTargetingDeliveryUploadResult[$offset] = $value;
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
      unset($this->ContentTargetingDeliveryUploadResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContentTargetingDeliveryUploadResult Return the current element
     */
    public function current()
    {
      return current($this->ContentTargetingDeliveryUploadResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContentTargetingDeliveryUploadResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContentTargetingDeliveryUploadResult);
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
      reset($this->ContentTargetingDeliveryUploadResult);
    }

    /**
     * Countable implementation
     *
     * @return ContentTargetingDeliveryUploadResult Return count of elements
     */
    public function count()
    {
      return count($this->ContentTargetingDeliveryUploadResult);
    }

}
