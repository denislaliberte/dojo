 fb-1 fizzbuzz first iteration 2015-08-23

[ url jira ](https://touspourun.atlassian.net/browse/fb-1)
shelf : /Users/dl/Sites/_perso/dojo.local/FizzBuzz/php/../08/2015-08-23--fb-1

## 1 analyse
  2015-08-23--11-20

### 1.0 estimation

  tache     | optimiste | pessiiste | réel | différence
  ----------|--------|----------|----------
  analyse   | 15     | 30       | 15
  setup     | 15     | 30       | 15
  AT        | 15     | 30          | 30
  empty     | 15     | 30       |1
  fizz      | 15     | 30       |5
  buzz    | 15     | 30         |1
  fizzbuzz   | 15     | 30      |1
  liste   | 15     | 30         | 5
  more test   | 15     | 30
  total     | 2h15     | 4h30    | 1h15

__question__ 1.1 quels sont les requis pour le kata fizzbuzz __réponse__ retourner fizz si multiple de 3 buzz si multiple de 5 fizzbuzz si multiple de 15
  __search_google:__ fizz buzz kata

[ Coding Dojo Wiki: KataFizzBuzz ](http://codingdojo.org/cgi-bin/index.pl?KataFizzBuzz)
Write a program that prints the numbers from 1 to 100. But for multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz?".

[ Java Tutorial Through Katas: Fizz Buzz (Easy) | Technology ](http://technologyconversations.com/2014/03/12/java-tutorial-through-katas-fizz-buzz-easy/)
For a given natural number greater than zero return:

“fizz” if the number is dividable by 3
“buzz” if the number is dividable by 5
“fizzbuzz” if the number is dividable by 15
the same number if no other requirement is fulfilled

  2015-08-23--11-35
### git commit [ c14e15d ] :  fb-1 analyse  Sun Aug 23 11:36:08 2015 -0400

## setup
__question__ est-ce que phpunit est installé __réponse__ oui
test class  |  http://bit.ly/1Tm6Sk2  |  class aTest extends PHPUnit_Framework_TestCase { }
load file before test | phpunit --bootstrap a.php |phpunit --help |grep bootstrap

+++ b/FizzBuzz/php/FizzbuzzTest.php
-    $this->assertTrue(true);
+    $this->assertTrue(fizzbuzz());
### git commit [ ced19dc ] :  fb-1 add function file to bootstrap  Sun Aug 23 11:54:12 2015 -0400
##  AT

marck pending incomplete  |  http://bit.ly/1HDXt0z  |  $this->markTestIncomplete('asdf');

### git commit [ 3836f76 ] :  fb-1 add acceptance test  Sun Aug 23 12:02:55 2015 -0400

2015-08-23--22-20

tag test fiter some to run | http://bit.ly/1KG2B6o | /** @group a
filter group test | http://bit.ly/1KG2B6o | --exclude-group a

##  unchange numbers
2015-08-23-22-30
### git commit [ 4727087 ] :  fb-1 unchanged numbers  Sun Aug 23 22:37:19 2015 -0400

##  fizz
__todo__ apply function on each element of array
php > var_dump( array_map( function($a){ return $a +1;}, range(1,5) )  );
array(5) {
    [0] =>
      int(2)
        [1] =>
          int(3)
            [2] =>
              int(4)
                [3] =>
                  int(5)
                    [4] =>
                      int(6)
}

__todo__ return fizz on 3
+++ b/FizzBuzz/php/Fizzbuzz.php
-  return $input;
+  return array_map(function($a){ return $a == 3 ?'fizz':$a;}, $input);
+++ b/FizzBuzz/php/FizzbuzzTest.php
+
+  function test_change_three_to_fizz() {
+    $this->assertEquals(['fizz'], fizzbuzz([3]) );
+  }

__todo__ return fizz on 6
+++ b/FizzBuzz/php/Fizzbuzz.php
-  return array_map(function($a){ return $a == 3 ?'fizz':$a;}, $input);
+  return array_map(function($a){ return ($a % 3 === 0) ?'fizz':$a;}, $input);
+++ b/FizzBuzz/php/FizzbuzzTest.php
+
+  function test_change_six_to_fizz() {
+    $this->assertEquals(['fizz'], fizzbuzz([6]) );
+  }

##  buzz
+++ b/FizzBuzz/php/Fizzbuzz.php
-  return array_map(function($a){ return ($a % 3 === 0) ?'fizz':$a;}, $input);
+  return array_map(
+    function($a){
+      if($a % 3 === 0) return 'fizz';
+      if($a % 5 === 0) return 'buzz';
+      return $a;
+    }, 
+    $input
+  );
+++ b/FizzBuzz/php/FizzbuzzTest.php
+
+  function test_change_five_to_buzz() {
+    $this->assertEquals(['buzz'], fizzbuzz([5]) );
+  }
### git commit [ 89013bf ] :  fb-1 buzz  Tue Aug 25 18:29:40 2015 -0400

##  fizzbuzz
+++ b/FizzBuzz/08/2015-08-23--fb-1-fizzbuzz-first-iteration.md
+
+++ b/FizzBuzz/php/Fizzbuzz.php
-      if($a % 3 === 0) return 'fizz';
+      if($a % 15 === 0) return 'fizzbuzz';
+      if($a % 3 === 0) return 'fizz';
+++ b/FizzBuzz/php/FizzbuzzTest.php
+
+  function test_multiple_of_3_and_5_change_to_fizz_buzz() {
+    $this->assertEquals(['fizzbuzz'], fizzbuzz([15]) );
+  }
### git commit [ 49c4ec3 ] :  fb-1 fizzbuzz  Tue Aug 25 18:32:18 2015 -0400

##  more test

#### push lines ####
### git commit [ e864cd0 ] :  fb-1 empty input  Tue Aug 25 18:33:38 2015 -0400
