<?php

namespace FatTail\AdBook;

class ArrayOfSavedReport implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SavedReport[] $SavedReport
     */
    protected $SavedReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SavedReport[]
     */
    public function getSavedReport()
    {
      return $this->SavedReport;
    }

    /**
     * @param SavedReport[] $SavedReport
     * @return \FatTail\AdBook\ArrayOfSavedReport
     */
    public function setSavedReport(array $SavedReport = null)
    {
      $this->SavedReport = $SavedReport;
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
      return isset($this->SavedReport[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SavedReport
     */
    public function offsetGet($offset)
    {
      return $this->SavedReport[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SavedReport $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SavedReport[] = $value;
      } else {
        $this->SavedReport[$offset] = $value;
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
      unset($this->SavedReport[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SavedReport Return the current element
     */
    public function current()
    {
      return current($this->SavedReport);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SavedReport);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SavedReport);
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
      reset($this->SavedReport);
    }

    /**
     * Countable implementation
     *
     * @return SavedReport Return count of elements
     */
    public function count()
    {
      return count($this->SavedReport);
    }

}
