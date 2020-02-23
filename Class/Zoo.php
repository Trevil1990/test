<?php

class Zoo
{
	public $name;
	public $habitat;
	public $gender;
	public $weight;
	public $color;
	public $age;
	public $fname;
	public $scars;

	function __construct($name)
	{
		$this->name = $name;
	}
	function getName()
	{
		return $this->name;
	}
}