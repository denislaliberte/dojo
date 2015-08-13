<?php 

class BinarySearchTestClass extends BinarySearch {
  public function get_array() {return $this->array;}
  public function get_middle() {return $this->middle;}
}

class BinarySearchTest extends PHPUnit_Framework_TestCase { 
    public function testNotFound() {
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([])->search(1));
    }

    public function test_found_uniq_item() {
      $this->assertEquals(0, BinarySearch::create([1])->search(1));
    }

    public function test_not_found_uniq_item() {
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1])->search(2));
    }

    public function testItemInTheCenterOfThree() {
      $this->assertEquals(1, BinarySearch::create([1,2,3])->search(2));
    }

    public function test_get_the_middle_index() {
      $this->assertEquals(1, BinarySearchTestClass::create([1,2,3])->get_middle());
      $this->assertEquals(0, BinarySearchTestClass::create([3])->get_middle());
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearchTestClass::create([])->get_middle());
    }

    public function test_get_find_first_item_of_three() {
      $this->assertEquals(0, BinarySearch::create([1,2,3])->search(1));
    }

    public function test_not_found_item_smaller_than_middle() {
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2,3])->search(0));
    }

    public function test_get_find_last_item_of_three() {
      $this->assertEquals(2, BinarySearch::create([1,2,3])->search(3));
    }

    public function test_split_up_array() {
      $this->assertEquals([3], BinarySearchTestClass::create([1,2,3])->splitUp()->get_array());
    }
}
