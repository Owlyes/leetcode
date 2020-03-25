# 1380. Lucky Numbers in a Matrix
# Given a m * n matrix of distinct numbers, return all lucky numbers in the matrix in any order.
# A lucky number is an element of the matrix such that it is the minimum element in its row and maximum in its column.

def lucky_numbers (matrix)
  col_sum = matrix.map{ |n| n.sum }
  max_col_index = col_sum.index(col_sum.max)
  
  row_sum = matrix.transpose.map{ |n| n.sum }
  min_row_index = row_sum.index(row_sum.min)

  return [matrix[max_col_index][min_row_index]]
end

require './test_assert'
Test.assert_equals(lucky_numbers([[3,7,8],[9,11,13],[15,16,17]]),[15])
Test.assert_equals(lucky_numbers([[1,10,4,2],[9,3,8,7],[15,16,17,12]]),[12])
Test.assert_equals(lucky_numbers([[7,8],[1,2]]),[7])
Test.assert_equals(lucky_numbers([[36376,85652,21002,4510],[68246,64237,42962,9974],[32768,97721,47338,5841],[55103,18179,79062,46542]]),[4542])
puts "--------------"