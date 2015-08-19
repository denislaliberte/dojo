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
    $this->assertEquals(-1,middleIndex(0,count([])));
  }

  public function test_calculate_the_middle_index_of_an_array() {
    $this->assertEquals(1,middleIndex(0,count([1,2,3])));
    $this->assertEquals(2,middleIndex(0,count([1,2,3,4,5])));
    $this->assertEquals(2,middleIndex(0,count([1,2,3,4])));
  }

  public function test_find_the_first_of_three_item() {
    $this->assertEquals(0,BinarySearchIterative(1,[1,3,5]));
  }

  public function test_find_second_of_five_item() {
    $this->assertEquals(1,BinarySearchIterative(3,[1,3,5,7,9]));
  }

  public function test_find_last_of_three_items() {
    $this->assertEquals(2,BinarySearchIterative(5,[1,3,5]));
  }

  public function test_find_last_of_five_items() {
    $this->assertEquals(4,BinarySearchIterative(9,[1,3,5,7,9]));
  }
}
