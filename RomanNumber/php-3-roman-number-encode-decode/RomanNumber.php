<?php 

function romannumber($input) {
  $numbers = array(
    'C' =>100,
    'X' =>10,
    'V' =>5,
    'I' =>1,
  );
  if(is_string($input)) {
    return romannumber_d($input, $numbers);
  } else {
    return romannumber_e($input, $numbers);
  }
}


function romannumber_d($input, $numbers, $precendent = 0) {
  if(empty($input)) return 0;
  $current_symbol = substr($input,-1);
  $rest_symbol =  substr($input,0,-1);
  $current = $numbers[$current_symbol];
  if($precendent > $current) $current = $current * -1;
  return $current + romannumber_d($rest_symbol, $numbers, $current);
}

function romannumber_e($input, $numbers) {
  foreach($numbers as $k => $v) {
    if($input == $v) return $k;
  }
}
