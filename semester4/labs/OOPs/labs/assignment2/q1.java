// add 2 numbers while accepting the numbers from 
// 1. command line 
// 2. data input stream
// 3. scanner class

import java.util.*;
import java.io.*;

class q1 {
    public static void main(String[] args) throws IOException {

        int a = Integer.parseInt(args[0]);
        int b = Integer.parseInt(args[1]);
        System.out.println(a + b);

        DataInputStream ds = new DataInputStream(System.in);
        System.out.println("x and y : ");
        int x = Integer.parseInt(ds.readLine());
        int y = Integer.parseInt(ds.readLine());
        System.out.println(x+y);

        Scanner sc = new Scanner(System.in);
        System.out.println("c and d : ");
        int c = sc.nextInt();
        int d = sc.nextInt();
        System.out.println(c + d);
        sc.close();
    }
}