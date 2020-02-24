<?php

require_once "Collection/Collection.php";

class Storage
{
    private $name;
    private $number;

    public function __construct($name, $number) {
        $this->name = $name;
        $this->number = $number;
    }

    public function __toString() {
        return $this->name . " is number " . $this->number;
    }
}

$new = new Collection();
$new->add(new Storage("Max", 14));
$new->add(new Storage("Lora", 37));
$new->add(new Storage("Alexey", 49));
$new->add(new Storage("Anton", 50), "anton");
$new->add(new Storage("Marina", 51));

$new->remove("0");

echo '<pre>';
print_r($new->getObjectList());
echo 'Alexey now is '.($new->getHash(2));
echo '</pre>';