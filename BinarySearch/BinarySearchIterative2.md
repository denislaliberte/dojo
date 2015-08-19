## Binary search iterative 2

Il y as une façon vraiment plus simple de faire cet algorythme

http://rosettacode.org/wiki/Binary_search#PHP

## 1 setup

### git commit [ d5f42ae ] :   canary test  Wed Aug 19 18:45:07 2015 -0400
### git commit [ c84fbda ] :   empty function  Wed Aug 19 18:48:02 2015 -0400
### git commit [ bc18aa1 ] :   found the first item  Wed Aug 19 18:53:18 2015 -0400
### git commit [ 17968a4 ] :   one item array item not found  Wed Aug 19 18:55:18 2015 -0400
``php
function BinarySearchIterative2($item, array $array) {
  if(empty($array)) return -1;
  if($item == $array[0]) return 0;
  return -1;
}

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
}
```

## 2 find middle item

## 3 find item smaller than the middle item

## 4 find item bigger than the middle
