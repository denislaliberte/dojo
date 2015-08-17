<?php

class aTest extends PHPUnit_Framework_TestCase { 
  public function test_find_one_item() {
    $this->assertEquals(0,BinarySearchIterative(1,[1]));
  }

  public function test_empty_array_item_not_found() {
    $this->assertEquals(-1,BinarySearchIterative(1,[]));
  }

  public function test_one_item_array_not_found() {
    $this->assertEquals(-1,BinarySearchIterative(1,[2]));
  }

  public function test_three_item_found_the_middle_one() {
    $this->assertEquals(1,BinarySearchIterative(3,[1,3,5]));
  }

  public function test_calculate_the_middle_index_of_an_empty_array() {
    $this->assertEquals(0,middleIndex([]));
  }

  public function test_calculate_the_middle_index_of_an_array() {
    $this->assertEquals(1,middleIndex([1,2,3]));
    $this->assertEquals(2,middleIndex([1,2,3,4,5]));
    $this->assertEquals(2,middleIndex([1,2,3,4]));
  }

  public function test_find_the_first_of_three_item() {
    $this->assertEquals(0,BinarySearchIterative(1,[1,3,5]));
  }

}
