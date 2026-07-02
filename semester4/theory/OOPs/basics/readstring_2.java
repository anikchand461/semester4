//reading string data and characters

import java.io.*;
class readstring_2 {
    public static void main(String[] args) throws IOException {
        String s;
        char c;
        DataInputStream pr = new DataInputStream(System.in);
        System.out.println("enter name : ");

        s = pr.readLine();
        System.out.println("Hello " + s);
        System.out.println("again enter your name : ");
        c = (char)pr.read();  // give error : must be typecasted
        System.out.println("Hello " + c);
    }
}