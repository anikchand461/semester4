class Test8 {
  void show() {
    System.out.println(1);
  }
}

class XYZ extends Test8 {
  void show() {
    System.out.println(2);
  }
  public static void main(String[] args) {
    Test8 t = new Test8();
    t.show();

    XYZ x = new XYZ();
    x.show();
  }
}
