// ncr

import java.util.*;

class q6 {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int n = sc.nextInt();
        int r = sc.nextInt();

        int numerator = fact(n);
        int denominator = fact(r) * fact(n - r);

        int ncr = numerator / denominator;
        System.out.println(ncr);
    }

    static int fact(int n) {
        if (n <= 1) {
            return 1;
        }
        return n * fact(n - 1);
    }
}
