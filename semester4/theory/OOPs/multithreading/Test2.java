import java.lang.Thread;

public class Test2 implements Runnable {

    @Override
    public void run() {
        System.out.println("hello");
    }

    public static void main(String[] args) {
        Test2 t = new Test2();
        Thread th = new Thread(t);
        th.start();
    }
}