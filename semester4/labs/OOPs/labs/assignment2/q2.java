// fact of a number 

import java.util.*;

class q2 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int n = sc.nextInt();
        System.out.println(factorial(n));
    }

    static int factorial(int x) {
        if (x <= 1) {
            return 1;
        }
        return factorial(x-1) * x;
    }
}