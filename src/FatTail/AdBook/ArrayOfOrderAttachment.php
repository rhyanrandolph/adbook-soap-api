<?php

namespace FatTail\AdBook;

class ArrayOfOrderAttachment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderAttachment[] $OrderAttachment
     */
    protected $OrderAttachment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderAttachment[]
     */
    public function getOrderAttachment()
    {
      return $this->OrderAttachment;
    }

    /**
     * @param OrderAttachment[] $OrderAttachment
     * @return \FatTail\AdBook\ArrayOfOrderAttachment
     */
    public function setOrderAttachment(array $OrderAttachment = null)
    {
      $this->OrderAttachment = $OrderAttachment;
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
      return isset($this->OrderAttachment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderAttachment
     */
    public function offsetGet($offset)
    {
      return $this->OrderAttachment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderAttachment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderAttachment[] = $value;
      } else {
        $this->OrderAttachment[$offset] = $value;
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
      unset($this->OrderAttachment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderAttachment Return the current element
     */
    public function current()
    {
      return current($this->OrderAttachment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderAttachment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderAttachment);
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
      reset($this->OrderAttachment);
    }

    /**
     * Countable implementation
     *
     * @return OrderAttachment Return count of elements
     */
    public function count()
    {
      return count($this->OrderAttachment);
    }

}
