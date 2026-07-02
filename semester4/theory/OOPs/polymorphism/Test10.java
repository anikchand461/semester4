class Test10 {
  void show() {
    System.out.println("hello");
  }
}

class XYZ extends Test10 {
  public void show() {
    System.out.println("2");
  }

  public static void main(String[] args) {
    Test10 t = new Test10();
    t.show();

    XYZ x = new XYZ();
    x.show();
  }
}

