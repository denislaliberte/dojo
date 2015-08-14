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

    public function test_split_up_big_array() {
      $this->assertEquals([4,5], BinarySearchTestClass::create([1,2,3,4,5])->splitUp()->get_array());
    }

    public function test_split_array() {
      $this->assertEquals([1], BinarySearchTestClass::create([1,2,3])->split()->get_array());
    }

    public function test_not_found_item_in_two_element_array() {
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2])->search(0));
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2])->search(3));
    }

    public function test_two_element_array() {
      $this->assertEquals(0, BinarySearch::create([1,2])->search(1));
      $this->assertEquals(1, BinarySearch::create([1,2])->search(2));
    }

    public function test_not_found_item_in_five_element_array() {
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2,3,4,5])->search(0));
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2,3,4,5])->search(6));
    }

    public function test_not_found_between_two_value() {
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,3,5])->search(2));
      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,3,5,7])->search(6));
    }

    public function test_long_array() {
        $this->markTestIncomplete();
      $this->assertEquals(6, BinarySearch::create([1,3,5,6,7,8,9,10])->search(9));
    }
}
