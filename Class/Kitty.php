<?php

require_once 'Zoo.php';

class Kitty extends Zoo
{
	const GENDER_M = 'male';
	const GENDER_F = 'female';

	public function __construct($name, $color, $gender)
	{
		parent::__construct($name);
		$this->child = rand(3,9);
		$this->age = rand(3,14);
		$this->color = $color;
		$this->gender = $gender;
    }
    
    public function getName()
    {
		echo "Animal name is {$this->name}<br />";
	}

	public function family()
	{
		echo $this->name.' have '.$this->child.' child.<br />';
	}

	public function InfoCat()
	{
		echo $this->name.':<br> Age: '.$this->age.'.<br> Color: '.$this->color.'.<br> Child: '.$this->child.'.<br> Gender: '.$this->gender.'.<br>';
	}
	public function Cougar()
	{
		echo 'Monthly '.$this->name.' kills about '.$this->child.' other animals.<br>';
	}
	public function Lion()
	{
		echo 'All animals respect the '.$this->name.', because he is the king among all terrestrial creatures. '.$this->name.'\'s Pride usually consists of '.$this->child.' individuals. And the average age of one lion is '.$this->age.' years.<br>';
	}
}