<?php 

function romannumber($input) {
  $numbers = array(
    'M' => 1000,
    'D' => 500,
    'C' => 100,
    'L' => 50,
    'X' => 10,
    'V' => 5,
    'I' => 1,
  );
  if(is_string($input)) {
    $process = romannumber_d($numbers);
  } else {
    $process = romannumber_e($numbers);
  }
  return $process($input);
}


function romannumber_d($numbers) {
  $decode = function($input, $precendent = 0) use($numbers, &$decode) {
    if(empty($input)) return 0;
    $current = $numbers[ last($input) ];
    if($precendent > $current) $current = $current * -1;
    return $current + $decode( init($input), $current);
  };
  return $decode;
}

function last($string) {
  return substr($string,-1);
}

function init($string) {
  return substr($string,0,-1);
}

function romannumber_e(array $numbers) {
  assert(!empty($numbers));
  return function($input) use ($numbers) {
      if($input == 0 ) return "";
      if($input ==  head($numbers)) return  head_key($numbers);
      $decode = romannumber_e($numbers);
      if($input > head($numbers) )return head_key($numbers) . $decode($input -  head($numbers));
      $decode = romannumber_e(rest($numbers));
      return $decode($input);
  };
}

function head(array $input) {
  return array_shift($input);
}

function head_key(array $input) {
  return current(array_keys($input));
}

function rest(array $input) {
  array_shift($input);
  return $input;
}
