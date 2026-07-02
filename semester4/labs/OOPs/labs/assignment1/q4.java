// take n no. of arguments through command line and print largest

import java.util.*;

class q4 {
    public static void main(String[] args) {
        if (args.length == 0) {
            throw new IllegalArgumentException("provide atleast 1 number");
        }

        int max = Integer.parseInt(args[0]);
        for (String s: args) {
            max = Math.max(max, Integer.parseInt(s));
        }

        System.out.println(max);
    }
}