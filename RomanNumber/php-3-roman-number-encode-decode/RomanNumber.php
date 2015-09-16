<?php 

function romannumber($input) {
  $numbers = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1,
  );
  if(is_string($input)) {
    $process = romannumber_decode($numbers);
  } else {
    $process = romannumber_encode($numbers);
  }
  return $process($input);
}


function romannumber_decode($numbers) {
  $decode = function($input, $precendent = 0) use($numbers, &$decode) {
    assert(!empty($input));
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

function romannumber_encode(array $numbers) {
  assert(!empty($numbers));
  return function($input) use ($numbers) {
      assert($input != 0);
      if($input ==  head($numbers)) {
        $return =  head_key($numbers);
      }elseif($input > head($numbers) ) {
        $decode = romannumber_encode($numbers);
        $return = head_key($numbers) . $decode($input -  head($numbers));
      } else {
        $decode = romannumber_encode(rest($numbers));
        $return = $decode($input);
      }
      return $return;
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
