// return array from method 

import java.util.*;

class q6 {
    static int[] m() {
        return new int[]{1, 4, 8};
    }
    public static void main(String[] args) {
        int[] x = m();
        for (int i : x) {
            System.out.print(i + " ");
        }
    }
}