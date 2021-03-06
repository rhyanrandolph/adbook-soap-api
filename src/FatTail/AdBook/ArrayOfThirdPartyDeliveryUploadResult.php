<?php

namespace FatTail\AdBook;

class ArrayOfThirdPartyDeliveryUploadResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ThirdPartyDeliveryUploadResult[] $ThirdPartyDeliveryUploadResult
     */
    protected $ThirdPartyDeliveryUploadResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ThirdPartyDeliveryUploadResult[]
     */
    public function getThirdPartyDeliveryUploadResult()
    {
      return $this->ThirdPartyDeliveryUploadResult;
    }

    /**
     * @param ThirdPartyDeliveryUploadResult[] $ThirdPartyDeliveryUploadResult
     * @return \FatTail\AdBook\ArrayOfThirdPartyDeliveryUploadResult
     */
    public function setThirdPartyDeliveryUploadResult(array $ThirdPartyDeliveryUploadResult = null)
    {
      $this->ThirdPartyDeliveryUploadResult = $ThirdPartyDeliveryUploadResult;
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
      return isset($this->ThirdPartyDeliveryUploadResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ThirdPartyDeliveryUploadResult
     */
    public function offsetGet($offset)
    {
      return $this->ThirdPartyDeliveryUploadResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ThirdPartyDeliveryUploadResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ThirdPartyDeliveryUploadResult[] = $value;
      } else {
        $this->ThirdPartyDeliveryUploadResult[$offset] = $value;
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
      unset($this->ThirdPartyDeliveryUploadResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ThirdPartyDeliveryUploadResult Return the current element
     */
    public function current()
    {
      return current($this->ThirdPartyDeliveryUploadResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ThirdPartyDeliveryUploadResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ThirdPartyDeliveryUploadResult);
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
      reset($this->ThirdPartyDeliveryUploadResult);
    }

    /**
     * Countable implementation
     *
     * @return ThirdPartyDeliveryUploadResult Return count of elements
     */
    public function count()
    {
      return count($this->ThirdPartyDeliveryUploadResult);
    }

}
