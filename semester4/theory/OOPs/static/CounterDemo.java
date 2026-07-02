class CounterDemo {
  // int count = 0; // print 1 1 1 - do not change the value of count because the references are different for every object 
  static int count = 0; // print 1 2 3 - change the value because the reference is the same for every static count variable 
  CounterDemo() {
    count++;
    System.out.println(count);
  }
  public static void main(String[] args) {
    CounterDemo c1 = new CounterDemo();
    CounterDemo c2 = new CounterDemo();
    CounterDemo c3 = new CounterDemo();

  }
}
