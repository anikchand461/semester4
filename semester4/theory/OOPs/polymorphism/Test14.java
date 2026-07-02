class Test14 {
  // private : no error will be shown but the overriding will not happen 
  // static : cannot override 
  private void show() {
    System.out.println("1");
  }
}

class XYZZX extends Test14 {
  void show() {
    System.out.println("2");
  }
  public static void main(String[] args) {
    XYZZX x = new XYZZX();
    x.show();
  }
}
