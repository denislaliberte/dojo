<?php

class BinarySearchIterative2Test extends PHPUnit_Framework_TestCase { 
  function test_first_item_found() {
    $this->assertEquals(0, BinarySearchIterative2(1,[1]));
  }

  function test_item_not_found() {
    $this->assertEquals(-1, BinarySearchIterative2(1,[2]));
  }

  function test_item_not_found_empty_array() {
    $this->assertEquals(-1, BinarySearchIterative2(1,[]));
  }

  function test_find_item_in_the_middle_of_three() {
    $this->assertEquals(1, BinarySearchIterative2(3,[1,3,5]));
  }
}
