<?php 

namespace Farmyard\Animals {

class Cow extends Animal {
  private $names = [
    'Daisy',
    'Bessie',
    'Clarabelle',
    'Betty',
    'Penelope',
    'Nettie',
    'Dorothy',
    'Earl',
    'Diesel',
    'Horns',
    'Angus',
    'Meg',
    'Bella',
    'Sunshine',
    'Princess',
    'Milky',
    'Moo Moo',
    'Lunch'
  ];

  public function __construct(string $name = '') {
    if (empty($name)) {
      $randomName = array_rand($this->names);
      $this->name = $this->names[$randomName];
    } else {
      $this->name = $name;
    }
    $this->type = 'cow';
    $this->noise = 'moo';
  }
}

}