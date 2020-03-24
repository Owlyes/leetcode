<?php
// 1380. Lucky Numbers in a Matrix
// Given a m * n matrix of distinct numbers, return all lucky numbers in the matrix in any order.
// A lucky number is an element of the matrix such that it is the minimum element in its row and maximum in its column.

function luckyNumbers ($matrix) {
  $colSum = array_map('sumElem', $matrix);
  $maxColIndex = array_search(max($colSum), $colSum);
  
  $tranMatrix = transpose($matrix);
  // $tranMatrix = array_map(null, ...$matrix);
  $rowSum = array_map('sumElem', $tranMatrix);
  $minRowIndex = array_search(min($rowSum), $rowSum);

  return $matrix[$maxColIndex][$minRowIndex];
}

function sumElem($n) { return array_sum($n); }
function transpose($array) { return array_map(null, ...$array); }

// function transposeData($array) {
//   array_unshift($array, null);
//   return call_user_func_array('array_map', $array);
// }

// function transposeData($data)
// {
//   $retData = array();
//
//     foreach ($data as $row => $columns) {
//       foreach ($columns as $row2 => $column2) {
//           $retData[$row2][$row] = $column2;
//       }
//     }
//   return $retData;
// }

print_r(luckyNumbers([[3,7,8],[9,11,13],[15,16,17]]));  // will be 15
print_r(luckyNumbers([[1,10,4,2],[9,3,8,7],[15,16,17,12]])); // will be 12
print_r(luckyNumbers([[7,8],[1,2]])); //will be 7

// Example 1:
// Input: matrix = [[3,7,8],[9,11,13],[15,16,17]]
// [03 09 15  R1 27
//  07 11 16  R2 34
//  08 13 17] R3 38
//  C1 C2 C3
//  18 33 48
// Output: [15]
// Explanation: 15 is the only lucky number since it is the minimum in its row and the maximum in its column


// Example 2:
// Input: matrix = [[1,10,4,2],[9,3,8,7],[15,16,17,12]]
// [01 09 15   R1 25
//  10 03 16   R2 29
//  04 08 17   R3 29
//  02 07 12]  R4 21
//  C1 C2 C3
//  17 27 73
// Output: [12]
// Explanation: 12 is the only lucky number since it is the minimum in its row and the maximum in its column.

// Example 3:
// Input: matrix = [[7,8],[1,2]]
// [07 01  R1 08
//  08 02] R2 10
//  C1 C2
//  15 03
// Output: [7]
 

// Constraints:

// m == mat.length
// n == mat[i].length
// 1 <= n, m <= 50
// 1 <= matrix[i][j] <= 10^5.
// All elements in the matrix are distinct.

?>

