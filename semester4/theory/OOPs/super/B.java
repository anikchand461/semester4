class A {
  int i = 10;
}

class B extends A {
  int i = 20;
  void show(int i) {
    System.out.println(i);  // print the local i variable 
    System.out.println(this.i);  // print the current class instance variable i
    System.out.println(super.i);  // print the parent class instance variable i
  }
  public static void main(String[] args) {
    B b = new B();
    b.show(30);
  }
}
