// add 2 complex numbers 

import java.util.*;

class q1 {
    int r, i;
    q1(int r, int i) {
        this.r = r;
        this.i = i;
    }
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("enter 1st r and i : ");
        int r1 = sc.nextInt();
        int i1 = sc.nextInt();
        System.out.println("enter 2nd r and i : ");
        int r2 = sc.nextInt();
        int i2 = sc.nextInt();

        q1 a = new q1(r1, i1);
        q1 b = new q1(r2, i2);

        System.out.println((a.r + b.r) + " + " + (a.i + b.i) + "i");
        sc.close();
    }
}