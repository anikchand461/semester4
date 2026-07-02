class A3 {
  A3() {
    System.out.println("I am in class A");
  }
}

class B3 extends A3 {
  B3() {
    super(); // by default compiler calls at first parent constructor and then the current class constructor 
    System.out.println("I am in class B");
  }
  public static void main(String[] args) {
    B3 ob = new B3();
  }
}

