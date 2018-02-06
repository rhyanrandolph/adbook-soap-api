<?php

namespace FatTail\AdBook;

class ArrayOfMetricOutputColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MetricOutputColumn[] $MetricOutputColumn
     */
    protected $MetricOutputColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MetricOutputColumn[]
     */
    public function getMetricOutputColumn()
    {
      return $this->MetricOutputColumn;
    }

    /**
     * @param MetricOutputColumn[] $MetricOutputColumn
     * @return \FatTail\AdBook\ArrayOfMetricOutputColumn
     */
    public function setMetricOutputColumn(array $MetricOutputColumn = null)
    {
      $this->MetricOutputColumn = $MetricOutputColumn;
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
      return isset($this->MetricOutputColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MetricOutputColumn
     */
    public function offsetGet($offset)
    {
      return $this->MetricOutputColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MetricOutputColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MetricOutputColumn[] = $value;
      } else {
        $this->MetricOutputColumn[$offset] = $value;
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
      unset($this->MetricOutputColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MetricOutputColumn Return the current element
     */
    public function current()
    {
      return current($this->MetricOutputColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MetricOutputColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MetricOutputColumn);
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
      reset($this->MetricOutputColumn);
    }

    /**
     * Countable implementation
     *
     * @return MetricOutputColumn Return count of elements
     */
    public function count()
    {
      return count($this->MetricOutputColumn);
    }

}
