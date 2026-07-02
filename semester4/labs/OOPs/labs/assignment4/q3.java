// area using parameterized constructor 

import java.util.*;

class q3 {
    q3(int n) {
        System.out.println(n * n);
    }
    q3(int a, int b) {
        System.out.println(a * b);
    }
    q3(float a, float b) {
        System.out.println(a * b);
    }
    public static void main(String[] args) {
        new q3(2);
        new q3(2, 3);
        new q3(1.2f, 1.0f);
    }
}