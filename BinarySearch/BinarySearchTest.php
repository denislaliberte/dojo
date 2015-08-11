<?php 

class BinarySearchTest extends PHPUnit_Framework_TestCase { 
    public function testNotFound() {
      $this->assertEquals(-1, BinarySearch::create([])->search(1));
    }

    public function test_found_uniq_item() {
      $this->assertEquals(0, BinarySearch::create([1])->search(1));
    }

    public function test_not_found_uniq_item() {
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

    public function test_get_find_first_item_of_three() {
      $this->assertEquals(0, BinarySearch::create([1,2,3])->search(1));
    }

    public function test_not_found_item_smaller_than_middle() {
      $this->assertEquals(-1, BinarySearch::create([1,2,3])->search(0));
    }

    public function test_get_find_last_item_of_three() {
      $this->markTestIncomplete('asdf');
      $this->assertEquals(2, BinarySearch::create([1,2,3])->search(3));
    }
}
