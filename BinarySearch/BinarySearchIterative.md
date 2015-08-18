# Binary search in php in iterative fashion



## 1 canary test

+++ b/BinarySearch/BinarySearchIterative.php
+
+function BinarySearchIterative() {
+  return true;
+}
+
+++ b/BinarySearch/BinarySearchIterativeTest.php
-    $this->assertTrue(true);
+    $this->assertTrue(BinarySearchIterative());
+++ b/BinarySearch/readme.md
+
+## 1 canary test
commit 486367dd1b5dfd619006a76bec284d58a0b1d3b7
     MAS-305 first step of iterative binary search : canary test
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterativeTest.php
BinarySearch/readme.md


## 2 return index of the first item
+++ b/BinarySearch/BinarySearchIterative.md
+
+
+## 1 found one item
+++ b/BinarySearch/BinarySearchIterative.php
-  return true;
+function BinarySearchIterative($item, array $array) {
+  return 0;
+++ b/BinarySearch/BinarySearchIterativeTest.php
-  public function test_canary() {
-    $this->assertTrue(BinarySearchIterative());
+  public function test_find_one_item() {
+    $this->assertEquals(0,BinarySearchIterative(1,[1]));
+++ b/BinarySearch/readme.md
+
+
+## 2 return index of the first item
+++ b/var.sh
+alias pw="pywatch ./BinarySearchIterative.sh *"
commit 95da8fac9d15852dfaafe0c7bf8c4963e9c341ee
     MAS-319 return the index of the first item
BinarySearch/BinarySearchIterative.md
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterative.sh
BinarySearch/BinarySearchIterativeTest.php
BinarySearch/readme.md
var.sh

## 3 empty list

commit afb7299900335dbc8c4e6d402807083dce79cfb9
     MAS-319 empty not found
BinarySearch/BinarySearchIterative.md
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterativeTest.php
BinarySearch/readme.md
## 4 item not found

commit d2a714fde5af859dc42a31dc06035982b66c164c
     MAS-319 not found one item
BinarySearch/BinarySearchIterative.md
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterativeTest.php

## 5 middle of three items
marck pending incomplete  |  http://bit.ly/1HDXt0z  |  $this->markTestIncomplete('asdf');
commit f2804d385139407b1d5239c47e2227c925f6de8a
     MAS-319 add pendinfg test for middle item
BinarySearch/BinarySearchIterative.md
BinarySearch/BinarySearchIterativeTest.php

__todo__ 5.1 function to find the middle of an array __done__
commit a81c084b39f4f42a0ddc5d726e9a59d9f9bcd994
     MAS-319 middle index first test empty array
BinarySearch/BinarySearchIterative.md
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterativeTest.php

commit 46d67c5fad263f322f16e07e01ab3cac79a5425b
     MAS-319 found the middle index of an array"
    "
BinarySearch/BinarySearchIterative.md
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterativeTest.php



commit 37fde4a67d701f2e36824b23f7f6465d5377717b
     MAS-319 found the middle item of an array
BinarySearch/BinarySearchIterative.md
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterativeTest.php


## 6 fond the first item of an array
commit f69aea1e48c0c62462bfe0c5f560d555f16dbcc3
     MAS-319 find the first item of three
BinarySearch/BinarySearchIterative.md
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterativeTest.php

commit 605eca8c0eea22ac28095723ebd541ca871cb4dd
     MAS-319 found the second of five item
BinarySearch/BinarySearchIterative.php
BinarySearch/BinarySearchIterativeTest.php

## 7 find last value of three items
### git commit [ 5e6dc69 ] :  MAS-309 find the last of three items  Tue Aug 18 12:51:41 2015 -0400

## 8  find last of five elements

php > $min = 0;
php > $max = 10;
php > $middle = 0;
php > $middle = floor( ($max - $middle ) /2) + $middle; print $middle;
5
php > $middle = floor( ($max - $middle ) /2) + $middle; print $middle;
7
php > $middle = floor( ($max - $middle ) /2) + $middle; print $middle;
8
php > $middle = floor( ($max - $middle ) /2) + $middle; print $middle;
9

## 9 recfator remove duplication with middleIndex

### git commit [ 6bd2b9b ] :  RBD-97 find last of five elements  Tue Aug 18 18:06:53 2015 -0400

## X refactor to only one return
