<?php
require_once 'Zoo.php';

class Animal extends Zoo
{
    public function __construct($name, $habitat, $fname)
	{
		$this->name = $name;
		$this->age = rand(1,10);
		$this->habitat = $habitat;
		$this->fname = $fname;
		$this->high = rand(2,5);
		$this->weight = rand(250,307);
	}
	public function born()
	{
		echo 'This ' .$this->name . ' has been born in '. $this->habitat . '. And age of this zoo '  . $this->age . ' year. All friend call him '. $this->fname .'<br>';
	}

	public function __destruct(){
	}

	public function elephant()
	{
		echo 'This '. $this->name . ' born in circus. At birth, he was given a name ' .$this->fname. '. And he weighed '. $this->weight.' kg. <br>';
	}
	public function antilopa()
	{
		echo 'This '. $this->name . ' able to jump on ' .$this->high. ' metr. Her parents from '. $this->habitat.'.<br>';
	}
}
