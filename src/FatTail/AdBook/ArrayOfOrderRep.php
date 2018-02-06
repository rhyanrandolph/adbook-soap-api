<?php

namespace FatTail\AdBook;

class ArrayOfOrderRep implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderRep[] $OrderRep
     */
    protected $OrderRep = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderRep[]
     */
    public function getOrderRep()
    {
      return $this->OrderRep;
    }

    /**
     * @param OrderRep[] $OrderRep
     * @return \FatTail\AdBook\ArrayOfOrderRep
     */
    public function setOrderRep(array $OrderRep = null)
    {
      $this->OrderRep = $OrderRep;
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
      return isset($this->OrderRep[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderRep
     */
    public function offsetGet($offset)
    {
      return $this->OrderRep[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderRep $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderRep[] = $value;
      } else {
        $this->OrderRep[$offset] = $value;
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
      unset($this->OrderRep[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderRep Return the current element
     */
    public function current()
    {
      return current($this->OrderRep);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderRep);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderRep);
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
      reset($this->OrderRep);
    }

    /**
     * Countable implementation
     *
     * @return OrderRep Return count of elements
     */
    public function count()
    {
      return count($this->OrderRep);
    }

}
