// add 2 metrics

import java.util.*;

class q4 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // input size of the matrix
        int a = sc.nextInt();
        int b = sc.nextInt();
        int[][] mat1 = new int[a][b];
        int[][] mat2 = new int[a][b];
        int[][] result = new int[a][b];

        // input the matrics
        for (int i = 0; i < a; i++) {
            for (int j = 0; j < b; j++) {
                mat1[i][j] = sc.nextInt();
            }
        }
        
        for (int i = 0; i < a; i++) {
            for (int j = 0; j < b; j++) {
                mat2[i][j] = sc.nextInt();
            }
        }
        
        // claculate the addition 
        for (int i = 0; i < a; i++) {
            for (int j = 0; j < b; j++) {
                result[i][j] = mat1[i][j] + mat2[i][j];
            }
        }

        // print the result 
        for (int i = 0; i < a; i++) {
            for (int j = 0; j < b; j++) {
                System.out.print(result[i][j] + " ");
            }
            System.out.println();
        }

        sc.close();
    }
}