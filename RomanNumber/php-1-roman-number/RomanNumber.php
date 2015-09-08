<?php

function romannumber($input, $a = [[1000,'M'],[900,'CM'],[500,'D'],[400,'CD'],[100,'C'],[90,'XC'],[50,'L'],[40,'XL'],[10,'X'],[9,'IX'],[5,'V',],[4,'IV'],[1,'I']]) {
  if(empty($a)) { return ""; }
  if($input > head($a)[0]) { return  head($a)[1] . romannumber($input - head($a)[0], $a); }
  if(head($a)[0] == $input) { return head($a)[1] . romannumber($input - head($a)[0], tail($a)); }
  return romannumber($input, tail($a));
}

function head(array $array, $default = null) { return isset($array[0]) ? $array[0] : $defaul; }

function tail(array $array) { array_shift($array); return $array; }  
