class StaticBlockDemo {
  // static block always executes first 
  static {
    System.out.println("1st static block");
  }

  static int a;

  public static void main(String[] args) {
    System.out.println("mello");
    System.out.println(a);
  }

  static {
    a = 10;  // initialize static variable inside static block 
    System.out.println("2nd static bock");
  }

  static {
    System.out.println("3rd static block");
  }
}
