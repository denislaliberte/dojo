<?php 

class BinarySearchImmutableTestClass extends BinarySearchImmutable {
  public function get_array() {return $this->array;}
  public function get_middle() {return $this->middle;}
}

class BinarySearchImmutableTest extends PHPUnit_Framework_TestCase { 
    public function testNotFound() {
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([])->search(1));
    }

    public function test_found_uniq_item() {
      $this->assertEquals(0, BinarySearchImmutable::create([1])->search(1));
    }

    public function test_not_found_uniq_item() {
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1])->search(2));
    }

    public function testItemInTheCenterOfThree() {
      $this->assertEquals(1, BinarySearchImmutable::create([1,2,3])->search(2));
    }

    public function test_get_the_middle_index() {
      $this->assertEquals(1, BinarySearchImmutableTestClass::create([1,2,3])->get_middle());
      $this->assertEquals(0, BinarySearchImmutableTestClass::create([3])->get_middle());
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutableTestClass::create([])->get_middle());
    }

    public function test_get_find_first_item_of_three() {
      $this->assertEquals(0, BinarySearchImmutable::create([1,2,3])->search(1));
    }

    public function test_not_found_item_smaller_than_middle() {
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,2,3])->search(0));
    }

    public function test_get_find_last_item_of_three() {
      $this->assertEquals(2, BinarySearchImmutable::create([1,2,3])->search(3));
    }

    public function test_split_up_array() {
      $this->assertEquals([3], BinarySearchImmutableTestClass::create([1,2,3])->splitUp()->get_array());
    }

    public function test_split_up_big_array() {
      $this->assertEquals([4,5], BinarySearchImmutableTestClass::create([1,2,3,4,5])->splitUp()->get_array());
    }

    public function test_split_array() {
      $this->assertEquals([1], BinarySearchImmutableTestClass::create([1,2,3])->split()->get_array());
    }

    public function test_not_found_item_in_two_element_array() {
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,2])->search(0));
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,2])->search(3));
    }

    public function test_two_element_array() {
      $this->assertEquals(0, BinarySearchImmutable::create([1,2])->search(1));
      $this->assertEquals(1, BinarySearchImmutable::create([1,2])->search(2));
    }

    public function test_not_found_item_in_five_element_array() {
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,2,3,4,5])->search(0));
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,2,3,4,5])->search(6));
    }

    public function test_not_found_between_two_value() {
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,3,5])->search(2));
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,3,5,7])->search(6));
    }

    public function test_long_array() {
      $this->assertEquals(6, BinarySearchImmutable::create([1,3,5,6,7,8,9,10])->search(9));
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,3,5,6,7,8,10])->search(9));
      $this->assertEquals(BinarySearchImmutable::NOT_FOUND, BinarySearchImmutable::create([1,3,5,6,7,8,10])->search(11));
    }
}
