<?php

namespace FatTail\AdBook;

class ArrayOfAdServer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdServer[] $AdServer
     */
    protected $AdServer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdServer[]
     */
    public function getAdServer()
    {
      return $this->AdServer;
    }

    /**
     * @param AdServer[] $AdServer
     * @return \FatTail\AdBook\ArrayOfAdServer
     */
    public function setAdServer(array $AdServer = null)
    {
      $this->AdServer = $AdServer;
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
      return isset($this->AdServer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdServer
     */
    public function offsetGet($offset)
    {
      return $this->AdServer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdServer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdServer[] = $value;
      } else {
        $this->AdServer[$offset] = $value;
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
      unset($this->AdServer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdServer Return the current element
     */
    public function current()
    {
      return current($this->AdServer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdServer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdServer);
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
      reset($this->AdServer);
    }

    /**
     * Countable implementation
     *
     * @return AdServer Return count of elements
     */
    public function count()
    {
      return count($this->AdServer);
    }

}
