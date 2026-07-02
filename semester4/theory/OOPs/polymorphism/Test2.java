class Test2 {
  void show(String s, int a) {
    System.out.println(1);
  }
  void show(int a, String s) {
    System.out.println(2);
  }
  public static void main(String[] args) {
    Test2 t = new Test2();
    // t.show(); // here compiler is confused because there is 2 show methods in the class with no arguments 
              // I have added one argument in the 2nd show method. now the compiler can differentiate between the 2 show methods.

    // here I have applied the different sequences 
    t.show("Anik", 10); // call 1st show method 
    t.show(10, "anik"); // call 2nd show method
  }
}

