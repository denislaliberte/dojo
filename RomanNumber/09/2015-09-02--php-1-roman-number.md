# php-1 roman number 2015-09-02

## 1 analyse
 2015-09-02--18-39

### 1.0 estimation

  tache              | optimiste | pessimiste | rééel | différence
  ------------------:|----------:|-----------:|------:|----------
  analyse            | 5         |  15        | 15    | pessimiste
  setup              | 5         | 10
  integration test   | 5         | 10 
  one / five /ten    | 10        | 30
  three / thirty     | 10        | 30
  four / nine        | 15        | 45
  more               | 10        | 30
  total              | 1         | 4

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

<!-- ########### push lines ######### -->

  
