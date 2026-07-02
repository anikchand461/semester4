// static keyword 

import java.util.*;

class q2 {

    static int count = 0;

    q2() {
        count++;
    }

    static void showCount() {
        System.out.println("Objects created : " + count);
    }

    public static void main(String[] args) {

        q2 a = new q2();
        q2 b = new q2();
        q2 c = new q2();

        q2.showCount();
    }
}