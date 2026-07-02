// search element form array 

import java.util.*;

class q5 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int n = sc.nextInt();
        int[] arr = new int[n];

        for (int i = 0; i < n; i++) {
            arr[i] = sc.nextInt();
        }

        System.out.println("element to search ; ");
        int k = sc.nextInt();

        //search
        for (int i = 0; i < n; i++) {
            if (arr[i] == k) {
                System.out.printf("element found at index %d", i);
                return;
            }
        }

        System.out.println("element not found");
    }
}