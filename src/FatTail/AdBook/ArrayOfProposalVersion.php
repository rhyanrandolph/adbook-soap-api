<?php

namespace FatTail\AdBook;

class ArrayOfProposalVersion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProposalVersion[] $ProposalVersion
     */
    protected $ProposalVersion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProposalVersion[]
     */
    public function getProposalVersion()
    {
      return $this->ProposalVersion;
    }

    /**
     * @param ProposalVersion[] $ProposalVersion
     * @return \FatTail\AdBook\ArrayOfProposalVersion
     */
    public function setProposalVersion(array $ProposalVersion = null)
    {
      $this->ProposalVersion = $ProposalVersion;
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
      return isset($this->ProposalVersion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProposalVersion
     */
    public function offsetGet($offset)
    {
      return $this->ProposalVersion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProposalVersion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProposalVersion[] = $value;
      } else {
        $this->ProposalVersion[$offset] = $value;
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
      unset($this->ProposalVersion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProposalVersion Return the current element
     */
    public function current()
    {
      return current($this->ProposalVersion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProposalVersion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProposalVersion);
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
      reset($this->ProposalVersion);
    }

    /**
     * Countable implementation
     *
     * @return ProposalVersion Return count of elements
     */
    public function count()
    {
      return count($this->ProposalVersion);
    }

}
