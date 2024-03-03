<?php

// 88. Merge Sorted Array
// function merge(&$nums1, $m, $nums2, $n)
// {
//     $nums1 = array(...array_splice($nums1, 0, $m), ...array_splice($nums2, 0, $n));
//     sort($nums1);
// }

// $nums1 = [1, 2, 3, 0, 0, 0];
// merge($nums1, 3, [2, 5, 6], 3);
// var_dump($nums1);


// 27. Remove Element
// function removeElement(&$nums, $val)
// {
//     $length = sizeof($nums);
//     for ($i = 0; $i < $length; $i++) {
//         if ($nums[$i] == $val) {
//             unset($nums[$i]);
//         }
//     }
// }

// $nums = [0, 1, 2, 2, 3, 0, 4, 2];
// removeElement($nums, 2);
// var_dump($nums);


// 26. Remove Duplicates from Sorted Array
// function removeDuplicates(&$nums)
// {
//     $length = sizeof($nums);
//     if ($length !== 0) {
//         $index = 0;
//         while ($index < $length - 1) {
//             if ($nums[$index] === $nums[$index + 1] && $nums[$index] !== NULL) {
//                 unset($nums[$index]);
//             } else {
//                 $index++;
//             }
//         }
//     }
// }

// $nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
// removeDuplicates($nums);
// var_dump($nums);


// 169. Majority Element
// function majorityElement($nums)
// {
//     $arr = array_count_values($nums);
//     arsort($arr);
//     foreach($arr as $x => $y) {
//         return $x;
//     }
// }

// var_dump(majorityElement([3, 2, 3]));


// Rotate Array
// function rotate(&$nums, $k)
// {
//     $count = count($nums);

//     if ($k > $count) {
//         $n = (int)  ($k / $count);
//         $k = $k - $n * $count;
//     }

//     $arr = array_splice($nums, 0, $count - $k);
//     array_push($nums, ...$arr);
// }

// $nums = [-1, -100, 3, 99];
// rotate($nums, 10);
// var_dump($nums);


// 1768. Merge Strings Alternately
// function mergeAlternately($word1, $word2)
// {
//     $arr1 = str_split($word1);
//     $arr2 = str_split($word2);
//     $arr3 = [];
//     $res_arr = [];
//     $count1 = count($arr1);
//     $count2 = count($arr2);

//     if ($count1 > $count2) {
//         $arr3 = array_splice($arr1, $count2);
//     } elseif ($count1 < $count2) {
//         $arr3 = array_splice($arr2, $count1);
//     }

//     for ($i = 0; $i < $count1; $i++) {
//         array_push($res_arr, $arr1[$i], $arr2[$i]);
//     }

//     return implode([...$res_arr, ...$arr3]);
// }
// var_dump(mergeAlternately("qweraaa", "qwer"));





// Not worked
// function maxProfit($prices)
// {   
//     $result = 0;
//     $min = min($prices);
//     $max = max($prices);
//     $index_min = array_search($min, $prices);
//     $index_max = array_search($max, $prices);

//     if ($index_min > $index_max && $max) {
//         unset($prices[$index_max]);
//         return maxProfit($prices);
//     } else {
//         $result = $max - $min;
//     }

//     return $result;
// }

// var_dump(maxProfit([7, 8, 5, 3, 6, 4]));

