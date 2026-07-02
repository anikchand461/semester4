class A2 {
  void m1() {
    System.out.println("I am in class A");
  }
}

class B2 extends A2 {
  void m1() {
    System.out.println("I am in class B");
  }
  void show() {
    m1();  // calls the current class m1() method
    this.m1();  // calls the current class m1() method
    super.m1();  // calls the parent class m1() method 
  }
  public static void main(String[] args) {
    B2 ob = new B2();
    ob.show();
  }
}
