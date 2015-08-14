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
### commit d406df70d5e5c6436ef33af6c6a6959cf843a90c
      add method to find the middle index
    BinarySearch/BinarySearch.php
    BinarySearch/BinarySearchTest.php
    BinarySearch/readme.md

```php
  +++ b/BinarySearch/BinarySearch.php
  -    if($input[0] == $search) { return 0; }
  +    $middle = $this->middle($input);
  +    if($input[$middle] == $search) { return $middle; }
  +++ b/BinarySearch/BinarySearchTest.php
  -      $this->markTestIncomplete();
  +++ b/BinarySearch/readme.md
  +### commit d406df70d5e5c6436ef33af6c6a6959cf843a90c
  +      add method to find the middle index
  +    BinarySearch/BinarySearch.php
  +    BinarySearch/BinarySearchTest.php
  +    BinarySearch/readme.md
```
### commit cf621ca3cae688a9210f3b51c774f4c7eb04c703
      find item in the middle
    BinarySearch/BinarySearch.php
    BinarySearch/BinarySearchTest.php
    BinarySearch/readme.md

## 7 refactor to use a field for the array

marck pending incomplete  |  http://bit.ly/1HDXt0z  |  $this->markTestIncomplete('asdf');

```
  +++ b/BinarySearch/BinarySearch.php
  -  public function search($search, array $input) {
  -    if(empty($input)) { return -1 ; }
  -    $middle = $this->middle($input);
  -    if($input[$middle] == $search) { return $middle; }
  +  private $array;
  +  public function __construct(array $array) {
  +    $this->array = $array;
  +  }
  +
  +  static public function create(array $array) {
  +    return new self($array);
  +  }
  +
  +  public function search($search) {
  +    if(empty($this->array)) { return -1 ; }
  +    if($this->array[$this->middle()] == $search) { return $this->middle(); }
  -  public function middle(array $input) {
  -    return round( (sizeof($input) -1) /2 );
  +  public function middle() {
  +    return round( (sizeof($this->array) -1) /2 );
  +++ b/BinarySearch/BinarySearchTest.php
  -    private $testInstance;
  -    public function __construct() {
  -      print 'asdf';
  -      $this->testInstance =  new BinarySearch();
  -    }
  -      $this->assertEquals(-1, $this->testInstance->search(1,[]));
  +      $this->assertEquals(-1, BinarySearch::create([])->search(1));
  -      $this->assertEquals(0,  $this->testInstance->search(1,[1]));
  +      $this->assertEquals(0, BinarySearch::create([1])->search(1));
  -      $this->assertEquals(-1,  $this->testInstance->search(2,[1]));
  +      $this->assertEquals(-1, BinarySearch::create([1])->search(2));
  -      $this->assertEquals(1,  $this->testInstance->search(2,[1,2,3]));
  +      $this->assertEquals(1, BinarySearch::create([1,2,3])->search(2));
  -      $this->assertEquals(1, $this->testInstance->middle([3,2,1]));
  -      $this->assertEquals(0, $this->testInstance->middle([3]));
  -      $this->assertEquals(-1, $this->testInstance->middle([]));
  +      $this->assertEquals(1, BinarySearch::create([1,2,3])->middle());
  +      $this->assertEquals(0, BinarySearch::create([3])->middle());
  +      $this->assertEquals(-1, BinarySearch::create([])->middle());
```

### commit da0d722882d1c6c3c962a51e180e1129b509be8c
      add array as instance field
    BinarySearch/BinarySearch.php
    BinarySearch/BinarySearchTest.php
    BinarySearch/readme.md

## 8 less than middle

__todo__ 8.1 find the first element of three __done__

```php
  +++ b/BinarySearch/BinarySearch.php
  +    if($this->array[$this->middle()] > $search) { return 0; }
  +++ b/BinarySearch/BinarySearchTest.php
  +
  +    public function test_get_find_first_item_of_three() {
  +      $this->assertEquals(0, BinarySearch::create([1,2,3])->search(1));
  +    }
```

__todo__ 8.2 not found item smaller than the middle

__todo__ 8.3 return the first half of the array __done__
array split slice               | http://bit.ly/1NnNWQ9  | $a = array_slice([1,2,3],0,1);  |  assert($a ==[1]);

```php
  +++ b/BinarySearch/BinarySearch.php
  +    if($this->array[$this->middle()] > $search) { return 0; }
  +
  +  public function split() {
  +    return array_slice($this->array, 0, $this->middle());
  +  }
  +++ b/BinarySearch/BinarySearchTest.php
  -    public function testFoundUniqItem() {
  +    public function test_found_uniq_item() {
  -    public function testNotFoundUniqItem() {
  +    public function test_not_found_uniq_item() {
  +
  +    public function test_get_find_first_item_of_three() {
  +      $this->assertEquals(0, BinarySearch::create([1,2,3])->search(1));
  +    }
  +
  +    public function test_get_split_array_in_the_middle() {
  +      $this->assertEquals([1], BinarySearch::create([1,2,3])->split());
  +    }
  +
  +    public function test_not_found_item_smaller_than_middle() {
  +      $this->markTestIncomplete('asdf');
  +      $this->assertEquals(-1, BinarySearch::create([1,2,3])->search(0));
  +    }
  +
  +    public function test_get_find_last_item_of_three() {
  +      $this->markTestIncomplete('asdf');
  +      $this->assertEquals(2, BinarySearch::create([1,2,3])->search(3));
  +    }
```

### commit 3dabad7eebdbacf07bd63403b2560f25dfcad42f
      return the first half of the array
    BinarySearch/BinarySearch.php
    BinarySearch/BinarySearchTest.php
    BinarySearch/readme.md

```php
  +++ b/BinarySearch/BinarySearch.php
  -    if($this->array[$this->middle()] > $search) { return 0; }
  +    if($this->array[$this->middle()] > $search) { return $this->split()->search($search); }
  -  public function split() {
  -    return array_slice($this->array, 0, $this->middle());
  +  private function split() {
  +    return new self(array_slice($this->array, 0, $this->middle()));
  +++ b/BinarySearch/BinarySearchTest.php
  -    public function test_get_split_array_in_the_middle() {
  -      $this->assertEquals([1], BinarySearch::create([1,2,3])->split());
  -    }
  -      $this->markTestIncomplete('asdf');
```

### commit b9231885ba83947ba53746c188d70aa4e413d03c
      no found item smaller than the middle item
    BinarySearch/BinarySearch.php
    BinarySearch/BinarySearchTest.php
    BinarySearch/readme.md

## 9 find the last element of three

```php
  +++ b/BinarySearch/BinarySearch.php
  +    if($this->array[$this->middle()] < $search) { return 2; }
  +++ b/BinarySearch/BinarySearchTest.php
  +      $this->markTestIncomplete('asdf');
  -      $this->markTestIncomplete('asdf');
```

### commit be671f95363af7fcb0c56ec900d31658c62f7641          -      find last of three elements
    BinarySearch/BinarySearch.php
    BinarySearch/BinarySearchTest.php
    BinarySearch/readme.md

__todo__ 9.1 not find element bigger than the middle elements

__todo__ 9.2 get the second half of the array __done__

__todo__ 9.2.1 acces private function in test __done__
class self create children class instance in parent method |     | new static(); | php/static.php
```php
  class a { public function return_static() { return new static(); } }
  class b extends a { }
  $c = new b();
  $d = $c->return_static();
  assert( get_class($d) == 'b');
```

```php
  +++ b/BinarySearch/BinarySearch.php
  -  private $array;
  +  protected $array;
  -    return new self($array);
  +    return new static($array);
  +
  +  public function splitUp() {
  +    return new static(array_slice($this->array,$this->middle() + 1,1));
  +  }
  +++ b/BinarySearch/BinarySearchTest.php
  +class BinarySearchTestClass extends BinarySearch {
  +  public function get_array() {return $this->array;}
  +}
  +
  -      $this->markTestIncomplete('asdf');
  +      $this->markTestIncomplete('todo');
  +
  +    public function test_split_up_array() {
  +      $this->assertEquals([3], BinarySearchTestClass::create([1,2,3])->splitUp()->get_array());
  +    }
```

### commit a9b9fb15a31a5d80c691eb4ee3c15d4e066490f0 -   MAS-301 get the upper half of the array
    BinarySearch/BinarySearch.php
    BinarySearch/BinarySearchTest.php
    BinarySearch/readme.md

__todo__ 9.3 change magic number to not found constant
class constant  |  http://bit.ly/1PnV2p9  | class a{ const B = 'c'; }; | assert(a::B == 'c');

```php
  +++ b/BinarySearch/BinarySearch.php
  +  const NOT_FOUND = -1;
  -    if(empty($this->array)) { return -1 ; }
  +    if(empty($this->array)) { return self::NOT_FOUND ; }
  -    if($this->array[$this->middle()] < $search) { return 2; }
  -    return -1;
  +    if($this->array[$this->middle()] < $search) {
  +      $upper_half_index = $this->splitUp()->search($search);
  +      return  ($upper_half_index == self::NOT_FOUND) ? $upper_half_index : $this->middle() + 1 + $upper_half_index;
  +    }
  +    return self::NOT_FOUND;
  +++ b/BinarySearch/BinarySearchTest.php
  -      $this->assertEquals(-1, BinarySearch::create([])->search(1));
  +      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([])->search(1));
  -      $this->markTestIncomplete('todo');
  -      $this->assertEquals(-1, BinarySearch::create([1])->search(2));
  +      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1])->search(2));
  -      $this->assertEquals(-1, BinarySearch::create([])->middle());
  +      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([])->middle());
  -      $this->assertEquals(-1, BinarySearch::create([1,2,3])->search(0));
  +      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2,3])->search(0));
```

#### commit 2098649627f9d1b65c34f3767302803c088549d2     -     MAS-329 fix found in the upper half and remove magic number
- BinarySearch/BinarySearch.php
- BinarySearch/BinarySearchTest.php
- BinarySearch/readme.md


## 10 change midlle function to private and calculate only one time

```php
  +++ b/BinarySearch/BinarySearch.php
  +  protected $middle;
  +    $this->middle = self::middle($array);
  -    if($this->array[$this->middle()] == $search) { return $this->middle(); }
  -    if($this->array[$this->middle()] > $search) { return $this->split()->search($search); }
  -    if($this->array[$this->middle()] < $search) {
  +    if($this->array[$this->middle] == $search) { return $this->middle; }
  +    if($this->array[$this->middle] > $search) { return $this->split()->search($search); }
  +    if($this->array[$this->middle] < $search) {
  -      return  ($upper_half_index == self::NOT_FOUND) ? $upper_half_index : $this->middle() + 1 + $upper_half_index;
  +      return  ($upper_half_index == self::NOT_FOUND) ? $upper_half_index : $this->middle + 1 + $upper_half_index;
  -  public function middle() {
  -    return round( (sizeof($this->array) -1) /2 );
  +  private static function middle($array) {
  +    return round( (sizeof($array) -1) /2 );
  -    return new self(array_slice($this->array, 0, $this->middle()));
  +    return new self(array_slice($this->array, 0, $this->middle));
  -    return new static(array_slice($this->array,$this->middle() + 1,1));
  +    return new static(array_slice($this->array,$this->middle + 1,1));
  +++ b/BinarySearch/BinarySearchTest.php
  +  public function get_middle() {return $this->middle;}
  -      $this->assertEquals(1, BinarySearch::create([1,2,3])->middle());
  -      $this->assertEquals(0, BinarySearch::create([3])->middle());
  -      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([])->middle());
  +      $this->assertEquals(1, BinarySearchTestClass::create([1,2,3])->get_middle());
  +      $this->assertEquals(0, BinarySearchTestClass::create([3])->get_middle());
  +      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearchTestClass::create([])->get_middle());
```

### commit 9284c2fd8ed468aa3770d839b43527402f10df94      -     MAS-329 calculate the middle index one time only
- BinarySearch/BinarySearch.php
- BinarySearch/BinarySearchTest.php
- BinarySearch/readme.md

## 11 test split array

```php
  +++ b/BinarySearch/BinarySearch.php
  -  private function split() {
  -    return new self(array_slice($this->array, 0, $this->middle));
  +  public function split() {
  +    return new static(array_slice($this->array, 0, $this->middle));
  +++ b/BinarySearch/BinarySearchTest.php
  +
  +    public function test_split_array() {
  +      $this->assertEquals([1], BinarySearchTestClass::create([1,2,3])->split()->get_array());
  +    }
```

### commit d40699fabbda9e8c762667edf0ad4336e3905684  -  MAS-329 test split function
- BinarySearch/BinarySearch.php
- BinarySearch/BinarySearchTest.php
- BinarySearch/readme.md

## 12 search two element array

__todo__ 12.1 test not found

```php
  +++ b/BinarySearch/BinarySearchTest.php
  +
  +    public function test_not_found_item_in_two_element_array() {
  +      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2])->search(0));
  +      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2])->search(3));
  +    }
```

__todo__ 12.2 test first element

__todo__ 12.3 test last element


+++ b/BinarySearch/BinarySearchTest.php
+
+    public function test_not_found_item_in_two_element_array() {
+      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2])->search(0));
+      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2])->search(3));
+    }
+
+    public function test_two_element_array() {
+      $this->assertEquals(0, BinarySearch::create([1,2])->search(1));
+      $this->assertEquals(1, BinarySearch::create([1,2])->search(2));
+    }

### commit c2f1b0923f297fb8c61ca5a4a96c6759b9109fe8     -     MAS-329 found item in two element array
- BinarySearch/BinarySearchTest.php
- BinarySearch/readme.md

## 13 search five element array
+++ b/BinarySearch/BinarySearchTest.php
+
+    public function test_not_found_item_in_five_element_array() {
+      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2,3,4,5])->search(0));
+      $this->assertEquals(BinarySearch::NOT_FOUND, BinarySearch::create([1,2,3,4,5])->search(6));
+    }

### commit de5de6b8598011b148281e147a519c306bb6b638      -     MAS-329 search in five element array
- BinarySearch/BinarySearchTest.php
- BinarySearch/readme.md


## 13 item not found between two value of array
    assert_equal(-1, chop(2, [1, 3, 5]))
    assert_equal(-1, chop(2, [1, 3, 5, 7]))

commit cba57d5db9cb3886f88e4b495d4ba766382587e4
     MAS-329 not found between values
BinarySearch/BinarySearchTest.php

## 14 remove the harcoded length in the split up
array count size length | http://bit.ly/1MrTYST | $a = count([1,2,3]); | assert($a=3);

```php
  +++ b/BinarySearch/BinarySearch.php
  +  protected $size;
  +    $this->size = count($array);
  -    return new static(array_slice($this->array,$this->middle + 1,1));
  +    return new static(array_slice($this->array,$this->middle + 1,$this->size));
  +++ b/BinarySearch/BinarySearchTest.php
  +    public function test_split_up_big_array() {
  +      $this->assertEquals([4,5], BinarySearchTestClass::create([1,2,3,4,5])->splitUp()->get_array());
  +    }
  +
  +
  +    public function test_long_array() {
  +        $this->markTestIncomplete();
  +      $this->assertEquals(6, BinarySearch::create([1,3,5,6,7,8,9,10])->search(9));
  +    }
```

### commit fb5c1202a292dd26cdbf384b51669574136e16c7   -  MAS-329 remove harcoded length
  BinarySearch/BinarySearch.php
  BinarySearch/BinarySearchTest.php
  BinarySearch/readme.md
  var.sh

## 15 search long chain

## do the kata in an iterative fashion


#### push lines ####
