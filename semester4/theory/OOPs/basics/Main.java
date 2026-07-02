import java.util.*;
public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // read full string
        String name = sc.nextLine();
        System.out.println("hello " + name);

        // take only 1st character
        name = sc.nextLine();
        char c = name.charAt(0);
        System.out.println("hello " + c);

        sc.close();
    }
}

