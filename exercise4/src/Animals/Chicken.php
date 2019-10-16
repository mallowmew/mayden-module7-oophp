<?php 

namespace Farmyard\Animals;

class Chicken extends Animal {
  public function __construct(string $name = 'Bex') {
    $this->name = $name;
    $this->type = 'chicken';
    $this->noise = 'cluck';
  }
}