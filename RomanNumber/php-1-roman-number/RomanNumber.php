<?php

function romannumber($input, $a = [[1000,'M'],[500,'D'],[100,'C'],[50,'L'],[10,'X'],[5,'V',],[1,'I']]) {
  if(empty($a)) { return ""; }
  $head = $a[0];
  if($input > $head[0]) { return  $head[1] . romannumber($input-$head[0],$a); }
  if($head[0] == $input) { return $head[1] . romannumber($input - $head[0],tail($a));  }
  return romannumber($input,tail($a));
}

function tail(array $array) {
  array_shift($array);
  return $array;
}  
