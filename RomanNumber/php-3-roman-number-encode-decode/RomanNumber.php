<?php 

function romannumber($input) {
  $numbers = array(
    'C' =>100,
    'X' =>10,
    'V' =>5,
    'I' =>1,
  );
  if(is_string($input)) {
    $process = romannumber_d($numbers);
  } else {
    $process = romannumber_e($input, $numbers);
  }
  return $process($input);
}


function romannumber_d($numbers) {
  $decode = function($input, $precendent = 0) use($numbers, &$decode) {
    if(empty($input)) return 0;
    $current_symbol = substr($input,-1);
    $rest_symbol =  substr($input,0,-1);
    $current = $numbers[$current_symbol];
    if($precendent > $current) $current = $current * -1;
    return $current + $decode($rest_symbol, $current);
  };
  return $decode;
}

function romannumber_e($input, $numbers) {
  return function($input) use ($numbers) {
    foreach($numbers as $k => $v) {
      if($input == $v) return $k;
    }
  };
}
