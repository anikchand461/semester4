// div by 5 or not 

import java.util.*;

class q12 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int n = sc.nextInt();

        if (n % 5 == 0) {
            System.out.println("yes");
        } else {
            System.out.println("no");
        }

        sc.close();
    }
}