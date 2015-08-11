<?php 

class BinarySearchTest extends PHPUnit_Framework_TestCase { 
    public function testNotFound() {
      $this->assertEquals(-1, BinarySearch::create([])->search(1));
    }

    public function testFoundUniqItem() {
      $this->assertEquals(0, BinarySearch::create([1])->search(1));
    }

    public function testNotFoundUniqItem() {
      $this->assertEquals(-1, BinarySearch::create([1])->search(2));
    }

    public function testItemInTheCenterOfThree() {
      $this->assertEquals(1, BinarySearch::create([1,2,3])->search(2));
    }

    public function test_get_the_middle_index() {
      $this->assertEquals(1, BinarySearch::create([1,2,3])->middle());
      $this->assertEquals(0, BinarySearch::create([3])->middle());
      $this->assertEquals(-1, BinarySearch::create([])->middle());
    }
}
