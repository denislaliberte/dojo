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
}
