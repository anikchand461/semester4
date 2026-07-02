// copy constructor 

import java.util.*;

class q4 {
    int x;
    q4(int x) {
        this.x = x;
    }
    q4(q4 obj) {
        x = obj.x;
    }
    public static void main(String[] args) {
        q4 p = new q4(5);
        q4 q = new q4(p);
        System.out.println(q.x);
    }
}