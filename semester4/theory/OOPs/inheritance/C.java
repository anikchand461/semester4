class A {
  void showA() {
    System.out.println("A class method");
  }
}

class B extends A {
  void showB() {
    System.out.println("b class method");
  }
}

class C extends B {
  void showC() {
    System.out.println("c class method");
  }
  public static void main(String[] args) {
    C ob3 = new C();
    ob3.showA();
    ob3.showB();
    ob3.showC();
  }
}
