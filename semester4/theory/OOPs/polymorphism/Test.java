class Test {
  void show() {
    System.out.println(1);
  }
  void show(int a) {
    System.out.println(2);
  }
  public static void main(String[] args) {
    Test t = new Test();
    t.show(); // here compiler is confused because there is 2 show methods in the class with no arguments 
              // I have added one argument in the 2nd show method. now the compiler can differentiate between the 2 show methods.
  }
}
