// higher marks using parameterized constructor 

import java.util.*;

class q2 {
    String s;
    int n;
    q2(String s, int n) {
        this.s = s;
        this.n = n;
    }
    public static void main(String[] args) {
        q2 x = new q2("A", 70);
        q2 y = new q2("B", 43);

        if (x.n > y.n) {
            System.out.println(x.s);
        } else {
            System.out.println(y.s);
        }
    }
}