<?php

namespace FatTail\AdBook;

class ArrayOfRevisionProposal implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RevisionProposal[] $RevisionProposal
     */
    protected $RevisionProposal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RevisionProposal[]
     */
    public function getRevisionProposal()
    {
      return $this->RevisionProposal;
    }

    /**
     * @param RevisionProposal[] $RevisionProposal
     * @return \FatTail\AdBook\ArrayOfRevisionProposal
     */
    public function setRevisionProposal(array $RevisionProposal = null)
    {
      $this->RevisionProposal = $RevisionProposal;
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
      return isset($this->RevisionProposal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RevisionProposal
     */
    public function offsetGet($offset)
    {
      return $this->RevisionProposal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RevisionProposal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RevisionProposal[] = $value;
      } else {
        $this->RevisionProposal[$offset] = $value;
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
      unset($this->RevisionProposal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RevisionProposal Return the current element
     */
    public function current()
    {
      return current($this->RevisionProposal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RevisionProposal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RevisionProposal);
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
      reset($this->RevisionProposal);
    }

    /**
     * Countable implementation
     *
     * @return RevisionProposal Return count of elements
     */
    public function count()
    {
      return count($this->RevisionProposal);
    }

}
