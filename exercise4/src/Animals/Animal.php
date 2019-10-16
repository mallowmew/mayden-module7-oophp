<?php

namespace Farmyard\Animals {

abstract class Animal {
  public $name;
  protected $type;
  protected $noise;

  use Speak;
}

trait Speak {
  public function speak() {
    echo "$this->name the $this->type said: '$this->noise!'<br/>";
  }
}

}