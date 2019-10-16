<?php

namespace Tests\Farmyard;

use PHPUnit\Framework\TestCase;
use Farmyard\Barn;
use Farmyard\Animals;
use Farmyard\Animals\Cow;

class BarnTest extends TestCase 
{
  public function testAddAnimal() {
    $mockCow = $this->createMock(Cow::class);
    $barn = new Barn();
    $barn->addAnimal($mockCow);
    $this->assertEquals($barn->contains[0], $mockCow);
  }
}