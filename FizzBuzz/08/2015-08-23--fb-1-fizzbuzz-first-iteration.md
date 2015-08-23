 fb-1 fizzbuzz first iteration 2015-08-23

[ url jira ](https://touspourun.atlassian.net/browse/fb-1)
shelf : /Users/dl/Sites/_perso/dojo.local/FizzBuzz/php/../08/2015-08-23--fb-1

## 1 analyse
  2015-08-23--11-20

### 1.0 estimation

  tache     | optimiste | pessiiste | réel | différence
  ----------|--------|----------|----------
  analyse   | 15     | 30       | 15
  setup   | 15     | 30       |
  AT     | 15     | 30
  empty     | 15     | 30
  fizz      | 15     | 30
  buzz    | 15     | 30
  fizzbuzz   | 15     | 30
  liste   | 15     | 30
  more test   | 15     | 30

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

  2015-08-23--11-20
### git commit [ c14e15d ] :  fb-1 analyse  Sun Aug 23 11:36:08 2015 -0400

## setup
__question__ est-ce que phpunit est installé __réponse__ oui
test class  |  http://bit.ly/1Tm6Sk2  |  class aTest extends PHPUnit_Framework_TestCase { }
load file before test | phpunit --bootstrap a.php |phpunit --help |grep bootstrap

##  AT
##  empty
##  fizz
##  buzz
##  fizzbuzz
##  liste
##  more test

## X
__question__ X
__todo__ X


## X finalisation

git rebase
resume doc
deploy


#### push lines ####
+++ b/FizzBuzz/08/2015-08-23--fb-1-fizzbuzz-first-iteration.md
+load file before test | phpunit --bootstrap a.php |phpunit --help |grep bootstrap
-  
+++ b/FizzBuzz/php/FizzbuzzTest.php
-    $this->assertTrue(true);
+    $this->assertTrue(fizzbuzz());
+++ b/FizzBuzz/var.sh
+alias p="phpunit --bootstrap Fizzbuzz.php FizzbuzzTest.php"
