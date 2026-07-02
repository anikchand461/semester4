class This3 {
  This3() {
    this(23);  // this is calling parameterized constructor
    System.out.println("no argument constructor");
  }
  This3(int a) {
    System.out.println("parameterized constructor");
  }
  public static void main(String[] args) {
    This3 t = new This3();
  }
}
