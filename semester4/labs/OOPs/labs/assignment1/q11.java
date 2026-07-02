// grading system

import java.util.*;

class q11 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int m = sc.nextInt();

        if (m > 100 || m < 0) System.out.println("invalid");
        else if (m >= 90) System.out.println("A");
        else System.out.println("F");
    }
}