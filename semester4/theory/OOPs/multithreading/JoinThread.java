

public class JoinThread extends Thread {
    public void run() {
        try {
            for (int i = 0; i < 5; i++) {
                System.out.println("child thread " + i);
                Thread.sleep(1000);
            }
        } catch(Exception e) {
            System.out.println(e);
        }
    }

    public static void main(String[] args) throws InterruptedException {
        JoinThread t = new JoinThread();
        t.start();
        t.join();

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

