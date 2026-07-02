
class A extends Thread {
    public void run() {
        System.out.println("hello");
    }
}

class B extends Thread {
    public void run() {
        System.out.println("holo");
    }
}

public class Test3 extends Thread {

    public static void main(String[] args) {
        A t1 = new A();
        B t2 = new B();
        t1.start();
        t2.start();
    }
}