// inner class

import java.util.*;

class q4 {
    class A {
        void show() {
            System.out.println("hi");
        }
    }
    public static void main(String[] args) {
        q4 x = new q4();
        q4.A y = x.new A();
        y.show();
    }
}