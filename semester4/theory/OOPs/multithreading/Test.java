

public class Test extends Thread {

    @Override
    public void run() {
        System.out.println("thread test");
    }

    public static void main(String[] args) {
        Test t = new Test();
        t.start();
        t.start();
    }
}