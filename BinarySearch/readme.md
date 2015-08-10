# Binary search kata


## note


## 1 setup 
__question__ 1.1 quel est l'alias pour rouler php unit

/Users/TP1/alias/php.sh:alias pu="phpunit"

test class  |  http://bit.ly/1Tm6Sk2  |  class aTest extends PHPUnit_Framework_TestCase { }

__todo__ 1.2 canary test


```php
  +++ b/BinarySearch/AsdfTest.php
  @@ -0,0 +1,9 @@
  +<?php 
  +
  +class aTest extends PHPUnit_Framework_TestCase { 
  +    public function testA() {
  +      $this->assertTrue(true);
  +    }
  +}
```

### commit 0e03f989bfd145b38a56682edeaddaded3e66ff1
    no comment

__todo__ 1.3 class placehoder __done__

diff --git a/BinarySearch/AsdfTest.php b/BinarySearch/AsdfTest.php
+    public function testAsdf() {
+      $a = new BinarySearch();
+      $this->assertTrue($a->asdf());
+    }
+++ b/BinarySearch/BinarySearch.php
+<?php
+
+class BinarySearch {
+  public function asdf() {
+    return false;
+  }
+}
 
### commit 3a7e9d757da1222d3f3e8841e1f646d8d50fdaa6
      add placholder class
    BinarySearch/AsdfTest.php
    BinarySearch/BinarySearch.php
    BinarySearch/readme.md


## 2 analyse

__question__ 2.1 Quels sont les liens qui explique les requis pour ce kata

[ Kata02: Karate Chop - CodeKata ](http://codekata.com/kata/kata02-karate-chop)
```java
  chop(int, array_of_int)  -> int
```

```java
  def test_chop
    assert_equal(-1, chop(3, []))
    assert_equal(-1, chop(3, [1]))
    assert_equal(0,  chop(1, [1]))
    #
    assert_equal(0,  chop(1, [1, 3, 5]))
    assert_equal(1,  chop(3, [1, 3, 5]))
    assert_equal(2,  chop(5, [1, 3, 5]))
    assert_equal(-1, chop(0, [1, 3, 5]))
    assert_equal(-1, chop(2, [1, 3, 5]))
    assert_equal(-1, chop(4, [1, 3, 5]))
    assert_equal(-1, chop(6, [1, 3, 5]))
    #
    assert_equal(0,  chop(1, [1, 3, 5, 7]))
    assert_equal(1,  chop(3, [1, 3, 5, 7]))
    assert_equal(2,  chop(5, [1, 3, 5, 7]))
    assert_equal(3,  chop(7, [1, 3, 5, 7]))
    assert_equal(-1, chop(0, [1, 3, 5, 7]))
    assert_equal(-1, chop(2, [1, 3, 5, 7]))
    assert_equal(-1, chop(4, [1, 3, 5, 7]))
    assert_equal(-1, chop(6, [1, 3, 5, 7]))
    assert_equal(-1, chop(8, [1, 3, 5, 7]))
  end
```

## 3 not found empty

assert equal  | http://bit.ly/1L2NvgH | $this->assertEquals(1, 1);

+++ b/BinarySearch/AsdfTest.php
-    public function testAsdf() {
+    public function testNotFound() {
-      $this->assertTrue($a->asdf());
+      $this->assertEquals(-1, $a->search([]));
+++ b/BinarySearch/BinarySearch.php
-  public function asdf() {
-    return false;
+  public function search(array $input) {
+    return -1;

## 4 no found


## X found unique item


## push lines

