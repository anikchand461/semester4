// area of sq, rect, triangle using method overloading 

import java.util.*;

class q2 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.println("side of sq : ");
        int a = sc.nextInt();
        System.out.println(area(a));

        System.out.println("l and b for rect : ");
        int l = sc.nextInt();
        int b = sc.nextInt();
        System.out.println(area(l, b));

        System.out.println("b and h for triangle :");
        double g = sc.nextDouble();
        double h = sc.nextDouble();
        System.out.println(area(g, h));
    }

    static int area(int a, int b) {
        return a * b;
    }

    static int area(int a) {
        return a * a;
    }

    static double area(double b, double h) {
        return 0.5 * b * h;
    }
}