<?php
require_once 'Implements.php';

class Nautical implements LenghtInterface
{
	public $name;
	public $habit;

	function __construct($name,$habit)
	{
		$this->lenght = rand(108,1950);
		$this->name = $name;
		$this->habit = $habit;

		echo $this->name . ' have '  . $this->lenght . ' centimeter of lenght. <br>';
	}

	public function getLenght()
	{
        return $this->lenght;
    }

    public function trout() 
    {
    	echo 'trout live in the river '. $this->habit . '.<br>';
    	return $this->habit;
    }

    public function fish()
    {
    	echo 'Every fish is happy to be caught and eaten by a Japanese!.<br>';
    }

    public function shark()
    {
    	echo 'Shark has 1508 pairs of teeth. And leaves in '.$this->habit .'<br>';
    }
}