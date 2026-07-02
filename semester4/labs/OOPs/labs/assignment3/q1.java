// add 2 and 3 integers and 2 floating point numbers using method overloading 

import java.util.*;

class q1 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.println("2 integers : ");
        int a = sc.nextInt();
        int b = sc.nextInt();
        System.out.println(add(a, b));

        System.out.println("3 integers : ");
        int c = sc.nextInt();
        int d = sc.nextInt();
        int e = sc.nextInt();
        System.out.println(add(c, d, e));

        System.out.println("2 floats : ");
        float f = sc.nextFloat();
        float g = sc.nextFloat();
        System.out.println(add(f, g));
        
    }

    static int add(int u, int v) {
        return u + v;
    }

    static int add(int u, int v, int w) {
        return u + v + w;
    }

    static float add(float u, float v) {
        return u + v;
    }
}