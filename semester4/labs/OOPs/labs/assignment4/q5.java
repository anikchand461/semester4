// array of objects 

import java.util.*;

class q5 {
    int x;
    q5(int x) {
        this.x = x;
    }
    public static void main(String[] args) {
        q5[] s = {new q5(1), new q5(2)};
        for (q5 i : s) {
            System.out.println(i.x);
        }
    }
}