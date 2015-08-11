<?php 

class BinarySearchTest extends PHPUnit_Framework_TestCase { 
    private $testInstance;
    public function __construct() {
      print 'asdf';
      $this->testInstance =  new BinarySearch();
    }
    public function testNotFound() {
      $this->assertEquals(-1, $this->testInstance->search(1,[]));
    }

    public function testFoundUniqItem() {
      $this->assertEquals(0,  $this->testInstance->search(1,[1]));
    }

    public function testNotFoundUniqItem() {
      $this->assertEquals(-1,  $this->testInstance->search(2,[1]));
    }

    public function testItemInTheCenterOfThree() {
      $this->assertEquals(1,  $this->testInstance->search(2,[1,2,3]));
    }

    public function test_get_the_middle_index() {
      $this->assertEquals(1, $this->testInstance->middle([3,2,1]));
      $this->assertEquals(0, $this->testInstance->middle([3]));
      $this->assertEquals(-1, $this->testInstance->middle([]));
    }
}
