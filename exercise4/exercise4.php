<?php

require_once __DIR__ . '/vendor/autoload.php';

use Farmyard\Barn;
use Farmyard\Animals;

// Create 2 barns to store at least 3 different animals

$smallbarn = new Barn();

$herdOfSheep = [];
for ($i = 0; $i < 25; $i++) {
  array_push($herdOfSheep, new Animals\Sheep());
}
$herdOfCows = [];
for ($i = 0; $i < 21; $i++) {
  array_push($herdOfCows, new Animals\Cow());
}
$coupleOfAlpacas = [];
for ($i = 0; $i < 2; $i++) {
  array_push($coupleOfAlpacas, new Animals\Alpaca());
}
$aPitchfork = [ 'A pitchfork' ];

foreach($herdOfSheep as $sheep) {
  $smallbarn->addAnimal($sheep);
}
foreach($herdOfCows as $cow) {
  $smallbarn->addAnimal($cow);
}
foreach($coupleOfAlpacas as $alpaca) {
  $smallbarn->addAnimal($alpaca);
}
$smallbarn->addAnimal($aPitchfork);
$smallbarn->makeNoise();

$bigbarn = new Barn();

$chickens = [];
for ($i = 0; $i < 1125; $i++) {
  $chickenName = "Chicken #" . str_pad($i, 4, "0", STR_PAD_LEFT);
  array_push($chickens, new Animals\Chicken($chickenName));
}

foreach($chickens as $chicken) {
  $bigbarn->addAnimal($chicken);
}

$bigbarn->makeNoise();