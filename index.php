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


// 9. Palindrome Number
// function isPalindrome($x) {
//         $rev = (int)(strrev((string)$x));   
//         return $rev == $x ? true : false;
// }
// var_dump(isPalindrome(-121));


// 13. Roman to Integer
// function romanToInt($s)
// {
//     $roman_int = array(
//         "I" => 1,
//         "V" => 5,
//         "X" => 10,
//         "L" => 50,
//         "C" => 100,
//         "D" => 500,
//         "M" => 1000
//     );
//     $result = 0;
//     $inp_arr = str_split($s);

//     for ($i = 0; $i < count($inp_arr); $i++) {
//         if ($roman_int[$inp_arr[$i]] >= $roman_int[$inp_arr[$i + 1]]) {
//             $result += $roman_int[$inp_arr[$i]];
//         } else {
//             $result += $roman_int[$inp_arr[$i + 1]] - $roman_int[$inp_arr[$i]];
//             $i++;
//         }
//     }

//     return $result;
// }
// var_dump(romanToInt("MCMXCIV"));


// function longestCommonPrefix($strs)
// {
//     if (count($strs) <= 1) {
//         return $strs[0];
//     }

//     sort($strs);
//     $min = array_shift($strs);
//     $index = 0;
//     $arr_num = 0;

//     while ($index < strlen($min)) {
//         if ($arr_num === count($strs)) {
//             $index++;
//             $arr_num = 0;
//         }

//         if ($index === strlen($min) || $min[$index] !== $strs[$arr_num][$index]) {
//             break;
//         }

//         $arr_num++;
//     }

//     return substr($min, 0, $index);
// }
// var_dump(longestCommonPrefix(["flower", "flower", "flower", "flower"]));


// function isValid($s)
// {
//     $brackets = array(
//         '(' => ')',
//         '{' => '}',
//         '[' => ']'
//     );

//     $inputArr = str_split($s);
//     $resultArr = array();

//     foreach ($inputArr as $key => $value) {
//         if ($brackets[$value]) {
//             array_push($resultArr, $brackets[$value]);
//         } else {
//             $lastItem = array_pop($resultArr);
//             if ($lastItem !== $value) {
//                 return false;
//             }
//         }
//     }

//     return empty($resultArr) ? true : false;
// }
// var_dump(isValid([](){}));

function mergeTwoLists($list1, $list2) {}

// var_dump(mergeTwoLists());

// function strStrFunc($haystack, $needle)
// {
//     $needleFirst = $needle[0];
//     $needleLength = strlen($needle);
//     $haystackLength = strlen($haystack);
//     $result = -1;

//     if ($needleLength > $haystackLength) {
//         return -1;
//     }

//     if ($needleLength === $haystackLength && $haystack !== $needle) {
//         return -1;
//     }

//     for ($i = 0; $i < $haystackLength; $i++) {
//         if ($haystack[$i] === $needleFirst && $haystackLength - $i >= $needleLength && substr($haystack, $i, $needleLength) === $needle) {
//             return $i;
//         }
//     }

//     return $result;
// }
// var_dump(strStrFunc("leetcode", "leeto"));


// function searchInsert($nums, $target)
// {
//     $originalNums = [...$nums];
//     $index = array_search($target, $nums);
//     $lengthNums = count($nums);

//     if ($index === 0 && $lengthNums === 1) {
//         return 0;
//     }

//     if ($index) {
//         return $index;
//     }

//     if ($nums[0] >= $target) {
//         return 0;
//     }

//     if ($nums[$lengthNums - 1] <= $target) {
//         return $lengthNums;
//     }

//     while ($lengthNums>1) {
//         if ($nums[ceil($lengthNums / 2) - 1] < $target && $nums[ceil($lengthNums / 2)] > $target) {
//             return array_search($nums[ceil($lengthNums / 2) - 1], $originalNums) + 1;
//         }

//         if ($nums[ceil($lengthNums / 2) - 1] > $target) {
//             $nums = array_slice($nums, 0, ceil($lengthNums / 2));
//             $lengthNums = ceil($lengthNums / 2);
//         } else {
//             $nums = array_slice($nums, ceil($lengthNums / 2));
//             $lengthNums = ceil($lengthNums / 2);
//         }
//     }
// }
// var_dump(searchInsert([2,3,5,6,9], 7));



// function lengthOfLastWord($s)
// {
//     $s = trim($s);

//     $arrayWords = explode(' ', $s);

//     return strlen(array_pop($arrayWords));
// }
// var_dump(lengthOfLastWord("   fly me   to   the moon  "));
