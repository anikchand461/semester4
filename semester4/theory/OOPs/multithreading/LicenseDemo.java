

class Medical extends Thread {
    public void run() {
        try {
            System.out.println("medical starts");
            Thread.sleep(3000);
            System.out.println("medical completed");
        } catch (Exception e) {
            System.out.println(e);
        }
    }
}

class TestDrive extends Thread {
    public void run() {
        try {
            System.out.println("testdrive starts");
            Thread.sleep(5000);
            System.out.println("test drive complete");
        } catch (Exception e) {
            System.out.println(e);
        }
    }
}

class OfficerSign extends Thread {
    public void run() {
        try {
            System.out.println("take file");
            Thread.sleep(3000);
            System.out.println("completed");
        } catch (Exception e) {
            System.out.println(e);
        }
    }
}

public class LicenseDemo {
    public static void main(String[] args) throws InterruptedException {
        
        Medical m = new Medical();
        m.start();

        m.join();

        TestDrive td = new TestDrive();
        td.start();

        td.join();

        OfficerSign off = new OfficerSign();
        off.start();
    }
}