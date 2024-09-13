<?php
class Fruit {
  public $name;
  public $color;
  public $vitamin;
  public function __construct($name, $color, $vitamin) {
    $this->name = $name;
    $this->color = $color;
    $this->vitamin = $vitamin;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color} and the vitamin {$this->vitamin}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red", "D");
$strawberry->message();
$strawberry->intro();
?>
