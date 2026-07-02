class Test13 {
  void show() {
    System.out.println("1");
  }
}

class XYYZ extends Test13 {
  void show() {
    super.show();
    System.out.println("2");
  }
  public static void main(String[] args) {
    XYYZ xy = new XYYZ();
    xy.show();
  }
}
