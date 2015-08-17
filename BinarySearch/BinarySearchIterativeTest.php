<?php

class aTest extends PHPUnit_Framework_TestCase { 

  public function test_find_one_item() {
    $this->assertEquals(0,BinarySearchIterative(1,[1]));
  }
}
