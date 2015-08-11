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

```ruby
  chop(int, array_of_int)  -> int
```

```ruby
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

### commit 805845ecec09df55b3d4ecfe5ae7ac6a5c106d1b
      add test not found
    BinarySearch/AsdfTest.php
    BinarySearch/BinarySearch.php
    BinarySearch/readme.md

## 4 found unique item

```php
  +++ b/BinarySearch/AsdfTest.php
  -      $this->assertEquals(-1, $a->search([]));
  +      $this->assertEquals(-1, $a->search(1,[]));
  +    }
  +    
  +    public function testFoundUniqItem() {
  +      $a = new BinarySearch();
  +      $this->assertEquals(0,  $a->search(1,[1]));
  +++ b/BinarySearch/BinarySearch.php
  -  public function search(array $input) {
  -    return -1;
  +  public function search($search, array $input) {
  +    if(empty($input)) { return -1 ;}
  +    return 0;
```

### commit a64a1f079c9b32277bffca4e18ad628c209c3bed
      found uniqu item
    BinarySearch/AsdfTest.php
    BinarySearch/BinarySearch.php
    BinarySearch/phpunit.sh
    BinarySearch/readme.md
    var.sh
    
## 4 no found

### commit a0ef90c10ee92a2dab98b7573cd8c2f7a8e5aadd
      add not found uniqu item
  .gitignore
  BinarySearch/AsdfTest.php
  BinarySearch/BinarySearch.php
  BinarySearch/BinarySearchTest.php
  BinarySearch/phpunit.sh
  var.sh

## 5 reuse object in test

```php
  +++ b/BinarySearch/BinarySearchTest.php
  +    private $testInstance;
  +    public function __construct() {
  +      print 'asdf';
  +      $this->testInstance =  new BinarySearch();
  +    }
  -      $a = new BinarySearch();
  -      $this->assertEquals(-1, $a->search(1,[]));
  +      $this->assertEquals(-1, $this->testInstance->search(1,[]));
  -      $a = new BinarySearch();
  -      $this->assertEquals(0,  $a->search(1,[1]));
  +      $this->assertEquals(0,  $this->testInstance->search(1,[1]));
  -      $a = new BinarySearch();
  -      $this->assertEquals(-1,  $a->search(2,[1]));
  +      $this->assertEquals(-1,  $this->testInstance->search(2,[1]));
  +++ b/BinarySearch/readme.md
  +### commit a0ef90c10ee92a2dab98b7573cd8c2f7a8e5aadd
  +      add not found uniqu item
  +  .gitignore
  +  BinarySearch/AsdfTest.php
  +  BinarySearch/BinarySearch.php
  +  BinarySearch/BinarySearchTest.php
  +  BinarySearch/phpunit.sh
  +  var.sh
  +
  +## 5 reuse object in test
  +
  +## X center of three items
  +## X less than middle
  +## X more than middle
```
## commit 14c506804a1873c78dd065ec45b175cef941b552
      reuse instance in test
    BinarySearch/BinarySearchTest.php
    BinarySearch/readme.md

## 6 center of three items
__todo__ 6.1 find the middle element of three
```php
  +++ b/BinarySearch/BinarySearchTest.php
  +
  +    public function testItemInTheCenterOfThree() {
  +      $this->markTestIncomplete();
  +      $this->assertEquals(1,  $this->testInstance->search(2,[1,2,3]));
  +    }
  +++ b/BinarySearch/readme.md
  +## commit 14c506804a1873c78dd065ec45b175cef941b552
  +      reuse instance in test
  +    BinarySearch/BinarySearchTest.php
  +    BinarySearch/readme.md
```

### commit 3d9fdf1920796233b22f8d155345cd649f201a3c
      add pending test for middle element
  BinarySearch/BinarySearchTest.php
  BinarySearch/readme.md

__todo__ 6.2 add method to return the middle index
```php
  +++ b/BinarySearch/BinarySearch.php
  +
  +  public function middle(array $input) {
  +    return round( (sizeof($input) -1) /2 );
  +  }
  +++ b/BinarySearch/BinarySearchTest.php
  +
  +    public function test_get_the_middle_index() {
  +      $this->assertEquals(1, $this->testInstance->middle([3,2,1]));
  +      $this->assertEquals(0, $this->testInstance->middle([3]));
  +      $this->assertEquals(-1, $this->testInstance->middle([]));
  +    }
```

## X less than middle
## X more than middle

## push lines
+## push lines
~/search/php.txt round float to int

