class This2 {
  This2() {
    System.out.println("no argument constructor");
  }
  This2(int a) {
    this();  // here this() is calling no argument constructor 
    System.out.println("parameterized constructor");
  }
  public static void main(String[] args) {
    This2 t = new This2(12);
  }
}
