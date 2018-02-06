<?php

namespace FatTail\AdBook;

class ArrayOfFirstPartyDeliveryUploadResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FirstPartyDeliveryUploadResult[] $FirstPartyDeliveryUploadResult
     */
    protected $FirstPartyDeliveryUploadResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FirstPartyDeliveryUploadResult[]
     */
    public function getFirstPartyDeliveryUploadResult()
    {
      return $this->FirstPartyDeliveryUploadResult;
    }

    /**
     * @param FirstPartyDeliveryUploadResult[] $FirstPartyDeliveryUploadResult
     * @return \FatTail\AdBook\ArrayOfFirstPartyDeliveryUploadResult
     */
    public function setFirstPartyDeliveryUploadResult(array $FirstPartyDeliveryUploadResult = null)
    {
      $this->FirstPartyDeliveryUploadResult = $FirstPartyDeliveryUploadResult;
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
      return isset($this->FirstPartyDeliveryUploadResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FirstPartyDeliveryUploadResult
     */
    public function offsetGet($offset)
    {
      return $this->FirstPartyDeliveryUploadResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FirstPartyDeliveryUploadResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FirstPartyDeliveryUploadResult[] = $value;
      } else {
        $this->FirstPartyDeliveryUploadResult[$offset] = $value;
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
      unset($this->FirstPartyDeliveryUploadResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FirstPartyDeliveryUploadResult Return the current element
     */
    public function current()
    {
      return current($this->FirstPartyDeliveryUploadResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FirstPartyDeliveryUploadResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FirstPartyDeliveryUploadResult);
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
      reset($this->FirstPartyDeliveryUploadResult);
    }

    /**
     * Countable implementation
     *
     * @return FirstPartyDeliveryUploadResult Return count of elements
     */
    public function count()
    {
      return count($this->FirstPartyDeliveryUploadResult);
    }

}
