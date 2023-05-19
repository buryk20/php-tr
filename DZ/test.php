<?php
// $string = "Hello, World!";

// function dnaToRna($s, $litter, $str) {
//   return $result = str_replace($s, $litter, $str);
// }

// $result = dnaToRna('h', 't', $string);
// echo $result;

// $string = "Hello, World!";
// $result = str_replace('o', 'e', $string);
// echo $result;


// $arr = [1, 5, 10];

// var_dump(betterThanAverage([100, 40, 34, 57, 29, 72, 57, 88], 75));

// function betterThanAverage($classPoints, $yourPoints) {
//   array_push($classPoints, $yourPoints);
//   if(array_sum($classPoints) / count($classPoints) <= $yourPoints) {
//     return true;
//   } else {
//     return false;
//   }
// }

// betterThanAverage([100, 40, 34, 57, 29, 72, 57, 88], 75);

// array_sum($classPoints);

function sum_mix($a) {
  foreach($a as $el) {
    $result[] = intval($el);
  }
  return array_sum($result);
}