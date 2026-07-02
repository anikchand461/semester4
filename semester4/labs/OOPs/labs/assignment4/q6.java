// passs and return obj 

import java.util.*;

class q6 {

    int a;

    q6(int a) {
        this.a = a;
    }

    q6 add(q6 obj) {
        return new q6(a + obj.a);
    }

    public static void main(String[] args) {

        q6 a1 = new q6(2);
        q6 a2 = new q6(3);

        q6 a3 = a1.add(a2);

        System.out.println(a3.a);
    }
}