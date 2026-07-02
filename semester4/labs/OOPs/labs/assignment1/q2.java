// prevois program using command line

import java.util.*;

class q2 {
    public static void main(String[] args) {
        if (args.length < 3) {
            throw new IllegalArgumentException("Provide atleast 3 args");
        }

        String name = args[0];
        String address = args[1];
        String info = args[2];

        System.out.println(name);
        System.out.println(address);
        System.out.println(info);
    }
}
