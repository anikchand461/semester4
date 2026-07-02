// transpose of a matrix

import java.util.*;

class q7 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int a = sc.nextInt();
        int b = sc.nextInt();

        int[][] mat = new int[a][b];

        // fill the matrix 
        for (int i = 0; i < a; i++) {
            for (int j = 0; j < b; j++) {
                mat[i][j] = sc.nextInt();
            }
        }

        // print transpose
        for (int i = 0; i < b; i++) {
            for (int j = 0; j < a; j++) {
                System.out.printf(mat[j][i] + " ");
            }
            System.out.println();
        }

        sc.close();
    }
}