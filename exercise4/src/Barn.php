<?php

namespace Farmyard;

use Farmyard\Animals\Animal;

class Barn {
  public $contains = [];

  public function addAnimal($animal) {
    array_push($this->contains, $animal);
  }

  public function makeNoise() {
    echo "The barn makes these noises: <br/>";
    shuffle($this->contains);
    foreach($this->contains as $animal) {
      if($animal instanceof Animal) {
        $animal->speak();
      } else {
        echo "You're talking to a pitchfork.<br/>";
      }
    }
    echo "<br/><br/>";
  }
}