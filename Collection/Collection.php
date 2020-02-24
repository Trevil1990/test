<?php

class Collection 
{
    private $storage = array();

    //Adds an object inside the  storage
    public function add($key, $data = null) {
	    if ($data == null) {
	        $this->storage[] = $key;
	    } else { $this->storage[$data] = $key;	        
	   	 }
	}

	//Removes the object from the storage
    public function remove($key) {
	    if (isset($this->storage[$key])) {
	        unset($this->storage[$key]);
	    }
	}

	//This method calculates an identifier for the objects. You should use any hash function
	public function getHash($key) {
	    return spl_object_hash($this->storage[$key]);
	}

	//Return last added object.
	public function current() {
	    return end($this->storage);
	}

	//Return list of all added objects.
	public function getObjectList() {
	    return $this->storage;
	}

	//Function should return true if object exist in the collection, false - if not
	public function check($key) {
	    if (isset($this->storage[$key])) {
	        echo 'true';
	    } else {
	    	echo 'false';
	    }
	}

	//Static method. Should remove all objects from collection
	public function removeAll($key) {
		unset($this->storage);
	}
}