# php-1 roman number 2015-09-02

## 1 analyse
 2015-09-02--18-39

### 1.0 estimation

  tache              | optimiste | pessimiste | rééel | différence
  ------------------:|----------:|-----------:|------:|----------
  analyse            | 5         |  15        | 15    | pessimiste
  setup              | 5         | 10         | 5     | optimiste
  integration test   | 5         | 10         | 5     | optimiste
  one / five /ten    | 10        | 30         | 10    | optimiste
  three / thirty     | 10        | 30         | 30    | pessimiste
  four / nine        | 15        | 45         | 45    | pessimiste
  more               | 10        | 30         | 10    | optimiste
  total              | 1         | 4          | 1h45   |optimiste

#### 1.1 url
https://www.youtube.com/watch?v=983zk0eqYLY

http://rosettacode.org/wiki/Roman_numerals/Encode
Create a function taking a positive integer as its parameter and returning a string containing the Roman Numeral representation of that integer.
Modern Roman numerals are written by expressing each digit separately, starting with the left most digit and skipping any digit with a value of zero.
In Roman numerals 1990 is rendered: 1000=M, 900=CM, 90=XC; resulting in MCMXC. 
2008 is written as 2000=MM, 8=VIII; or MMVIII. 
1666 uses each Roman symbol in descending order: MDCLXVI

http://rosettacode.org/wiki/Roman_numerals/Decode
Create a function that takes a Roman numeral as its argument and returns its value as a numeric decimal integer. You don't need to validate the form of the Roman numeral.
Modern Roman numerals are written by expressing each decimal digit of the number to be encoded separately, starting with the leftmost digit and skipping any 0s. So 1990 is rendered "MCMXC" (1000 = M, 900 = CM, 90 = XC) and 2008 is rendered "MMVIII" (2000 = MM, 8 = VIII). The Roman numeral for 1666, "MDCLXVI", uses each letter in descending order.

  2015-09-02--18-53
## 2 setup

### git commit [ 020d99c ] :  php-1 setup  Wed Sep 2 18:56:37 2015 -0400
### git commit [ 3cbb038 ] :  php-1 add function  Wed Sep 2 18:59:42 2015 -0400
### git commit [ e5033b4 ] :  php-1 add integration test  Wed Sep 2 19:02:21 2015 -0400

 2015-09-02--19-02
## one / five / ten

  
### git commit [ e74477f ] :  php-1 add one  Wed Sep 2 19:04:58 2015 -0400
### git commit [ 3a09e4b ] :  php-1 add five  Wed Sep 2 19:06:27 2015 -0400
1 [ PHP 5 switch Statement - W3Schools ](http://www.w3schools.com/php/php_switch.asp)
2 [ PHP: switch - Manual ](http://php.net/manual/en/control-structures.switch.php)
3 [ PHPSwitch.com - Using the switch statement in PHP ](http://phpswitch.com/)
switch | http://bit.ly/1LM3D3Y | switch(1) { case 0: $a = 0; break; case 1: $a = 1; break; } |  assert($a ==1);
### git commit [ 68e79c0 ] :  php-1 add ten  Wed Sep 2 19:12:57 2015 -0400

  2015-09-02--19-13
 2015-09-08--12-45
## three /thirty
### git commit [ 4cd2fe7 ] :  php-1 three beefore refactor  Tue Sep 8 12:27:37 2015 -0400
### git commit [ 842d2a4 ] :  php-1 refactor to add III  Tue Sep 8 13:01:15 2015 -0400

 2015-09-08--13-07

2015-09-08--18-03
## more

### git commit [ 6a57dc8 ] :  php-1 add bigger case  Tue Sep 8 18:06:17 2015 -0400
### git commit [ 56568d0 ] :  php-1 refactor  Tue Sep 8 18:09:57 2015 -0400

  four / nine        | 15        | 45         |
### git commit [ f2036cb ] :  php-1 add 900 and 400 case  Tue Sep 8 18:34:24 2015 -0400
### git commit [ 21d1c9f ] :  php-1 last case  Tue Sep 8 18:49:36 2015 -0400

 2015-09-08--18-49

<!-- ########### push lines ######### -->
