<?php

class BinarySearchIterative2Test extends PHPUnit_Framework_TestCase { 
  function test_first_item_found() {
    $this->assertEquals(0, BinarySearchIterative2(1,[1]));
  }
}
