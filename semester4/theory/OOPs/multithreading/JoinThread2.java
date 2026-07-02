

public class JoinThread2 extends Thread {

    static Thread mainthread;
    
    public void run() {
        try {
            mainthread.join();
            for (int i = 0; i < 5; i++) {
                System.out.println("child thread " + i);
                Thread.sleep(1000);
            }
        } catch(Exception e) {
            System.out.println(e);
        }
    }

    public static void main(String[] args) throws InterruptedException {

        mainthread = Thread.currentThread();
        JoinThread2 t = new JoinThread2();
        t.start();

        try {
            for (int i = 0; i < 5; i++) {
                System.out.println("main thread " + i);
                Thread.sleep(1000);
            }
        } catch(Exception e) {
            System.out.println(e);
        }
    }
}

