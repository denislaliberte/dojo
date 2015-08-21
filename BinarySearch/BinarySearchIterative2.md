## Binary search iterative 2

Il y as une façon vraiment plus simple de faire cet algorythme

http://rosettacode.org/wiki/Binary_search#PHP

## 1 setup
### git commit [ d5f42ae ] :   canary test  Wed Aug 19 18:45:07 2015 -0400
### git commit [ c84fbda ] :   empty function  Wed Aug 19 18:48:02 2015 -0400
### git commit [ bc18aa1 ] :   found the first item  Wed Aug 19 18:53:18 2015 -0400
### git commit [ 17968a4 ] :   one item array item not found  Wed Aug 19 18:55:18 2015 -0400
### git commit [ 6e69576 ] :   empty array search  Wed Aug 19 18:56:44 2015 -0400
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

+++ b/BinarySearch/BinarySearchIterative2.md
+## 1 setup
+### git commit [ 6e69576 ] :   empty array search  Wed Aug 19 18:56:44 2015 -0400
+++ b/BinarySearch/BinarySearchIterative2.php
+  $middle = floor(count($array) /2);
+  if($item == $array[$middle]) return $middle;
+++ b/BinarySearch/BinarySearchIterative2Test.php
+
+  function test_find_item_in_the_middle_of_three() {
+    $this->assertEquals(1, BinarySearchIterative2(3,[1,3,5]));
+  }

### git commit [ d5cbd5d ] :   find the middle item  Wed Aug 19 19:07:18 2015 -0400

## 3 find item smaller than the middle item

#### push lines ####
+++ b/BinarySearch/BinarySearchIterative2.php
-  $middle = floor(count($array) /2);
-  if($item == $array[$middle]) return $middle;
-  if($item == $array[0]) return 0;
+  $max = count($array);
+  $min = 0;
+  while($max > $min) {
+    $middle = floor(($max - $min)/2);
+    if($item == $array[$middle]) return $middle;
+    $max = $middle;
+  }
+++ b/BinarySearch/BinarySearchIterative2Test.php
+
+  function test_find_second_item_of_five() {
+    $this->assertEquals(1, BinarySearchIterative2(2,[1,2,3,4,5]));
+
+  }
### git commit [ 1bdc0f5 ] :   find smaller ellements  Thu Aug 20 18:44:42 2015 -0400

## 4 find item bigger than the middle
+++ b/BinarySearch/BinarySearchIterative2.php
-    $middle = floor(($max - $min)/2);
+    $middle = floor(($max - $min)/2) +$min;
-    $max = $middle;
+    if($item < $array[$middle]) $max = $middle;
+    if($item > $array[$middle]) $min = $middle;
+++ b/BinarySearch/BinarySearchIterative2Test.php
+
+  function test_find_elements_bigger_than_the_middle_element() {
+    $this->assertEquals(2, BinarySearchIterative2(5,[1,3,5]));
+  }
### git commit [ d34687c ] :   find last of three elements  Thu Aug 20 18:52:32 2015 -0400

Si on cherche un élément non troué plus grand que le millieu on tombe dans une boucle infinie
php > var_dump( BinarySearchIterative2(6,[1,3,5,7,9]) );


+++ b/BinarySearch/BinarySearchIterative2.md
+
+
+++ b/BinarySearch/BinarySearchIterative2.php
-    $middle = floor(($max - $min)/2) +$min;
+    $middle = get_middle_index($min, $max);
+function get_middle_index($min, $max) {
+  return floor(($max - $min)/2) +$min;
+}
+++ b/BinarySearch/BinarySearchIterative2Test.php
