<?php

function romannumber($input, $precendent = 0) {
  if(empty($input)) return 0;
  $current_symbol = substr($input,-1);
  $rest_symbol =  substr($input,0,-1);
  $numbers = array(
    'I' =>1,
    'V' =>5,
    'X' =>10,
    'C' =>100,
  );
  $current = $numbers[$current_symbol];
  if($precendent > $current) $current = $current * -1;
  return $current + romannumber($rest_symbol, $current);
}

function romannumber_e($input) {
  $numbers = array(
    'C' =>100,
    'X' =>10,
    'V' =>5,
    'I' =>1,
  );
  foreach($numbers as $k => $v) {
    if($input == $v) return $k;
  }
}
