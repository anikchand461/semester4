
public class ThreadName {
    public static void main(String[] args) {
        System.out.println(Thread.currentThread().getName());
        Thread.currentThread().setName("anik");
        System.out.println(Thread.currentThread().getName());
    }
}