class Test {
  // int i;
  // String s;

  Test(int a) {
    System.out.println("no argument constructor");
  }
  public static void main(String[] args) {
    Test t = new Test(5);
    System.out.println(t.i + " " + t.s);
  }
}
