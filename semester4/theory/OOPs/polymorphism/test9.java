class Test9 {
  void show() {
    System.out.println("hello");
  }
}

class XYZ extends Test9 {
  void show() {
    System.out.println("2");
  }

  public static void main(String[] args) {
    Test9 t = new Test9();
    t.show();

    XYZ x = new XYZ();
    x.show();
  }
}
