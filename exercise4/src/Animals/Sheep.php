<?php 

namespace Farmyard\Animals;

class Sheep extends Animal {
  private $names = [
    'Dolly',
    'Sheeply',
    'Weeply',
    'Cloud',
    'Wooly',
    'Pan',
    'Lambert',
    'Bo Peep',
    'Butter',
    'Ramsay',
    'Baalthazar',
    'Barbara',
    'Stormy',
    'Fluffy',
    'Gandalf',
    'Lucifer',
    'Mephistopheles',
    'Faun'
  ];

  public function __construct(string $name = '') {
    if (empty($name)) {
      $randomName = array_rand($this->names);
      $this->name = $this->names[$randomName];
    } else {
      $this->name = $name;
    }
    $this->type = 'sheep';
    $this->noise = 'baa';
  }
}