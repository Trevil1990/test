<?php

abstract class AllInsect
{
	public $name;
	public $size;
	public $food;

	abstract public function getInfo();
}

class Insect extends AllInsect
{
	public function __construct($name, $size, $food)
	{
		$this->name = $name;
		$this->size = $size;
		$this->food = $food;
	}
	public function getInfo()
	{
		echo 'People call this insect ' . $this->name . '. It\'s '  . $this->size . ' size. It prefers to feed ' .$this->food. '<br />';
	}
}