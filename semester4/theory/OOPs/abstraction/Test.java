interface I1 {
  // public static final int a = 10;
  void show();
  // default void display() {
  //   System.out.println("hello body");
  // }
} 

interface I2 {
  void display();
}

// multiple inheritance 
class Test implements I1, I2 {
  public void show() {
    System.out.println("hello");
  }
  public void display() {
    System.out.println("bye bye");
  }
  public static void main(String[] args) {
    // I1 i = new I1();
    Test t = new Test();
    t.show();
    t.display();
  }
}



