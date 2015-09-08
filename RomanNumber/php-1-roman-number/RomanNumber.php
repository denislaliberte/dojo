<?php

require('/Users/TP1/.composer/vendor/bin/psysh');

function romannumber($input, $a = [[1000,'M'],[500,'D'],[100,'C'],[50,'L'],[10,'X'],[5,'V',],[1,'I']]) {
  if(empty($a)) { return ""; }
  if($input > head($a)[0]) { return  head($a)[1] . romannumber($input - head($a)[0], $a); }
  if(head($a)[0] == $input) { return head($a)[1] . romannumber($input - head($a)[0], tail($a));  }
  if($input == head($a)[0] - next_ten_multiple($a)[0]) { 
    return next_ten_multiple($a)[1] .  head($a)[1] 
      . romannumber($input - (head($a)[0] - next_ten_multiple($a)[1]), tail($a)); }
  return romannumber($input, tail($a));
}

function next_ten_multiple(array $a) {
  return [100,'C'];
}

function head(array $array, $default = null) { return isset($array[0]) ? $array[0] : $defaul;}

function tail(array $array) { array_shift($array); return $array; }  
