class This4 {
  void m1(This4 td) {
    System.out.println("I am in m1 method");
  }
  void m2() {
    m1(this);  // this is an argument of a method 
  }

  public static void main(String[] args) {
    This4 t = new This4();
    t.m2();
  }
}
