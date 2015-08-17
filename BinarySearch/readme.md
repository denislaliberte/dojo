# Binary search Kata


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
