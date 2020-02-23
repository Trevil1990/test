<?php

require_once 'Animal.php';

class Canine extends Animal
{
	public function __construct($name, $habitat, $fname)
	{
		parent::__construct($name, $habitat, $fname);
		$this->scars = rand(3,8);
    }
    
    public function getName()
    {
		echo "animal name is {$this->name}<br />";
	}

	public function barkDog()
	{
		echo $this->fname.' likes to talk \'Hav-Hav\' <br />';
	}
	public function wolf()
	{
		echo $this->fname.' a very ferocious '.$this->name.', participated in many hunts. If you examine his body in detail, you can find about '.$this->scars.' scars.<br>';
	}
}