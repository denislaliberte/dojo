<?php

function romannumber($input) {
  if(empty($input)) return 0;
  $current_symbol = substr($input,-1);
  $rest_symbol =  substr($input,0,-1);
  $numbers = array(
    'I' =>1,
    'V' =>5,
    'X' =>10,
    'C' =>100,
  );

  return $numbers[$current_symbol] + romannumber($rest_symbol) ;
}
