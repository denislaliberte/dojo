<?php
require('/Users/TP1/.composer/vendor/bin/psysh');

function romannumber($input, $a = [[10,'X'],[5,'V',],[1,'I']]) {
  if(empty($a)) { return ""; }
  $head = $a[0];
  if($input > $head[0]) { return romannumber($input-$head[0],$a) . $head[1]; }
  if($head[0] == $input) { return romannumber($input - $head[0],tail($a)) . $head[1];  }
  return romannumber($input,tail($a));
}

function tail(array $array) {
  array_shift($array);
  return $array;
}  
