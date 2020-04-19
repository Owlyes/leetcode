public class Solution {
    public int SingleNumber(int[] nums) {
        int countNum;
        int returnNum = 0;
        for (int i = 0; i < nums.Length; i++)
        {
            countNum = nums.Count(s => s == nums[i]);  
            if (countNum == 1)
            {
                returnNum = nums[i];
            }
        }
        return returnNum;
    }
}