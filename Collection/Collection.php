<?php

/**
 * TE comment:
 * You need to use getHash in add, remove, check functions
 * example: $this->storage[$this->getHash($key)] = $data
 */
class Collection 
{
    private $storage = [];

    //Adds an object inside the  storage
    public function add($key, $data = null)
    {
	    if ($data == null) {
	        $this->storage[] = $key;
	    } else { $this->storage[$this->generationHash($data)] = $key;	        
	   	 }
	}

	//Removes the object from the storage
    public function remove($key)
    {
	    if (isset($this->storage[$this->getHash($key)])) {
	        unset($this->storage[$this->getHash($key)]);
	    }
	}

	//This method calculates an identifier for the objects. You should use any hash function
	 public function getHash($key): string 
	 {
	  return $this->generationHash($key);
	 }

	 public function generationHash($key): string 
	 {
	  return md5($key);
	 }

	// public function getHash($key, $algorithm = 'md5') {
	// 	return hash($algorithm, $this->storage[$key]);
	// }

	//Return last added object.
	public function current(): object 
	{
	    return end($this->storage);
	}

	//Return list of all added objects.
	public function getObjectList(): array 
	{
	    return $this->storage;
	}

	//Function should return true if object exist in the collection, false - if not
	public function check($key): boolean
	{
		return isset($this->storage[$this->getHash($key)]) ? true : false;
	}

	//Static method. Should remove all objects from collection
	public function removeAll($key)
	{
		unset($this->storage);
	}
}