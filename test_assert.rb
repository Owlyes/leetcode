class Test
  def self.assert_equals(fun,out)
    p fun == out ? fun == out : [fun, out]
  end
end

# require './test_assert'
# Test.assert_equals()