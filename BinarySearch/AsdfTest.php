<?php 

class aTest extends PHPUnit_Framework_TestCase { 
    public function testA() {
      $this->assertTrue(true);
    }

    public function testAsdf() {
      $a = new BinarySearch();
      $this->assertTrue($a->asdf());
    }
}


