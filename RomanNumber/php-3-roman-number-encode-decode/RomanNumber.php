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
  $n = $numbers[$current_symbol];
  if($precendent > $n) $n = $n * -1;

  return $n + romannumber($rest_symbol, $n);
}
