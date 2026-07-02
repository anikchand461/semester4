// student database of 3 students

import java.util.*;

class Student {

    String name;
    int roll;

    Student(String name, int roll) {
        this.name = name;
        this.roll = roll;
    }

    void printStudentData() {
        System.out.println("name : " + name + " roll : " + roll);
    }
}

class q3 {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        sc.nextLine();

        String[] names = new String[n];
        int[] rolls = new int[n];
        Student[] stud = new Student[n];

        System.out.printf("enter %d students data : ", n);
        for (int i = 0; i < n; i++) {
            names[i] = sc.nextLine();
            rolls[i] = sc.nextInt();
            sc.nextLine();
            stud[i] = new Student(names[i], rolls[i]);
        }

        // print the database
        for (int i = 0; i < n; i++) {
            stud[i].printStudentData();
        }

        sc.close();
    }
}
