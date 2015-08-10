<?php 

class aTest extends PHPUnit_Framework_TestCase { 
    public function testNotFound() {
      $a = new BinarySearch();
      $this->assertEquals(-1, $a->search([]));
    }
}
