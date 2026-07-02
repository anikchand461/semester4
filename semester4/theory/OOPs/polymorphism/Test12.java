interface I1 {
  void display1();
}

abstract class Test12 {
  abstract void display();
  void show() throws RuntimeException {
    System.out.println("1");
  }
}
class XXYZ implements I1 {
  // we have to must override the abstract classes of the parent class n the child class - otherwise show error 
  public void display1() {
    System.out.println("1");
  }
  void show() {
    System.out.println("2");
  }
  public static void main(String[] args) {
    // we cannot create objects of an abstract class
    // Test12 t = new Test12();
    // t.show();

    XXYZ x = new XXYZ();
    x.show();
  }
}
