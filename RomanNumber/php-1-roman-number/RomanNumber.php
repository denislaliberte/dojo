<?php

function romannumber($input) {
  switch($input) { 
    case 1:
      $a = 'I';
    break;
    case 3:
      $a = 'III';
    break;
    case 5:
      $a = 'V';
    break; 
    case 10:
      $a = 'X';
    break; 
  }
  return $a;
}
