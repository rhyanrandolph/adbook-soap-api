<?php

namespace FatTail\AdBook;

class ArrayOfFieldOutputColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FieldOutputColumn[] $FieldOutputColumn
     */
    protected $FieldOutputColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FieldOutputColumn[]
     */
    public function getFieldOutputColumn()
    {
      return $this->FieldOutputColumn;
    }

    /**
     * @param FieldOutputColumn[] $FieldOutputColumn
     * @return \FatTail\AdBook\ArrayOfFieldOutputColumn
     */
    public function setFieldOutputColumn(array $FieldOutputColumn = null)
    {
      $this->FieldOutputColumn = $FieldOutputColumn;
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
      return isset($this->FieldOutputColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FieldOutputColumn
     */
    public function offsetGet($offset)
    {
      return $this->FieldOutputColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FieldOutputColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FieldOutputColumn[] = $value;
      } else {
        $this->FieldOutputColumn[$offset] = $value;
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
      unset($this->FieldOutputColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FieldOutputColumn Return the current element
     */
    public function current()
    {
      return current($this->FieldOutputColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FieldOutputColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FieldOutputColumn);
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
      reset($this->FieldOutputColumn);
    }

    /**
     * Countable implementation
     *
     * @return FieldOutputColumn Return count of elements
     */
    public function count()
    {
      return count($this->FieldOutputColumn);
    }

}
