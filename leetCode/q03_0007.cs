//7. Reverse Integer
using System;
using System.Text.RegularExpressions;

namespace leetCode
{
    public class Solution {
        public static int Reverse(int x) {
            int y = 1;
            if (x >= 0) { } 
            else{ y = -1; x= -x; }

            string strX = Convert.ToString(x);
            string newStrX = strX;

            int n = 0; int k = 0;
            int loopStop = strX.Length - 1;
            while (n < loopStop) {
                n++;
                newStrX = newStrX.Insert(n+k,",");
                k++;
            }
            string[] xArray=newStrX.Split(",") ;

            int endLoop = strX.Length;
            string newX = "";
            for (int i = 0; i < endLoop; i++)
            {
                newX = newX + xArray[endLoop - 1 - i];
            }

            return Convert.ToInt32(newX) * y;
        }
    }


    public class Solution2 { // the best sol
    public int Reverse(int x) {
        int result = 0;
        while (x != 0)
        {
            var val = x % 10;
            var temp = result * 10 + val;
            if ((temp-val) / 10 != result) return 0;
            result = temp;
            x = x / 10;       
        }
        return result;    
    }

}
}