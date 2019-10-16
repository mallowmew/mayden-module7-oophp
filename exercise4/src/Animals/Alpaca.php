<?php 

namespace Farmyard\Animals;

class Alpaca extends Animal {
  private $names = [
    'Kuzco',
    'Avocado',
    'Spitfire',
    'Alpacolypse Now',
    'Alpacapunch',
    'Alpacamybag',
    'Al Pacino',
    'Carl',
    'Lana',
    'Lorenzo'
  ];

  public function __construct(string $name = '') {
    if (empty($name)) {
      $randomName = array_rand($this->names);
      $this->name = $this->names[$randomName];
    } else {
      $this->name = $name;
    }
    $this->type = 'alpaca';
    $this->noise = '*spitting noises*';
  }
}