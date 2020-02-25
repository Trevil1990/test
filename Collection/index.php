<?php

require_once "Collection.php";

class Storage
{
    private $name;
    private $number;

    public function __construct($name, $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    public function __toString()
    {
        return $this->name . " is number " . $this->number;
    }
}

$new = new Collection();
$new->add(new Storage("Max", 14), 'max');
$new->add(new Storage("Lora", 37), 'lora');
$new->add(new Storage("Alexey", 49), 'alexey');
$new->add(new Storage("Anton", 50), "anton");
$new->add(new Storage("Marina", 51), 'marina');
$new->add(new Storage("Anna", 52), 'Anna');
var_dump($new);
$new->remove("max");

echo '<pre>';
print_r($new->getObjectList());
echo $new->getHash(3);
echo '</pre>';